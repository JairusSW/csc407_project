@extends('layout')
@section('title', 'Donations')
@section('content')
    <x-search title="Donations" />
    @include('donations-table')
@endsection
