<div class="w-full mb-4 py-4 px-6 bg-blue-500 rounded-md relative shadow-lg shadow-gray-400 z-0 text-white">
    <div class="flex justify-between py-4">
        <div class="text-xl">予約 {{ $reservationNumber }}</div>
        <div class="flex justify-between">
            <form action="{{ route('shop_edit') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $reservationId }}">
                <x-button-edit>変更</x-button-edit>
            </form>

            <form action="{{ route('shop_destroy_confirm') }}" method="POST" class="ml-2">
                @csrf
                <input type="hidden" name="id" value="{{ $reservationId }}">
                <x-button-delete>キャンセル</x-button-delete>
            </form>
        </div>
    </div>
    <table class="text-left ">
        <tr>
            <th class="w-1/2 py-3">Shop</th>
            <td>{{ $shopName }}</td>
        </tr>
        <tr>
            <th class="w-1/2 py-3">Date</th>
            <td>{{ $reservationDate }}</td>
        </tr>
        <tr>
            <th class="w-1/2 py-3">Time</th>
            <td>{{ \Carbon\Carbon::parse($reservationTime)->format('h:i') }}</td>
        </tr>
        <tr>
            <th class="w-1/2 py-3">Number</th>
            <td>{{ $partySize }}人</td>
        </tr>
    </table>
</div>
