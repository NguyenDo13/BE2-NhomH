@extends('layouts.master')

@section('title')
    Trang chủ
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


    <link rel="stylesheet" href="{{ asset('assets/clients/lib/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/lib/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/font-awesome.min.css') }}">
    <link href="{{ asset('assets/clients/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/clients/css/style.css') }}">
@endsection

@section('body')
    @include('clients.modules.module-4')
    @include('clients.modules.module-5')
    @include('clients.modules.module-6')
    @include('clients.components.sale_product')
    @include('clients.modules.module-7')
    @include('clients.modules.module-8')
    @include('clients.modules.module-9')
    @include('clients.modules.module-10')
    @include('clients.modules.module-11')
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/clients/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/clients/lib/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/module-8.js') }}"></script>
    <script src="{{ asset('assets/clients/js/module-5.js') }}"></script>
    <script src="{{ asset('assets/clients/js/module-6.js') }}"></script>
@endsection
@endsection
