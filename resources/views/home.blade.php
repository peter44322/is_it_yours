@extends('master')

@section('body')
    <a href="{{url('add_post')}}"><button type="button" class="btn btn-primary">Add Post</button></a>
    @if(isset($notFound)||isset($posts))
        <a href="{{url('home')}}"><button type="button" class="btn btn-primary">All Posts</button></a>
    @endif
    <hr>
    <form method="post" action="{{url('submit_search')}}"  style="display: flex; justify-content:space-between" >
        {{ csrf_field() }}

        <input type="text" class="search-query form-control col-lg-8" placeholder="Search" name="title" >
        <input type="submit" value="search" class="btn btn-light col-lg-3">
    </form>
    <hr>

    @if(isset($notFound))
        <h4>{{$notFound}}</h4>
    @elseif(isset($posts))
        <h4>You searched for : {{$title}}</h4>
        @foreach($posts as $post)
            <div class="col-md-10 blogShort">
                <h1>{{$post->title}}</h1>
                <img src="{{url('storage/app/'.$post->img)}}" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                <article><p>
                        {{$post->content}}
                    </p></article>
            </div>
            <hr>
        @endforeach
    @else
        @foreach(\App\post::all() as $post)
            <div class="col-md-10 blogShort">
                <h1>{{$post->title}}</h1>
                <img src="{{url('storage/app/'.$post->img)}}" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                <article><p>
                        {{$post->content}}
                    </p></article>
            </div>
            <hr>
        @endforeach

    @endif

@endsection
