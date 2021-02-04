@extends('base')
@section('container1')

<title>Note Edit | SHARE</title>

<h3 class="text-center mt-3">Edit Note</h3>
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

<div class="form-div-n">
    <form action="{{ url('note/update/'.$unote->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Writter Name: </label>
            <input type="text" class="form-control" name="wname" value="{{ $unote->name }}"></input>
        </div>
        <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" class="form-control" name="title" value="{{ $unote->title }}" required></input>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Note: </label>
            <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="3" value="" required>{{ $unote->note }}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-dark">Update</button>
    </form>
</div>


@endsection