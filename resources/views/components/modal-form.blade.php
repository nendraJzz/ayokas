@props(['id' => '{{ $item->id }}' , 'name' => '', 'nis' => '', 'class' => '', 'amount' => '', 'action' => ''])

<button class="font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="openModal({{ $id }})">Edit</button>

<div id="editModal{{ $id }}" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="flex justify-between items-center">
            <h3 class="text-lg font-medium text-gray-900">Edit Data</h3>
            <button class="text-gray-600 hover:text-gray-900" onclick="closeModal({{ $id }})">&times;</button>
        </div>
        <form action="{{ $action }}" method="POST">
            @csrf
            <div class="col-span-2 sm:col-span-1">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                <input type="text" name="name" id="name" value="{{ $name }}" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500" required/>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="nis" class="block text-sm font-medium text-gray-700 mb-2">Nis</label>
                <input type="text" name="nis" id="nis" value="{{ $nis }}" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500" required/>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="class" class="block text-sm font-medium text-gray-700 mb-2">Kelas</label>
                <input type="text" name="class" id="class" value="{{ $class }}" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500" required/>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="amount" class="block text-sm font-medium text-gray-700 mb-2">Jumlah Kas</label>
                <input type="text" name="amount" id="amount" value="{{ $amount }}" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500" required/>
            </div>
            <div class="flex justify-end mt-4">
                <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" onclick="closeModal({{ $id }})">Cancel</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal(id) {
            document.getElementById('editModal' + id).classList.remove('hidden');
        }
    function closeModal(id) {
        document.getElementById('editModal' + id).classList.add('hidden');
    }
</script>
