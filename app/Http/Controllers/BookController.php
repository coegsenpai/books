<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book(){
        $book = Book::all();
        return view('index',compact(['book']));
    }

    public function tambah(){
        return view('tambah');
    }

    public function store(Request $request){
        Book::create($request->except('_token'));
        $book = Book::all();
        return redirect('/');
    }

    public function edit($id){
        $book = Book::find($id);
        return view('edit',compact(['book']));
    }

    public function update($id, Request $request){
        $book = Book::find($id);
        $book->update($request->except('_token'));
        return redirect('/');
    }

    public function destroy($id){
        $book = Book::find($id);
        $book->delete();
        return redirect('/'); 
    }
}
