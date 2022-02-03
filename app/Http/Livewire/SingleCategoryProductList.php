<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SingleCategoryProductList extends Component
{
    public $category;

    public $search = '';


    public function render()
    {
        $cat_id = $this->category->id;
        $products = Product::search(['name', 'description'], $this->search)
            ->where('category_id', $cat_id)
            ->with('category')
            ->paginate(12);
        return view('livewire.single-category-product-list', ['products' => $products]);
    }
}
