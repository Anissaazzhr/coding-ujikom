<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pinjamancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pinjaman = pinjaman::all();
        return view('pinjaman.index', compact('pinjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
                return view('pinjaman.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pinjaman = new pinjaman;
        $pinjaman->id_karyawan = $request->a;
        $pinjaman->jumlah_pinjaman = $request->b;
        $pinjaman->save();
        return redirect()->route('pinjaman.index');
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
         $pinjaman = pinjaman::findOrFail($id);
        return view('pinjaman.show', compact('pinjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $pinjaman = pinjaman::findOrFail($id);
        return view('pinjaman.edit', compact('pinjaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pinjaman = pinjaman::findOrFail($id);
        $pinjaman->id_karyawan = $request->a;
        $pinjaman->jumlah_pinjaman = $request->b;
        $pinjaman->save();
        return redirect()->route('pinjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pinjaman = pinjaman::findOrFail($id);
        $pinjaman->delete();
        return redirect()->route('pinjaman.index');
    }
}
