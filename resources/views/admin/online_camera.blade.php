@extends('layouts.admin')

@section('header')
    @include('block.admin_header')
@endsection

@section('content')
    @include('block.admin_online_camera')
@endsection

@section('footer_menu')
    @include('block.footer_menu')
@endsection

@section('footer')
    @include('block.footer')
@endsection