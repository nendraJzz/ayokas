<x-app-layout>
    <div class="py-12 px-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center mb-5">
                <img src="/svg/data.svg" alt="dashboard icon" class="w-6 h-6 mr-2">
                <p class="ml-2 font-semibold text-xl">Data Kas Siswa</p>            
            </div>
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nis
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kelas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jumlah Kas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->nis }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->class }}
                            </td>
                            <td class="px-6 py-4">
                                Rp. {{ $item->amount }}
                            </td>
                            <td class="flex items-center px-6 py-4">
                                <x-modal-form id="{{ $item->id }}" name="{{ $item->name }}" nis="{{ $item->nis }}" class="{{ $item->class }}" amount="{{ $item->amount }}" action="/user/update/{{ $item->id }}"></x-modal-form>
                                <a href="/user/delete/{{ $item->id }}" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>