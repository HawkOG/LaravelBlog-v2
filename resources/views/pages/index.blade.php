@extends('layouts.app')
@section('content')
    <!-- Page Content -->
    <div class="container">
      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          @foreach($posts as $post)

          
          <!-- Title -->
          <h1 class="mt-4 postHeading post-body">{{$post->title}}</h1>
        <small>Posted by {{Auth::user()->name}}. Category {{$post->cat}}</small>
          <!-- Author -->
          <p class="lead b-2">
            
    <img style="width:200px;margin-right:20px;" align="left" src="/storage/cover_images/{!! $post->cover_image !!}">
           
                        <p href="#" class="mr-4">{!!str_limit($post->body, 400)!!}</p>
          {{-- {{!! str_limit($posts->nextPost()['body'], 10) !!}} --}}
          <a href="/post/{{$post->id}}" class="mr-2">Continue reading</a> <a href="/post/{{$post->id}}/comments">Comments (#)</a>
          </p>
        
          <hr>
          @endforeach
          
          

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h3 class="card-header">Search</h3>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                  @foreach($posts as $post)
                  <li>{{$post->cat}}</li>

                  
                  @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Latest Posts</h5>
            <div class="card-body">
                @foreach($posts as $post)
            <a href="/post/{{$post->id}}">{{$post->title}}</p>
                @endforeach
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5">
      <div class="container-fluid">
        <p class="m-0 text-center text-dark">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>
          </div>
@endsection