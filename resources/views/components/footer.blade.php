<footer class="flex flex-row p-4 justify-center items-center">
    <ul class="grid grid-cols-2 w-full md:flex md:flex-row md:justify-center text-gray-300 gap-x-5"> 
        <li class="text-center border-r border-r-gray-600  px-3">
            <a class="hover:underline" href="{{env('REPO_URL')}}"> <i class="fa-regular mr-1 fa-star"></i> Star </a>
        </li>
        <li class="text-center md:border-r md:border-r-gray-600 px-3">
            <a class="hover:underline" href="{{env('REPO_URL')}}"> <i class="fa-solid mr-1 fa-code-branch"></i>Fork </a>
        </li>
        <li class="text-center border-r border-r-gray-600 mt-2 md:mt-0 px-3 text-sm">
            &copy; {{date('Y') . ' ' .env('APP_URL_SHORT')}}  
        </li>
        <li class="text-center mt-2 md:mt-0 text-sm">
            Some Rights Reserved
        </li>
    </ul>
</footer>