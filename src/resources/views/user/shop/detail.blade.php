@php
    use App\Models\ShopReservation;
@endphp
<x-app-layout>
    <div class="pb-8">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2">
                <div class="w-11/12 lg:w-10/12 mx-auto">
                    <div class="flex">
                        <button
                            class="absolte  h-10 w-10 bg-white border border-transparent rounded-md font-semibold text-xl shadow-lg shadow-gray-400  uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                            href="#" onclick="history.back()">
                            <span class="material-symbols-outlined px-3 leading-10">arrow_back_ios</span>
                        </button>
                        <h3 class="ml-2 font-black text-2xl leading-10">{{ $shop['name'] }}</h3>
                    </div>

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

                <div class="w-11/12 lg:w-full mx-auto bg-blue-500 rounded-md relative shadow-lg shadow-gray-400 z-0">
                    <form action="{{ route('shop_confirm') }}" method="POST">
                        @csrf
                        <div class="px-4 py-6">
                            <div class="ml-2 font-black text-2xl leading-10 text-white">予約</div>

                            @error('user_id')
                                <div>{{ $message }}</div>
                            @enderror

                            <div class="mt-4">
                                {{-- 日付 --}}
                                <input type="date" name="reservation_date" class="block px-3 py-1 rounded"
                                    value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}"
                                    oninput="document.getElementById('reservation_date').innerText = this.value;">

                                {{-- 来店時間 --}}
                                <select name="reservation_time" class="block px-3 py-1 rounded mt-2 w-full"
                                    oninput="document.getElementById('reservation_time').innerText = this.value;">
                                    @for ($hour = 12; $hour < 22; $hour++)
                                        @for ($minute = 0; $minute < 60; $minute += 15)
                                            <option
                                                value="{{ str_pad($hour, 2, '0', STR_PAD_LEFT) }}:{{ str_pad($minute, 2, '0', STR_PAD_LEFT) }}">
                                                {{ str_pad($hour, 2, '0', STR_PAD_LEFT) }}:{{ str_pad($minute, 2, '0', STR_PAD_LEFT) }}
                                            </option>
                                        @endfor
                                    @endfor
                                </select>

                                {{-- 来店人数 --}}
                                <select name="party_size" class="block px-3 py-1 rounded mt-2 w-full"
                                    oninput="document.getElementById('party_size').innerText = this.value + '人';">
                                    @for ($i = 1; $i <= 4; $i++)
                                        <option value="{{ $i }}">{{ $i }}人</option>
                                    @endfor
                                </select>

                                {{-- 店舗ID --}}
                                <input type="hidden" name="shop_id" value="{{ $shop['id'] }}">

                                {{-- 店舗名 --}}
                                <input type="hidden" name="shop_name" value="{{ $shop['name'] }}">

                                {{-- ユーザーID --}}
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                {{-- ステータス(予約済) --}}
                                <input type="hidden" name="status"
                                    value="{{ ShopReservation::RESERVATION_COMPLETE_STATUS }}">

                            </div>

                            <div class="mt-4 px-4 py-4 bg-blue-400 rounded-md">
                                <table class="text-left text-white">
                                    <tr>
                                        <th class="w-1/2">Shop</th>
                                        <td>{{ $shop['name'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Date</th>
                                        <td id="reservation_date">{{ date('Y-m-d') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Time</th>
                                        <td id="reservation_time">12:00</td>
                                    </tr>
                                    <tr>
                                        <th>Number</th>
                                        <td id="party_size">1人</td>
                                    </tr>
                                </table>
                            </div>
                        </div>


                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-dropdown-link>

                        <div class="w-full py-2 absolute bottom-0 text-white text-center bg-blue-700 rounded-b-md cursor-pointer"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            予約する
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
