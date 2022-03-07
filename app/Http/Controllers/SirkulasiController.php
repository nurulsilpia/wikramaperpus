<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\DataSiswa;
use Illuminate\Http\Request;
use App\Models\Sirkulasi;
use phpDocumentor\Reflection\DocBlock\Tags\Since;

class SirkulasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sirkulasi.index',[
            'sirkulasis' => Sirkulasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sirkulasi.create', [
            'sirkulasis' => Sirkulasi::all(),
            'siswas' => DataSiswa::all(),
            'books' => Book::all()
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
            'siswa_id' => 'required',
            'kode_item' => 'required',
            'book_id' => 'required',
            'keterangan' => 'required',
            'kode_pinjam' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required'
        
        ]);

        Sirkulasi::create($validatedData);

        return redirect('/admin/sirkulasi')->with('success', 'Data berhasil dibuat');
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
    public function edit(Sirkulasi $sirkulasi)
    {
        return view('admin.sirkulasi.edit', [
            'sirkulasi' => $sirkulasi,
            'siswas' => DataSiswa::all(),
            'books' => Book::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sirkulasi $sirkulasi)
    {
        $validatedData = $request->validate([
            'siswa_id' => 'required',
            'kode_item' => 'required',
            'book_id' => 'required',
            'keterangan' => 'required',
            'kode_pinjam' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required'
        
        ]);

        Sirkulasi::where('id', $sirkulasi->id)->update($validatedData);

        return redirect('/admin/sirkulasi')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sirkulasi $sirkulasi)
    {
        Sirkulasi::destroy($sirkulasi->id);

        return redirect('/admin/sirkulasi')->with('danger', 'Data berhasil dihapus!');
    }
}
