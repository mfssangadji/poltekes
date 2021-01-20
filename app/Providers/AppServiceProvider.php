<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\JenisPegawai;
use App\Models\Informasi;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $pengguna = array(
            1 => 'Administrator',
            2 => 'Operator',
            3 => 'Guest',
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
        
        $jenis_pegawai = JenisPegawai::all();
        $xinformasi = Informasi::orderBy('id', 'DESC')->limit(5)->get();
        View::share('pengguna', $pengguna);
        View::share('pendidikan', $pendidikan);
        View::share('golongan', $golongan);
        View::share('agama', $agama);
        View::share('jenis_kelamin', $jenis_kelamin);
        View::share('jabatan', $jabatan);
        View::share('jenis_pegawai', $jenis_pegawai);
        View::share('xinformasi', $xinformasi);
    }
}
