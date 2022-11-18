<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //INISIALISASI U/ NAMA TABLE
    public $table = 'permission';

    // UNTUK Protect Tanggal
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    // End Protect Tanggal

    // Deklarasi Fillabel (field yang boleh di isi maka menggunakan fillabel)
    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    // End Protect Tanggal
    public function permission_pole()
    {
        // permission_pole a/ databasenya tujuan one to many'a databasenya
        // link lokasi , dan pilih FK'a
        // kemudian open model relasinya untuk menambahkan belongsTo
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole', 'permission_id');
    }
}
