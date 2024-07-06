<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrarianController extends Controller
{
    public function librarians(){
        return view('admin.clients.librarian.Librarian');
    }

    public function FormLibrarians(){
        return view('admin.clients.librarian.addLibrarian');
    }
}
