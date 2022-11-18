<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //INISIALISASI U/ NAMA TABLE
    public $table = 'doctor';

    // UNTUK Protect Tanggal
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    // End Protect Tanggal

    // Deklarasi Fillabel (field yang boleh di isi maka menggunakan fillabel)
    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    // End Protect Tanggal

    public function specialist()
    {
        // link lokasi/path , pilih FK'a dan pilih primary key
        // relasi dengan App/Models/ManagementAccess/DetailUser
        return $this->belongsTo('App\Models\MasterData\Specialist', 'specialist_id', 'id');
    }
    public function appointment()
    {
        return $this->hasMany('App\Models\Operational\Appointment', 'doctor_id');
    }
}
