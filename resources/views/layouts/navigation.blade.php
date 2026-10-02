<nav class="bg-white border-b border-slate-200/60 px-6 py-3.5 flex justify-between items-center shadow-xs sticky top-0 z-50">
    <!-- Extremo Izquierdo: Marca / Logotipo -->
    <div class="flex items-center gap-3">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-2 group">
            <div class="w-8 h-8 rounded-xl bg-indigo-600 flex items-center justify-center text-white shadow-sm group-hover:bg-indigo-700 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
            </div>
            <span class="text-xl font-semibold text-slate-800 tracking-tight" style="font-family: 'Georgia', serif; font-style: italic;">
                Dash<span class="text-indigo-600 font-bold not-italic">board</span>
            </span>
        </a>
    </div>

    <!-- Extremo Derecho: Perfil del Usuario y Cerrar Sesión -->
    <div class="flex items-center gap-4">
        <div class="flex items-center gap-2.5 px-3 py-1.5 rounded-full bg-slate-50 border border-slate-200/60 text-sm">
            <div class="w-6 h-6 rounded-full bg-indigo-100 text-indigo-700 font-bold flex items-center justify-center text-xs uppercase">
                {{ substr(Auth::user()->name ?? 'U', 0, 1) }}
            </div>
            <span class="font-medium text-slate-700">{{ Auth::user()->name ?? 'Usuario' }}</span>
        </div>

        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="text-xs font-semibold text-rose-600 hover:text-rose-700 hover:bg-rose-50 px-3 py-2 rounded-xl transition-colors duration-200">
                Cerrar sesión
            </button>
        </form>
    </div>
</nav>