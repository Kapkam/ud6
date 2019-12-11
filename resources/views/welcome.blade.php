@extends('layouts.app')
@section('content')
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
        @foreach ($posts as $post)
        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>
        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Post user</a>
        </p>
        <hr>
        <!-- Date/Time -->
        <p>{{$post->published_at}}</p>
        <hr>
        <!-- Preview Image -->
        <img class="img-fluid rounded" src= {{$post->image}} alt="">
        <hr>
        <!-- Post Content -->
        <p class="lead">{{$post->body}}</p>
        <hr>
        @endforeach
      </div>
      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg">
                <ul class="list-unstyled mb-0">
                  @foreach($categories as $category)
                  <li>
                    <a href="#">{{$category->name}}</a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
@endsection
