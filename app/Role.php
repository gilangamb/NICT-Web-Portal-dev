<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    // protected $casts = [
    //     'created_at' => 'datetime:Y-m-d H:m:s',
    //     'updated_at' => 'datetime:Y-m-d H:m:s'
    // ];

    protected $fillable = [
        'name', 'slug'
    ];

    public function type()
    {
        // argument ke-2 dan ke-3 boleh tidak dituliskan
        return $this->hasOne('App\Type', 'role_id', 'id');
    }
}
