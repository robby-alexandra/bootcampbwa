<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //INISIALISASI U/ NAMA TABLE
    public $table = 'transaction';

    // UNTUK Protect Tanggal
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    // End Protect Tanggal

    // Deklarasi Fillabel (field yang boleh di isi maka menggunakan fillabel)
    protected $fillable = [
        'appointment_id',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'sub_total',
        'vat',
        'total',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    // End Protect Tanggal
}
