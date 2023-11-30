<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="w-9/12 mx-auto">
                <x-confirm-table-tr tableHead="店舗名" :tableData="$request->shop_name"></x-confirm-table-tr>
                <x-confirm-table-tr tableHead="日付" :tableData="$request->reservation_date"></x-confirm-table-tr>
                <x-confirm-table-tr tableHead="時間" :tableData="$request->reservation_time"></x-confirm-table-tr>
                <x-confirm-table-tr tableHead="人数" :tableData="$request->party_size . '人'"></x-confirm-table-tr>
            </table>
        </div>

        <div class="lg:flex lg:justify-between w-2/12 mx-auto mt-6">
            <x-back-button class="block w-24 mx-auto lg:m-0">戻る</x-back-button>
            <form action="/shop/store" method="POST">
                @csrf

                <input type="hidden" name="user_id" value="{{ $request->user_id }}">
                <input type="hidden" name="shop_id" value="{{ $request->shop_id }}">
                <input type="hidden" name="reservation_date" value="{{ $request->reservation_date }}">
                <input type="hidden" name="reservation_time" value="{{ $request->reservation_time }}">
                <input type="hidden" name="party_size" value="{{ $request->party_size }}">
                <input type="hidden" name="status" value="{{ $request->status }}">

                <x-button onclick="event.preventDefault(); this.closest('form').submit();"
                    class="block w-24 mx-auto my-4 lg:m-0">予約</x-button>
            </form>
        </div>
    </div>
</x-app-layout>
