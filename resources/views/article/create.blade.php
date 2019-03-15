@extends('layouts.mainlayout')

@section('title', "Write Article - Whittington's Wheels")

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Article</div>
                    <div class="card-body">
                        <form method="post" action="/article">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="image">Image URL</label>
                                <input type="url" class="form-control" id="image" name="image" placeholder="Leave blank for default">
                            </div>
                            <div class="form-group">
                                <label for="title">Article Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="overview">Article Overview</label>
                                <textarea class="form-control" id="overview" name="overview"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="fulltext">Article Contents</label>
                                <textarea class="form-control" id="fulltext" name="fulltext" rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark">Post Article</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
