@extends('layout.app')

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

@section('content_body')
    <p>Welcome to this beuatiful admin panel</p>
@stop

@push('css')
    
@endpush

@push('jss')
    <script> console.log("Hi, I'm using the laravel-AdminLTE package!")</script>
@endpush