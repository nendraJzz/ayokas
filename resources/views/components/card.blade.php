@props(['className' => ''])

<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-full {{ $className }}">
    <div class="p-6 text-gray-900 text-center">
        {{ $slot }}
    </div>
</div>