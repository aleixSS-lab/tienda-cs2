@extends('layouts.app')

@section('content')
<div class="bg-[#0b0e13] min-h-screen py-12 px-4">
    <div class="max-w-2xl mx-auto">
        
        <a href="{{ route('products.index') }}" class="text-orange-500 hover:text-orange-400 text-sm font-bold flex items-center mb-6 transition">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            VOLVER AL INVENTARIO
        </a>

        <div class="bg-[#1a1d24] border border-orange-500/30 rounded-2xl shadow-2xl overflow-hidden">
            <div class="bg-gradient-to-r from-orange-600 to-orange-500 px-8 py-6">
                <h2 class="text-2xl font-black text-white uppercase italic tracking-tighter">Registrar Nueva Skin</h2>
                <p class="text-orange-100 text-sm opacity-80">Introduce los detalles técnicos del arma para el mercado.</p>
            </div>

            <form action="{{ route('products.store') }}" method="POST" class="p-8 space-y-6">
                @csrf

                <div>
                    <label class="block text-orange-500 text-xs font-black uppercase mb-2 tracking-widest">Nombre del Arma / Skin</label>
                    <input type="text" name="nombre" placeholder="Ej: AK-47 | Asiimov" 
                           class="w-full bg-[#0b0e13] border border-white/10 rounded-lg py-3 px-4 text-white placeholder-gray-600 focus:outline-none focus:border-orange-500 transition" required>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-orange-500 text-xs font-black uppercase mb-2 tracking-widest">Precio (€)</label>
                        <input type="number" step="0.01" name="precio" placeholder="0.00" 
                               class="w-full bg-[#0b0e13] border border-white/10 rounded-lg py-3 px-4 text-white placeholder-gray-600 focus:outline-none focus:border-orange-500 transition" required>
                    </div>
                    <div>
                        <label class="block text-orange-500 text-xs font-black uppercase mb-2 tracking-widest">Cantidad en Stock</label>
                        <input type="number" name="stock" placeholder="1" 
                               class="w-full bg-[#0b0e13] border border-white/10 rounded-lg py-3 px-4 text-white placeholder-gray-600 focus:outline-none focus:border-orange-500 transition" required>
                    </div>
                </div>

                <div>
                    <label class="block text-orange-500 text-xs font-black uppercase mb-2 tracking-widest">URL de la Imagen (Steam Community Market)</label>
                    <input type="url" name="imagen" placeholder="https://cdn.skinbaron.de/..." 
                           class="w-full bg-[#0b0e13] border border-white/10 rounded-lg py-3 px-4 text-white placeholder-gray-600 focus:outline-none focus:border-orange-500 transition">
                    <p class="mt-2 text-gray-500 text-[10px]">Copia la dirección de imagen de cualquier skin de Steam o SkinBaron.</p>
                </div>

                <div>
                    <label class="block text-orange-500 text-xs font-black uppercase mb-2 tracking-widest">Descripción / Estado</label>
                    <textarea name="descripcion" rows="3" placeholder="Ej: Exterior: Algo desgastado. Pegatinas: Natus Vincere | Estocolmo 2021" 
                              class="w-full bg-[#0b0e13] border border-white/10 rounded-lg py-3 px-4 text-white placeholder-gray-600 focus:outline-none focus:border-orange-500 transition" required></textarea>
                </div>

                <button type="submit" 
                        class="w-full bg-orange-600 hover:bg-orange-500 text-white font-black py-4 rounded-xl transition-all transform hover:scale-[1.02] shadow-xl shadow-orange-900/40 uppercase tracking-widest">
                    Añadir al Mercado
                </button>
            </form>
        </div>
    </div>
</div>
@endsection