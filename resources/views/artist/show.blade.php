@extends('artist.layout.main')

@section('content')
    <p class="text-center py-5">
        Info su:
    </p>
    <h4 class="text-center fw-bolder">
        {{ $artist->name }}
    </h4>
    <div class="d-flex justify-content-center py-5">
        <a class="btn btn-warning" href="">MODIFICA</a>
        <a class="btn btn-danger mx-3" href="">ELIMINA</a>
    </div>
@endsection
