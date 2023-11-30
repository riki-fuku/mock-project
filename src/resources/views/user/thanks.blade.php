<x-app-layout>
    <div class="py-12">
        <div class="w-10/12 md:w-4/12 mx-auto py-10 bg-white">
            <p class="py-8 text-center text-xl">{{ $message }}</p>
            <x-button class="mb-10 block mx-auto"><a href="{{ $backPage }}">戻る</a></x-button>
        </div>
    </div>
</x-app-layout>
