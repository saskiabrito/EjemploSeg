@extends('layouts.plantilla')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-slate-800">Registrar Persona</h1>
    <p class="text-sm text-slate-500 mt-1">Completa los datos para añadir un nuevo registro.</p>
</div>

<!-- Cajita del Formulario -->
<div class="bg-white border border-slate-200/60 rounded-3xl shadow-sm p-6 md:p-8 max-w-3xl">
    <form action="{{ route('personas.store') }}" method="POST" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Campo Nombre -->
            <div>
                <label for="nombre" class="block text-sm font-semibold text-slate-700 mb-2">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required placeholder="Ej. Juan Pérez" 
                    class="w-full bg-slate-50 border border-slate-200 text-slate-800 text-sm rounded-xl focus:ring-rose-200 focus:border-rose-400 block p-3 transition-all duration-200">
                @error('nombre') <p class="text-xs text-rose-500 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Campo Email (Siguiendo tu patrón) -->
            <div>
                <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Correo Electrónico</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="juan@ejemplo.com" 
                    class="w-full bg-slate-50 border border-slate-200 text-slate-800 text-sm rounded-xl focus:ring-rose-200 focus:border-rose-400 block p-3 transition-all duration-200">
                @error('email') <p class="text-xs text-rose-500 mt-1">{{ $message }}</p> @enderror
            </div>
        </div>

        <!-- Checkboxes de Intereses -->
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-3">Intereses</label>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
                @foreach($intereses as $interes)
                <label class="flex items-center gap-3 p-3 rounded-xl border border-slate-200 bg-slate-50 hover:bg-slate-100 cursor-pointer transition-colors">
                    <input type="checkbox" name="intereses[]" value="{{ $interes->id }}" 
                           class="w-4 h-4 text-rose-500 bg-white border-slate-300 rounded focus:ring-rose-200 focus:ring-2">
                    <span class="text-sm font-medium text-slate-700">{{ $interes->nombre }}</span>
                </label>
                @endforeach
            </div>
        </div>

        <!-- Botón -->
        <div class="pt-4 mt-2 border-t border-slate-100 flex justify-end gap-3">
            <button type="submit" class="px-5 py-2.5 text-sm font-semibold text-rose-700 bg-rose-200 hover:bg-rose-300 rounded-xl transition-colors">
                Guardar Persona
            </button>
        </div>
    </form>
</div>
@endsection
