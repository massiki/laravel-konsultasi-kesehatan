<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show(Question $question)
    {
        $title_tag = Tag::where('id', $question->tag_id)->first();
        $questions = Question::where('tag_id', $question->tag_id)->with(['user', 'tag'])->latest()->paginate(10);
        return view('tags.index', [
            'questions' => $questions,
            'title_tag' => $title_tag
        ]);
    }
}
