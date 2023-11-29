<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/logo.jpeg" type="image/jpeg" sizes="20x20">
        <title>{{env('APP_NAME')}} | @yield('title')</title>
        @vite(['resources/css/app.css', 'resources/css/chat.css', 'resources/js/app.js'])
        @livewireStyles
    </head>