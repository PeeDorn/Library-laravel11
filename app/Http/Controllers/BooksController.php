<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    public function books()
    {
        $books = Books::all();
        return view('admin.clients.books.books', compact('books'));
    }
    public function FormBooks()
    {
        return view('admin.clients.books.addbooks');
    }
    public function store(Request $request)
    {
        $image = $request->file('image');
        if ($image) {
            $image_name = date('Ymdhis') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
            $image_path = 'images/' . $image_name;
            Books::insert([
                'image' => $image_path,
                'Subject' => $request->subject,
                'KeyWord' => $request->keyword,
                'ISBN' => $request->ISBN,
                'title' => $request->title,
                'author' => $request->author,
                'publisher' => $request->publisher,
                'published_date' => $request->published_date,
                'barcode' => $request->barcode,
                'material_type' => $request->material_type,
                'edition' => $request->edition,
                'editor' => $request->editor,
                'published_in_the' => $request->published_in_the,
                'shelves' => $request->shelves,
                'case_number' => $request->case_number,
                'book_order' => $request->book_order,
                'user_id' => Auth::user()->id,
                'created_at' => Carbon::now(),
            ]);
        } else {
            Books::insert([
                'Subject' => $request->subject,
                'KeyWord' => $request->keyword,
                'ISBN' => $request->ISBN,
                'title' => $request->title,
                'author' => $request->author,
                'publisher' => $request->publisher,
                'published_date' => $request->published_date,
                'barcode' => $request->barcode,
                'material_type' => $request->material_type,
                'edition' => $request->edition,
                'editor' => $request->editor,
                'published_in_the' => $request->published_in_the,
                'shelves' => $request->shelves,
                'case_number' => $request->case_number,
                'book_order' => $request->book_order,
                'user_id' => Auth::user()->id,
                'created_at' => Carbon::now(),
            ]);
        }
        return redirect()->route('books');
    }
    public function delete($id)
    {
        Books::findOrFail($id)->delete();
        return redirect()->route('books');
    }
    public function edit($id)
    {
        $book = Books::findOrFail($id);
        return view('admin.clients.books.editbooks', compact('book'));
    }
    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        if ($image) {
            $image_name = date('Ymdhis') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
            $image_path = 'images/' . $image_name;
            Books::findOrFail($id)->update([
                'image' => $image_path,
                'Subject' => $request->subject,
                'KeyWord' => $request->keyword,
                'ISBN' => $request->ISBN,
                'title' => $request->title,
                'author' => $request->author,
                'publisher' => $request->publisher,
                'published_date' => $request->published_date,
                'barcode' => $request->barcode,
                'material_type' => $request->material_type,
                'edition' => $request->edition,
                'editor' => $request->editor,
                'published_in_the' => $request->published_in_the,
                'shelves' => $request->shelves,
                'case_number' => $request->case_number,
                'book_order' => $request->book_order,
                'user_id' => Auth::user()->id,
                'updated_at' => Carbon::now(),
            ]);
        } else {
            Books::findOrFail($id)->update([
                'Subject' => $request->subject,
                'KeyWord' => $request->keyword,
                'ISBN' => $request->ISBN,
                'title' => $request->title,
                'author' => $request->author,
                'publisher' => $request->publisher,
                'published_date' => $request->published_date,
                'barcode' => $request->barcode,
                'material_type' => $request->material_type,
                'edition' => $request->edition,
                'editor' => $request->editor,
                'published_in_the' => $request->published_in_the,
                'shelves' => $request->shelves,
                'case_number' => $request->case_number,
                'book_order' => $request->book_order,
                'user_id' => Auth::user()->id,
                'updated_at' => Carbon::now(),
            ]);
        }

        return redirect()->route('books');
    }
}
