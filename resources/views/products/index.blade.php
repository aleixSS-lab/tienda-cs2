@extends('layouts.app')

@section('content')
<div class="bg-[#0b0e13] min-h-screen py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        
        <div class="flex justify-between items-center mb-10 border-b border-orange-500/20 pb-6">
            <div>
                <h2 class="text-4xl font-black text-white tracking-tighter uppercase italic">
                    INVENTARIO <span class="text-orange-500">DISPONIBLE</span>
                </h2>
                <p class="text-gray-400 mt-1">Explora las skins más exclusivas del mercado.</p>
            </div>
            
            @auth
            <a href="{{ route('products.create') }}" class="bg-orange-600 hover:bg-orange-500 text-white font-bold py-2 px-6 rounded-lg transition-all shadow-lg shadow-orange-900/20">
                + AÑADIR SKIN
            </a>
            @endauth
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
            <div class="bg-[#1a1d24] border border-white/5 rounded-xl overflow-hidden group hover:border-orange-500/50 transition-all duration-300 shadow-2xl">
                
                <div class="relative aspect-video bg-[#12141a] flex items-center justify-center p-4">
                    <img src="{{ $product->imagen ?? 'https://via.placeholder.com/300x200?text=No+Image' }}" 
                         alt="{{ $product->nombre }}" 
                         class="object-contain w-full h-full transform group-hover:scale-110 transition-transform duration-500">
                    
                    <div class="absolute top-2 right-2 bg-black/60 backdrop-blur-md text-[10px] text-orange-400 px-2 py-1 rounded border border-orange-500/30">
                        STOCK: {{ $product->stock }}
                    </div>
                </div>

                <div class="p-5 border-t border-white/5">
                    <h3 class="text-lg font-bold text-white truncate">{{ $product->nombre }}</h3>
                    <p class="text-gray-500 text-xs mb-4 h-8 line-clamp-2">{{ $product->descripcion }}</p>
                    
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-black text-orange-500">{{ number_format($product->precio, 2) }}€</span>
                        
                        {{-- Boton de visualización --}}
                        <div class="flex gap-2">
                            <a href="{{ route('products.show', $product) }}" class="p-2 bg-white/5 hover:bg-white/10 rounded-lg text-gray-400 hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            </a>
                        </div>
                        {{-- Boton de eliminación --}}
                        <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('¿Eliminar?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-2 bg-red-600/10 hover:bg-red-600 rounded-lg text-red-500 hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="h-1 w-full bg-gradient-to-r from-orange-600 via-yellow-500 to-orange-600 opacity-50 group-hover:opacity-100 transition-opacity"></div>
            </div>
            @endforeach
        </div>

        @if($products->isEmpty())
        <div class="text-center py-20">
            <p class="text-gray-500 text-xl italic">No hay skins en el inventario actualmente...</p>
        </div>
        @endif
    </div>
</div>
@endsection