@extends('layouts.master')

@section('title')
    Category
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="{{ asset('assets/clients/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/clients/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/font-awesome.min.css') }}">
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('clients.modules.module-14')
            </div>
            <div class="col-md-9">

                @include('clients.modules.module-13')
            </div>
            {{-- @include('clients.modules.module-15') --}}
        </div>
    </div>
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/clients/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/module-14.js') }}"></script>
    <script>
        
        function ShowGallery() {

            if ($('#shop-sort option:selected').val() == 2) {

                $.ajax({
                    url: '/showfeature',
                    type: 'GET',
                }).done(function(res) {
                    RenderGallery(res);
                    alertify.success('Update successfully');

                });

            } else if ($('#shop-sort option:selected').val() == 1) {
                $.ajax({
                    url: '/showall',
                    type: 'GET',
                }).done(function(res) {
                    RenderGallery(res);
                    alertify.success('Update successfully');
                });


            } else if ($('#shop-sort option:selected').val() == 4) {
                $.ajax({
                    url: '/showhightolow',
                    type: 'GET',
                }).done(function(res) {
                    RenderGallery(res);
                    alertify.success('Update successfully');

                });


            } else if ($('#shop-sort option:selected').val() == 3) {
                $.ajax({
                    url: '/showlowtohigh',
                    type: 'GET',
                }).done(function(res) {
                    RenderGallery(res);
                    alertify.success('Update successfully');

                });

            } else if ($('#shop-sort option:selected').val() == 5) {
                $.ajax({
                    url: '/showa-z',
                    type: 'GET',
                }).done(function(res) {
                    RenderGallery(res);
                    alertify.success('Update successfully');

                });

            } else if ($('#shop-sort option:selected').val() == 6) {
                $.ajax({
                    url: '/showz-a',
                    type: 'GET',
                }).done(function(res) {
                    RenderGallery(res);
                    alertify.success('Update successfully');

                });

            } else if ($('#shop-sort option:selected').val() == 7) {
                $.ajax({
                    url: '/show-sale',
                    type: 'GET',
                }).done(function(res) {
                    RenderGallery(res);
                    alertify.success('Update successfully');

                });
            }
        }
        function RenderGallery(res) {
            $(".ab").empty();
            $(".ab").html(res);

        }
        $("#shop-sort").change(function() {
            ShowGallery();
        });
    </script>
@endsection
@endsection
