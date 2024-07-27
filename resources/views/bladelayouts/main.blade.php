@extends('layouts.app')

@section('title', ' - Welcome')

@section('content')
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{url('student')}}">SMS</a>
      </div>
      <ul class="nav navbar-nav text-center">
        <li class="active"><a href="{{url('bhome')}}">Home</a></li>
        <li class="contact"><a href="{{url("bcontact")}}">Contact</a></li>
      </ul>
    </div>
  </nav>
  @include('bladelayouts.footer')
@endsection

