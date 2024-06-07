<?php

namespace App\Http\Controllers;

use App\Models\FasilitasHotel;
use App\Http\Requests\StoreFasilitasHotelRequest;
use App\Http\Requests\UpdateFasilitasHotelRequest;
use Illuminate\Http\Request;

class FasilitasHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.fasilitashotel.index', [
            'fasilitas' => FasilitasHotel::all()
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
     * @param  \App\Http\Requests\StoreFasilitasHotelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'gambar' => 'required'
        ]);
        
        $gambar = $request->file('gambar')->store('fasilitas-hotel');

        FasilitasHotel::create([
            'nama_fasilitas' => $request->nama_fasilitas,
            'keterangan' => $request->keterangan,
            'gambar' => $gambar
        ]);

        return redirect('/fasilitas-hotel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function show(FasilitasHotel $fasilitasHotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function edit(FasilitasHotel $fasilitasHotel)
    {
        return view('admin.fasilitashotel.edit', [
            'fasilitas' => FasilitasHotel::find($fasilitasHotel->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFasilitasHotelRequest  $request
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FasilitasHotel $fasilitasHotel)
    {
        $request->validate([
            'nama_fasilitas' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'gambar' => 'required'
        ]);

        $gambar = $request->file('gambar');

        if (!$gambar) {
            $namaGambar = $request->gambar_lama;
        } else{
            $namaGambar = $gambar->store('fasilitas-hotel');
            unlink('storage/'. $request->gambar_lama);
        }

            FasilitasHotel::find($fasilitasHotel->id)->update([
                'nama_fasilitas' => $request->nama_fasilitas,
                'keterangan' => $request->keterangan,
                'gambar' => $namaGambar,
            ]);

            return redirect('/fasilitas-hotel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FasilitasHotel  $fasilitasHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FasilitasHotel $fasilitasHotel)
    {
        unlink('storage/' . $fasilitasHotel->gambar);
        FasilitasHotel::destroy($fasilitasHotel->id);

        return redirect('/fasilitas-hotel');
    }
}
