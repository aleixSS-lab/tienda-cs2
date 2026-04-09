@extends('layouts.app')

@section('content')
<div class="bg-[#0b0e13] min-h-screen py-12 px-4">
    <div class="max-w-2xl mx-auto">
        
        <a href="{{ route('products.show', $product) }}" class="text-orange-500 hover:text-orange-400 text-sm font-bold flex items-center mb-6 transition">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            CANCELAR Y VOLVER
        </a>

        <div class="bg-[#1a1d24] border border-orange-500/30 rounded-2xl shadow-2xl overflow-hidden">
            <div class="bg-gradient-to-r from-gray-800 to-gray-700 px-8 py-6">
                <h2 class="text-2xl font-black text-white uppercase italic tracking-tighter">Editar <span class="text-orange-500">Skin</span></h2>
                <p class="text-gray-400 text-sm">Modificando: {{ $product->nombre }}</p>
            </div>

            <form action="{{ route('products.update', $product) }}" method="POST" class="p-8 space-y-6">
                @csrf
                @method('PUT') <div>
                    <label class="block text-orange-500 text-xs font-black uppercase mb-2 tracking-widest">Nombre del Arma</label>
                    <input type="text" name="nombre" value="{{ $product->nombre }}" 
                           class="w-full bg-[#0b0e13] border border-white/10 rounded-lg py-3 px-4 text-white focus:border-orange-500 transition" required>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-orange-500 text-xs font-black uppercase mb-2 tracking-widest">Precio (€)</label>
                        <input type="number" step="0.01" name="precio" value="{{ $product->precio }}" 
                               class="w-full bg-[#0b0e13] border border-white/10 rounded-lg py-3 px-4 text-white focus:border-orange-500 transition" required>
                    </div>
                    <div>
                        <label class="block text-orange-500 text-xs font-black uppercase mb-2 tracking-widest">Stock</label>
                        <input type="number" name="stock" value="{{ $product->stock }}" 
                               class="w-full bg-[#0b0e13] border border-white/10 rounded-lg py-3 px-4 text-white focus:border-orange-500 transition" required>
                    </div>
                </div>

                <div>
                    <label class="block text-orange-500 text-xs font-black uppercase mb-2 tracking-widest">URL Imagen</label>
                    <input type="url" name="imagen" value="{{ $product->imagen }}" 
                           class="w-full bg-[#0b0e13] border border-white/10 rounded-lg py-3 px-4 text-white focus:border-orange-500 transition">
                </div>

                <div>
                    <label class="block text-orange-500 text-xs font-black uppercase mb-2 tracking-widest">Descripción</label>
                    <textarea name="descripcion" rows="4" 
                              class="w-full bg-[#0b0e13] border border-white/10 rounded-lg py-3 px-4 text-white focus:border-orange-500 transition" required>{{ $product->descripcion }}</textarea>
                </div>

                <button type="submit" 
                        class="w-full bg-orange-600 hover:bg-orange-500 text-white font-black py-4 rounded-xl transition-all shadow-xl shadow-orange-900/40 uppercase tracking-widest">
                    Guardar Cambios
                </button>
            </form>
        </div>
    </div>
</div>
@endsection