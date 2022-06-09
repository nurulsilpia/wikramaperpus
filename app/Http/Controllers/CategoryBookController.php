<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\CategoryBook;

class CategoryBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminCategoryBooks.index',[
            'categoryBooks' => CategoryBook::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            return view('adminCategoryBooks.create');
        }
    
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
            'name' => 'required',
            'codeCategory' => 'required',
        ]);

        CategoryBook::create($validatedData);

        return redirect('/admin/category-books')->with('success', 'kategori berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryBook $categoryBook)
    {
        return view('adminCategoryBooks.edit', [
            'categoryBook' => $categoryBook
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryBook $categoryBook)
    {
        $rules = [
            'name' => "required",
            'codeCategory' => 'required',
        ];

        $validatedData = $request->validate($rules);

        CategoryBook::where('id', $categoryBook->id)->update($validatedData);

        return redirect('/admin/category-books')->with('success', 'Category book has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryBook $categoryBook )
    {
        CategoryBook::destroy($categoryBook->id);
        return redirect('/admin/category-books')->with('delete', 'Category book has been deleted!');
    }
}
