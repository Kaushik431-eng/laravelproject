<?php

namespace App\Http\Controllers;
use App\Models\book;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class bookcontroller extends Controller
{
        public function index (){
            $books = book::all();
            return view ('books.index',compact('books'));
        }

        public function create(){
            return view('books.create');
        }

        public function store(Request $request){
            $request->validate([
                'image'=>'required|image',
                ]);

             $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

            Book::create([
            'image' => $imageName
        ]);
                return redirect()->route('books.index')
                ->with('success','books added successfully');
        }


        public function edit($id){
              $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
            }
             public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);
         if ($request->hasFile('image')) {

            // delete old image
            if (file_exists(public_path('uploads/'.$book->image))) {
                unlink(public_path('uploads/'.$book->image));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);

           
        $book->update([
                'image' => $imageName
            ]);
        }

        return redirect()->route('books.index')
            ->with('success', 'Image updated successfully');
    
        }
         public function destroy($id)
    {
        $book = Book::findOrFail($id);

        if (file_exists(public_path('uploads/'.$book->image))) {
            unlink(public_path('uploads/'.$book->image));
        }

        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Image deleted successfully');
    }
}
