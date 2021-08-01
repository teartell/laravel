<?php

namespace App\Http\Controllers;

use App\PostModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function review()
    {
        $reviews = new PostModel();
        //dd($reviews->all());


        return view('review', ['reviews'=>$reviews->all()]);
    }

    public function review_check(Request $request)
    {
        $valid = $request->validate([
            'title_name' => 'required|min:4|max:100',
            'topic' => 'required|min:4',
            'text' => 'required|min:4',
        ]);

        $review = new PostModel();
        $review->title_name = $request->input('title_name');
        $review->topic = $request->input('topic');
        $review->text = $request->input('text');

        $review->save();

        return redirect()->route('review');
    }

    public function post()
    {
        return view('post');
    }

    public function games()
    {
        return view('games');
    }

    public function movies()
    {
        return view('movies');
    }

    public function music()
    {
        return view('music');
    }
}
