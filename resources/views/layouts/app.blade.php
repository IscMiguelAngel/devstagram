<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devstagram - @yield("titulo")</title>
    @vite("resources/css/app.css")
</head>

<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow fixed top-0 block w-full">
        <div class="container mx-auto flex justify-between">
            <a href="/" class="text-3xl font-black no-underline">Devstagram</a>
            <nav class="flex gap-2 items-center">
                <a href="/iniciar-sesion" class="font-bold uppercase text-gray-600">Iniciar sesión</a>
                <a href="{{ route("registrar") }}" class="font-bold uppercase text-gray-600">Crear cuenta</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">@yield("titulo")</h2>
        @yield("contenido")
    </main>
    <footer class="mx-auto text-center p-5 text-gray-500 md:fixed bottom-0 left-0 right-0 sm:relative uppercase leading-4 mt-10 bg-gray-100">
        Devstagram {{ date("Y") }} <br>
        Hecho con &hearts; por <a href="https://www.linkedin.com/in/isc-miguel-angel/">Isc Miguel Angel</a>
    </footer>
</body>

</html>