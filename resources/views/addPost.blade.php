@extends('master')

@section('body')
    <div class="container">
        <div class="row">
            <form role="form" class="col-md-9 go-right" enctype="multipart/form-data" action="{{url('store_post')}}" method="post">
                {{ csrf_field() }}

                <h2>Add new post</h2>
                <div class="form-group">
                    <label >Title</label>
                    <input  name="title" type="tel" class="form-control" required>
                </div>
                <div class="form-group">
                    <label >Image</label>
                    <input  name="img" type="file" class="form-control" required >
                </div>
                <div class="form-group">
                    <label for="message">Content</label>
                    <textarea id="message" name="contents" class="form-control" required></textarea>
                </div>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
