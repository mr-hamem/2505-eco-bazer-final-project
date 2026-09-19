<div class="card h-100 nav-card">
    <div class="card-header">
        <h5 class="card-title m-0">Navigation</h5>
    </div>
    <div class="card-body p-0">
        <div class="dash-nav-list">
            <a href="{{ route('customer.dashboard') }}"
               class="dash-nav-item {{ request()->routeIs('customer.dashboard') ? 'active' : '' }}">
                <i class="bx bxs-dashboard"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('customer.orders') }}"
               class="dash-nav-item {{ request()->routeIs('customer.orders') ? 'active' : '' }}">
                <i class="bx bx-refresh"></i>
                <span>Order History</span>
            </a>
            <a href="{{ route('customer.wishlist') }}"
               class="dash-nav-item {{ request()->routeIs('customer.wishlist') ? 'active' : '' }}">
                <i class="bx bx-heart"></i>
                <span>Wishlist</span>
            </a>
            <a href="{{ route('customer.profile') }}"
               class="dash-nav-item {{ request()->routeIs('customer.profile') ? 'active' : '' }}">
                <i class="bx bx-user"></i>
                <span>My Profile</span>
            </a>
            <a href="{{ route('customer.settings') }}"
               class="dash-nav-item {{ request()->routeIs('customer.settings') ? 'active' : '' }}">
                <i class="bx bx-cog"></i>
                <span>Settings</span>
            </a>
            <a href="{{ route('customer.addresses') }}"
               class="dash-nav-item {{ request()->routeIs('customer.addresses') ? 'active' : '' }}">
                <i class="bx bx-map"></i>
                <span>Addresses</span>
            </a>
            <span class="dash-nav-item disabled" title="Coming soon">
                <i class="bx bx-lock-alt"></i>
                <span>Shopping Cart</span>
            </span>
            <a href="#"
               class="dash-nav-item dash-nav-logout"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bx bx-log-out"></i>
                <span>Log-out</span>
            </a>
            <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>