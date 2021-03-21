@extends('base')
@section('container1')

<title>Post | SHARE</title>

<h3 class="text-center mt-3">This is Post's details page</h3>
<br>
<hr>
<div class="card cardC">
    <img class="card-img-top" src="{{ asset($pos->photo) }}" alt="photo not found">
    <div class="card-body">
        <h5 class="card-title">{{$pos->ptitle}}</h5>
        <p class="card-text">{{$pos->picdis}}</p>
    </div>

    <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Go Back</a>
</div>

@endsection