<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = ['title, content'];

    public function answers()
    {
    	return $this->hasMany('App\Answer');
    }
}
