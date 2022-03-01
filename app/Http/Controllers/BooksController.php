<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\CategoryBook;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('adminBooks.index',[
           'books' => Book::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminBooks.create', [
            'categories' => CategoryBook::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'judul' => 'required|max:255',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'image' => 'image|file|max:1024',
            'tahun_terbit' => 'required',
            'isbn' => 'required',
            'jumlah_buku' => 'required',
            'lokasi' => 'required',
            'tanggal_input' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Book::create($validatedData);

        return redirect('/admin/books')->with('success', 'post berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('adminBooks.show', [
            'book' => $book
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('adminBooks.edit', [
            'book' => $book,
            'categories' => CategoryBook::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $rules = [
            'category_id' => 'required',
            'judul' => 'required|max:255',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'image' => 'image|file|max:1024',
            'tahun_terbit' => 'required',
            'isbn' => 'required',
            'jumlah_buku' => 'required',
            'lokasi' => 'required',
            'tanggal_input' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        
        Book::where('id', $book->id)
            ->update($validatedData);

        return redirect('/admin/books')->with('success', 'Post has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        if ($book->image) {
            Storage::delete($book->image);
        }

        Book::destroy($book->id);
        return redirect('/admin/books')->with('delete', 'post berhasil dihapus');
    }
}
