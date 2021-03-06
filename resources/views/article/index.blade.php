@extends('layouts.mainlayout')

@section('title', "News - Whittington's Wheels")

@section('content')
    @foreach($articles->reverse() as $article)
                <div class="card mb-3">
                    <img src="{{$article->image}}" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$article->title}}</h5>
                        <p class="card-text">{{$article->overview}}</p>
                        <a class="btn btn-dark" href="/article/{{$article->id}}">Visit Article</a>
                    </div>
                </div>
    @endforeach
@endsection
