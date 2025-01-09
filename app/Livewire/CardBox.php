<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Models\Orders;
use App\Models\OrderProducts;
class CardBox extends Component
{
    public $products = [],
        $countQuantity;
    public $fullname, $email, $phone;

    public function mount()
    {
        $this->products = Session::get('cart');
    }
    public function addProduct($id)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }
        Session::put('cart', $cart);
        $this->dispatch('update-cart', count: count($cart));
        $this->showStatic();
    }
    public function removeProduct($id)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']--;
        }
        Session::put('cart', $cart);
        $this->dispatch('update-cart', count: count($cart));
        $this->showStatic();
    }
    public function deleteProduct($id)
    {
        // Retrieve the cart from the session
        $cart = Session::get('cart', []);

        // Check if the product exists in the cart and remove it
        if (isset($cart[$id])) {
            unset($cart[$id]); // Remove the product from the cart
        }

        // Save the updated cart back to the session
        Session::put('cart', $cart);

        // Dispatch an event to notify the cart has been updated
        $this->dispatch('update-cart', count: count($cart));
        $this->products = Session::get('cart');
        $this->showStatic();
    }
    public function showStatic()
    {
        $products = Session::get('cart');
        $quantity = 0;
        if ($products || count($products) > 0) {
            foreach ($products as $value) {
                $quantity += $value['quantity'];
            }
        }

        $this->countQuantity = $quantity;
    }
    public function checkOut()
    {
        if (!empty($this->fullname) && !empty($this->phone) && !empty($this->email)) {
            $products = Session::get('cart');
            if(!$products){
                return;
            }
            $order = Orders::create([
                'fullname' => $this->fullname,
                'phone' => $this->phone,
                'email' => $this->email,
                'status' => 0,
            ]);
            

            foreach ($products as $value) {
                OrderProducts::firstOrCreate([
                    'order_id' => $order->id,
                    'products_id' => $value['id'],
                ]);
            }
            Session::forget('cart');
            $this->showStatic();
        }
    }

    public function render()
    {
        return view('livewire.card-box');
    }
}
