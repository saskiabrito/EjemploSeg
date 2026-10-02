<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Acceso</title>
    
    <!-- Tipografía Moderna y Minimalista -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-700 antialiased selection:bg-indigo-100 selection:text-indigo-700">
    
    <div class="min-h-screen flex flex-col justify-center items-center py-10 px-4 sm:px-6 lg:px-8">
        
        <!-- Logotipo Superior -->
        <div class="mb-8">
            <a href="/" class="flex items-center gap-2 group">
                <div class="w-10 h-10 rounded-xl bg-indigo-600 flex items-center justify-center text-white shadow-sm group-hover:bg-indigo-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <span class="text-2xl font-semibold text-slate-800 tracking-tight" style="font-family: 'Georgia', serif; font-style: italic;">
                    Dash<span class="text-indigo-600 font-bold not-italic">board</span>
                </span>
            </a>
        </div>
        
        <!-- Contenedor del Formulario (La cajita blanca) -->
        <div class="w-full sm:max-w-md bg-white border border-slate-200/60 shadow-sm rounded-3xl overflow-hidden">
            @yield('content')
        </div>
        
        <!-- Footer simple -->
        <div class="mt-8 text-xs text-slate-400 text-center">
            &copy; {{ date('Y') }} EjemploSeg. Todos los derechos reservados.
        </div>
        
    </div>

</body>
</html>