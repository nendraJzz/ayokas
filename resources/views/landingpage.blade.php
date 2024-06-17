<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Ayokas — Home</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="overflow-x-hidden">
    <header class="sticky top-0 bg-white shadow">
        <div class="container flex flex-col sm:flex-row justify-between items-center mx-auto py-4 px-8">
            <div class="flex items-center text-2xl">
                <div class="w-12 mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path fill="#BEE3F8" d="M44,7L4,23l40,16l-7-16L44,7z M36,23H17l18-7l1,6V23z"></path>
                        <path fill="#3182CE"
                            d="M40.212,10.669l-5.044,11.529L34.817,23l0.351,0.802l5.044,11.529L9.385,23L40.212,10.669 M44,7L4,23 l40,16l-7-16L44,7L44,7z">
                        </path>
                        <path fill="#3182CE"
                            d="M36,22l-1-6l-18,7l17,7l-2-5l-8-2h12V22z M27.661,21l5.771-2.244L33.806,21H27.661z">
                        </path>
                    </svg>
                </div>Ayokas
            </div>
            <div class="flex mt-4 sm:mt-0">
                <a class="px-4" href="#">Home</a>
                <a class="px-4" href="#features">Features</a>
                <a class="px-4" href="#services">Services</a>
            </div>
            <div class="hidden md:block">
                <a href="/register" type="button"
                    class=" py-3 px-8 text-sm bg-teal-500 hover:bg-teal-600 rounded text-white ">Start Now
                </a>
            </div>
        </div>
    </header>

    <main class="text-gray-900">
        <section class="pt-20 md:pt-40">
            <div class="container mx-auto px-8 lg:flex">
                <div class="text-center lg:text-left lg:w-1/2">
                    <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-none">Solusi Terbaik untuk Kebutuhan Siswa</h1>
                    <p class="text-xl lg:text-2xl mt-6 font-light">Pengelolaan Data Kas Siswa
                        "Solusi Terbaik untuk Manajemen Keuangan Kelas"
                    </p>
                    <p class="mt-8 md:mt-12">
                        <button type="button"
                            class=" py-4 px-12 bg-teal-500 hover:bg-teal-600 rounded text-white">Get Started</button>
                    </p>
                </div>

                <div class="lg:w-1/2 pt-6 lg:pt-0">
                    <x-svg-interface />
                </div>
            </div>
        </section>


        <section id="features" class="py-20 lg:pb-40 lg:pt-48">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl lg:text-5xl font-semibold">Main Features</h2>
                <div class="flex flex-col sm:flex-row sm:-mx-3 mt-12">
                    <div class="flex-1 px-3">
                        <div class="p-12 rounded-lg border border-solid border-gray-200 mb-8"
                            style="box-shadow:0 10px 28px rgba(0,0,0,.08)">
                            <p class="font-semibold text-xl">Lorem

                            </p>
                            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Dicta nemo veritatis cum nihil ab ducimus?
                            </p>
                        </div>
                    </div>
                    <div class="flex-1 px-3">
                        <div class="p-12 rounded-lg border border-solid border-gray-200 mb-8"
                            style="box-shadow:0 10px 28px rgba(0,0,0,.08)">
                            <p class="font-semibold text-xl">Ipsum
                            </p>
                            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Facere nulla laborum qui dignissimos, sit sequi?
                            </p>
                        </div>
                    </div>
                    <div class="flex-1 px-3">
                        <div class="p-12 rounded-lg border border-solid border-gray-200 mb-8"
                            style="box-shadow:0 10px 28px rgba(0,0,0,.08)">
                            <p class="font-semibold text-xl">Dolor

                            </p>
                            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                 Provident atque adipisci error voluptas veritatis fugiat?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="services" class="py-20">
            <div class="container mx-auto px-16 items-center flex flex-col lg:flex-row">
                <div class="lg:w-1/2">
                    <div class="lg:pr-32 xl:pr-48">
                        <h3 class="text-3xl font-semibold leading-tight">Lorem Ipsum</h3>
                        <p class="mt-8 text-xl font-light leading-relaxed">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Debitis recusandae eaque velit quis ducimus aliquid.
                        </p>
                    </div>
                </div>
                <div class="mt-10 lg:mt-0 w-full lg:w-1/2 undefined">                 
                    <x-svg-service />
                </div>
            </div>
        </section>



        <section class="py-20">
            <div class="container mx-auto px-16 items-center flex flex-col lg:flex-row">
                <div class="lg:w-1/2">
                    <div class="lg:pl-32 xl:pl-48">
                        <h3 class="text-3xl font-semibold leading-tight">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="mt-8 text-xl font-light leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Deleniti eius sed laboriosam deserunt eos repellendus.
                        </p>
                    </div>
                </div>
                <div class="mt-10 lg:mt-0 w-full lg:w-1/2 order-last lg:order-first">   
                    <x-svg-services />
                </div>
            </div>
        </section>

    <x-footer />

</div>
</body>
</html>