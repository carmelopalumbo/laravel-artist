@extends('museums.layout.main')

@section('content')

<div class="container bg-dark py-4">
    <h1 class="mb-3">Museums</h1>
    <a class="btn btn-warning" href="{{route('museums.create')}}">Add a museum</a>
</div>

<div class="container bg-dark">

    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Nation</th>
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
                    <a class="btn btn-primary" href="{{route('museums.show', $museum->slug)}}" title="show"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-warning " href="{{route('museums.edit', $museum)}}" title="edit"><i class="fa-solid fa-pencil"></i></a>
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
