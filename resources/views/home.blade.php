@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-custom">
            <div class="panel-heading">{{config('app.name')}} Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h3 class="text-center">Good day, {{ Auth::user()->name }}.</h3>
                        <hr>
                        <div class="input-group pb-4">
                        <h3 class="float-left mt-0 mb-0">Your Content</h3>
                        <a href="/posts/create" class="pull-right btn btn-default float-right`">Add Post</a>
                    </div>
                        @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                    <td>{{$post->title}}</td>
                                    <td class=""><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td> {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-left'])!!}

                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                          
                                            {!! Form::close() !!}</td>
                                </tr>
                            @endforeach
                        </table>
                        @else
                            <p>You have not made any posts.</p>
                        @endif
                        <hr>
                       
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
