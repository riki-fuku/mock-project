<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="my-auto md:block  w-10/12 md:w-full sm:max-w-md bg-white shadow-md overflow-hidden md:rounded-lg">
        @if (isset($head))
            <div class="bg-blue-500 w-full p-4 text-white text-xl">
                {{ $head }}
            </div>
        @endif

        {{ $slot }}
    </div>
</div>
