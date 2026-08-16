<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme"
    style="background-color: #ffffff !important; font-family: 'Poppins', 'Inter', sans-serif;">
    <div class="app-brand demo">
        <a href="{{ route('frontend.index') }}" class="app-brand-link">
            <img src="{{ asset('frontend/img/Logo.png') }}" alt="Ecobazar Logo" style="max-height: 40px;">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle" style="color: #1a1a1a;"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ activeLink('customer.dashboard')  }}">
            <a href="{{ route('customer.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ activeLink('customer.orders')  }}">
            <a href="{{ route('customer.orders') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div data-i18n="Analytics">My Orders</div>
            </a>
        </li>
        <li class="menu-item {{ activeLink('customer.wishlist')  }}">
            <a href="{{ route('customer.wishlist') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-heart"></i>
                <div data-i18n="Analytics">Wishlist</div>
            </a>
        </li>
        <li class="menu-item {{ activeLink('customer.profile')  }}">
            <a href="{{ route('customer.profile') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">My Profile</div>
            </a>
        </li>
        <li class="menu-item {{ activeLink('customer.settings')  }}">
            <a href="{{ route('customer.settings') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Analytics">Settings</div>
            </a>
        </li>
        <li class="menu-item {{ activeLink('customer.addresses')  }}">
            <a href="{{ route('customer.addresses') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map"></i>
                <div data-i18n="Analytics">Addresses</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('frontend.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-store-alt"></i>
                <div data-i18n="Analytics">Back to Shop</div>
            </a>
        </li>
    </ul>
</aside>
