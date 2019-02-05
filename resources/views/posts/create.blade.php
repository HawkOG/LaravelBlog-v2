@extends('layouts.app')

@section('content')
    <div class="panel panel-custom">
        <div class="panel-heading">Create post</div>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group p-4">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group p-4">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group p-4">
                {{Form::label('category', 'Category')}}
                
            
            </div>
        <div class="form-group p-4">
            {{Form::label('cover_image', 'Upload your image')}}
            {{Form::file('cover_image', ['class'=>'btn btn-info'])}}
        </div>
        <div class="form-group p-4">
        {{Form::submit('Submit', ['class'=>'btn btn-info btn-block p-3 border-0'])}}
        </div>
    {!! Form::close() !!}
    </div>
@endsection

