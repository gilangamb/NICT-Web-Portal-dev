<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';

    protected $fillable = [
        'title', 'description', 'image', 'category', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
