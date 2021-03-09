@extends('layouts.app')

@section('name', 'FPurnahar')

@section('title', 'Dashboard')

@section('style')

@endsection

@section('container')

<h1>This Page Dashboard {{ Auth::user()->name }} | {{ Auth::user()->email }} | <img src="{{asset ('assets')}}/img/profile/{{ Auth::user()->img_profile }}" alt=""></h1>


@endsection

@section('script')
    
@endsection