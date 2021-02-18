@extends('base')
@section('container1')

<title>Posts | SHARE</title>

<h3 class="text-center mt-3">This is All Post page</h3>
<br>
<hr>
@foreach($pst as $p)
<div class="card cardC">
    <img class="card-img-top" src="{{ URL::to($p->photo) }}" alt="photo not found">
    <div class="card-body">
        <h5 class="card-title">{{$p->ptitle}}</h5>
        <p class="card-text">{{$p->picdis}}</p>

        <a href="#" class="btn btn-sm btn-info">Edit</a>
        <a href="#" class="btn btn-sm btn-danger">Delete</a>
        <a href="{{ url('post/view/'.$p->id) }}" class="btn btn-sm btn-success">View</a>
    </div>
</div>
@endforeach

@endsection