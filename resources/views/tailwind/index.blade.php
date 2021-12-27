<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body x-data="{sidebar:false}">
<nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-1 flex items-center">
            <div class="w-40">
                <a href="index.blade.php"><img class="w-full" src="{{asset('frontend/images/logo.svg')}}" alt="logo"></a>
            </div>

        <div class="ml-12 flex space-x-5 hidden lg:flex">

            <a href="#" class="flex items-center font-semibold text-sm hover:text-blue-700 transition">
            <span class="mr-2">
                <i class="fas fa-home"></i>
            </span>
                Home
            </a>
            <a href="#" class="flex items-center font-semibold text-sm hover:text-blue-700 transition">
            <span class="mr-2">
                <i class="far fa-file-alt"></i>
            </span>
                About
            </a>
            <a href="#" class="flex items-center font-semibold text-sm hover:text-blue-700 transition">
            <span class="mr-2">
                <i class="fas fa-phone"></i>
            </span>
                Contact
            </a>

        </div>

        <div class="relative ml-auto hidden lg:flex">
            <span class="absolute left-3 top-2 text-sm text-gray-500"><i class="fas fa-search"></i></span>
            <input type="text"
                   class="block h-9 w-full border-none rounded-3xl py-3 bg-gray-100 text-sm text-gray-700 shadow-md">
        </div>
        <div class="lg:ml-3 ml-auto">
            <a href="#" class="flex items-center text-sm font-semibold hover:text-blue-500 transition">
                <span class="mr-2"><i class="far fa-user"></i></span>
                Register
            </a>
        </div>
        <div @click="sidebar=true" class="ml-4 block lg:hidden text-xl text-gray-700 cursor-pointer hover:text-blue-500 transition"><i class="fas fa-bars"></i></div>
    </div>

