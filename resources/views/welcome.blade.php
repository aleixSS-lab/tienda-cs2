@extends('layouts.app')

@section('content')
<div class="relative flex items-center justify-center min-h-[80vh]">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-orange-500/10 blur-[120px] rounded-full"></div>
        <div class="absolute -bottom-[10%] -right-[10%] w-[40%] h-[40%] bg-blue-500/10 blur-[120px] rounded-full"></div>
    </div>

    <div class="relative z-10 text-center px-4">
        <h1 class="text-7xl font-black mb-4 tracking-tighter uppercase italic">
            CS2 <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-yellow-500">MARKET</span>
        </h1>
        <p class="text-gray-400 text-xl mb-12 max-w-2xl mx-auto">
            El lugar más seguro para tradear tus skins de Counter-Strike. Precios actualizados y entregas instantáneas.
        </p>    
        
        <div class="flex gap-4 justify-center">
            <a href="{{ route('products.index') }}" 
               class="bg-orange-600 hover:bg-orange-500 text-white font-bold py-4 px-10 rounded-xl transition-all transform hover:scale-105 shadow-xl shadow-orange-900/20">
                EXPLORAR INVENTARIO
            </a>
            
            @guest
            <a href="{{ route('register') }}" 
               class="bg-white/5 hover:bg-white/10 border border-white/10 text-white font-bold py-4 px-10 rounded-xl transition-all">
                CREAR CUENTA
            </a>
            @endguest
        </div>
    </div>
</div>
@endsection