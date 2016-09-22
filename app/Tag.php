<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['text', 'slug'];

	public function questions()
    {
        return $this->belongsToMany('App\Question');
    }
}
