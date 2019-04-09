<?php

namespace App\Http\Controllers;

use App\Module;
use App\Topic;
use Auth;
use Illuminate\Http\Request;
use Faker\Generator as Faker;
use Log;

class TopicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Topic $slug 
     * 
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $topic = Topic::where('slug', '=', $slug)->firstOrFail();

        if (auth()->user()->hasAnyRole(['student', 'teacher'])) {
            return view('student.showContent', compact('topic'));
        }
        error('un usuario quiso ver una url que no le corresponde | '.'user:'. auth()->user()->id);
        return abort(403, 'Unauthorized action.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Topic $topic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topic $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        //
    }

    public function slugsTopics(Faker $faker)
    {
        $topics = Topic::where('slug', 'LIKE','%#%')->get();

        foreach ($topics as $topic){
            $slug=$faker->randomNumber(8, false) . ' ' . $topic->name;
            $topic->slug = str_slug($slug, '-');
            $topic->save();
        }
        return redirect()->route('home')->with('success', 'Slugs creados y guardados en topics');
    }
}
