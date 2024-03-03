<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsGrid extends Component
{
    use WithPagination;
    public $term;

    public function render()
    {
        $products = $this->query();
        return view('livewire.products-grid', ['products' => $products]);
    }

    public function query()
    {
        $query = Product::query();
        if ($this->term) {
            $query->where('code', 'like', $this->term)
                ->orWhere('title', 'like', '%' . $this->term . '%')
                ->orWhere('description', 'like', '%' . $this->term . '%');
        }
        return $query->simplePaginate(8);
    }
}
