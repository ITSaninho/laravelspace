@extends('layouts.site')

@section('header')
    @include('block.header')
@endsection

@section('content')
    @include('block.message_list')
@endsection

@section('footer_menu')
    @include('block.footer_menu')
@endsection

@section('footer')
    @include('block.footer')
@endsection