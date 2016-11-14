<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

/**
 * App\Quote
 *
 * @property-read \App\Author $author
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|\App\Quote search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Query\Builder|\App\Quote searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 */
class Quote extends Model
{
    use SearchableTrait;

    protected $fillable = [
        'text',
        'author_id',
        'created_at',
        'updated_at',
    ];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'quotes.text' => 10,
        ],
    ];

    public function author()
    {
        return $this->belongsTo('App\Author');
    }

    public function createQuote($request)
    {
        $author     = \App\Author::firstOrCreate(['name' => $request->author]);
        $quote      = \App\Quote::firstOrNew(['text' => $request->text]);

        return $author->quotes()->save($quote);
    }
}
