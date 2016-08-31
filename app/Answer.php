<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'anwers';
    protected $fillable = ['content', 'question_id'];

    public function question()
    {
    	return $this->belogsTo('App\Question');
    }
}
