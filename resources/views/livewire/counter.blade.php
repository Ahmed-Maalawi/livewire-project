<div class="flex justify-center align-baseline w-700 mt-40">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <button wire:click='increment'
        class="py-2 px-4 bg-indigo-500 hover-bg-indigo-900 rounded text-white">+</button>
    <span class="text-center mx-4 mt-2">{{ $count }}</span>
    <button wire:click='decrement'
        class="py-2 px-4 bg-indigo-500 hover-bg-indigo-900 rounded text-white">-</button>
</div>
