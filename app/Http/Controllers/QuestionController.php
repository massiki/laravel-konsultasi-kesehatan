<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request('search')){
            $questions = Question::where('title', 'like', '%'.request('search').'%')->with(['user', 'tag'])->latest()->paginate(10);
        } else {
            $questions = Question::with(['user', 'tag'])->latest()->paginate(10);
        }

        return view('questions.index', [
            'questions' => $questions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        return view('questions.create', [
            'tags' => $tags
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'tag_id' => 'required'
        ]);

        Question::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::user()->id,
            'tag_id' => $request->tag_id
        ]);

        return redirect('/questions');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        $user = User::where('id', $question->user_id)->first();
        $answer = Answer::where('question_id', $question->id)->with('user')->paginate(10);
        return view('questions.show', [
            'question' => $question,
            'answer' => $answer,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
