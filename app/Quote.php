<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Quote
 *
 * @property-read \App\Author $author
 * @mixin \Eloquent
 */
class Quote extends Model
{
    protected $fillable = [
        'text',
        'author_id',
        'created_at',
        'updated_at',
    ];

    protected $with = [
        'author'
    ];

    public function author()
    {
        return $this->belongsTo('App\Author');
    }

    public function createQuote($request)
    {
        $author     = \App\Author::firstOrCreate(['name' => $request->author]);
        $quote      = \App\Quote::firstOrNew(['text' => $request->text]);

        // We set the 'load' method because Eloquent does not
        // return the Author with the created model.
        return $author->quotes()->save($quote);
    }
}
