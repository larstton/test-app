<div>
    <div class="flex h-screen">
        <div class="w-1/4 bg-blue-200 p-4">
            <h2 class="text-center mt-8 cursor-pointer" wire:click="changeScreen(1)">Screen 1 </h2>
            <h2 class="text-center mt-8 cursor-pointer" wire:click="changeScreen(2)">Screen 2</h2>
            <h2 class="text-center mt-8 cursor-pointer" wire:click="changeScreen(3)">Screen 3</h2>
        </div>
        <div class="w-3/4 bg-green-200 p-4">
            <livewire:screen></livewire:screen>
        </div>
    </div>
</div>
