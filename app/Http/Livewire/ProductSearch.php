<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductSearch extends Component
{
    use WithPagination;

    public string $search = '';

    protected $queryString = ['search'];

    public function render()
    {

        $query = Product::query();

        if($this->search) {
            $query->where('title', 'like', "%{$this->search}%")
                ->orWhere('description', 'like', "%{$this->search}%")->get();
        }

        return view('livewire.product-search',[
            'products' => $query->paginate(10),
        ]);
    }


    public function update($property)
    {
        if ($property === 'search') {
            $this->resetPage();
        }
    }
}
