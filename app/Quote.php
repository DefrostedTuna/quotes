<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'text',
        'created_at',
        'updated_at',
    ];

    protected $visible = [
    ];


    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}