</nav>
<main class="py-12 bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 flex flex-wrap lg:flex-nowrap">
        <div class=":w-3/12 hidden xl:block">
            <div class="bg-white p-4 shadow-md rounded-md">
                <h3 class="text-lg font-semibold text-gray-700 font-sans mb-3">Categories</h3>
                <div class="text-gray-700 space-y-3 uppercase font-semibold">
                    <a href="#" class="flex items-center  leading-4  text-sm hover:text-blue-500 transition">
                        <span class="mr-2"><i class="far fa-folder-open"></i></span>Beauty<span class="mr-2 ml-auto"> (12)</span>
                    </a>
                    <a href="#" class="flex items-center  leading-4  text-sm hover:text-blue-500 transition">
                        <span class="mr-2"><i class="far fa-folder-open"></i></span>Beauty<span class="mr-2 ml-auto"> (23)</span>
                    </a>
                    <a href="#" class="flex items-center  leading-4  text-sm hover:text-blue-500 transition">
                        <span class="mr-2"><i class="far fa-folder-open"></i></span>Beauty<span class="mr-2 ml-auto"> (2)</span>
                    </a>
                    <a href="#" class="flex items-center  leading-4  text-sm hover:text-blue-500 transition">
                        <span class="mr-2"><i class="far fa-folder-open"></i></span>Beauty<span class="mr-2 ml-auto"> (45)</span>
                    </a>
                </div>
            </div>
            <div class="bg-white p-4 shadow-md rounded-md mt-7">
                <h3 class="text-lg font-semibold text-gray-700 font-sans mb-3">Random Posts</h3>
                <div class="text-gray-700 space-y-3 uppercase font-semibold">
                    <div>
                        <a href="#" class="flex items-center  leading-4  text-sm hover:text-blue-500 transition">
                            <div class="flex-shrink-0">
                                <img src="{{asset('frontend/images/blog/img-1.jpg')}}" alt="" class="w-20 h-14 rounded-md object-cover">
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-serif leading-4 font-semibold text-xs">Lorem ipsum dolor sit amet, consectetur  el</h6>
                                <div class="flex items-center text-gray-400">
                                    <span class="mr-2 text-xs"><i class="far fa-clock"></i></span>
                                    june, 11, 2021
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="xl:w-6/12 w-full lg:w-8/12  lg:mx-6">
            <div class="bg-white px-3 py-2 flex shadow-md rounded-md flex justify-between items-center">
                <h3 class="text-base uppercase font-semibold text-gray-700 font-sans">Categories</h3>
                <a href="#" class="btn btn-primary">See more</a>
            </div>
            <div class="bg-white shadow-md rounded-md">
                <a class="overflow-hidden block" href="#">
                    <img class="rounded object-cover w-full h-96 transform hover:scale-110 transition duration-500" src="{{asset('frontend/images/blog/img-4.jpg')}}" alt="">
                </a>
                <div class="p-4">
                    <a href="#" class="hover:text-blue-500 transition">
                        <h3 class="font-serif font-semibold text-gray-800">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, neque, sequi!</h3>
                    </a>
                    <p class="font-sans pt-2 text-sm font-semibold text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, neque, sequi!</p>
                    <div class="flex items-center text-gray-500 text-xs mt-2 space-x-5">
                        <span><i class="far fa-user"></i><span class="text-indigo-500 ml-2">Asadfk</span></span>
                        <span class="pr-2"><i class="far fa-clock"></i></span>June,12,2020
                    </div>
                </div>
            </div>
            <div class="grid md:grid-cols-2 grid-cols-1 mt-3 space-x-2">
                <div class="bg-white my-3 pt-0 shadow-md rounded-md">
                    <a class="overflow-hidden block" href="#">
                        <img class="w-full h-48 rounded object-cover  transform hover:scale-110 transition duration-500" src="{{asset('frontend/images/blog/img-4.jpg')}}" alt="">
                    </a>
                    <div class="p-2">
                        <a href="#" class="hover:text-blue-500 transition">
                            <h3 class="font-serif text-sm font-semibold text-gray-800">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum! Lorem ipsum dolor !</h3>
                        </a>
                        <div class="flex items-center text-gray-500 text-xs mt-2 space-x-5">
                            <span><i class="far fa-user"></i><span class="text-indigo-500 ml-2">Asadfk</span></span>
                            <span class="pr-2"><i class="far fa-clock"></i></span>June,12,2020
                        </div>
                    </div>
                </div>
                <div class="bg-white my-3 pt-0 shadow-md rounded-md">
                    <a class="overflow-hidden block" href="#">
                        <img class="w-full h-48 rounded object-cover  transform hover:scale-110 transition duration-500" src="{{asset('frontend/images/blog/img-4.jpg')}}" alt="">
                    </a>
                    <div class="p-2">
                        <a href="#" class="hover:text-blue-500 transition">
                            <h3 class="font-serif text-sm font-semibold text-gray-800">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum! Lorem ipsum dolor !</h3>
                        </a>
                        <div class="flex items-center text-gray-500 text-xs mt-2 space-x-5">
                            <span><i class="far fa-user"></i><span class="text-indigo-500 ml-2">Asadfk</span></span>
                            <span class="pr-2"><i class="far fa-clock"></i></span>June,12,2020
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="xl:w-3/12 w-full lg:w-4/12">
            <div class="bg-white mb-9 p-4 shadow-md rounded-md">
                <h3 class="text-lg font-semibold text-gray-700 font-sans mb-3">Social Link</h3>
                <div class="flex space-x-3">
                    <a href="" class="w-8 h-8 rounded-md flex items-center justify-center border border-gray-500 text-gray-800"><i class="fab fa-facebook"></i></a>
                    <a href="" class="w-8 h-8 rounded-md flex items-center justify-center border border-gray-500 text-gray-800"><i class="fab fa-twitter"></i></a>
                    <a href="" class="w-8 h-8 rounded-md flex items-center justify-center border border-gray-500 text-gray-800"><i class="fab fa-youtube"></i></a>
                    <a href="" class="w-8 h-8 rounded-md flex items-center justify-center border border-gray-500 text-gray-800"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
            <div class="bg-white p-4 shadow-md rounded-md">
                <h3 class="text-lg font-semibold text-gray-700 font-sans mb-3">Random Posts</h3>
                <div class="text-gray-700 space-y-3 uppercase font-semibold">
                    <a href="#" class="flex items-center  leading-4  text-sm hover:text-blue-500 transition">
                        <div class="flex-shrink-0">
                            <img src="{{asset('frontend/images/blog/img-1.jpg')}}" alt="" class="w-20 h-14 rounded-md object-cover">
                        </div>
                        <div class="flex-grow pl-3">
                            <h6 class="font-serif leading-4 font-semibold text-xs">Lorem ipsum dolor sit amet, consectetur  el</h6>
                            <div class="flex items-center text-gray-400">
                                <span class="mr-2 text-xs"><i class="far fa-clock"></i></span>
                                june, 11, 2021
                            </div>
                        </div>
                    </a>
                    <a href="#" class="flex items-center  leading-4  text-sm hover:text-blue-500 transition">
                        <div class="flex-shrink-0">
                            <img src="{{asset('frontend/images/blog/img-1.jpg')}}" alt="" class="w-20 h-14 rounded-md object-cover">
                        </div>
                        <div class="flex-grow pl-3">
                            <h6 class="font-serif leading-4 font-semibold text-xs">Lorem ipsum dolor sit amet, consectetur  el</h6>
                            <div class="flex items-center text-gray-400">
                                <span class="mr-2 text-xs"><i class="far fa-clock"></i></span>
                                june, 11, 2021
                            </div>
                        </div>
                    </a>
                    <a href="#" class="flex items-center  leading-4  text-sm hover:text-blue-500 transition">
                        <div class="flex-shrink-0">
                            <img src="{{asset('frontend/images/blog/img-1.jpg')}}" alt="" class="w-20 h-14 rounded-md object-cover">
                        </div>
                        <div class="flex-grow pl-3">
                            <h6 class="font-serif leading-4 font-semibold text-xs">Lorem ipsum dolor sit amet, consectetur  el</h6>
                            <div class="flex items-center text-gray-400">
                                <span class="mr-2 text-xs"><i class="far fa-clock"></i></span>
                                june, 11, 2021
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="bg-white mb-9 p-4 shadow-md rounded-md mt-7">
                <h3 class="text-lg font-semibold text-gray-700 font-sans mb-3">Social Link</h3>
                <div class="flex space-x-3">
                    <a href="" class="px-2 py-1 hover:bg-blue-500 hover:text-white rounded-md flex items-center justify-center border border-gray-500 text-gray-800">Lorem</a>
                    <a href="" class="px-2 py-1 hover:bg-blue-500 hover:text-white rounded-md flex items-center justify-center border border-gray-500 text-gray-800">Lorem</a>
                    <a href="" class="px-2 py-1 hover:bg-blue-500 hover:text-white rounded-md flex items-center justify-center border border-gray-500 text-gray-800">Lorem</a>
                    <a href="" class="px-2 py-1 hover:bg-blue-500 hover:text-white rounded-md flex items-center justify-center border border-gray-500 text-gray-800">Lorem</a>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="py-4 bg-white border-t">
    <div class="text-center">
        <p>Copyright 2021 all right reserved by <span class="text-indigo-800 font-semibold">Alamin</span></p>
    </div>
