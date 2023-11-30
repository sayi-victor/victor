@extends('layouts.app')
@section('title', 'My Skills')
@section('skills', 'border-2 border-teal-500 bg-teal-800 text-gray-100 shadow-md')
@section('content')
    <ul class="max-w-sm md:max-w-lg grid border border-gray-700 grid-cols-2 gap-4 md:gap-x-4 rounded p-10 font-semibold">
        <li class="bordered h-10  border flex justify-center items-center border-teal-500 rounded-md text-xl p-2">Javascript</li>
        <li class="bordered h-10  border flex justify-center items-center border-teal-500 rounded-md text-xl p-2">PHP</li>
        <li class="bordered h-10  border flex justify-center items-center border-teal-500 rounded-md text-xl p-2">MySQL</li>
        <li class="bordered h-10  border flex justify-center items-center border-teal-500 rounded-md text-xl p-2">Tailwind</li>
        <li class="bordered h-10  border flex justify-center items-center border-teal-500 rounded-md text-xl p-2">Bootstrap</li>
        <li class="bordered h-10  border flex justify-center items-center border-teal-500 rounded-md text-xl p-2">Laravel</li>
        <li class="bordered h-10  border flex justify-center items-center border-teal-500 rounded-md text-xl p-2">Vue.js</li>
        <li class="bordered h-10  border flex justify-center items-center border-teal-500 rounded-md text-xl p-2"> CodeIgniter</li>
    </ul>
@endsection