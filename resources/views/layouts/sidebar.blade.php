<aside class="w-64 bg-white/90 border-r border-slate-200/60 p-6 flex flex-col justify-between min-h-[calc(100vh-65px)] shrink-0">
    <div class="space-y-6">
        
        <!-- Sección Navegación -->
        <div>
            <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-3 px-3">
                Navegación
            </p>
            <nav class="space-y-1.5">
                
                <!-- Crear Interés -->
                <a href="{{ route('intereses.create') }}" 
                   class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('intereses.*') ? 'bg-amber-50 text-amber-700 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                    <svg class="w-5 h-5 text-amber-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span>Crear Interés</span>
                </a>

                <!-- Crear Persona -->
                <a href="{{ route('personas.create') }}" 
                   class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('personas.*') ? 'bg-rose-50 text-rose-700 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                    <svg class="w-5 h-5 text-rose-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span>Crear Persona</span>
                </a>

            </nav>
        </div>

        <!-- Sección Seguridad -->
        <div>
            <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-3 px-3">
                Seguridad
            </p>
            <nav class="space-y-1.5">
                
                <!-- Gestión de Usuarios -->
                <a href="{{ route('usuarios.index') }}" 
                   class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('usuarios.*') ? 'bg-sky-50 text-sky-700 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                    <svg class="w-5 h-5 text-sky-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <span>Gestión de Usuarios</span>
                </a>

            </nav>
        </div>

    </div>
</aside>
