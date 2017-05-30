@extends('adminlte::page')

@section('title', 'SI Maju Jaya')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="callout callout-success">
      <h4><i class="fa fa-check"></i> Selamat datang {{ Auth::user()->name }}!</h4>
    </div>
@stop