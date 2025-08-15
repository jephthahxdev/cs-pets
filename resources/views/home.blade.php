@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    {{-- Hero Section --}}
    @include('partials.home.hero-section')

    {{-- Nutrition Foundation Section --}}
    @include('partials.home.nutrition-section')

    {{-- Gastrointestinal Health Section --}}
    @include('partials.home.gastrointestinal-section')
@endsection