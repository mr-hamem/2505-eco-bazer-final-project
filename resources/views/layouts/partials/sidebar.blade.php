<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="background-color: #ffffff !important; font-family: 'Poppins', 'Inter', sans-serif;">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <img src="{{ asset('frontend/img/Logo.png') }}" alt="Ecobazar Logo" style="max-height: 40px;">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle" style="color: #1a1a1a;"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard (Active State matching the 'Shop now' button green) -->
        <li class="menu-item {{ activeLink('admin.dashboard')  }}">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ activeLink('admin.category.index')  }}">
            <a href="{{ route('admin.category.index') }}" class="menu-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="currentColor" viewBox="0 0 24 24" class="menu-icon tf-icons bx bx-category">
                    <!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
                    <path d="M3 3h4v4H3zm7 0h4v4h-4z"></path>
                    <path d="M10 3h4v4h-4zm7 0h4v4h-4zM3 17h4v4H3zm7 0h4v4h-4z"></path>
                    <path d="M10 17h4v4h-4zm7 0h4v4h-4zM3 10h4v4H3zm7 0h4v4h-4z"></path>
                    <path d="M10 10h4v4h-4zm7 0h4v4h-4z"></path>
                </svg>
                <div data-i18n="Analytics">Category</div>
            </a>
        </li>
        <li class="menu-item {{ activeLink('admin.product.index')  }}">
            <a href="{{ route('admin.product.index') }}" class="menu-link">
                <!-- <i class="menu-icon tf-icons bx bx-shopping-bag"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="currentColor" viewBox="0 0 24 24" class="menu-icon tf-icons bx bx-shopping-bag">
                    <!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
                    <path d="M20 7h-.69a3.05 3.05 0 0 0-.21-4.1c-1.16-1.16-3.19-1.16-4.35 0l-2.04 2.04C12.07 3.23 10.44 2 8.5 2 6.02 2 4 4.02 4 6.5c0 .17 0 .34.03.5H4c-.52 0-.95.4-1 .92l-.91 10.92a2.007 2.007 0 0 0 1.99 2.17h15.83a2.007 2.007 0 0 0 1.99-2.17l-.91-10.92c-.04-.52-.48-.92-1-.92Zm-3.84-2.68c.41-.41 1.12-.41 1.53 0 .2.2.32.47.32.76s-.11.56-.32.76L16.53 7h-3.05zM6 6.5a2.5 2.5 0 0 1 5 0c0 .14-.01.29-.05.46 0 .01-.01.03-.01.04H6.05C6.02 6.84 6 6.67 6 6.5M4.09 19l.83-10h14.16l.83 10z"></path>
                    <path d="M12 14c-1.65 0-3-1.35-3-3H7c0 2.76 2.24 5 5 5s5-2.24 5-5h-2c0 1.65-1.35 3-3 3"></path>
                </svg>
                <div data-i18n="Analytics">Products</div>
            </a>
        </li>
        <li class="menu-item {{ activeLink('admin.customers.show')  }}">
            <a href="{{ route('admin.customers.show') }}" class="menu-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="currentColor" viewBox="0 0 24 24" class="menu-icon tf-icons bx bx-user">
                    <!--Boxicons v3.0.8 https://boxicons.com | License  https://docs.boxicons.com/free-->
                    <path d="M10 13H8c-2.76 0-5 2.24-5 5v1c0 .55.45 1 1 1h10c.55 0 1-.45 1-1v-1c0-2.76-2.24-5-5-5m-5 5c0-1.65 1.35-3 3-3h2c1.65 0 3 1.35 3 3zm7.73-11.49c-.08-.22-.19-.42-.3-.62v-.01c-.69-1.14-1.93-1.89-3.42-1.89-2.28 0-4 1.72-4 4s1.72 4 4 4c1.49 0 2.73-.74 3.42-1.89v-.01c.12-.2.22-.4.3-.62.02-.06.03-.12.05-.18.06-.17.11-.34.15-.52.05-.25.07-.51.07-.78s-.03-.53-.07-.78c-.03-.18-.09-.35-.15-.52-.02-.06-.03-.12-.05-.18M9 10c-1.18 0-2-.82-2-2s.82-2 2-2 2 .82 2 2-.82 2-2 2m6 0q-.165 0-.33-.03c-.22.66-.56 1.27-.98 1.81.41.13.84.22 1.31.22 2.28 0 4-1.72 4-4s-1.72-4-4-4c-.47 0-.9.09-1.31.22.43.53.76 1.14.98 1.81.11-.01.21-.03.33-.03 1.18 0 2 .82 2 2s-.82 2-2 2m1 3h-1.11c.6.58 1.08 1.27 1.44 2.03C17.83 15.2 19 16.46 19 18h-2v1c0 .35-.07.69-.18 1H20c.55 0 1-.45 1-1v-1c0-2.76-2.24-5-5-5"></path>
                </svg>
                <div data-i18n="Analytics">Customers</div>
            </a>
        </li>
        <!-- Layouts -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle" style="color: #1a1a1a; font-weight: 400;">
                <i class="menu-icon tf-icons bx bx-layout" style="color: #1a1a1a;"></i>
                <div data-i18n="Layouts">Layouts</div>
            </a>

            <ul class="menu-sub" style="background-color: #f9f9f9;">
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Without menu">Without menu</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-without-navbar.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Without navbar">Without navbar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-container.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Container">Container</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-fluid.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Fluid">Fluid</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-blank.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Blank">Blank</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small">
            <span class="menu-header-text" style="color: black; font-size: 28px;">Pages</span>
            <hr>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle" style="color: #1a1a1a;">
                <i class="menu-icon tf-icons bx bx-dock-top" style="color: #1a1a1a;"></i>
                <div data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub" style="background-color: #f9f9f9;">
                <li class="menu-item">
                    <a href="pages-account-settings-account.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Account">Account</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-notifications.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Notifications">Notifications</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Connections">Connections</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle" style="color: #1a1a1a;">
                <i class="menu-icon tf-icons bx bx-lock-open-alt" style="color: #666666;"></i>
                <div data-i18n="Authentications">Authentications</div>
            </a>
            <ul class="menu-sub" style="background-color: #f9f9f9;">
                <li class="menu-item">
                    <a href="auth-login-basic.html" class="menu-link" target="_blank" style="color: #4d4d4d;">
                        <div data-i18n="Basic">Login</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-register-basic.html" class="menu-link" target="_blank" style="color: #4d4d4d;">
                        <div data-i18n="Basic">Register</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank" style="color: #4d4d4d;">
                        <div data-i18n="Basic">Forgot Password</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle" style="color: #1a1a1a;">
                <i class="menu-icon tf-icons bx bx-cube-alt" style="color: #666666;"></i>
                <div data-i18n="Misc">Misc</div>
            </a>
            <ul class="menu-sub" style="background-color: #f9f9f9;">
                <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Error">Error</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-misc-under-maintenance.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Under Maintenance">Under Maintenance</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Components -->
        <li class="menu-header small">
            <span class="menu-header-text" style="color: black; font-size: 28px; ">Components</span>
            <hr>
        </li>

        <!-- Cards -->
        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link" style="color: #1a1a1a;">
                <i class="menu-icon tf-icons bx bx-collection" style="color: #666666;"></i>
                <div data-i18n="Basic">Cards</div>
            </a>
        </li>

        <!-- User interface -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle" style="color: #1a1a1a;">
                <i class="menu-icon tf-icons bx bx-box" style="color: #666666;"></i>
                <div data-i18n="User interface">User interface</div>
            </a>
            <ul class="menu-sub" style="background-color: #f9f9f9;">
                <li class="menu-item"><a href="ui-accordion.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Accordion">Accordion</div>
                    </a></li>
                <li class="menu-item"><a href="ui-alerts.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Alerts">Alerts</div>
                    </a></li>
                <li class="menu-item"><a href="ui-badges.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Badges">Badges</div>
                    </a></li>
                <li class="menu-item"><a href="ui-buttons.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Buttons">Buttons</div>
                    </a></li>
                <li class="menu-item"><a href="ui-carousel.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Carousel">Carousel</div>
                    </a></li>
                <li class="menu-item"><a href="ui-collapse.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Collapse">Collapse</div>
                    </a></li>
                <li class="menu-item"><a href="ui-dropdowns.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Dropdowns">Dropdowns</div>
                    </a></li>
                <li class="menu-item"><a href="ui-footer.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Footer">Footer</div>
                    </a></li>
                <li class="menu-item"><a href="ui-list-groups.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="List Groups">List groups</div>
                    </a></li>
                <li class="menu-item"><a href="ui-modals.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Modals">Modals</div>
                    </a></li>
                <li class="menu-item"><a href="ui-navbar.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Navbar">Navbar</div>
                    </a></li>
                <li class="menu-item"><a href="ui-offcanvas.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Offcanvas">Offcanvas</div>
                    </a></li>
                <li class="menu-item"><a href="ui-pagination-breadcrumbs.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                    </a></li>
                <li class="menu-item"><a href="ui-progress.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Progress">Progress</div>
                    </a></li>
                <li class="menu-item"><a href="ui-spinners.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Spinners">Spinners</div>
                    </a></li>
                <li class="menu-item"><a href="ui-tabs-pills.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Tabs &amp; Pills">Tabs &amp; Pills</div>
                    </a></li>
                <li class="menu-item"><a href="ui-toasts.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Toasts">Toasts</div>
                    </a></li>
                <li class="menu-item"><a href="ui-tooltips-popovers.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                    </a></li>
                <li class="menu-item"><a href="ui-typography.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Typography">Typography</div>
                    </a></li>
            </ul>
        </li>

        <!-- Extended components -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle" style="color: #1a1a1a;">
                <i class="menu-icon tf-icons bx bx-copy" style="color: #666666;"></i>
                <div data-i18n="Extended UI">Extended UI</div>
            </a>
            <ul class="menu-sub" style="background-color: #f9f9f9;">
                <li class="menu-item"><a href="extended-ui-perfect-scrollbar.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                    </a></li>
                <li class="menu-item"><a href="extended-ui-text-divider.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Text Divider">Text Divider</div>
                    </a></li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="icons-boxicons.html" class="menu-link" style="color: #1a1a1a;">
                <i class="menu-icon tf-icons bx bx-crown" style="color: #666666;"></i>
                <div data-i18n="Boxicons">Boxicons</div>
            </a>
        </li>

        <!-- Forms & Tables -->
        <li class="menu-header small">
            <span class="menu-header-text" style="color: black; font-size: 28px; ">Forms & Tables</span>
            <hr>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle" style="color: #1a1a1a;">
                <i class="menu-icon tf-icons bx bx-detail" style="color: #666666;"></i>
                <div data-i18n="Form Elements">Form Elements</div>
            </a>
            <ul class="menu-sub" style="background-color: #f9f9f9;">
                <li class="menu-item"><a href="forms-basic-inputs.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Basic Inputs">Basic Inputs</div>
                    </a></li>
                <li class="menu-item"><a href="forms-input-groups.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Input groups">Input groups</div>
                    </a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle" style="color: #1a1a1a;">
                <i class="menu-icon tf-icons bx bx-detail" style="color: #666666;"></i>
                <div data-i18n="Form Layouts">Form Layouts</div>
            </a>
            <ul class="menu-sub" style="background-color: #f9f9f9;">
                <li class="menu-item"><a href="form-layouts-vertical.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Vertical Form">Vertical Form</div>
                    </a></li>
                <li class="menu-item"><a href="form-layouts-horizontal.html" class="menu-link" style="color: #4d4d4d;">
                        <div data-i18n="Horizontal Form">Horizontal Form</div>
                    </a></li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="tables-basic.html" class="menu-link" style="color: #1a1a1a;">
                <i class="menu-icon tf-icons bx bx-table" style="color: #666666;"></i>
                <div data-i18n="Tables">Tables</div>
            </a>
        </li>

        <!-- Misc -->
        <li class="menu-header small">
            <span class="menu-header-text" style="color: black; font-size: 28px; ">Misc</span>
            <hr>
        </li>
        <li class="menu-item">
            <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="menu-link" style="color: #1a1a1a;">
                <i class="menu-icon tf-icons bx bx-support" style="color: #666666;"></i>
                <div data-i18n="Support">Support</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="menu-link" style="color: #1a1a1a;">
                <i class="menu-icon tf-icons bx bx-file" style="color: #666666;"></i>
                <div data-i18n="Documentation">Documentation</div>
            </a>
        </li>
    </ul>
</aside>
