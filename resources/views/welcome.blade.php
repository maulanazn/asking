@extends('layouts.base')

@push('styles')
<link href="{{asset('css/app.css')}}" rel="stylesheet"/>
@endpush

@section('title')
    Quizz
@endsection

@extends('components.navbar')

@section('content')
    @if (Session::has("success"))
        <h3>{{Session::get("success")}}</h3>
    @endif

    <h1 class="title">Simple Quizz Apps</h1>

@endsection
