@extends('layouts.site')

@section('header')
    @include('block.header')
@endsection

@section('content')
    @include('block.users')
@endsection

@section('footer_menu')
    @include('block.footer_menu')
@endsection

@section('footer')
    @include('block.footer')
@endsection