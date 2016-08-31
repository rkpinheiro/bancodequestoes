<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = ['title'];

    public function answers()
    {
    	return $this->hasMany('App\Answer');
    }
}
