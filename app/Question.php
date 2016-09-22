<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = ['title', 'content', 'correct_id', 'difficulty'];

    public function answers()
    {
    	return $this->hasMany('App\Answer');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
