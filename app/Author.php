<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];

    public function quotes()
    {
        return $this->hasMany('App\Quote');
    }
}
