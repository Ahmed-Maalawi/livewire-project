<div>
    <div class="flex flex-col gap-6 w-[600px] mx-auto py-16">
        <select wire:model='selectedContinent' wire:change='changeCountinent'>
            <option value="-1">Please Select Continent</option>
            @foreach ($continents as $continent)
                <option value="{{ $continent['id'] }}">{{ $continent['name'] }}</option>
            @endforeach
        </select>

        <div class="flex relative">

            <p wire:loading class="absolute left-0 top-0 right-0 bottom-0 z-10 bg-white bg-opacity-80 py-2 px-3">
                Loading...
            </p>
            <select wire:model='selectedCountry' class="w-[600px]">
                <option value="-1">Please Select Country</option>
                @foreach ($countries as $county)
                    <option value="{{ $county['id'] }}">{{ $county['name'] }}</option>
                @endforeach
            </select>
        </div>



    </div>
</div>
