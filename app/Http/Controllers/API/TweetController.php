<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TweetResource;
use App\Models\Tweet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function __construct()
    {
        $this->middleware('client');
        $this->user =  auth()->guard('api')->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweet = Tweet::orderBy('created_at', 'desc')->get();
        return response()->json($tweet);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new Tweet();
        $new->tweet = $request->tweet;
        $new->user_id = $this->user->id;
        $new->save();
        $tweets = Tweet::orderBy('created_at', 'desc')->get();
        return response()->json($new);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */
    public function show(Tweet $tweet)
    {
        return new TweetResource($tweet);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $t = Tweet::find($id);
        if ($this->user->id !== $t->user_id) {
            return response()->json(['error' => 'You can only edit your own tweets.'], 403);
        }
        $t->tweet = $request->tweet;
        $t->save();
        return new TweetResource($t);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tweet $tweet)
    {
        if ($this->user->id !== $tweet->user_id) {
            return response()->json(['error' => 'You can only delete your own tweets.'], 403);
        }
        $tweet->delete();
        return response()->json(['data'=>'Successfully deleted'],200);
    }
}
