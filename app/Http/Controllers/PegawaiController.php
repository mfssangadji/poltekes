<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Unit;
use Illuminate\Http\Request;
use Redirect, Response;
use Yajra\DataTables\DataTables;

class PegawaiController extends FeederController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $unit = Unit::all();
        return view('auths.pegawai.index', compact('unit'));
    }

    public function json_pegawai_index(Request $request){
        $data = Pegawai::where('jenis_pegawai_id', $request->jid)->get();

        $pengguna = array(
            1 => 'Administrator',
            2 => 'Operator',
        );

        $pendidikan = array(
            1 => 'SD',
            2 => 'SMA',
            3 => 'SMP',
            4 => 'D3',
            5 => 'D4',
            6 => 'S1',
            7 => 'S2',
            8 => 'S3',
        );

        $golongan = array(
            1 => 'I/C',
            2 => 'II/A',
            3 => 'II/C',
            4 => 'II/D',
            5 => 'III/A',
            6 => 'III/B',
            7 => 'III/C',
            8 => 'III/D',
            9 => 'IV/A',
            10 => 'IV/B',
            11 => 'IV/C',
        );

        $agama = array(
            1 => 'Hindu',
            2 => 'Islam',
            3 => 'Kristen',
        );

        $jenis_kelamin = array(
            1 => 'Laki-laki',
            2 => 'Perempuan',
        );

        $jabatan = array(
            1 => 'Jabatan 1',
            2 => 'Jabatan 2',
            3 => 'Jabatan 3',
        );

        $dpegawai = array();
        $dpegawais = array();
        foreach($data as $pegawai){
            if($request->jid == 1){
                $dpegawai[] = array(
                    'id' => $pegawai->id,
                    'nama' => strtoupper($pegawai->nama),
                    "status_data" => 0,
                );
            }elseif($request->jid == 2){
                $dpegawai[] = array(
                    'id' => $pegawai->id,
                    'nama' => strtoupper($pegawai->nama),
                    "status_data" => 0,
                );
            }else{
                $dpegawai[] = array(
                    'id' => $pegawai->id,
                    'nama' => strtoupper($pegawai->nama),
                    "status_data" => 0,
                );
            }   
        }

        $sister = self::doseninternal();
        foreach($sister->data as $val){
            if($request->jid == 1){
                if($val->jns_sdm == "Dosen"){
                    $dpegawais[] = array(
                        "id" => rand(111,999),
                        "nama" => strtoupper($val->nama_dosen),
                        'status_data' => 1,
                    );
                }
            }elseif($request->jid == 2){
                if($val->jns_sdm == "Tenaga Kependidikan"){
                    $dpegawais[] = array(
                        "id" => rand(111,999),
                        "nama" => strtoupper($val->nama_dosen),
                        'status_data' => 1,
                    );
                }
            }else{
                if($val->jns_sdm == "Tenaga Pendukung"){
                    $dpegawais[] = array(
                        "id" => rand(111,999),
                        "nama" => strtoupper($val->nama_dosen),
                        'status_data' => 1,
                    );
                }
            }
        }

        $data = array_merge($dpegawai, $dpegawais);
        return Datatables::of($data)->make(true);
    }

    public function json_pegawai_edit(Request $request)
    {
        $pegawai = Pegawai::find($request->id);
        return response()->json($pegawai);
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
        $pegawai = new Pegawai();
        $pegawai->jenis_pegawai_id = $request->jenis_pegawai_id;
        $pegawai->unit_id = $request->unit_id;
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->pendidikan = $request->pendidikan;
        $pegawai->golongan = $request->golongan;
        $pegawai->agama = $request->agama;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->no_sertifikat_dosen = $request->no_sertifikat_dosen;
        $pegawai->no_str = $request->no_str;
        $pegawai->save();
        return response()->json($pegawai); 
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
    public function edit($id)
    {
        //
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
        $pegawai = Pegawai::find($id);
        $pegawai->unit_id = $request->unit_id;
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->pendidikan = $request->pendidikan;
        $pegawai->golongan = $request->golongan;
        $pegawai->agama = $request->agama;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->no_sertifikat_dosen = $request->no_sertifikat_dosen;
        $pegawai->no_str = $request->no_str;
        $pegawai->update();

        return response()->json($pegawai);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pegawai::destroy($id);
    }
}
