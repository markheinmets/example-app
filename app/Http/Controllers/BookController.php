<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('book.index', [
            'books' => Book::with('authors')->
            paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create', [
            'types' => [
                'new' => 'New',
                'used' => 'Used',
                'ebook' => 'eBook'
            ]
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Book::create($request->validate([
            'title'=>'required',
            'release_date'=>'required|numeric',
            'language'=>'required',
            'price'=>'required|numeric',
            'stock_saldo'=>'required|numeric',
            'pages'=>'required|numeric',
            'type'=>'required',
        ]));
        return redirect()->
        route('books.index')->
        with('message', 'Title added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view ('book.edit', [
            'book' => $book,
            'types' => [
                'new' => 'New',
                'used' => 'Used',
                'ebook' => 'eBook'
            ],
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->update($request->validate([
            'title'=>'required',
            'release_date'=>'required|numeric',
            'language'=>'required',
            'price'=>'required|numeric',
            'stock_saldo'=>'required|numeric',
            'pages'=>'required|numeric',
            'type'=>'required',
            
        ]));

        return redirect()->
        route('books.index')->
        with('message', __('#:id updated!', ['id' => $book->id]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->
        back()->
        with('message', __('Book :title deleted', [
            'title' => $book->title,
        ]));
    }
}
