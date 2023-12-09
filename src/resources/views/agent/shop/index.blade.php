<x-agent-app-layout class="relative">
    <div class="pb-8">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2">
                <div class="w-11/12 lg:w-10/12 mx-auto">
                    <h3 class="ml-2 font-black text-2xl leading-10">{{ $shop['name'] }}</h3>

                    <img src="{{ asset('storage/image/shop/' . (string) $shop['id'] . '/top.jpeg') }}"
                        class="mt-6 w-full h-1/2 object-cover" alt="sample" />

                    <div class="flex mt-6">
                        <p>#{{ $shop['shop_area']['area_name'] }}</p>
                        <p class="ml-2">#{{ $shop['shop_genre']['genre_name'] }}</p>
                    </div>

                    <div class="mt-6">
                        {{ $shop['description'] }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-agent-app-layout>
