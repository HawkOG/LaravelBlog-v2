@extends("layouts.app")
@section('content')

<div class='col-lg-12 mt-4 p-0 m-0 mb-5'>

    <div class="col-md-12 p-0 mt-4">
            <div class="card">
              
                    <div class="card-body border-0">
                    <p><a class="btn btn-default ml-5" href="/" role="button"><</a>
                      
                      <h1 class="postHeading pl-5">{{$post->title}}</h1>
                    <p class="pl-5">Written by {{Auth::user()->name}}, at {{$post->created_at}}</p>
                      <div class="row">
                      <div class="col-2">
    <img style="margin-top:1em;width:100px;margin-left:2em" align="left" src="/storage/cover_images/{!! $post->cover_image !!}">
                      </div>
                      <div class="col">
                      <p class="pl-5">{!!$post->body!!}</p>
                      </div>
                    </div>
                      



                      @if(Auth::user()->id == $post->user_id)
                      <span class="pull-right">
                            <a href="/posts/{{$post->id}}/edit" class='btn btn-info'>Edit</a>
                            <a href="/delete/{{$post->id}}" class='btn btn-danger'>Delete</a>
                      </span>
                      <div class='mt-5'>
                        <h3>Post a comment!</h3>

                        {{-- COMMENT FORM --}}
                        <form class='mt-2' id='{{$post->id}}' action='/comment/{{$post->id}}' method='post'>
                            
                          <textarea name="comment" class='form-control' id="article-ckeditor" cols="30" rows="10" placeholder='comment' required></textarea>
                          <button class='btn btn-primary mt-2'>Post</button>
                        </form>
                        {{-- ------------ --}}

                      </div>
                      @endif 
                </h5>   
      </div>
      
</div>
</div>
</div>
</div>
        
        
@endsection