<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjemploSeg - @yield('title', 'Dashboard')</title>
    
    <!-- Tipografía Moderna y Minimalista -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
        }
    </style>
</head>
<body class="bg-slate-50/70 text-slate-700 antialiased min-h-screen flex flex-col selection:bg-indigo-100 selection:text-indigo-700">

    <!-- Barra de Navegación Superior -->
    @include('layouts.navigation')

    <div class="flex flex-1">
        <!-- Sidebar / Menú Lateral -->
        @include('layouts.sidebar')

        <!-- Contenido Principal -->
        <main class="flex-1 p-6 md:p-10 max-w-7xl mx-auto w-full">
            
            <!-- Notificación de Éxito Pastel -->
            @if(session('success'))
                <div class="mb-6 flex items-center gap-3 bg-emerald-50 border border-emerald-200/80 text-emerald-800 px-5 py-3.5 rounded-2xl shadow-xs">
                    <svg class="w-5 h-5 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm font-medium">{{ session('success') }}</span>
                </div>
            @endif

            <!-- Notificación de Error Pastel -->
            @if(session('error'))
                <div class="mb-6 flex items-center gap-3 bg-rose-50 border border-rose-200/80 text-rose-800 px-5 py-3.5 rounded-2xl shadow-xs">
                    <svg class="w-5 h-5 text-rose-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm font-medium">{{ session('error') }}</span>
                </div>
            @endif

            <!-- Sección Dinámica -->
            @yield('content')

        </main>
    </div>

</body>
</html>