<x-app-layout>
    <div class="pb-10">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid md:grid-cols-2">

                <div class="w-0 lg:w-full"></div>

                <div class="w-11/12 lg:w-full mx-auto lg:mb-6 lg:ml-2 font-bold text-2xl">
                    {{ Auth::user()->name }}さん
                </div>

                <div class="w-11/12 lg:w-10/12 mx-auto lg:mr-14">
                    <h3 class="ml-2 font-black text-2xl leading-10">予約状況</h3>

                    @foreach ($shopReservations as $shopReservation)
                        <x-reservation-card :shopName="$shopReservation['shop']['name']" :reservationDate="$shopReservation['reservation_date']" :reservationTime="$shopReservation['reservation_time']"
                            :partySize="$shopReservation['party_size']"></x-reservation-card>
                    @endforeach
                </div>

                <div class="w-11/12 lg:w-full mx-auto lg:ml-2">
                    <h3 class="font-black text-2xl leading-10">お気に入り店舗</h3>
                    <ul class="grid md:grid-cols-2 gap-5">
                        @foreach ($shopFavorites as $shopFavorite)
                            <x-shop-card :shopId="$shopFavorite['shop']['id']" :shopName="$shopFavorite['shop']['name']" :shopArea="$shopFavorite['shop']['shop_area']['area_name']" :shopGenre="$shopFavorite['shop']['shop_genre']['genre_name']"
                                :shopFavorite="$shopFavorite" />
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
