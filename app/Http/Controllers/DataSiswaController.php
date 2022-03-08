<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswa;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dataSiswa.index', [
            'siswas' => DataSiswa::all()
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
            'nis' => 'required|numeric',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required'
        ]);

        DataSiswa::create($validatedData);

        return redirect('/admin/siswa')->with('success', 'New student has been added!');
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
    public function edit(DataSiswa $siswa)
    {
        return view('admin.dataSiswa.edit', [
            'siswa' => $siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataSiswa $siswa)
    {
        $validatedData = $request->validate([
            'nis' => 'required|numeric',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required'
        ]);

        DataSiswa::where('id', $siswa->id)->update($validatedData);

        return redirect('/admin/siswa')->with('success', 'New student has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataSiswa $siswa)
    {
        DataSiswa::destroy($siswa->id);
        return redirect('/admin/siswa')->with('delete', 'Student has been deleted');
    }
}
