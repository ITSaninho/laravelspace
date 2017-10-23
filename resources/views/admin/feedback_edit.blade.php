@extends('layouts.admin')

@section('header')
    @include('block.admin_header')
@endsection

@section('content')
    @include('block.admin_feedback_edit')
@endsection

@section('footer_menu')
    @include('block.footer_menu')
@endsection

@section('footer')
    @include('block.footer')
@endsection