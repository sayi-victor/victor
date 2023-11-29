@extends('layouts.app')
@section('title', 'Server Error!')
@section('code', '500')
@section('content')
    <div class="py-24">
        <div class="border rounded-md p-3 border-gray-600 w-96">
            <h1 class="text-8xl font-bold text-gray-200">500</h1>
            <p class="text-2xl text-gray-200 mb-4">Oops! Server Error</p>
            <p class="text-gray-200 mb-8">Your connection is okay but our servers are down.</p>
          </div>
        </div>
@endsection