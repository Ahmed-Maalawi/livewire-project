<div class="p-6">
    <form wire:submit.prevent='save' class="flex flex-col w-[400px] mx-auto py-16">

        @if ($image)
            image preview:
            <div class="flex flex-wrap justify-center gap-6">
                @foreach ($image as $item)
                    <img src="{{ $item->temporaryUrl() }}" class="w-[110px] h-[90px] object-cover">
                @endforeach
            </div>
        @endif

        <input type="file" wire:model='image' class="mb-4" multiple>

        @error('image')
            <span class="error">{{ $message }}</span>
        @enderror

        <button class="py-2 px-4 bg-indigo-600 rounded text-white"
            type="submit">Save Photo</button>
    </form>

    <div class="flex flex-wrap gap-7">
        {{-- {{ dd($images) }} --}}
        @foreach ($images as $item)
            <img src="{{ asset($item) }}" class="w-[110px] h-[90px] object-cover">
        @endforeach
    </div>
</div>
