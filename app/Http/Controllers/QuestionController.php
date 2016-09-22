<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;
use App\Tag;
use App\Answer;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Question::orderBy('created_at','desc')->with('tags')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = Question::create($request->all());

        foreach ($request->answers as $index => $answer) {
            $question->answers()->create($answer);
            if ($question->correct_id == $index+1) {
                $question->correct_id = $question->answers->last()->id;
                $question->save();
            }
        }

        $tags = collect([]);

        foreach ($request->tags as $index => $item) {
            if ( empty($item['id'])) {
                $tag = new Tag($item);
                $tag->slug = str_slug($item['text']);
                $tag->save();
                $tags->push($tag->id);
            } else {
                $tags->push($item['id']);
            }
        }

        $question->tags()->sync($tags->toArray());
          
        return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Question::find($id)->load('answers')->load('tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(Question::find($id)->load('answers')->load('tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        
        $question->update($request->all());

        //$question->answers()->delete();

        foreach ($request->answers as $index => $item) {
            $answer = Answer::find($item['id']);
            $answer->update($item);
        }

        $tags = collect([]);

        foreach ($request->tags as $index => $item) {
            if ( empty($item['id'])) {
                $tag = new Tag($item);
                $tag->slug = str_slug($item['text']);
                $tag->save();
                $tags->push($tag->id);
            } else {
                $tags->push($item['id']);
            }
        }

        $question->tags()->sync($tags->toArray());

        return response()->json($question);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);
        $question->tags()->detach();
        $question->load('answers')->delete();
        return response()->json($question);
    }
}
