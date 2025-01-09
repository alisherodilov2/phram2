<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
class HeaderBag extends Component
{
    public $itemCount = 0;
    public $products;

    // Listen for the cartUpdated event
    protected $listeners = ['cartUpdated' => 'updateItemCount'];

    public function mount()
    {
        // Initialize the item count from the session
        $this->itemCount = count(Session::get('cart', []));
        $this->products = Session::get('cart');
    }
    public function removeFromCart($id)
    {
        // Retrieve the cart from session
        $cart = Session::get('cart', []);

        // Check if the item exists in the cart
        if (isset($cart[$id])) {
            unset($cart[$id]); // Remove the item from the cart
        }

        // Update the session with the new cart data
        Session::put('cart', $cart);

        // Update the Livewire properties
        $this->itemCount = count($cart);
        $this->cartItems = $cart;
        $this->updateItemCount(count($cart));
    }

    #[On('update-cart')]
    public function updateItemCount($count)
    {
        // Update the item count when the event is emitted
        $this->itemCount = $count;
        $this->products = Session::get('cart');
    }

    public function render()
    {
        return view('livewire.header-bag', [
            'itemCount' => $this->itemCount,
        ]);
    }
}
