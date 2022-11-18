<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    //INISIALISASI U/ NAMA TABLE
    public $table = 'type_user';

    // UNTUK Protect Tanggal
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    // End Protect Tanggal

    // Deklarasi Fillabel (field yang boleh di isi maka menggunakan fillabel)
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    // End Protect Tanggal

    public function detail_user()
    {
        // link lokasi/path , pilih FK'a dan pilih primary key
        // relasi dengan App/Models/ManagementAccess/DetailUser
        return $this->belongsTo('App\Models\MasterData\TypeUser', 'type_user_id', 'id');
    }
}
