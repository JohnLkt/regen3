<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class bookcontroller extends Controller
{
    //
    public function createbook(){
        return view('createbook');
    }

    public function storebook(request $request){
        $request->validate([
            'booktitle' =>'min:10'
        ]);

        book::create([
            'booktitle' => $request->booktitle, 
            'author' => $request->author, 
            'releasedate' => $request->releasedate, 
            'totalpage' => $request->totalpage
        ]);
        return redirect('/');
    }
    public function readbook(){
        $books = book::all();

        return view('readbook', compact('books'));
    }

    public function readbookbyid($id){
        $book - book::findorfail($id);

        return view('readbookbyid', compact('book'));
    }
}
