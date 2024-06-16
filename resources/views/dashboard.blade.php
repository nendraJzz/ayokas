<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12 px-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="mb-5">Dashboard</h1>
            <div class="flex gap-5 flex-col lg:flex-row">
                <x-card>
                    <p>{{ __("Jumlah Uang Saat Ini") }}</p>
                    <h3 class="font-extrabold text-3xl mt-3">Rp. 150.000</h3>
                </x-card>
                <x-card className="hidden md:block">
                    <p>{{ __("Jumlah Uang Saat Ini") }}</p>
                    <h3 class="font-extrabold text-3xl mt-3">Rp. 150.000</h3>
                </x-card>
                <x-card className="hidden md:block">
                    <p>{{ __("Jumlah Uang Saat Ini") }}</p>
                    <h3 class="font-extrabold text-3xl mt-3">Rp. 150.000</h3>
                </x-card>
                <div class="flex gap-3 lg:hidden">
                    <x-card>
                        <p class="text-sm">{{ __("Jumlah Uang Masuk") }}</p>
                        <h3 class="font-extrabold mt-3">Rp. 1.200.000</h3>
                    </x-card>
                    <x-card>
                        <p class="text-sm">{{ __("Jumlah Uang Keluar") }}</p>
                        <h3 class="font-extrabold mt-3">Rp. 1.050.000</h3>
                    </x-card>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
