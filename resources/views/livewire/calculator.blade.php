<div>
    <div class="flex flex-col items-center">
        <div class="flex p-16 mx-auto justify-center items-center gap-4">
            <input type="number" wire:model='num1'>
            <select name="w-24" id="operation" wire:model='operatoin'>
                <option selected value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            <input type="number" wire:model='num2'>

            <button wire:click='calculate'
                class="px-2 py-4 bg-indigo-700 text-white hover:bg-indigo-400 disabled:cursor-not-allowed disabled:bg-opacity-75 rounded"
                {{ $disabled ? 'disabled' : '' }}>=</button>
        </div>

        <p class="text-3xl">{{ $result }}</p>
    </div>
</div>
