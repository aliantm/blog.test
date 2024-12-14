@extends('layouts.app')
@section('title')
    Laravel 11
@endsection
@push('css')
    <style>
        body {
            background-color: rgb(246, 248, 250);
        }
    </style>
@endpush
@push('css')
    <style>
        body {
            color: rgb(247, 20, 4);
        }
    </style>
@endpush
@section('content')
<div class = "max-w-4xl mx-auto px-4">
    {{--<h1>Welcome to front page</h1>--}}
    <x-alert2 type="info" class="mb-4">
        <x-slot name="title">
            Alert title
        </x-slot>
        Alert information
    </x-alert2>
    <h1>Hello World World</h1>
</div>
@endsection