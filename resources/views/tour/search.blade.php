@extends('layouts.front')

@section('title', 'Search: "' . $query . '" — Zubilant Bali Tours')

@section('content')
    <x-search-results :query="$query" :packages="$packages" :categories="$categories" />
@endsection