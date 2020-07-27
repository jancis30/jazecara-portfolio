@extends('layouts.app')



@section('content')
    <div class="card-header text-center">
        <div class="panel panel-default">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                    <th>
                                        Delete
                                    </th>
                                </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                            <tr>
                                                <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px"></td>
                                                <td>{{ $post->title }}</td>
                                                <td><a href="{{ route('blogs.edit', ['id' => $post->id]) }}" class="btn btn-xs btn-info">Edit</a></td>
                                            <td><a href="{{ route('blogs.delete', ['id' => $post->id]) }}" class="btn btn-xs btn-danger">Delete</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
    </div>
@stop