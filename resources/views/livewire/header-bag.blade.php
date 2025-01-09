<div class="btn border rounded-circle position-relative dropdown">
    <i class="fa-light fa-bag-shopping" style="font-size: 30px;" id="bagDropdown" data-bs-toggle="dropdown"
        aria-expanded="false"></i>
    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
        {{ $itemCount }}
        <span class="visually-hidden">unread messages</span>
    </span>

    <!-- Dropdown menu -->
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bagDropdown" style="width: 300px;">
        <!-- Check if there are items in the cart -->
        @if ($itemCount > 0)
            @foreach ($products as $item)
                <li class="dropdown-item d-flex justify-content-between align-items-center py-2">
                    <div class="d-flex align-items-center">
                        <!-- Item Image -->
                        <img src="{{ $item['image'] }}" alt="Product Image" class="img-fluid rounded"
                            style="width: 50px; height: 50px; object-fit: cover;">

                        <!-- Item Name and Quantity -->
                        <div class="ms-3">
                            <strong>{{ $item['name'] }}</strong>
                            <p class="mb-0 text-muted small">soni: {{ $item['quantity'] }}</p>
                        </div>
                    </div>
                    <!-- Remove Item (Trash Icon) -->
                    <button wire:click="removeFromCart({{ $item['id'] }})" class="btn btn-sm text-danger border-0 p-0"
                        title="Remove from cart">
                        <i class="fa-light fa-trash" style="font-size: 18px;"></i>
                    </button>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
            @endforeach
        @else
            <li class="dropdown-item text-center">
                <p class="mb-0">Your cart is empty</p>
            </li>
        @endif
        <li class="p-1" >
            <a href="{{route('frontend.cart')}}" class="btn btn-primary w-100">{{__('backend.add_to_card')}}</a>
        </li>
    </ul>
</div>
