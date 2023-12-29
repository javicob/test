<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Figtree">
        <script src="https://kit.fontawesome.com/8c2f8d9afa.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-mono bg-dok-gray m-0 font-light" style="font-family: Figtree">
        <header class="px-4 py-2 flex justify-around h-24 lg:fixed lg:-mt-24 w-full bg-dok-gray">
            <div class="hidden lg:block w-4/12"></div>
            <div class="w-full flex lg:w-4/12 items-center justify-center">
                <img src="dok2.jpg" alt="D O K" class="h-16 lg:h-24">
            </div>
            <div class="hidden lg:flex w-4/12 justify-around items-center gap-4">
                <p class="border border-dok-gold text-dok-gold rounded px-4 py-1 font-light tracking-widest transition-all duration-200 hover:bg-dok-gold hover:text-dok-gray cursor-pointer"><i class="fa-solid fa-code mr-2"></i>Creaciones</p>
                <p class="border border-dok-gold text-dok-gold rounded px-4 py-1 font-light tracking-widest transition-all duration-200 hover:bg-dok-gold hover:text-dok-gray cursor-pointer"><i class="fa-solid fa-info mr-2"></i>Sobre nosotros</p>
                <p class="border border-dok-gold text-dok-gold rounded px-4 py-1 font-light tracking-widest transition-all duration-200 hover:bg-dok-gold hover:text-dok-gray cursor-pointer"><i class="fa-solid fa-phone mr-2"></i>Contacto</p>
            </div>
        </header>
        <div class="w-full border border-blue-800 flex items-center justify-center lg:h-[45em] lg:mt-24">
            <h1 class="font-bold text-7xl text-white tracking-widest">DA VIDA A TUS IDEAS</h1>
            <div class="hidden lg:absolute w-full max-w-xs shadow-lg">
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                      Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline disabled" id="username" type="text" placeholder="Username">
                  </div>
                  <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                      Password
                    </label>
                    <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline disabled" id="password" type="password" placeholder="******************">
                    <p class="text-red-500 text-xs italic">Please choose a password.</p>
                  </div>
                  <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                      Sign In
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                      Forgot Password?
                    </a>
                  </div>
                </form>
              </div>
        </div>
    </body>
</html>
