@extends('layouts.layout')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"> <h2>{{ $post->title }}</h2></div>
                <div class="card-body">
                    <div class="card-img card-img__max" style="background-image: url({{ $post->img ?? asset('img/default.jpg') }})"></div>
                    <div class="card-author">Author: {{ $post->name }}</div>
                    <div class="card-date">Post created at: {{ $post->created_at->diffForHumans() }}</div>
                    <card class="btn">
                        <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Home</a>
                        <a href="{{ route('post.edit', ['id'=>$post->post_id]) }}" class="btn btn-outline-success">Edit</a>
                        <a href="{{ route('post.destroy', ['id'=>$post->post_id]) }}" class="btn btn-outline-danger">Delete</a>
                    </card>
                </div>
            </div>
        </div>
    </div>


@endsection

