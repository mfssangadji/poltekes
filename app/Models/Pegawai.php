<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $fillable = [
    	'jenis_pegawai_id',
    	'unit_id',
    	'nip',
    	'nama',
    	'jabatan',
    	'pendidikan',
    	'golongan',
    	'agama',
    	'jenis_kelamin',
    	'no_sertifikat_dosen',
    	'no_str',
    ];

    public function jenis_pegawai()
    {
    	return $this->belongsTo(JenisPegawai::class);
    }

    public function unit()
    {
    	return $this->belongsTo(Unit::class);
    }
}
