@extends('layouts.mainlayout')

@section('title', "News - Whittington's Wheels")

@section('content')
    @foreach($newsArticles->reverse() as $newsArticle)
        <div class="row my-5">
            <div class="col-12">
                <div class="card">
                    <img src="{{$newsArticle->image}}" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$newsArticle->title}}</h5>
                        <p class="card-text">{{$newsArticle->overview}}</p>
                        <a class="btn btn-secondary" href="/news/{{$newsArticle->id}}">Visit Article</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
