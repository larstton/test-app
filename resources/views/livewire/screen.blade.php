<div>
        @if($screen == 1)
        <div class="p-4">
            <div class="mb-4">
                <label for="search" class="block text-sm font-medium text-gray-700">Search:</label>
                <input type="text" id="search" wire:model.debounce.300.live="search"
                       class="mt-1 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="Search for a book">
            </div>
            <table class="min-w-full bg-white">
                <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-200">ID</th>
                    <th class="py-2 px-4 bg-gray-200">Title</th>
                    <th class="py-2 px-4 bg-gray-200">Status</th>
                    <th class="py-2 px-4 bg-gray-200">Notes</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td class="border px-4 py-2">{{ $book->id }}</td>
                        <td class="border px-4 py-2">{{ $book->title }}</td>
                        <td class="border px-4 py-2">{{ $book->status ? 'In Stock' : 'Out of Stock' }}</td>
                        <td class="border px-4 py-2">{{ $book->notes }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

            <h2 class="text-center mt-8">Content Area 1</h2>
        @elseif($screen == 2)
            <livewire:search-image></livewire:search-image>
        @else
            <livewire:colours-grid></livewire:colours-grid>
        @endif
</div>
