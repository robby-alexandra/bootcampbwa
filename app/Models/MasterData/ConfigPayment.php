<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConfigPayment extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //INISIALISASI U/ NAMA TABLE
    public $table = 'config_payment';

    // UNTUK Protect Tanggal
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    // End Protect Tanggal

    // Deklarasi Fillabel (field yang boleh di isi maka menggunakan fillabel)
    protected $fillable = [
        'fee',
        'vat',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    // End Protect Tanggal
}
