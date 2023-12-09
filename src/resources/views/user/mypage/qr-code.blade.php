<x-app-layout>
    <div class="pb-10">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="w-11/12 lg:w-full mx-auto lg:mb-6 lg:ml-2 font-bold text-2xl text-center">
                {{ Auth::user()->name }}さん
            </div>


            <img src="https://api.qrserver.com/v1/create-qr-code/?data={{ $url }}" alt="QRコード"
                class="w-9/12 mx-auto my-5" />

            <div class="m-auto">
                <x-back-button class="block mx-auto">戻る</x-back-button>
            </div>

        </div>
    </div>
</x-app-layout>
