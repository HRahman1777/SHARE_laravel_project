@extends('base')
@section('container1')

<title>Note | SHARE</title>

<h3 class="text-center mt-3">This is Note's detail page</h3>
<br>
<hr>
<div class="card text-center">
    <div class="card-header">
        {{$un->name}}
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$un->title}}</h5>
        <p class="card-text">{{$un->note}}</p>
        <a href="{{ url()->previous() }}" class="btn btn-primary">Go Back</a>
    </div>
    <div class="card-footer text-muted">
        {{$un->created_at}}
    </div>
</div>

@endsection