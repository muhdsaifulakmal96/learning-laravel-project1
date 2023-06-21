@extends('layouts.app')
@section('content')
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                {{-- posts is from controller --}}
                {{-- //dari homecontroller --}}
                @foreach ($posts as $post )
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        {{-- route akan ke post.show
                        $post ambil dari home controller --}}
                        <a href="{{route('post.show', $post ->id)}}"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{$post->created_at}}</div>
                            <h2 class="card-title h4">{{$post->title}}</h2>
                            <p class="card-text">{{$post->post_text}}</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-unstyled mb-0">
                                {{-- categories is from controller --}}
                                @foreach ($categories as $category )
                                {{-- name and id are basically what type of data in database table u want to display --}}
                                {{-- request dari $category ->id pergi ke category_id & buat checking di controller --}}
                                    <li><a href="{{route('home1')}}?category_id={{$category ->id}}">{{$category -> name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
        </div>
    </div>
</div>
@endsection