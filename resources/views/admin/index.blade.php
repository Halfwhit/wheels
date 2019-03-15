@extends('layouts.mainlayout')

@section('title', "Admin Panel - Whittington's Wheels")

@section('content')
    <div class="card-deck my-2">
        <div class="card">
            <h5 class="card-header">Web Portal</h5>
            <div class="card-body">
                <h3 class="card-title text-center">New Article</h3>
                <p class="card-text text-center">Post a new article to the web portal</p>
            </div>
            <div class="card-footer">
                    <a href="/article/create" class="btn btn-block btn-dark">Proceed</a>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">Vehicle Database</h5>
            <div class="card-body">
                <h3 class="card-title text-center">Manage Vehicles</h3>
                <p class="card-text text-center">Manage the details of the vehicles in the database</p>
            </div>
            <div class="card-footer">
                    <a href="#" class="btn btn-block btn-dark">Proceed</a>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">Services</h5>
            <div class="card-body">
                <h3 class="card-title text-center">Services Management</h3>
                <p class="card-text text-center">Manage details of services available</p>
            </div>
            <div class="card-footer">
                    <a href="#" class="btn btn-block btn-dark">Proceed</a>
            </div>
        </div>
@endsection
