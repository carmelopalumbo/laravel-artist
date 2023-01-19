@extends('museums.layout.main')

@section('content')

<div class="container py-5">

    <h2 class="my-5">Details:</h2>

    <h3 class="py-3 text-warning">{{$museum->name}}</h3>

    <p class="text-info"><strong>Nation: </strong>{{$museum->nation}}</p>




</div>
@endsection
