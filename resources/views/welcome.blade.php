@extends('layouts.app')



@section('content')
<style>
  .myimg {
    padding: 1rem auto;
  }
  .blogimg {
    width:100%;
    padding: 1rem auto;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Christian Jaze Cara Blogs</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="nav-link disabled" href="#">About me</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Hobbies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Family</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Contact Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Donate</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">{{-- style="display:block; width:100%" --}}
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
    <img src="{{asset('upload/post/jaze.jpg')}}" alt="jaze" class="myimg img-fluid mx-auto d-block">
      <p>Hi I am Web Developer</p>
      <h3>Coming Soon</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Works</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Soon</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      @foreach($posts as $post)
      <h2>{{ $post->title }}</h2>
      <img src="{{ $post->featured }}" alt="" class="blogimg img-fluid">
      <hr class="my-4">
      <p>{{ $post->content }}</p>
      <hr class="my-4">
      @endforeach
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Christian Jaze Cara | Web Developer | jancis98.jc@gmail.com</p>
</div>

@stop