@extends('layout')
@section('title', 'Events')
@section('content')
    <x-search title="Events" />
    @include('events-table')
@endsection
