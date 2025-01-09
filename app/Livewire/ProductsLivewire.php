<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Products;
use Illuminate\Support\Facades\Session;

class ProductsLivewire extends Component
{
    public $products;

    public function mount()
    {
        // Fetch all products from the database
        $this->products = Products::all();
    }

    public function addToCart($id)
    {
   
        // Example: Adding product to a session-based cart
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $product = Products::find($id);
            // dd($product->title);
            $cart[$id] = [
                'id' => $product->id,
                'image' => $product->getFirstMediaUrl(),
                'name' => $product->title,
                'quantity' => 1,
            ];
        }

        Session::put('cart', $cart);
        $this->dispatch('update-cart', count: count($cart));
        // dd(Session::get('cart'));
    }
    public function checkOut(){
        
    }
    public function render()
    {
        return view('livewire.products-livewire', [
            'products' => $this->products,
        ]);
    }
}
