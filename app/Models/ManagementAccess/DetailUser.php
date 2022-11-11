<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //INISIALISASI U/ NAMA TABLE
    public $table = 'detail_user';

    // UNTUK Protect Tanggal
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    // End Protect Tanggal

    // Deklarasi Fillabel (field yang boleh di isi maka menggunakan fillabel)
    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gander',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    // End Protect Tanggal
}
