@extends('layouts.app')
@section('title', 'Home')
@section('home', 'border-2 border-teal-500 bg-teal-800 text-gray-100 shadow-md')
@section('content')
    <div class="py-24">
        <p class="text-xl"> Hello, I am </p>
        <h1 class="font-semibold text-7xl font-serif"> Victor Sayi </h1>
        <h2 class="text-3xl text-teal-500 font-semibold"> Full stack web developer </h2>
        <ul class="flex flex-row gap-x-4 mt-2">
            <li class="border-r border-gray-600 text-xl px-3">Laravel</li>
            <li class="border-r border-gray-600 text-xl px-3">Vue.js</li>
            <li class=" border-gray-600 text-xl px-3"> CodeIgniter</li>
        </ul>
    </div>
@endsection