@extends('layouts.mainlayout')

@section('title', "Article - Whittington's Wheels")

@section('content')
    <div class="container">
        <h5>Test text: {{$newsArticle->title}}</h5>
        <p>{{$newsArticle->overview}}</p>
    </div>

@endsection
