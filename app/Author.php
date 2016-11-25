<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

/**
 * App\Author
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Quote[] $quotes
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|\App\Author search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Query\Builder|\App\Author searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 */
class Author extends Model
{
    use SearchableTrait;

    protected $fillable = [
        'name',
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
            'authors.name' => 10,
        ],
    ];

    public function quotes()
    {
        return $this->hasMany('App\Quote');
    }

    public function randomQuote()
    {
        return $this->quotes()->inRandomOrder()->first();
    }

    public function hasMoreQuotes() {
        return count($this->quotes) > 1 ? true : false;
    }

    public function getRandomQuotes($qty = 5)
    {
        return $this->quotes()->inRandomOrder()->take($qty)->get();
    }
}
