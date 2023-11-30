<div class="w-full mb-4 py-4 px-6 bg-blue-500 rounded-md relative shadow-lg shadow-gray-400 z-0 text-white">
    <div class="py-4">予約1</div>
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
