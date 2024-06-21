<x-app-layout>
    <div class="py-6 px-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full max-w-lg mx-auto p-2 sm:p-8">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-lg font-medium mb-6">Bayar Kas Anda</h2>
                    <form action="{{ route('pay') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="col-span-2 sm:col-span-1">
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                                <input type="text" name="name" id="name" placeholder="Nama Kamu" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500" required/>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="nis" class="block text-sm font-medium text-gray-700 mb-2">Nis</label>
                                <input type="text" name="nis" id="nis" placeholder="1212121" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500" required/>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="class" class="block text-sm font-medium text-gray-700 mb-2">Kelas</label>
                                <input type="text" name="class" id="class" placeholder="XI Example" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500" required/>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="amount" class="block text-sm font-medium text-gray-700 mb-2">Jumlah Kas</label>
                                <input type="text" name="amount" id="amount" placeholder="10000" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500" required/>
                            </div>
                        </div>
                        <div class="mt-8">
                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-medium py-3 rounded-lg focus:outline-none">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>