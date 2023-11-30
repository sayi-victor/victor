<header class="py-5 px-3 z-50 md:px-10 bg-gray-800/100 flex flex-row justify-between lg:gap-x-40 lg:justify-normal fixed w-screen border-b border-b-teal-500">
    <a href="{{route('home')}}">
        <img class="rounded-md" src="{{asset('logo.jpeg')}}" width="40px" height="40px" alt="logo" />
    </a>
    <ul id="dd-menu" class="hidden absolute justify-center items-center gap-y-5 bg-gray-800 bg-gray-800/90 w-screen md:w-max md:h-max h-screen md:static top-28 md:flex flex-col md:flex-row text-xl font-serif font-semibold gap-x-4">
        <li class="w-1/2 md:w-max">
            <a class="@yield('home') block text-center py-1 px-2 rounded-md hover:bg-teal-600 md:hover:bg-inherit bg-teal-700  md:bg-inherit md:hover:border md:hover:border-teal-700" href="{{route('home')}}"> Home </a>
        </li>
        <li class="w-1/2 md:w-max">
            <a class="@yield('skills') block text-center py-1 px-2 rounded-md hover:bg-teal-600 md:hover:bg-inherit bg-teal-700  md:bg-inherit md:hover:border md:hover:border-teal-700" href="{{route('my.skills')}}"> Skills </a>
        </li>
        <li class="w-1/2 md:w-max">
            <a class="@yield('about') block text-center py-1 px-2 rounded-md hover:bg-teal-600 md:hover:bg-inherit bg-teal-700  md:bg-inherit md:hover:border md:hover:border-teal-700" href="{{route('about.me')}}"> About </a>
        </li>
        <li class="w-1/2 md:w-max">
            <a class="@yield('contact-me') block text-center py-1 px-2 rounded-md hover:bg-teal-600 md:hover:bg-inherit bg-teal-700  md:bg-inherit md:hover:border md:hover:border-teal-700" href="{{route('contact.me')}}"> Contact Me </a>
        </li>
        <li class="hidden w-1/2 md:w-max">
            <a class="@yield('blog')  block text-center py-1 px-2 rounded-md hover:bg-teal-600 md:hover:bg-inherit bg-teal-700  md:bg-inherit md:hover:border md:hover:border-teal-700" href="resume"> Blog </a>
        </li>
    </ul>
    <button id="toggle-dd-menu" class="fancy w-10 h-10 p-2 md:hidden self-end fancy flex flex-row justify-center items-center">
        <i id="toggler-icon" class="fa-solid text-2xl  fa-bars"></i>
    </button>
</header>