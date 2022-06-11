@extends('layouts.master')

@section('title')
    Giỏ hàng
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="{{ asset('assets/clients/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/clients/css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection

@section('body')
    @include('clients.modules.module-23')
    @include('clients.modules.module-25')
@endsection
@section('js')
    @foreach ($products as $item)
        <script>
            $(document).ready(function() {


                var $buttonPlus{{$item[0]['id']}} = $('.increase-btn{{$item[0]['id']}}');
                var $buttonMin{{$item[0]['id']}} = $('.decrease-btn{{$item[0]['id']}}');
                var $quantity{{$item[0]['id']}} = $('#QtyInput-sinh{{$item[0]['id']}}');

                /*For plus and minus buttons*/
                $buttonPlus{{$item[0]['id']}}.click(function() {
                    $quantity{{$item[0]['id']}}.val(parseInt($quantity{{$item[0]['id']}}.val()) + 1).trigger('input');
                });

                $buttonMin{{$item[0]['id']}}.click(function() {
                    $quantity{{$item[0]['id']}}.val(Math.max(parseInt($quantity{{$item[0]['id']}}.val()) - 1, 0)).trigger('input');
                });
            })
        </script>
    @endforeach
@endsection
