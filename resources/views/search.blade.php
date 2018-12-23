@extends('master')

@section('body')
    <!-- Latest compiled and minified CSS -->
                <div class="span12">
                    <form method="post" action="{{url('submit_search')}}"  style="display: flex; justify-content:space-between" >
                        {{ csrf_field() }}

                        <input type="text" class="search-query form-control col-lg-8" placeholder="Search" name="title" >
                            <input type="submit" value="search" class="btn btn-light col-lg-3">
                    </form>
                </div>
            @if(isset($posts))
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

            @endif

@endsection
