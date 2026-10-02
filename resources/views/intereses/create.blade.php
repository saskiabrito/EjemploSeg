@extends('layouts.plantilla')
@section('title', 'Crear Interés')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-slate-800">Registrar Nuevo Interés</h1>
    <p class="text-sm text-slate-500 mt-1">Añade una nueva categoría para agrupar a las personas.</p>
</div>

<!-- Cajita del Formulario -->
<div class="bg-white border border-slate-200/60 rounded-3xl shadow-sm p-6 md:p-8 max-w-2xl">
    <form action="{{ route('intereses.store') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Campo Nombre -->
        <div>
            <label for="nombre" class="block text-sm font-semibold text-slate-700 mb-2">Nombre del Interés</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required placeholder="Ej. Tecnología, Deportes..." 
                class="w-full bg-slate-50 border border-slate-200 text-slate-800 text-sm rounded-xl focus:ring-amber-200 focus:border-amber-400 block p-3 transition-all duration-200">
            @error('nombre') <p class="text-xs text-rose-500 mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Campo Descripción -->
        <div>
            <label for="descripcion" class="block text-sm font-semibold text-slate-700 mb-2">Descripción</label>
            <textarea name="descripcion" id="descripcion" rows="3" placeholder="Opcional: Detalla un poco más este interés..."
                class="w-full bg-slate-50 border border-slate-200 text-slate-800 text-sm rounded-xl focus:ring-amber-200 focus:border-amber-400 block p-3 transition-all duration-200">{{ old('descripcion') }}</textarea>
        </div>

        <!-- Botón -->
        <div class="pt-4 border-t border-slate-100 flex justify-end gap-3">
            <button type="submit" class="px-5 py-2.5 text-sm font-semibold text-amber-700 bg-amber-200 hover:bg-amber-300 rounded-xl transition-colors">
                Guardar Interés
            </button>
        </div>
    </form>
</div>
@endsection