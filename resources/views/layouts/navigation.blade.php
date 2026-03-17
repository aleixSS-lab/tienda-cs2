<nav x-data="{ open: false }" class="bg-[#0b0e13] border-b border-orange-500/30">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <img src="https://cdn.skinbaron.de/steamdata/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhjxszJemkV092lnYmGmOHLP7LWnn8f7ZAn0-2UrNytiwK2_hY4MmD7doaVcwU4YFqD-QTrleq80J-8vp-anGwj5HfQSpUJNw?optimizer=image"
                             alt="AK-47 Asiimov Logo" class="h-12 w-auto hover:scale-110 transition-transform">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('product.index')" :active="request()->routeIs('producte.index')" class="text-orange-500 hover:text-orange-400">
                        {{ __('Inventario') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-orange-500/50 text-sm leading-4 font-medium rounded-md text-orange-500 bg-[#1a1d24] hover:bg-[#252932] focus:outline-none transition ease-in-out duration-150">
                            <div>
                                @auth
                                {{ Auth::user()->name}}
                                @else
                                    Invitado
                                @endauth
                            </div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>


                    <x-slot name="content">
                        <div class="bg-[#1a1d24] border border-orange-500/20 rounded-md shadow-xl">
                            <x-dropdown-link :href="route('profile.edit')" class="text-orange-300 hover:text-orange-500 hover:bg-orange-500/10">
                                {{ __('Perfil') }}
                            </x-dropdown-link>

                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault(); this.closest('form').submit();"
                                            class="text-orange-300 hover:text-red-500 hover:bg-red-500/10">
                                        {{ __('Cerrar Sesión') }}
                                    </x-dropdown-link>
                                </form>
                            @else
                                <x-dropdown-link :href="route('login')" class="text-orange-500 hover:bg-orange-500/10">
                                    {{ __('Iniciar Sesión') }}
                                </x-dropdown-link>
                            @endauth
                        </div>
                    </x-slot>



                    
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">
                    @auth
                    {{ Auth::user()->name}}
                    @else
                    Invitado
                    @endauth
                </div>
                <div class="font-medium text-sm text-gray-500">
                        @auth
                        {{ Auth::user()->email }}
                        @else
                        No has iniciado sesión
                        @endauth
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
