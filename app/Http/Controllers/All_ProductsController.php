<?php

namespace App\Http\Controllers;

use App\Models\All_Products;
use Illuminate\Http\Request;

class All_ProductsController extends Controller
{
    public function index (){
        $All_Products = All_Products::all();
        return view('All_Products.index', compact('All_Products'));
    }

    public function create(){
        return view('All_Products.create');
    }

    public function store(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        All_Products::create([
            'image' => $imageName,
            'name'  => $request->name,
            'price' => $request->price
        ]);

        return redirect()->route('All_Products.index')
    ->with('success','Product added successfully');
    }

    public function edit($id){
        $All_Products = All_Products::findOrFail($id);
        return view('All_Products.edit', compact('All_Products'));
    }

    public function update(Request $request, $id)
    {
        $All_Products = All_Products::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {

            // delete old image
            if (file_exists(public_path('uploads/'.$All_Products->image))) {
                unlink(public_path('uploads/'.$All_Products->image));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);

            $All_Products->update([
                'image' => $imageName,
                'name'  => $request->name,
                'price' => $request->price
            ]);

        } else {
            $All_Products->update([
                'name'  => $request->name,
                'price' => $request->price
            ]);
        }

        return redirect()->route('All_Products.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $All_Products = All_Products::findOrFail($id);

        if (file_exists(public_path('uploads/'.$All_Products->image))) {
            unlink(public_path('uploads/'.$All_Products->image));
        }

        $All_Products->delete();

        return redirect()->route('All_Products.index')
            ->with('success', 'Product deleted successfully');
    }
}