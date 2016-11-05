<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Author
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Quote[] $quotes
 * @mixin \Eloquent
 */
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
