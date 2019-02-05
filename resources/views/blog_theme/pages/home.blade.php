@extends("blog_theme.main")
@section('content')
@endsection

@section('posts')

<div class='col-lg-12 mt-4 p-0 m-0'>
            @foreach($posts as $post)
                <div class="col-md-12 p-0 mt-4">
                        <div class="card">
                                <h4 class="card-header border-0 bg-none">{{$post->title}}</h4>
                                <div class="card-body border-0">
                    
                    <p>{{str_limit($post->body, 200) }}</p>
                                <p><a role="button" class="btn btn-default float-left pl-0" href="post/{{$post->id}}">Skaityti daugiau</a>
                                    <p><a role="button" class="btn btn-default float-right" href="delete/{{$post->id}}">Trinti</a>
                                    <p><a role="button" class="btn btn-default float-right" href="edit/{{$post->id}}">Redaguoti</a>
                                       
                                    
                </div>
            </div>
        </div>
            @endforeach
        </div>
        </div>
        
        
@endsection