<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Unit;
use Illuminate\Http\Request;
use Redirect, Response;
use Yajra\DataTables\DataTables;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        return view('auths.arsip.index');
    }

    public function json_arsip_index(Request $request){
        $data = Arsip::all();
        $darsip = array();
        foreach($data as $arsip){
            $darsip[] = array(
                'id' => $arsip->id,
                'user_id' => $arsip->user->name,
                'nama_file' => $arsip->nama_file,
                'file' => array_reverse(explode('.', $arsip->file))[0],
                'tanggal' => $arsip->created_at->format('d F Y'),
            );
        }

        return Datatables::of($darsip)->make(true);
    }

    public function json_arsip_edit(Request $request)
    {
        $arsip = Arsip::find($request->id);
        return response()->json($arsip);
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
        $arsip = new Arsip();
        $arsip->user_id = $request->user_id;
        $arsip->nama_file = $request->nama_file;
        $ext = $request->file('file')->getClientOriginalExtension();
        $file = "doc_".time().'.'.$ext;
        $request->file('file')->move('docs/', $file);
        $arsip->file = $file;
        $arsip->save();
        return response()->json($arsip); 
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
        $arsip = Arsip::find($id);
        $arsip->user_id = $request->user_id;
        $arsip->nama_file = $request->nama_file;
        $arsip->file = $request->file;
        $arsip->update();

        return response()->json($arsip);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Arsip::destroy($id);
    }

    public function download(Request $request)
    {
        $arsip = Arsip::find($request->id);
        $file= public_path(). "/docs/".$arsip->file;
        $headers = array(
                  'Content-Type: application/pdf',
                );

        return Response::download($file, $arsip->file, $headers);
    }
}
