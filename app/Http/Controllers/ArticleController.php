<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.index', [
            'articles' => Article::paginate(),
        ]);
    }

    public function show(Article $article)
    {
        $comments = Comment::where('article_id', $article->id)->get();

        return view('article.show', [
            'article' => $article,
            'comments' => $comments,
        ]);
    }

    public function comment()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
            'article_id' => 'required',
        ]);

        $comment = new Comment();
        $comment->article_id = request('article_id');
        $comment->name = request('name');
        $comment->email = request('email');
        $comment->comment = request('comment');
        $comment->save();

        return back()->with('message', 'Comment has been added');
    }
}
