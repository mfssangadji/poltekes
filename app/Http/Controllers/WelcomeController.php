<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Informasi;
use Illuminate\Http\Request;
use App\Models\Unit;
use Redirect, Response;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;

class WelcomeController extends Controller
{
    private $url;
    public function __construct()
    {
        $this->url = "http://sister.poltekkesternate.ac.id:8027/api.php/0.1/";
    }

    public function index()
    {
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

        foreach($pendidikan as $key => $val){
        	$cpendidikan[$key] = Pegawai::where('pendidikan', $key)->count();
        }

        foreach($golongan as $key => $val){
        	$cgolongan[$key] = Pegawai::where('golongan', $key)->count();
        }

        foreach($agama as $key => $val){
        	$cagama[$key] = Pegawai::where('agama', $key)->count();
        }

        foreach($jenis_kelamin as $key => $val){
        	$cjenis_kelamin[$key] = Pegawai::where('jenis_kelamin', $key)->count();
        }

    	return view('welcome', compact(
    		'cpendidikan',
    		'cgolongan',
    		'cagama',
    		'cjenis_kelamin',
    	));
    }

    public function informasi()
    {
        $informasi = Informasi::orderBy("id", "DESC")->get();
    	return view('informasi.index', compact('informasi'));
    }

    public function dinformasi(Request $request)
    {
        $informasi = Informasi::find($request->id);
        return view('informasi.dinformasi', compact('informasi'));
    }

    public function sdm_index(Request $request)
    {
        if(empty(Session::get("token"))){
            $username = "I3ZmRCjjL3FXDVILnT6GSX5reHPYydvFLz6Bdhxz2hbeYqBdb6dllN18tC1bQSw9";
            $password = "OkizOaoUGgXaaWw8xNY1rj7rpwyKx3nTafVVYqYkV3YhDBYKSt6FO77KzCur2thl";
            $id_pengguna = "402788bd-9fdf-46fe-a433-8dab47ef6d2e";
            $data = [
                'username' => $username,
                'password' => $password,
                'id_pengguna' => $id_pengguna, 
            ];

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $this->url . "Login",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30000,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($data),
                CURLOPT_HTTPHEADER => array(
                    "accept: */*",
                    "accept-language: en-US,en;q=0.8",
                    "content-type: application/json",
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $json = json_decode($response);
                Session::put('token', $json->data->id_token);
            }
        }

        $unit = Unit::all();
        return view('sdm.index', compact('unit'));
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

    public function sop_surat_masuk()
    {
    	return view('surat-masuk.index');
    }

    public function sop_surat_keluar()
    {
    	return view('surat-keluar.index');
    }

    public function struktur_organisasi()
    {
    	return view('struktur-organisasi.index');
    }

    public function tentang()
    {
    	return view('tentang.index');
    }
}
