@extends('layouts.main')
<head>
    <title>Page Not Found</title>
    <link rel="stylesheet" href="{{url('admin/css/style.css')}}">
</head>

<style>
    #footer{
        margin-left: 0;
    }
</style>
@section('main-section')

<div class="container-fluid">
<section class="section error-404 d-flex flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <h2>The page you are looking for doesn't exist.</h2>
        <a class="btn" href="{{route('homePage')}}">Back to home</a>
        <img src="{{url('admin/img/not-found.svg')}}" class="img-fluid" alt="Page Not Found">
        </div>
      </section>
      </div>
@endsection