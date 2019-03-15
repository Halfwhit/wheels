<?php

namespace App\Http\Controllers;

use App\NewsArticle;
use Illuminate\Http\Request;

class NewsArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsArticles = NewsArticle::all();

        return view('news.index', compact('newsArticles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = request()->validate([
            'title' => 'required',
            'overview' => 'required',
        ]);

        NewsArticle::create($validated);

        return redirect('/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsArticle  $newsArticle
     * @return \Illuminate\Http\Response
     */
    public function show(NewsArticle $newsArticle)
    {
        return view('news.show', compact('newsArticle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsArticle  $newsArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsArticle $newsArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsArticle  $newsArticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsArticle $newsArticle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsArticle  $newsArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsArticle $newsArticle)
    {
        //
    }
}
