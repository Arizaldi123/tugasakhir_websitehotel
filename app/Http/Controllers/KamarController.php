<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Http\Requests\StoreKamarRequest;
use App\Http\Requests\UpdateKamarRequest;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kamar.index', [
            'kamar' => Kamar::all()
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
     * @param  \App\Http\Requests\StoreKamarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipe_kamar' => 'required|max:255',
            'jumlah_kamar' => 'required|numeric|min:1',
            'gambar' => 'required'
        ]);

        $gambar = $request->file('gambar')->store('kamar');

        Kamar::create([
            'tipe_kamar' => $request->tipe_kamar,
            'jumlah_kamar' => $request->jumlah_kamar,
            'gambar' => $gambar,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamar $kamar)
    {
        return view('admin.kamar.edit', [
            'kamar' => Kamar::find($kamar->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKamarRequest  $request
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamar $kamar)
    {
        $request->validate([
            'tipe_kamar' => 'required|max:255',
            'jumlah_kamar' => 'required|numeric|min:1',
            'gambar' => 'required'
        ]); 

        $gambar = $request->file('gambar');

        if (!$gambar) {
            $namaGambar = $request->gambar_lama;
        } else{
            $namaGambar = $gambar->store('kamar');
            unlink('storage/'. $request->gambar_lama);
        }
        
        Kamar::find($kamar->id)->update([
            'tipe_kamar' => $request->tipe_kamar,
            'jumlah_kamar' => $request->jumlah_kamar,
            'gambar' => $namaGambar
        ]);

        return redirect('/kamar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy( Kamar $kamar)
    {
        // return($request);
        Kamar::destroy($kamar->id);

        return redirect('/kamar');
    }
}
