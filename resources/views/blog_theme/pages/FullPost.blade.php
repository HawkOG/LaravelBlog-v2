@extends("blog_theme.main")
@section('content')
@endsection

@section('posts')
<div class='col-lg-12 mt-4 p-0 m-0'>

            <div class="col-md-12 p-0 mt-4">
                    <div class="card">
                            <h4 class="card-header border-0 bg-none">{{$post->title}}</h4>
                            <div class="card-body border-0">
                            {{$post->body}}
                    <p>{{$post->body}}</p>
                            <p><a class="btn btn-default" href="/" role="button">Atgal</a>
            </div>
        </div>
    </div>
    </div>
    </div>
        
        
@endsection