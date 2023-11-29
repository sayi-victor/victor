@extends('layouts.app')
@section('title', 'Contact Me')
@section('contact-me', 'border-2 border-teal-500 bg-teal-800 text-gray-100 shadow-md')
@section('content')
 <form action="{{route('message.send')}}" method="POST" class="shadow-md w-96 self-star bg-gray-900 p-10  rounded-md">
    @csrf
    <div class="flex flex-col mb-2">
        <label for="name"> Your Name <span class="text-red-500">*</span></label>
        <input type="text" class="p-2 rounded bg-gray-100 text-black" name="name" id="name" required />
        @error('name')
            <span class="text-red-300"> {{$message}} </span>
        @enderror
    </div>
    <div class="flex flex-col">
        <label for="name"> Email Address <span class="text-red-500">*</span></label>
        <input type="email" class="p-2 rounded bg-gray-100 text-black" name="email" id="name" required />
        @error('email')
            <span class="text-red-300"> {{$message}} </span>
        @enderror
    </div>
    <div class="flex flex-col my-2">
        <label for="message"> Message <span class="text-red-500">*</span></label>
        <textarea class="text-black rounded p-2 bg-gray-100" name="message" id="message" cols="30" rows="10" required></textarea>
    </div>
    <div>
        <button class="bg-teal-500 flex flex-row justify-center items-center gap-x-1 text-gray-800 hover:opacity-75 font-semibold text-lg py-2 w-full rounded" type="submit"> Send <i class="fa-solid fa-paper-plane"></i> </button>
    </div>
 </form>
@endsection