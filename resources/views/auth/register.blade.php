@extends('layouts.base')


@push('styles')
<link href="{{asset('css/register.css')}}" rel="stylesheet"/>
@endpush

@extends('components.navbar')

@section('title')
    Register Form
@endsection

@section('content')
    <form action="{{url('/register')}}" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Name....."/>
        <br/>
        <input type="email" name="email" id="email" placeholder="Email....."/>
        <br/>
        <input type="password" name="password" id="password" placeholder="Password....."/>
        <br/>
        <button type="submit">Register</button>
    </form>

    <h3>Have an account? <a href="{{url('/login')}}">login here</a></h3>
@endsection