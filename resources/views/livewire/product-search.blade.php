<div class="container mx-auto py-16 px-8 flex flex-col">
    <div class="mb-4">
        <input
            type="text"
            name="search_products"
            id="search_products"
            placeholder="Search For Procuts"
            wire:model.lazy='search'
        >
    </div>

    <table class="shadow-lg">
        <thead>
            <tr>
                <th class="py-2 px-3 bg-green-100 border-b-2 text-left">ID</th>
                <th class="py-2 px-3 bg-green-100 border-b-2 text-left">Image</th>
                <th class="py-2 px-3 bg-green-100 border-b-2 text-left">Title</th>
                <th class="py-2 px-3 bg-green-100 border-b-2 text-left">Price</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td class="pl-4">{{ $product['id'] }}</td>
                    <td>
                        <img class="w-10 rounded" src="{{ $product['iamge'] }}" alt="{{ $product['title'] }}">
                    </td>
                    <td>{{ $product['title'] }}</td>
                    <td>{{ $product['price'] }}</td>
                </tr>
            @empty
                <p class="text-gray-700 text-2xl d-block">No Products Found !!</p>
            @endforelse
        </tbody>
    </table>

    <div class="mt-12">
        {{ $products->links() }}
    </div>
</div>
