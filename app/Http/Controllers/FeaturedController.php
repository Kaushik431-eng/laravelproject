<?php

namespace App\Http\Controllers;

use App\Models\Featured;
use Illuminate\Http\Request;

class FeaturedController extends Controller
{
    public function index (){
        $Featureds = Featured::all();
        return view('Featured.index', compact('Featureds'));
    }

    public function create(){
        return view('Featured.create');
    }

    public function store(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        Featured::create([
            'image' => $imageName,
            'name'  => $request->name,
            'price' => $request->price
        ]);

        return redirect()->route('Featured.index')
            ->with('success','Product added successfully');
    }

    public function edit($id){
        $Featureds = Featured::findOrFail($id);
        return view('Featured.edit', compact('Featureds'));
    }

    public function update(Request $request, $id)
    {
        $Featured = Featured::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {

            if (file_exists(public_path('uploads/'.$Featured->image))) {
                unlink(public_path('uploads/'.$Featured->image));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);

            $Featured->update([
                'image' => $imageName,
                'name'  => $request->name,
                'price' => $request->price
            ]);

        } else {
            $Featured->update([
                'name'  => $request->name,
                'price' => $request->price
            ]);
        }

        return redirect()->route('Featured.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $Featured = Featured::findOrFail($id);

        if (file_exists(public_path('uploads/'.$Featured->image))) {
            unlink(public_path('uploads/'.$Featured->image));
        }

        $Featured->delete();

        return redirect()->route('Featured.index')
            ->with('success', 'Product deleted successfully');
    }
}