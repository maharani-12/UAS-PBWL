<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambahkan Obat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">

                <form action="{{ route('obats.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="namaobat" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama
                            Obat</label>
                        <input type="text" name="namaobat" id="namaobat"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('namaobat') }}"
                            required />
                    </div>

                    <div class="mb-4">
                        <label for="deskripsi"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Deskripsi</label>
                        <input type="text" name="deskripsi" id="deskripsi"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('deskripsi') }}"
                            required />
                    </div>

                    <div class="mb-4">
                        <label for="jumlah"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jumlah</label>
                        <input type="text" name="jumlah" id="jumlah"
                            class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('jumlah') }}"
                            required />
                    </div>

                    <div class="mb-4">
                        <label for="harga"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Harga</label>
                        <input type="text" id="harga" name="harga" value="{{ old('harga') }}" required
                            autocomplete="text" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                    </div>


                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Tambahkan
                            Obat</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
