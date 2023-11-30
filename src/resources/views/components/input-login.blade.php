@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'block mt-3 p-0 w-full border-x-white border-t-white border-b-2  focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
]) !!}>
