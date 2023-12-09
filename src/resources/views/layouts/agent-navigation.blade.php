{{-- メニュー画面 --}}
<div id="menu" class="fixed bg-gray-100 w-full hidden z-20">
    <div class="fixed">
        <button
            class="absolte m-10 h-10 w-10 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white shadow-lg shadow-gray-400 uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
            href="#" onclick="closeMenu();">
            <span class="material-symbols-outlined leading-10">close</span>
        </button>
    </div>

    <div class="flex justify-center items-center w-screen h-screen">
        <div>
            <ul class="block text-center text-green-500 text-3xl">
                <li class="mt-3"><a href="{{ route('shop') }}">Home</a></li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-dropdown-link>
                </form>
                <li class="mt-3"><a href="{{ route('mypage') }}">Mypage</a></li>
            </ul>
        </div>
    </div>
</div>

<nav x-data="{ open: false }" class="bg-gray-100 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="w-full mx-auto">
        <div class="flex justify-between">

            <div class="flex m-10">
                <button
                    class="z-10 absolte h-10 w-10 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white shadow-lg shadow-gray-400 uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                    href="#" onclick="openMenu();">
                    <span class="material-symbols-outlined leading-10">menu</span>
                </button>

                <div class="h-10 pl-5 leading-10 text-green-500 font-black text-4xl">Rese(店舗代表者画面)</div>
            </div>

            <!-- Settings Dropdown -->
            {{-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div> --}}

            <!-- Hamburger -->
            {{-- <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div> --}}
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    {{-- <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('shop')" :active="request()->routeIs('shop')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
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
    </div> --}}
</nav>


<script>
    function openMenu() {
        // 画面上にメニューを開くコード
        let menuBlock = document.getElementById('menu');
        menuBlock.classList.remove('hidden');
    }

    function closeMenu() {
        // メニューを閉じるコードをここに書く
        let menuBlock = document.getElementById('menu');
        menuBlock.classList.add('hidden');
    }
</script>
