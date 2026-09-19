@if ($cartItems->isEmpty())
    <div class="text-center py-4">
        <p class="text-muted mb-3">Your cart is empty.</p>
        <a href="{{ route('frontend.shop') }}" class="btn btn-outline-success btn-sm">Continue Shopping</a>
    </div>
@else
    <div class="cart-offcanvas-items">
        @foreach ($cartItems as $cartItem)
            @php
                $cartProduct = $cartItem->product;
                $itemPrice = $cartProduct?->selling_price ?? $cartProduct?->price ?? 0;
            @endphp
            <div class="d-flex align-items-center gap-3 py-3 border-bottom">
                <img src="{{ getImage($cartProduct?->image) }}" alt="{{ $cartProduct?->title }}" class="rounded" style="width: 56px; height: 56px; object-fit: cover;">
                <div class="flex-grow-1">
                    <h6 class="mb-1">{{ $cartProduct?->title ?? 'Product unavailable' }}</h6>
                    <small class="text-muted">{{ $cartItem->qty }} ? ?{{ number_format($itemPrice, 2) }}</small>
                </div>
                <span class="fw-semibold">?{{ number_format($itemPrice * $cartItem->qty, 2) }}</span>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-between fw-bold pt-3">
        <span>Subtotal</span>
        <span>?{{ number_format($cartPrice, 2) }}</span>
    </div>
    <a href="{{ route('frontend.order-summary') }}" class="btn btn-success w-100 mt-3">Proceed to Order</a>
@endif
