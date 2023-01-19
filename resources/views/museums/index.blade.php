@extends('museums.layout.main')

@section('content')

<div class="container bg-dark py-4">
    <h1>Museums</h1>
    <div class="my-3">
        <a class="btn btn-primary" href="{{route('museums.create')}}">Add a new museum</a>
    </div>
</div>

<div class="container bg-dark">

    <table class="table">
        <thead>
            <tr>
                <th scope="col"><a href="{{route('comics.orderby', ['id', $direction])}}">ID</a></th>
                <th scope="col"><a href="{{route('comics.orderby', ['title', $direction])}}">Name</a></th>
                <th scope="col"><a href="{{route('comics.orderby', ['type', $direction])}}">Nation</a></th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($museums as $museum)
            <tr>
                <td>{{$museum->id}}</td>
                <td>{{$museum->name}}</td>
                <td>{{$museum->nation}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('museum.show', $museum->slug)}}" title="show"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-warning " href="{{route('museum.edit', $museum)}}" title="edit"><i class="fa-solid fa-pencil"></i></a>
                    {{-- @include('partials.form-delete') --}}
                </td>
            </tr>
            @empty
                <h3>No museums found.</h3>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{$museums->links()}}
    </div>

</div>

@endsection
