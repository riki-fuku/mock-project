<x-app-layout class="relative">
    <div class="md:absolute w-screen top-0 right-0 px-4">
        <div
            class="md:w-1/2 md:flex md:ml-auto md:mr-10 md:my-10 py-2 px-2 border border-transparent rounded-xl bg-white shadow-gray-400">
            <select class="h-10 md:w-3/12 ml-3 md:mx-2 border-none font-semibold text-xs">
                <option value="all_area">All Area</option>
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->area_name }}</option>
                @endforeach
            </select>
            <select class="h-10 md:w-3/12 ml-3 md:mx-2 border-none font-semibold text-xs">
                <option value="all_genre">All Genre</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->genre_name }}</option>
                @endforeach
            </select>
            <input type="text" class="h-10 md:w-6/12 ml-3 md:mx-2 border-none font-semibold text-xs"
                placeholder="Search...">
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach ($shops as $key => $shop)
                    <x-shop-card :shopId="$shop['id']" :shopName="$shop['name']" :shopArea="$shop['shop_area']['area_name']" :shopGenre="$shop['shop_genre']['genre_name']"
                        :shopFavorite="$shop['shop_favorite']" />
                @endforeach
            </ul>
        </div>
    </div>

</x-app-layout>
