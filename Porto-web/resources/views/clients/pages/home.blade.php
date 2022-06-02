@extends('layouts.master')

@section('title')
    Trang chủ
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
    

    <link rel="stylesheet" href="{{ asset('assets/clients/css/font-awesome.min.css') }}">
    <link href="{{ asset('assets/clients/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/clients/css/style.css') }}">

@endsection

@section('body')
@include('clients.modules.module-4')
@include('clients.modules.module-5')
@include('clients.modules.module-6')
@include('clients.modules.module-9')
@include('clients.modules.module-10')
@endsection
