<?php

namespace App\Http\Controllers;

use App\Models\JenisBook;
use Illuminate\Http\Request;

class JenisBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminJenisBooks.index',[
            'jenises' => JenisBook::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'jenis' => 'required',
            'codeJenis' => 'required'
        ]);

        JenisBook::create($validatedData);

        return redirect('/admin/jenis-books')->with('success', 'Jenis Buku Berhasil di buat');
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
    public function edit(JenisBook $jenisBook)
    {
        return view('adminJenisBooks.edit', [
            'jenisBook' => $jenisBook
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisBook $jenisBook)
    {
        $rules = [
            'jenis' => "required",
            'codeJenis' => 'required'
        ];

        $validatedData = $request->validate($rules);

        JenisBook::where('id', $jenisBook->id)->update($validatedData);

        return redirect('/admin/jenis-books')->with('success', 'Kategory Buku Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisBook $jenisBook )
    {
        JenisBook::destroy($jenisBook->id);
        return redirect('/admin/jenis-books')->with('delete', 'Jenis Buku Berhasil Di Hapus!');
    }
}
