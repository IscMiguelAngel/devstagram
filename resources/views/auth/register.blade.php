@extends("layouts.app")

@section("titulo")
Registrate en Devstagram
@endsection

@section("contenido")
    <div class="md:flex md:flex-row md:gap-2">
        <div class="sm:basis-1/3 md:basis-1/2 lg:basis-2/3 sm:mb-4 relative rounded-lg overflow-hidden">
            <img src="{{ asset("img/registrar.jpg") }}" alt="Imagen registro de usuarios" class="sm:static md:absolute inset-0 m-auto rounded-lg shadow-lg">
        </div>
        <div class="sm:basis-1/3 md:basis-1/2 lg:basis-1/3 bg-white shadow hover:shadow-lg ease-in-out duration-300 rounded-lg p-5">
            <form action="{{ route("registrar") }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="block uppercase text-gray-700 font-bold">Nombre</label>
                    <input type="text" id="name" name="name" class="block p-3 border focus:border-sky-700 outline-0 w-full rounded bg-white text-gray-800 @error("name")
                    border-red-700 focus:border-sky-700
                    @enderror" placeholder="Escribe tu nombre completo" autocomplete="off" value="{{ old("name") }}">
                    @error("name")
                        <small class="text-red-700 mt-0 mb-2 block text-right">{{ str_replace("name", "nombre", $message) }}</small>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="block uppercase text-gray-700 font-bold">Usuario</label>
                    <input type="text" id="username" name="username" class="block p-3 border focus:border-sky-700 outline-0 w-full rounded bg-white text-gray-800 @error("username")
                    border-red-700 focus:border-sky-700
                    @enderror" placeholder="Ingresa tu nombre de usuario" autocomplete="off">
                    @error("username")
                        <small class="text-red-700 mt-0 mb-2 block text-right">{{ str_replace("name", "nombre", $message) }}</small>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="block uppercase text-gray-700 font-bold">Correo electrónico</label>
                    <input type="email" id="email" name="email" class="block p-3 border focus:border-sky-700 outline-0 w-full rounded bg-white text-gray-800 @error("email")
                    border-red-700 focus:border-sky-700
                    @enderror" placeholder="Ingresa tu correo electrónico" autocomplete="off">
                    @error("email")
                        <small class="text-red-700 mt-0 mb-2 block text-right">{{ str_replace("name", "nombre", $message) }}</small>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="block uppercase text-gray-700 font-bold">Contraseña</label>
                    <input type="password" id="password" name="password" class="block p-3 border focus:border-sky-700 outline-0 w-full rounded bg-white text-gray-800 @error("password")
                    border-red-700 focus:border-sky-700
                    @enderror" placeholder="Ingresa tu contraseña" autocomplete="off">
                    @error("password")
                        <small class="text-red-700 mt-0 mb-2 block text-right">{{ str_replace("name", "nombre", $message) }}</small>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="block uppercase text-gray-700 font-bold">Confirma tu contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="block p-3 border focus:border-sky-700 outline-0 w-full rounded bg-white text-gray-800 @error("password_confirm")
                    border-red-700 focus:border-sky-700
                    @enderror" placeholder="Ingresa tu contraseña" autocomplete="off">
                    @error("password_confirm")
                        <small class="text-red-700 mt-0 mb-2 block text-right">{{ str_replace("name", "nombre", $message) }}</small>
                    @enderror
                </div>
                <div class="mb-5">
                    <button type="submit" class="text-white bg-sky-600 hover:bg-sky-700 transition-colors p-4 rounded cursor-pointer uppercase font-bold w-full">Crear cuenta</button>
                </div>
            </form>
        </div>
    </div>
@endsection