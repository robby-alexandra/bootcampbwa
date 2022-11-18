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

    // HasMany ( cek database relation )
    public function detail_user()
    {
        // detial_user a/ databasenya tujuan one to many'a
        // link lokasi , dan pilih FK'a
        // kemudian open model relasinya untuk menambahkan belongsTo
        return $this->hasMany('App\Models\ManagementAccess\DetailUser', 'type_user_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
