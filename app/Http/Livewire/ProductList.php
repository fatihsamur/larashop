<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.product-list', [
            'products' => DB::table('products')
                ->orderBy('created_at', 'desc')
                ->paginate(12),
        ]);
    }
}
