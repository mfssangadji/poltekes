<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informasi = Informasi::orderBy('id', 'DESC')->get();
        return view('auths.informasi.index', compact('informasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auths.informasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ext = $request->file('gambar')->getClientOriginalExtension();
        $image = time().'.'.$ext;
        $request->file('gambar')->move('uploads/', $image);
        Informasi::create([
            'user_id' => auth()->user()->id,
            'judul' => $request->judul,
            'gambar' => $image,
            'isi' => $request->isi,
        ]);

        return redirect()->route('informasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function show(Informasi $informasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasi $informasi)
    {
        $informasi = Informasi::find($informasi->id);
        return view('auths.informasi.edit', compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasi $informasi)
    {
        if(empty($request->gambar)){
            Informasi::where('id', $informasi->id)
            ->update([
                'user_id' => auth()->user()->id,
                'judul' => $request->judul,
                'isi' => $request->isi,
            ]);
        }else{
            $ext = $request->file('gambar')->getClientOriginalExtension();
            $image = time().'.'.$ext;
            $request->file('gambar')->move('uploads/', $image);
            Informasi::where('id', $informasi->id)
            ->update([
                'user_id' => auth()->user()->id,
                'judul' => $request->judul,
                'gambar' => $image,
                'isi' => $request->isi,
            ]);
        }
        

        return redirect()->route('informasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasi $informasi)
    {
        Informasi::destroy($informasi->id);
        return redirect()->back();
    }
}
