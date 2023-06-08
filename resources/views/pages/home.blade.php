@extends('layouts.default')
@section('content')
    <!--1 hero start-->
    @include('pages/home/hero')
    <!--1 hero end-->

    <!--2 Experience start-->
    @include('pages/home/experience')
    <!--2 Experience end-->

    <!--3 Row_of_Tech_Icons start-->
    @include('pages/home/row_of_Tech_Icons')
    <!--3 Row_of_Tech_Icons end-->

    <!--4 Featured_Work start-->
    @include('pages/home/featured_Work')
    <!--4 Featured_Work end-->

    <!--5 Featured_Blog_Articles start-->
    {{-- @include('pages/home/Featured_Blog_Articles') --}}
    <!--5 Featured_Blog_Articles end-->
@endsection
