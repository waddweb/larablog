@extends('layouts.layout', ['title'=>"Post No $post->post_id. $post->title "])

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"> <h2>{{ $post->title }}</h2></div>
                <div class="card-body">
                    <div class="card-img card-img__max" style="background-image: url({{ $post->img ?? asset('img/default.jpg') }})"></div>
                    <div class="card-descr">Description: {{ $post->descr }}</div>
                    <div class="card-author">Author: {{ $post->name }}</div>
                    <div class="card-date">Post created at: {{ $post->created_at->diffForHumans() }}</div>
                    <div class="btn">
                        <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Home</a>
                        <a href="{{ route('post.edit', ['id'=>$post->post_id]) }}" class="btn btn-outline-success">Edit</a>

                        <form action="{{ route('post.destroy', ['id'=>$post->post_id]) }}" method="post"
                              onsubmit="if (confirm('You are really want to delete the post?')) {return true} else
                            {return false} ">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-outline-danger" value="Delete">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

