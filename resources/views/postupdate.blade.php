@extends('base')
@section('container1')

<title>Post Update | SHARE</title>

<h3 class="text-center mt-3">This is Post Update page</h3>
<br>
<hr>

@if(session()->has('message'))
<div class="alert alert-success alert-dismissible">
    {{ session()->get('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if(session()->has('error'))
<div class="alert alert-danger alert-dismissible">
    {{ session()->get('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="form-div-n post-form">
    <h4>Update Post</h4>
    <form action="{{ url('post/update/'.$pos->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" class="form-control" name="ptitle" value="{{$pos->ptitle}}" required></input>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Pic Details: </label>
            <textarea class="form-control" name="picdis" id="exampleFormControlTextarea1" rows="3" required>{{$pos->picdis}}</textarea>
        </div>
        <div class="form-group">
            <img style="height: 35px; width: 35px;" src="{{ asset($pos->photo) }}" alt="photo not found"><br>
            <label for="photo">Upload Photo: </label> <input type="file" name="photo">
        </div>
        <button type="submit" class="btn btn-outline-dark">Save</button>
    </form>
</div>


@endsection