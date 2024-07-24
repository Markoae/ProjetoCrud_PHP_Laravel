<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\ModelBook;
use App\Models\User;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book=ModelBook::paginate(6);
        return view('index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books=ModelBook::all();
        return view('create',compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $cad=ModelBook::create([
            'title'=>$request->title,
            'pages'=>$request->pages,
            'price'=>$request->price,
            'author'=>$request->author
         ]);
         if($cad){
             return redirect('books');
         }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book=ModelBook::find($id);
        return view('show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book=ModelBook::find($id);
        return view('create',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        ModelBook::where(['id'=>$id])->update([
            'title'=>$request->title,
            'pages'=>$request->pages,
            'price'=>$request->price,
            'author'=>$request->author
        ]);
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $del=ModelBook::destroy($id);
        return($del)?"sim":"não";
    }
}
