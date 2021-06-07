<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';

    protected $fillable = [
        'role_id', 'intranet_admin', 'layanan_fasilitas', 'internship',
        'keuangan', 'kepegawaian', 'aset_bmn', 'surat_arsip', 'kms'
    ];

    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }
}
