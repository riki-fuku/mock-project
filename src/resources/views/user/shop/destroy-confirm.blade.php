<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="w-9/12 mx-auto">
                <x-confirm-table-tr tableHead="店舗名" :tableData="$shopReservation['shop']['name']"></x-confirm-table-tr>
                <x-confirm-table-tr tableHead="日付" :tableData="$shopReservation['reservation_date']"></x-confirm-table-tr>
                <x-confirm-table-tr tableHead="時間" :tableData="$shopReservation['reservation_time']"></x-confirm-table-tr>
                <x-confirm-table-tr tableHead="人数" :tableData="$shopReservation['party_size'] . '人'"></x-confirm-table-tr>
            </table>
        </div>

        <form action="{{ route('shop_destroy') }}" method="POST" class="lg:flex lg:justify-between w-2/12 mx-auto mt-6">
            @method('POST')
            @csrf

            <input type="hidden" name="id" value="{{ $shopReservation->id }}">

            <x-back-button class="block h-10 w-24 mx-auto lg:m-0" type="button">戻る</x-back-button>

            <x-button onclick="event.preventDefault(); this.closest('form').submit();"
                class="block h-10 mx-auto my-0 lg:m-0">キャンセル</x-button>
        </form>
    </div>
    </div>
</x-app-layout>
