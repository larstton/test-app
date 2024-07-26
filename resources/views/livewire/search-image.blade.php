<div>
    <div class="p-4">
        <div class="mb-4">
            <label for="search" class="block text-sm font-medium text-gray-700">Search:</label>
            <input type="text" id="search" wire:keydown.enter="searchImage" wire:model="searchQuery"
                   class="mt-1 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"
                   placeholder="Search for an image">
        </div>

        <div class="flex justify-center items-center">
            @if(!empty($photoUrl))
                @if(!empty($photos) && count($photos) > 0)
                    <button wire:click="prevImage" class="p-2 bg-blue-200 rounded-full">&larr;</button>
                @endif
                <img src="{{ $photoUrl }}" wire:model.live="photoUrl" alt="Current Image" class="mx-4 w-1/2">
                <button wire:click="searchImage" class="p-2 bg-blue-200 rounded-full">&rarr;</button>
            @endif
        </div>
    </div>
</div>
