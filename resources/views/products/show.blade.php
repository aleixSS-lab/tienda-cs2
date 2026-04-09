@extends('layouts.app')

@section('content')
<div class="bg-[#0b0e13] min-h-screen py-12 px-4">
    <div class="max-w-5xl mx-auto">
        
        <a href="{{ route('products.index') }}" class="text-orange-500 hover:text-orange-400 text-sm font-bold flex items-center mb-8 transition">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            VOLVER AL INVENTARIO
        </a>

        <div class="bg-[#1a1d24] border border-orange-500/20 rounded-3xl overflow-hidden shadow-2xl grid grid-cols-1 md:grid-cols-2">
            
            <div class="bg-[#12141a] p-12 flex items-center justify-center relative">
                <img src="{{ $product->imagen }}" alt="{{ $product->nombre }}" class="w-full h-auto object-contain drop-shadow-[0_0_30px_rgba(249,115,22,0.2)]">
                
                <div class="absolute bottom-6 left-6">
                    <span class="text-xs font-black text-orange-500/50 uppercase tracking-[0.3em]">Technical Preview</span>
                </div>
            </div>

            <div class="p-10 flex flex-col justify-between">
                <div>
                    <h1 class="text-4xl font-black text-white leading-none mb-2 uppercase italic">{{ $product->nombre }}</h1>
                    <div class="h-1 w-20 bg-orange-600 mb-6"></div>
                    
                    <p class="text-gray-400 text-lg leading-relaxed mb-8">
                        {{ $product->descripcion }}
                    </p>

                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-[#0b0e13] p-4 rounded-xl border border-white/5">
                            <span class="block text-gray-500 text-[10px] uppercase font-bold mb-1">Precio Mercado</span>
                            <span class="text-3xl font-black text-orange-500">{{ number_format($product->precio, 2) }}€</span>
                        </div>
                        <div class="bg-[#0b0e13] p-4 rounded-xl border border-white/5">
                            <span class="block text-gray-500 text-[10px] uppercase font-bold mb-1">Unidades</span>
                            <span class="text-3xl font-black text-white">{{ $product->stock }}</span>
                        </div>
                    </div>
                </div>

                @auth
                <div class="flex gap-4 border-t border-white/5 pt-8">
                    <a href="{{ route('products.edit', $product) }}" class="flex-1 bg-white/5 hover:bg-white/10 text-white text-center font-bold py-4 rounded-xl transition">
                        EDITAR SKIN
                    </a>

                    <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres ELIMINAR esta skin del inventario?');" class="flex-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full bg-red-600/20 hover:bg-red-600 text-red-500 hover:text-white font-bold py-4 rounded-xl transition border border-red-600/50">
                            ELIMINAR
                        </button>
                    </form>
                </div>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection