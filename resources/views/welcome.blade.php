@extends('layouts.app') 

@section('content')

    <main id="main">
        @include('partials/nav')
        @include('partials/header')
        @include('partials/contact')
        @include('partials/articles')
        @include('partials/likes')
        @include('partials/cart')
        @include('partials/footer')
    </main>
    <!--End Main!-->

@endsection