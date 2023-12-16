@extends('layouts.base')

@push('styles')
<link href="{{asset('css/login.css')}}" rel="stylesheet"/>
@endpush

@section('title')
    Login Form
@endsection

@extends('components.navbar')

@section('content')
    <form action="{{url('/login')}}" method="post">
        @csrf
        <input type="email" name="email" id="email"/>
        <br/>
        <input type="password" name="password" id="password">
        <br/>
        <button type="submit">Login</button>
    </form>

    <h3>Don't have any account yet? <a href="{{url('/register')}}">register here</a></h3>
@endsection