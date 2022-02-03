<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public $search = '';


    public function render()
    {
        $products = Product::search(['name', 'description'], $this->search)->with('category')->paginate(12);
        return view('livewire.product-list', ['products' => $products]);
    }
}
