@extends('layouts.app')

@section('content')

    @if(count($errors) > 0)

    <div class="row justify-content-center">
        <div class="col-md-8">
                <ul class="list-group text-center">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item text-danger">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
        </div>
    </div>

    @endif

<div class="panel panel-default">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
    <div class="card-header text-center">
        Edit the Blog: {{ $post->title }}
    </div>
    <div class="card-body">
        <form action="{{ route('blogs.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
            <input class="form-control" type="text" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="featured">Featured Image</label>
                <input class="form-control" type="file" name="featured">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" cols="5" rows="5">{{ $post->content }}</textarea>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Update Blog</button>
                </div>
            </div>
        </div>
    </div>
</div>
        </form>
    </div>
</div>

@stop