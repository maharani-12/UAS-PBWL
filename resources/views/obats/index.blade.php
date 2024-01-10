<!-- resources/views/employees/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Daftar Obat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Oops!</strong>
                    <span class="block sm:inline">{{ $errors->first() }}</span>
                </div>
            @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-end p-4">
                    <a href="{{ route('obats.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Masukkan
                        Obat</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Nama Obat
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Deskripsi
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Jumlah
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Harga
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class=" divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse ($obats as $obat)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-white">
                                        {{ $obat->uuid }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-white">
                                        {{ $obat->namaobat }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-white">
                                        {{ $obat->deskripsi }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-white">
                                        {{ $obat->jumlah }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-white">
                                        {{ $obat->harga }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-white">
                                        <a href="{{ route('obats.show', $obat->id) }}"
                                            class="text-blue-500 hover:underline">View</a>
                                        <a href="{{ route('obats.edit', $obat->id) }}"
                                            class="ml-2 text-yellow-500 hover:underline">Edit</a>
                                        <!-- Delete action with confirmation dialog -->
                                        <form action="{{ route('obats.destroy', $obat->id) }}" method="POST"
                                            class="inline ml-2"
                                            onsubmit="return confirm('Apakah kamu yakin akan menghapus obat')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 underline">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-4 whitespace-nowrap">Obat tidak ditemukan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class="p-4">
                        {{ $obats->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
