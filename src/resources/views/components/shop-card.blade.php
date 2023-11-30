<li class="bg-white shadow-lg shadow-gray-300 rounded-2xl">
    <a href="#">
        <div class="">
            @php
                $path = Storage::disk('public')->path('image/shop/1/top.jpeg');
            @endphp
            <img src="{{ asset('storage/image/shop/' . (string) $shopId . '/top.jpeg') }}"
                class="w-full h-1/2 object-cover rounded-t-2xl" alt="sample" />
        </div>
        <div class="p-4">
            <h3 class="font-bold text-2xl">{{ $shopName }}</h3>
            <div class="flex mt-2">
                <p>#{{ $shopArea }}</p>
                <p class="ml-2">#{{ $shopGenre }}</p>
            </div>

            <div class="flex justify-between mt-2">

                <x-button onclick="location.href='/shop/detail/{{ $shopId }}'">詳しくみる</x-button>

                <div class="inline-flex items-center pl-auto border-none rounded-md font-semibold text-3xl ">
                    <span class="material-icons favorite-button" onclick="">favorite</span>
                </div>
            </div>
        </div>
    </a>
</li>
