<div class="fixed m-10 flex">
    <button
        class="absolte  h-10 w-10 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white shadow-lg shadow-gray-400 uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
        href="#" onclick="openMenu();">
        <span class="material-symbols-outlined leading-10">menu</span>
    </button>

    <div class="h-10 pl-5 leading-10 text-blue-500 font-black text-4xl">Rese</div>
</div>

<div id="menu" class="fixed bg-gray-100 min-h-screen hidden">
    <div class="fixed">
        <button
            class="absolte m-10 h-10 w-10 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white shadow-lg shadow-gray-400 uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
            href="#" onclick="closeMenu();">
            <span class="material-symbols-outlined leading-10">close</span>
        </button>
    </div>

    <div class="flex justify-center items-center w-screen h-screen">
        <div>
            <ul class="block text-center text-blue-500 text-3xl">
                <li class="mt-3"><a href="{{ route('login') }}">Home</a></li>
                <li class="mt-3"><a href="{{ route('register') }}">Registration</a></li>
                <li class="mt-3"><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </div>
    </div>
</div>

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
