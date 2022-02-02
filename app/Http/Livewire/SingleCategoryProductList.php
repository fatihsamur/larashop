<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class SingleCategoryProductList extends Component
{
    public $category;
    public $products;

    public function render()
    {
        return view('livewire.single-category-product-list');
    }
}