</footer>
<div x-show="sidebar" @click.away="sidebar = false" class="fixed w-full h-full bg-black left-0 top-0 z-50 xl:hidden bg-opacity-25">
    <div class="fixed top-0 w-72 h-full flex flex-col bg-white shadow-md z-50 p-4">
        <div @click="sidebar=false" class="ml-auto block lg:hidden text-xl text-gray-700 cursor-pointer hover:text-blue-500 transition"><i class="fas fa-trash"></i></div>
        <div class="relative lg:hidden lg:flex">
            <span class="absolute left-3 top-2 text-sm text-gray-500"><i class="fas fa-search"></i></span>
            <input type="text" class="block h-9 w-full border-none rounded-3xl py-3 bg-gray-100 text-sm text-gray-700 shadow-md">
        </div>
        <h3 class="mt-2 text-lg font-semibold text-gray-700 font-sans mb-3">Menu</h3>
        <div class="flex-col space-y-3 pb-3 lg:hidden ">

            <a href="#" class="flex font-semibold text-sm hover:text-blue-700 transition">
            <span class="mr-2">
                <i class="fas fa-home"></i>
            </span>
                Home
            </a>
            <a href="#" class="flex font-semibold text-sm hover:text-blue-700 transition">
            <span class="mr-2">
                <i class="far fa-file-alt"></i>
            </span>
                About
            </a>
            <a href="#" class="flex font-semibold text-sm hover:text-blue-700 transition">
            <span class="mr-2">
                <i class="fas fa-phone"></i>
            </span>
                Contact
            </a>

        </div>
        <h3 class="text-lg font-semibold text-gray-700 font-sans mb-3">Categories</h3>
        <div class="text-gray-700 space-y-3 uppercase font-semibold">
            <a href="#" class="flex items-center  leading-4  text-sm hover:text-blue-500 transition">
                <span class="mr-2"><i class="far fa-folder-open"></i></span>Beauty<span class="mr-2 ml-auto"> (12)</span>
            </a>
            <a href="#" class="flex items-center  leading-4  text-sm hover:text-blue-500 transition">
                <span class="mr-2"><i class="far fa-folder-open"></i></span>Beauty<span class="mr-2 ml-auto"> (23)</span>
            </a>
            <a href="#" class="flex items-center  leading-4  text-sm hover:text-blue-500 transition">
                <span class="mr-2"><i class="far fa-folder-open"></i></span>Beauty<span class="mr-2 ml-auto"> (2)</span>
            </a>
            <a href="#" class="flex items-center  leading-4  text-sm hover:text-blue-500 transition">
                <span class="mr-2"><i class="far fa-folder-open"></i></span>Beauty<span class="mr-2 ml-auto"> (45)</span>
            </a>
        </div>
    </div>
</div>
</body>
</html>
