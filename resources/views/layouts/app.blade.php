<x-head />
<body class="bg-gray-800 text-white min-h-screen flex flex-col">
    <x-header />
    <x-aside />
    <main class="mt-24 ml-28 flex-1 flex flex-col">
        @yield('content')
    </main>
    <x-footer />
</body>