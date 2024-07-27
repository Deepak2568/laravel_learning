@extends('layouts.app')
@section('title','Conditional Page')

@section('content')
    @if($name)
        <h3 class="text-center text-success">{{$name}}</h3>
    @else
        <h3 class="text-center text-danger">No data found</h3>
    @endif

    @if($id == 1)
        <h3 class="text-center text-warning">The id of the value is {{$id}}</h3>
    @else
        <h3 class="text-center text-warning">The id of the value is 0</h3>
    @endif

    {{-- false statement --}}
    @unless ($data)
        <h3 class="text-center text-primary">No data</h3>
    @endunless

    {{-- loop --}}
    <h3 class="text-center text-success">Family</h3>
    @foreach ($authors as $author)
        <p class="text-center text-info">{{$author}}</p>
    @endforeach

    {{-- loop --}}
    <h3 class="text-center text-success">Family</h3>
    @forelse ($family as $family)
        <p class="text-center text-info">{{$family}}</p>
    @empty
        <p class="text-center text-info">No Name</p>
    @endforelse

@endsection
