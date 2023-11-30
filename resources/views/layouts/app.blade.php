<x-head />
<body class="bg-gray-800 text-white min-h-screen flex flex-col overflow-x-hidden">
    <x-header />
    <x-aside />
    <main class="mt-24 md:mt-24 ml-12 md:ml-28 z-20 flex-1 flex flex-col">
        @yield('content')
    </main>
    <x-footer />
</body>