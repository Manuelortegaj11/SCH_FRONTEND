<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>HSC - @yield('titulo')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/69e7cbc764.js" crossorigin="anonymous"></script>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-gray-200 shadow">
            <div class="container mx-auto flex justify-between">
                <h1 class="text-1xl font-gray">
                <i class="fa-solid fa-hospital"></i>
                E.S.E. Hospital San Cristobal
                </h1>
                <nav class="flex gap-2 items-center">
                    <a class=" text-gray-600 text-sm" href="{{ route('login')  }}"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                    <a class=" text-gray-600 text-sm" href="{{ route('register')  }}"><i class="fa-solid fa-plus"></i> Crear cuenta</a>
                </nav>
            </div>

        </header>



        <main class="container mx-auto mt-10">
            <h2 class="font  text-gray-600 text-center text-2xl mb-10">@yield('titulo')</h2>
            @yield('contenido')
        </main>
        
        

        <footer class="mt-10 text-center p-1 text-gray-500 ">
            Copyright &copy; San Cristobal {{ now()->year  }}   <!@php echo date('Y')@endphp>
        </footer>
    </body>
</html>
