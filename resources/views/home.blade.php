@extends('base')
@section('container1')

<title>Home | SHARE</title>

<h3 class="text-center mt-3">This is HOME page</h3>

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
    <h4>Create Post</h4>
    <form action="#" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" class="form-control" name="ptitle" required></input>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Pic Details: </label>
            <textarea class="form-control" name="picdis" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="photo">Upload Photo: </label> <input type="file" name="photo">
        </div>
        <button type="submit" class="btn btn-outline-dark">Save</button>
    </form>
</div>

<div class="form-div-n">
    <h4>Save Note</h4>
    <form action="{{ route('note.home') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Writter Name: </label>
            <input type="text" class="form-control" name="wname"></input>
        </div>
        <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" class="form-control" name="title" required></input>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Note: </label>
            <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-outline-dark">Save</button>
    </form>
</div>

<br>
<hr>
<div class="container">
    <h3>Saved Notes From Database</h3>

    @if(session()->has('delete'))
    <div class="alert alert-danger alert-dismissible">
        {{ session()->get('delete') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <table class="table table-responsive">
        <tr>
            <th>ID</th>
            <th>Writer Name</th>
            <th>Title</th>
            <th>Note</th>
            <th>Created At</th>
        </tr>
        @foreach($note as $n)
        <tr>
            <td>{{$n->id}}</td>
            <td>{{$n->name}}</td>
            <td>{{$n->title}}</td>
            <td>{{$n->note}}</td>
            <td>{{$n->created_at}}</td>
            <td>
                <a href="{{ url('note/edit/'.$n->id) }}" class="btn btn-sm btn-info">Edit</a>
                <a href="{{ url('note/delete/'.$n->id) }}" class="btn btn-sm btn-danger">Delete</a>
                <a href="{{ url('note/view/'.$n->id) }}" class="btn btn-sm btn-success">View</a>
            </td>
        </tr>
        @endforeach

    </table>
</div>


@endsection