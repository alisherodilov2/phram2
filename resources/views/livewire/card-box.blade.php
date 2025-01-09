<section class="cart-area pt-130 pb-120 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s"
    style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-content table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">{{ __('backend.image') }}</th>
                                <th class="cart-product-name">{{ __('backend.name') }}</th>
                                <th class="product-quantity">{{ __('backend.soni') }}</th>
                                <th class="product-remove">{{ __('backend.remove') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($products)
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="product-thumbnail"><a href="shop-details.html"><img
                                                    src="{{ $product['image'] }}" alt=""></a></td>
                                        <td class="product-name"><a href="shop-details.html">{{ $product['name'] }}</a>
                                        </td>
                                        <td class="product-quantity">
                                            <span class="cart-minus"
                                                wire:click="removeProduct({{ $product['id'] }})">-</span>
                                            <input class="cart-input" type="text" value="{{ $product['quantity'] }}">
                                            <span class="cart-plus"
                                                wire:click="addProduct({{ $product['id'] }})">+</span>
                                        </td>
                                        <td class="product-remove"><i class="fa fa-times"
                                                wire:click="deleteProduct({{ $product['id'] }})"></i>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            <tr>
                                <td class="product-thumbnail"></td>
                                <td class="product-name"></td>
                                <td class="product-quantity">
                                    {{ $countQuantity }}
                                </td>
                                <td class="product-remove"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="coupon-all">
                            {{-- <div class="coupon">
                                <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                    placeholder="Coupon code" type="text">
                                <button class="tp-btn" name="apply_coupon" type="submit">Apply
                                    coupon</button>
                            </div> --}}
                            <div class="coupon2">
                                <button class="tp-btn" name="update_cart" data-bs-toggle="modal"
                                    data-bs-target="#centeredModal">{{ __('backend.add_order') }}</button>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-md-5 ">
                        <div class="modal fade " id="centeredModal" tabindex="1" aria-labelledby="centeredModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg "> <!-- This centers the modal -->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="centeredModalLabel"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="contactform__input mb-30">

                                                        <input name="name" type="text" wire:model="fullname"
                                                            required placeholder="F.I.SH" class="form-control p-3">
                                                        @error('fullname')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="contactform__input mb-30">
                                                        <input name="email" type="email" wire:model="email" required
                                                            placeholder="Email manzilingizni kiriting"
                                                            class="form-control p-3">
                                                        @error('phone')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="contactform__input mb-30">
                                                        <input name="number" type="text" wire:model="phone" required
                                                            placeholder="Raqamingizni kiriting" class="form-control p-3"
                                                            id="phone-input" oninput="formatPhoneNumber(this)"
                                                            maxlength="14">
                                                        @error('email')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="contactform__input mb-30-btn">
                                                        <button onclick="checkOut()" data-bs-dismiss="modal"
                                                            aria-label="Close" class="tp-btn">Xabar
                                                            qoldirish</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="successModal" tabindex="1" aria-labelledby="successModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered ">
                                <div class="modal-content ">
                                    <div class="modal-body p-0 ">
                                        <img src="https://i.pinimg.com/originals/58/74/54/587454875eef389cb2934f3837fdd04a.gif"
                                            alt="" class="w-100 ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function checkOut() {
            const fullnameInput = document.querySelector('input[name="name"]').value;
            const email = document.querySelector('input[name="email"]').value;
            const phone = document.querySelector('input[name="number"]').value;

            if (fullnameInput.trim() === '' || email.trim() === '' || phone.trim() === '' || !validateEmail(email)) {

                return;
            }
            @if ($products)
                sendMessage(fullnameInput, email, phone);
            @endif
            @this.call('checkOut');
        }

        function sendMessage(fullname, email, phone) {
            var botToken = "7701078740:AAHNznRXgnUmZYGrUJKxyhi_M2cqolh2FVM"; // Replace with your bot token
            var chatId = "1103406709"; // Replace with the target chat ID or user ID
            @php
                $cartItems = '';
                if ($products) {
                    foreach ($products as $value) {
                        $cartItems .= '<b>' . htmlspecialchars($value['name'] . ' (' . $value['quantity'] . ')', ENT_QUOTES, 'UTF-8') . "</b>\n";
                    }
                }

            @endphp
            var cartItems = @json($cartItems);
            var message = `
<b>🤵Mijoz haqida:</b>\n
<b>Ism:</b> ${fullname}\n
<b>📧Email:</b> ${email}\n
<b>📱   Telefon:</b> ${phone}\n
<b>Buyurtma Haqida:</b>
 ${cartItems}
`;
            console.log(message);

            var url =
                `https://api.telegram.org/bot${botToken}/sendMessage?chat_id=${chatId}&text=${encodeURIComponent(message)}&parse_mode=HTML`;

            fetch(url)
                .then(response => response.json()) // Parse the response as JSON
                .then(data => {
                    console.log("Message sent successfully:", data); // Handle the success
                })
                .catch(error => {
                    console.error("Error sending message:", error); // Handle errors
                });
        }

        function validateEmail(email) {
            const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return regex.test(email);
        }

        function formatPhoneNumber(input) {
            let value = input.value.replace(/\D/g, ''); // Remove all non-digit characters

            // Ensure the country code is fixed as '998'
            if (value.length > 3) {
                value = '998' + value.substring(3); // Always start with '998'
            }

            // Apply formatting for the rest of the digits
            if (value.length > 6) {
                value = value.replace(/^(\d{3})(\d{2})(\d{3})(\d{2})(\d{2})$/, '$1-$2-$3-$4-$5');
            } else if (value.length > 5) {
                value = value.replace(/^(\d{3})(\d{2})(\d{3})(\d{2})$/, '$1-$2-$3-$4');
            } else if (value.length > 3) {
                value = value.replace(/^(\d{3})(\d{2})(\d{3})$/, '$1-$2-$3');
            } else if (value.length > 2) {
                value = value.replace(/^(\d{3})(\d{2})$/, '$1-$2');
            }

            input.value = value; // Update the input value with the formatted value
        }
    </script>
</section>
