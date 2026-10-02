@extends('layouts.plantilla')

@section('content')
    <!-- Cabecera del Dashboard -->
    <div class="mb-10">
        <h1 class="text-3xl font-bold text-slate-800">
            ¡Bienvenido, {{ Auth::user()->name }}! 👋
        </h1>
        <p class="text-slate-500 mt-2 text-sm">Aquí tienes un resumen general de tu panel de control.</p>
    </div>

    <!-- Grid de Tarjetas de Estadísticas -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        
        <!-- Tarjeta: Total de Personas -->
        <div class="bg-white rounded-3xl shadow-sm p-6 border border-slate-200/60 relative overflow-hidden group hover:shadow-md transition-all duration-300">
            <div class="absolute top-0 left-0 w-1.5 h-full bg-rose-400"></div>
            
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-slate-400 text-[11px] font-bold uppercase tracking-wider mb-1">Total de Personas</p>
                    <p class="text-4xl font-extrabold text-slate-800">{{ $totalPersonas ?? 0 }}</p>
                </div>
                <div class="p-3 bg-rose-50 rounded-2xl text-rose-500 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Tarjeta: Intereses Creados -->
        <div class="bg-white rounded-3xl shadow-sm p-6 border border-slate-200/60 relative overflow-hidden group hover:shadow-md transition-all duration-300">
            <div class="absolute top-0 left-0 w-1.5 h-full bg-amber-400"></div>
            
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-slate-400 text-[11px] font-bold uppercase tracking-wider mb-1">Intereses Creados</p>
                    <p class="text-4xl font-extrabold text-slate-800">{{ $totalIntereses ?? 0 }}</p>
                </div>
                <div class="p-3 bg-amber-50 rounded-2xl text-amber-500 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Tarjeta: Usuarios del Sistema -->
        <div class="bg-white rounded-3xl shadow-sm p-6 border border-slate-200/60 relative overflow-hidden group hover:shadow-md transition-all duration-300">
            <div class="absolute top-0 left-0 w-1.5 h-full bg-sky-400"></div>
            
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-slate-400 text-[11px] font-bold uppercase tracking-wider mb-1">Usuarios del Sistema</p>
                    <p class="text-4xl font-extrabold text-slate-800">{{ $totalUsuarios ?? 0 }}</p>
                </div>
                <div class="p-3 bg-sky-50 rounded-2xl text-sky-500 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

    </div>
@endsection
