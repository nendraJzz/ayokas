<x-app-layout>

    <div class="py-12 px-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center mb-5">
                <img src="/svg/dashboard.svg" alt="dashboard icon" class="w-6 h-6 mr-2">
                <p class="ml-2 font-semibold text-xl">Dashboard</p>            
            </div>
            <div class="flex gap-5 flex-col lg:flex-row">
                <x-card>
                    <p>{{ __("Jumlah Uang Saat Ini (Rupiah)") }}</p>
                    <h3 class="font-extrabold text-3xl mt-3">{{ number_format($sum , 0, ',', '.')}}</h3>
                </x-card>
                <x-card className="hidden md:block">
                    <p>{{ __("Jumlah Uang Masuk (Rupiah)") }}</p>
                    <h3 class="font-extrabold text-3xl mt-3">150.000</h3>
                </x-card>
                <x-card className="hidden md:block">
                    <p>{{ __("Jumlah Uang Keluar (Rupiah)") }}</p>
                    <h3 class="font-extrabold text-3xl mt-3">150.000</h3>
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
