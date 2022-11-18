<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //INISIALISASI U/ NAMA TABLE
    public $table = 'appointment';

    // UNTUK Protect Tanggal
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    // End Protect Tanggal

    // Deklarasi Fillabel (field yang boleh di isi maka menggunakan fillabel)
    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    // End Protect Tanggal
    public function doctor()
    {
        // link lokasi/path , pilih FK'a dan pilih primary key
        // relasi dengan App/Models/ManagementAccess/DetailUser
        return $this->belongsTo('App\Models\Operational\Doctor', 'doctor_id', 'id');
    }
    public function user()
    {
        // link lokasi/path , pilih FK'a dan pilih primary key
        // relasi dengan App/Models/ManagementAccess/DetailUser
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function transaction()
    {
        return $this->hasOne('App\Models\Operational\Transaction', 'appointment_id');
    }
    public function consultation()
    {
        // link lokasi/path , pilih FK'a dan pilih primary key
        // relasi dengan App/Models/ManagementAccess/DetailUser
        return $this->belongsTo('App\Models\MasterData\Consultation', 'consultation_id', 'id');
    }
}
