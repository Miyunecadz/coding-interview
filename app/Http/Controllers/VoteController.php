<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function upvote(Article $article)
    {
        $article->votes +=  1;
        $article->save();
        return back();
    }

    public function downvote(Article $article)
    {
        $article->votes -= 1;
        $article->save();
        return back();
    }
}
