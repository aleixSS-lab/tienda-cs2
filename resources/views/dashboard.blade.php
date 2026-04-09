<x-app-layout>
    <div class="py-12 bg-[#0b0e13] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="mb-8">
                <h2 class="text-3xl font-black text-white italic uppercase tracking-tighter">
                    Panel de <span class="text-orange-500">Control</span>
                </h2>
                <p class="text-gray-500 text-sm">Bienvenido de nuevo, {{ Auth::user()->name }}.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <div class="bg-[#1a1d24] border-l-4 border-orange-500 p-6 rounded-xl shadow-lg">
                    <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Skins Totales</p>
                    <p class="text-4xl font-black text-white mt-2">{{ $totalSkins }}</p>
                </div>

                <div class="bg-[#1a1d24] border-l-4 border-orange-500 p-6 rounded-xl shadow-lg">
                    <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Valor Inventario</p>
                    <p class="text-4xl font-black text-orange-500 mt-2">{{ number_format($valorTotal, 2) }}€</p>
                </div>

                <div class="bg-[#1a1d24] border-l-4 border-red-600 p-6 rounded-xl shadow-lg">
                    <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Alertas de Stock</p>
                    <p class="text-4xl font-black text-white mt-2">{{ $bajoStock }} <span class="text-sm text-gray-600 italic">críticos</span></p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <a href="{{ route('products.index') }}" class="group bg-[#1a1d24] border border-white/5 hover:border-orange-500/50 p-8 rounded-2xl transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-white group-hover:text-orange-500 transition-colors">Ver Inventario</h3>
                            <p class="text-gray-500 text-sm mt-1">Gestiona tus skins existentes.</p>
                        </div>
                        <div class="text-orange-500 opacity-20 group-hover:opacity-100 transition-opacity">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>
                        </div>
                    </div>
                </a>

                <a href="{{ route('products.create') }}" class="group bg-orange-600 hover:bg-orange-500 p-8 rounded-2xl transition-all duration-300 shadow-xl shadow-orange-900/20">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-white">Añadir Skin</h3>
                            <p class="text-orange-200 text-sm mt-1">Registra un nuevo objeto en la base de datos.</p>
                        </div>
                        <div class="text-white">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</x-app-layout>