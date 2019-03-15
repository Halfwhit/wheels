@extends('layouts.mainlayout')

@section('title', "Article - Whittington's Wheels")

@section('content')
                <div class="card mb-3">
                    <img src="{{$article->image}}" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$article->title}}</h5>
                        <p class="card-text">{{$article->overview}}</p>
                        <p class="card-text">{{$article->fulltext}}</p>
                    </div>
                </div>
@endsection
