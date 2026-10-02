@extends('layouts.plantilla')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-slate-800">Gestión de Usuarios</h1>
    <p class="text-sm text-slate-500 mt-1">Listado del personal registrado en el sistema.</p>
</div>

<!-- Cajita de la Tabla -->
<div class="bg-white border border-slate-200/60 rounded-3xl shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-slate-600">
            <thead class="bg-slate-50/80 border-b border-slate-200/60 text-slate-500 uppercase text-[11px] font-bold tracking-wider">
                <tr>
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">Nombre</th>
                    <th class="px-6 py-4">Email</th>
                    <th class="px-6 py-4">Registro</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @foreach($usuarios as $usuario)
                <tr class="hover:bg-slate-50/50 transition-colors">
                    <td class="px-6 py-4 font-medium text-slate-400">#{{ $usuario->id }}</td>
                    <td class="px-6 py-4 font-semibold text-slate-700">{{ $usuario->name }}</td>
                    <td class="px-6 py-4 text-slate-600">{{ $usuario->email }}</td>
                    <td class="px-6 py-4 text-slate-500">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-slate-100 text-slate-600">
                            {{ $usuario->created_at->format('d/m/Y H:i') }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
