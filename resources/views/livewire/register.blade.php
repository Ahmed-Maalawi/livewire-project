<form wire:submit.prevent='submit' class="w-[400px] mx-auto py-16">
    @if (session()->has('message'))
        <div class="bg-emerald-600 text-white py-3 px-4 mb-4">
            {{ session('message') }}
        </div>
    @endif


    <div class="flex gap-4 mb-4">
        <label for="">
            <input type="radio" value="customer" name="role" wire:model='role'>
            Customer
        </label>

        <label for="">
            <input type="radio" value="vendor" name="role" wire:model='role'>
            Vendor
        </label>
    </div>

    <div class="mb-4">
        <input
            type="text"
            wire:model.debounce.500ms='first_name'
            name="first_name"
            id="first_name"
            placeholder="First Name"
            class="w-full border @error('first_name')border-red-500 @enderror"
        >

        @error('first_name') <span class="text-500">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms='last_name' name="last_name" id="last_name" placeholder="Last Name"
            class="w-full border @error('last_name')border-red-500 @enderror">

        @error('last_name') <span class="text-500">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <input type="email" wire:model.debounce.500ms='email' name="email" id="email" placeholder="Email"
            class="w-full border @error('email')border-red-500 @enderror">

        @error('email') <span class="text-500">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <input type="password" wire:model.debounce.500ms='password' name="password" id="password" placeholder="Password"
            class="w-full border @error('password')border-red-500 @enderror">

        @error('password') <span class="text-500">{{ $message }}</span> @enderror
    </div>

    @if ($role === 'vendor')
        <div class="mb-4">
            <input type="text" wire:model.debounce.500ms='company_name' name="company_name" id="company_name" placeholder="Company Name"
                class="w-full border @error('company_name')border-red-500 @enderror">

            @error('company_name') <span class="text-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <input type="text" wire:model.debounce.500ms='vat_number' name="vat_number" id="vat_number" placeholder="vat_number"
                class="w-full border @error('vat_number')border-red-500 @enderror">

            @error('vat_number') <span class="text-500">{{ $message }}</span> @enderror
        </div>
    @endif


    <button type="submit" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-800 rounded text-white" wire:click='submit'>Register</button>
</form>
