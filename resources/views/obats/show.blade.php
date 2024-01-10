<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Detail Obat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">

                <!-- Display employee details -->
                <div class="grid grid-cols-2 gap-4 text-gray-700 dark:text-gray-300">
                    <p class="mb-2"><strong>ID:</strong></p>
                    <p class="mb-2">{{ $obat->uuid }}</p>

                    <p class="mb-2"><strong>Nama Obat:</strong></p>
                    <p class="mb-2">{{ $obat->namaobat }}</p>

                    <p class="mb-2"><strong>Deskripsi:</strong></p>
                    <p class="mb-2">{{ $obat->deskripsi }}</p>

                    <p class="mb-2"><strong>Jumlah:</strong></p>
                    <p class="mb-2">{{ $obat->jumlah }}</p>

                    <p class="mb-2"><strong>Harga:</strong></p>
                    <p class="mb-2">{{ $obat->harga }}</p>

                    <!-- Add other details as needed -->
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
