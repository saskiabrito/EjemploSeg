@extends('layouts.guest')

@section('content')
<div class="p-8 sm:p-10">
    <div class="mb-8 text-center">
        <h2 class="text-2xl font-bold text-slate-800">Iniciar sesión</h2>
        <p class="text-sm text-slate-500 mt-2">¡Hola de nuevo! Ingresa tus credenciales.</p>
    </div>

    <form action="{{ route('login') }}" method="POST" class="space-y-5">
        @csrf
        
        <!-- Correo Electrónico -->
        <div>
            <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Correo electrónico</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus placeholder="tu@correo.com"
                class="w-full bg-slate-50 border border-slate-200 text-slate-800 text-sm rounded-xl focus:ring-indigo-200 focus:border-indigo-400 block p-3.5 transition-all duration-200">
            @error('email') 
                <p class="text-xs text-rose-500 mt-1.5 font-medium">{{ $message }}</p> 
            @enderror
        </div>

        <!-- Contraseña -->
        <div>
            <label for="password" class="block text-sm font-semibold text-slate-700 mb-2">Contraseña</label>
            <input type="password" name="password" id="password" required placeholder="••••••••"
                class="w-full bg-slate-50 border border-slate-200 text-slate-800 text-sm rounded-xl focus:ring-indigo-200 focus:border-indigo-400 block p-3.5 transition-all duration-200">
        </div>

        <!-- Recordarme y Olvidó su contraseña -->
        <div class="flex items-center justify-between mt-2">
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" name="remember" class="w-4 h-4 text-indigo-600 bg-white border-slate-300 rounded focus:ring-indigo-200 focus:ring-2 transition-colors">
                <span class="text-sm font-medium text-slate-600">Recordarme</span>
            </label>
        </div>

        <!-- Botón Entrar -->
        <div class="pt-3">
            <button type="submit" class="w-full flex justify-center py-3.5 px-4 border border-transparent rounded-xl shadow-sm text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                Entrar al sistema
            </button>
        </div>

        <!-- Enlace a Registro -->
        <p class="text-sm text-center text-slate-500 mt-6">
            ¿No tienes cuenta?
            <a href="{{ route('register') }}" class="font-semibold text-indigo-600 hover:text-indigo-700 transition-colors">Regístrate aquí</a>
        </p>
    </form>
</div>
@endsection