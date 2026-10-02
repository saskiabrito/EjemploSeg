@extends('layouts.guest')

@section('content')
<div class="p-8 sm:p-10">
    <div class="mb-8 text-center">
        <h2 class="text-2xl font-bold text-slate-800">Crear cuenta</h2>
        <p class="text-sm text-slate-500 mt-2">Únete a nosotros y gestiona todo fácilmente.</p>
    </div>

    <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf
        
        <!-- Nombre Completo -->
        <div>
            <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">Nombre completo</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus placeholder="Ej. Juan Pérez"
                class="w-full bg-slate-50 border border-slate-200 text-slate-800 text-sm rounded-xl focus:ring-indigo-200 focus:border-indigo-400 block p-3.5 transition-all duration-200">
            @error('name') 
                <p class="text-xs text-rose-500 mt-1.5 font-medium">{{ $message }}</p> 
            @enderror
        </div>

        <!-- Correo Electrónico -->
        <div>
            <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Correo electrónico</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="tu@correo.com"
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

        <!-- Confirmar Contraseña -->
        <div>
            <label for="password_confirmation" class="block text-sm font-semibold text-slate-700 mb-2">Confirmar contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required placeholder="••••••••"
                class="w-full bg-slate-50 border border-slate-200 text-slate-800 text-sm rounded-xl focus:ring-indigo-200 focus:border-indigo-400 block p-3.5 transition-all duration-200">
        </div>

        <!-- Botón Registrarme -->
        <div class="pt-4">
            <button type="submit" class="w-full flex justify-center py-3.5 px-4 border border-transparent rounded-xl shadow-sm text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                Registrarme
            </button>
        </div>

        <!-- Enlace a Login -->
        <p class="text-sm text-center text-slate-500 mt-6">
            ¿Ya tienes cuenta?
            <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-700 transition-colors">Inicia sesión</a>
        </p>
    </form>
</div>
@endsection