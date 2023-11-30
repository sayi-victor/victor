@extends('layouts.app')
@section('title', 'Contact Me')
@section('contact-me', 'border-2 border-teal-500 bg-teal-800 text-gray-100 shadow-md')
@section('content')
 <div class="border border-gray-600 max-w-sm md:max-w-lg flex flex-row justify-center items-center mb-2 md:mb-0 rounded-md">
    <form action="{{route('message.send')}}" method="POST" class="shadow-md mb-2 max-w-[384px] md:w-96 p-2 md:p-10 rounded-md">
        @csrf
        <h1 class="text-2xl font-semibold mb-2"> Contact Form</h1>
        <div class="flex flex-col mb-2">
            <label for="name"> Your Name <span class="text-red-500">*</span></label>
            <input type="text" class="p-1 w-full rounded bg-gray-100 text-black" name="name" id="name" required />
            @error('name')
                <span class="text-red-300"> {{$message}} </span>
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="name"> Your Email Address <span class="text-red-500">*</span></label>
            <input type="email" class="p-1 w-full rounded bg-gray-100 text-black" name="email" id="name" required />
            @error('email')
                <span class="text-red-300"> {{$message}} </span>
            @enderror
        </div>
        <div class="flex flex-col my-2">
            <label for="message"> Message <span class="text-red-500">*</span></label>
            <textarea class="p-1 w-full text-black rounded bg-gray-100" name="message" id="message" cols="30" rows="3" required></textarea>
        </div>
        <div>
            <button class="bg-teal-500 p-1 w-full flex flex-row justify-center items-center gap-x-1 text-gray-800 hover:opacity-75 font-semibold text-lg rounded" type="submit"> Send <i class="fa-solid fa-paper-plane"></i> </button>
        </div>
     </form>
 </div>
@endsection