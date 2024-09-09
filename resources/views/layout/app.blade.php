<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/phoenix/v1.13.0/demo/navbar-top.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 13:02:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@yield('title', 'phoenix')</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/storyset/logo_atk_ryan.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/storyset/logo_atk_ryan.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/storyset/logo_atk_ryan.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/storyset/logo_atk_ryan.png') }}">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../vendors/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/config.js"></script>
    <script>
        document.documentElement.classList.add('navbar-horizontal');
    </script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
    <link href="../vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="../vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="../vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
            <script>
                var navbarStyle = window.config.config.phoenixNavbarStyle;
                if (navbarStyle && navbarStyle !== 'transparent') {
                    document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
                }
            </script>
            <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                <!-- scrollbar removed-->
                <div class="navbar-vertical-content">
                    <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                        <li class="nav-item">
                            <!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-home"
                                    role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="nv-home">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="pie-chart"></span></span><span
                                            class="nav-link-text">Home</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-home">
                                        <li class="collapsed-nav-item-title d-none">Home</li>
                                        <li class="nav-item"><a class="nav-link" href="../index.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span class="nav-link-text">E
                                                        commerce</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../dashboard/project-management.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Project management</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="../dashboard/crm.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">CRM</span><span
                                                        class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="../apps/social/feed.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Social feed</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- label-->
                            <p class="navbar-vertical-label">Apps</p>
                            <hr class="navbar-vertical-line" /><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-e-commerce" role="button" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="nv-e-commerce">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="shopping-cart"></span></span><span
                                            class="nav-link-text">E commerce</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-e-commerce">
                                        <li class="collapsed-nav-item-title d-none">E commerce</li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-admin"
                                                data-bs-toggle="collapse" aria-expanded="true"
                                                aria-controls="nv-admin">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon"><span
                                                            class="fas fa-caret-right"></span></div><span
                                                        class="nav-link-text">Admin</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent show" data-bs-parent="#e-commerce"
                                                    id="nv-admin">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/admin/add-product.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Add product</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/admin/products.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Products</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/admin/customers.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Customers</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/admin/customer-details.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Customer details</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/admin/orders.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Orders</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/admin/order-details.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Order details</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/admin/refund.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Refund</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                href="#nv-customer" data-bs-toggle="collapse" aria-expanded="true"
                                                aria-controls="nv-customer">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon"><span
                                                            class="fas fa-caret-right"></span></div><span
                                                        class="nav-link-text">Customer</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent show" data-bs-parent="#e-commerce"
                                                    id="nv-customer">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/landing/homepage.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Homepage</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/landing/product-details.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Product details</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/landing/products-filter.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Products filter</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/landing/cart.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Cart</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/landing/checkout.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Checkout</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/landing/shipping-info.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Shipping info</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/landing/profile.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Profile</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/landing/favourite-stores.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Favourite stores</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/landing/wishlist.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Wishlist</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/landing/order-tracking.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Order tracking</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../apps/e-commerce/landing/invoice.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Invoice</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-CRM" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="nv-CRM">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="phone"></span></span><span
                                            class="nav-link-text">CRM</span><span
                                            class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                            style="font-size: 6px"></span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-CRM">
                                        <li class="collapsed-nav-item-title d-none">CRM</li>
                                        <li class="nav-item"><a class="nav-link" href="../apps/crm/analytics.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Analytics</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="../apps/crm/deals.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Deals</span><span
                                                        class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="../apps/crm/deal-details.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Deal details</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="../apps/crm/leads.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Leads</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="../apps/crm/lead-details.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Lead details</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="../apps/crm/reports.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Reports</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../apps/crm/reports-details.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Reports details</span><span
                                                        class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="../apps/crm/add-contact.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span class="nav-link-text">Add
                                                        contact</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-project-management" role="button" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="nv-project-management">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="clipboard"></span></span><span
                                            class="nav-link-text">Project management</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-project-management">
                                        <li class="collapsed-nav-item-title d-none">Project management</li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../apps/project-management/create-new.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Create new</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../apps/project-management/project-list-view.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Project list view</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../apps/project-management/project-card-view.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Project card view</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../apps/project-management/project-board-view.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Project board view</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../apps/project-management/todo-list.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Todo list</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../apps/project-management/project-details.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Project details</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../apps/chat.html"
                                    role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                data-feather="message-square"></span></span><span
                                            class="nav-link-text-wrapper"><span
                                                class="nav-link-text">Chat</span></span></div>
                                </a></div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-email" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="nv-email">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="mail"></span></span><span
                                            class="nav-link-text">Email</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-email">
                                        <li class="collapsed-nav-item-title d-none">Email</li>
                                        <li class="nav-item"><a class="nav-link" href="../apps/email/inbox.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Inbox</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../apps/email/email-detail.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Email detail</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="../apps/email/compose.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Compose</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-events" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="nv-events">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="bookmark"></span></span><span
                                            class="nav-link-text">Events</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-events">
                                        <li class="collapsed-nav-item-title d-none">Events</li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../apps/events/create-an-event.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Create an event</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../apps/events/event-detail.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Event detail</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-kanban" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="nv-kanban">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="trello"></span></span><span
                                            class="nav-link-text">Kanban</span><span
                                            class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                            style="font-size: 6px"></span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-kanban">
                                        <li class="collapsed-nav-item-title d-none">Kanban</li>
                                        <li class="nav-item"><a class="nav-link" href="../apps/kanban/kanban.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Kanban</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="../apps/kanban/boards.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Boards</span><span
                                                        class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../apps/kanban/create-kanban-board.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Create board</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-social" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="nv-social">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="share-2"></span></span><span
                                            class="nav-link-text">Social</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-social">
                                        <li class="collapsed-nav-item-title d-none">Social</li>
                                        <li class="nav-item"><a class="nav-link" href="../apps/social/profile.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Profile</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="../apps/social/settings.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Settings</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../apps/calendar.html"
                                    role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                data-feather="calendar"></span></span><span
                                            class="nav-link-text-wrapper"><span
                                                class="nav-link-text">Calendar</span></span></div>
                                </a></div>
                        </li>
                        <li class="nav-item">
                            <!-- label-->
                            <p class="navbar-vertical-label">Pages</p>
                            <hr class="navbar-vertical-line" /><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../pages/starter.html"
                                    role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                data-feather="compass"></span></span><span
                                            class="nav-link-text-wrapper"><span
                                                class="nav-link-text">Starter</span></span></div>
                                </a></div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-faq" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="nv-faq">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="help-circle"></span></span><span
                                            class="nav-link-text">Faq</span><span
                                            class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                            style="font-size: 6px"></span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-faq">
                                        <li class="collapsed-nav-item-title d-none">Faq</li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../pages/faq/faq-accordion.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span class="nav-link-text">Faq
                                                        accordion</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="../pages/faq/faq-tab.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span class="nav-link-text">Faq
                                                        tab</span><span
                                                        class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-landing" role="button" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="nv-landing">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="globe"></span></span><span
                                            class="nav-link-text">Landing</span><span
                                            class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                            style="font-size: 6px"></span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-landing">
                                        <li class="collapsed-nav-item-title d-none">Landing</li>
                                        <li class="nav-item"><a class="nav-link" href="../pages/landing/default.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Default</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../pages/landing/alternate.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Alternate</span><span
                                                        class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-pricing" role="button" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="nv-pricing">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span data-feather="tag"></span></span><span
                                            class="nav-link-text">Pricing</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-pricing">
                                        <li class="collapsed-nav-item-title d-none">Pricing</li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../pages/pricing/pricing-column.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Pricing column</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../pages/pricing/pricing-grid.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Pricing grid</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link label-1"
                                    href="../pages/notifications.html" role="button" data-bs-toggle=""
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                data-feather="bell"></span></span><span
                                            class="nav-link-text-wrapper"><span
                                                class="nav-link-text">Notifications</span></span></div>
                                </a></div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../pages/members.html"
                                    role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                data-feather="users"></span></span><span
                                            class="nav-link-text-wrapper"><span
                                                class="nav-link-text">Members</span></span></div>
                                </a></div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../pages/timeline.html"
                                    role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                data-feather="clock"></span></span><span
                                            class="nav-link-text-wrapper"><span
                                                class="nav-link-text">Timeline</span></span></div>
                                </a></div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-errors" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="nv-errors">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="alert-triangle"></span></span><span
                                            class="nav-link-text">Errors</span><span
                                            class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                            style="font-size: 6px"></span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-errors">
                                        <li class="collapsed-nav-item-title d-none">Errors</li>
                                        <li class="nav-item"><a class="nav-link" href="../pages/errors/404.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">404</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="../pages/errors/403.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">403</span><span
                                                        class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="../pages/errors/500.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">500</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-authentication" role="button" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="nv-authentication">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="lock"></span></span><span
                                            class="nav-link-text">Authentication</span><span
                                            class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                            style="font-size: 6px"></span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-authentication">
                                        <li class="collapsed-nav-item-title d-none">Authentication</li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-simple"
                                                data-bs-toggle="collapse" aria-expanded="false"
                                                aria-controls="nv-simple">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon"><span
                                                            class="fas fa-caret-right"></span></div><span
                                                        class="nav-link-text">Simple</span><span
                                                        class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                                        style="font-size: 6px"></span>
                                                </div>
                                            </a><!-- more inner pages-->
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent" data-bs-parent="#authentication"
                                                    id="nv-simple">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/simple/sign-in.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Sign in</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/simple/sign-up.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Sign up</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/simple/sign-out.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Sign out</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/simple/forgot-password.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Forgot password</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/simple/reset-password.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Reset password</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/simple/lock-screen.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Lock screen</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/simple/2FA.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">2FA</span><span
                                                                    class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                                            </div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-split"
                                                data-bs-toggle="collapse" aria-expanded="false"
                                                aria-controls="nv-split">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon"><span
                                                            class="fas fa-caret-right"></span></div><span
                                                        class="nav-link-text">Split</span><span
                                                        class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                                        style="font-size: 6px"></span>
                                                </div>
                                            </a><!-- more inner pages-->
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent" data-bs-parent="#authentication"
                                                    id="nv-split">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/split/sign-in.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Sign in</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/split/sign-up.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Sign up</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/split/sign-out.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Sign out</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/split/forgot-password.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Forgot password</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/split/reset-password.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Reset password</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/split/lock-screen.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Lock screen</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/split/2FA.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">2FA</span><span
                                                                    class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                                            </div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-Card"
                                                data-bs-toggle="collapse" aria-expanded="false"
                                                aria-controls="nv-Card">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon"><span
                                                            class="fas fa-caret-right"></span></div><span
                                                        class="nav-link-text">Card</span><span
                                                        class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                                        style="font-size: 6px"></span>
                                                </div>
                                            </a><!-- more inner pages-->
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent" data-bs-parent="#authentication"
                                                    id="nv-Card">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/card/sign-in.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Sign in</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/card/sign-up.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Sign up</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/card/sign-out.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Sign out</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/card/forgot-password.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Forgot password</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/card/reset-password.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Reset password</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/card/lock-screen.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Lock screen</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../pages/authentication/card/2FA.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">2FA</span><span
                                                                    class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                                            </div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-layouts" role="button" data-bs-toggle="collapse"
                                    aria-expanded="true" aria-controls="nv-layouts">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span
                                                class="fas fa-caret-right"></span></div><span
                                            class="nav-link-icon"><span data-feather="layout"></span></span><span
                                            class="nav-link-text">Layouts</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-layouts">
                                        <li class="collapsed-nav-item-title d-none">Layouts</li>
                                        <li class="nav-item"><a class="nav-link" href="vertical-sidenav.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Vertical sidenav</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="dark-mode.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Dark mode</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="sidenav-collapse.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Sidenav collapse</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="darknav.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Darknav</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="topnav-slim.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Topnav slim</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="navbar-top-slim.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Navbar top slim</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link active" href="navbar-top.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Navbar top</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="horizontal-slim.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Horizontal slim</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="combo-nav.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Combo nav</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="combo-nav-slim.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Combo nav slim</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="dual-nav.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Dual nav</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- label-->
                            <p class="navbar-vertical-label">Modules</p>
                            <hr class="navbar-vertical-line" /><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-forms" role="button" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="nv-forms">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span
                                                class="fas fa-caret-right"></span></div><span
                                            class="nav-link-icon"><span data-feather="file-text"></span></span><span
                                            class="nav-link-text">Forms</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-forms">
                                        <li class="collapsed-nav-item-title d-none">Forms</li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                href="#nv-basic" data-bs-toggle="collapse" aria-expanded="false"
                                                aria-controls="nv-basic">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon"><span
                                                            class="fas fa-caret-right"></span></div><span
                                                        class="nav-link-text">Basic</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent" data-bs-parent="#forms"
                                                    id="nv-basic">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/forms/basic/form-control.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Form control</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/forms/basic/input-group.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Input group</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/forms/basic/select.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Select</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/forms/basic/checks.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Checks</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/forms/basic/range.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Range</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/forms/basic/floating-labels.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Floating labels</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/forms/basic/layout.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Layout</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                href="#nv-advance" data-bs-toggle="collapse" aria-expanded="false"
                                                aria-controls="nv-advance">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon"><span
                                                            class="fas fa-caret-right"></span></div><span
                                                        class="nav-link-text">Advance</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent" data-bs-parent="#forms"
                                                    id="nv-advance">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/forms/advance/advance-select.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Advance select</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/forms/advance/date-picker.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Date picker</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/forms/advance/editor.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Editor</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/forms/advance/file-uploader.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">File uploader</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/forms/advance/rating.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Rating</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/forms/advance/emoji-button.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Emoji button</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/forms/validation.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Validation</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/forms/wizard.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Wizard</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-icons" role="button" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="nv-icons">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span
                                                class="fas fa-caret-right"></span></div><span
                                            class="nav-link-icon"><span data-feather="grid"></span></span><span
                                            class="nav-link-text">Icons</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-icons">
                                        <li class="collapsed-nav-item-title d-none">Icons</li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/icons/feather.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Feather</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/icons/font-awesome.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Font awesome</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/icons/unicons.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Unicons</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-tables" role="button" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="nv-tables">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span
                                                class="fas fa-caret-right"></span></div><span
                                            class="nav-link-icon"><span data-feather="columns"></span></span><span
                                            class="nav-link-text">Tables</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-tables">
                                        <li class="collapsed-nav-item-title d-none">Tables</li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/tables/basic-tables.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Basic tables</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/tables/advance-tables.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Advance tables</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/tables/bulk-select.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Bulk Select</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-ECharts" role="button" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="nv-ECharts">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span
                                                class="fas fa-caret-right"></span></div><span
                                            class="nav-link-icon"><span
                                                data-feather="bar-chart-2"></span></span><span
                                            class="nav-link-text">ECharts</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-ECharts">
                                        <li class="collapsed-nav-item-title d-none">ECharts</li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/echarts/line-charts.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Line charts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/echarts/bar-charts.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Bar charts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/echarts/candlestick-charts.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Candlestick charts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/echarts/geo-map.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Geo map</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/echarts/scatter-charts.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Scatter charts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/echarts/pie-charts.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Pie charts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/echarts/gauge-chart.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Gauge chart</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/echarts/radar-charts.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Radar charts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/echarts/heatmap-charts.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Heatmap charts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/echarts/how-to-use.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">How to use</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-components" role="button" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="nv-components">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span
                                                class="fas fa-caret-right"></span></div><span
                                            class="nav-link-icon"><span data-feather="package"></span></span><span
                                            class="nav-link-text">Components</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-components">
                                        <li class="collapsed-nav-item-title d-none">Components</li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/accordion.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Accordion</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/avatar.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Avatar</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/alerts.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Alerts</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/badge.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Badge</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/breadcrumb.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Breadcrumb</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/button.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Buttons</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/calendar.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Calendar</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/card.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Card</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                href="#nv-carousel" data-bs-toggle="collapse"
                                                aria-expanded="false" aria-controls="nv-carousel">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon"><span
                                                            class="fas fa-caret-right"></span></div><span
                                                        class="nav-link-text">Carousel</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent" data-bs-parent="#components"
                                                    id="nv-carousel">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/components/carousel/bootstrap.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Bootstrap</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/components/carousel/swiper.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Swiper</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/collapse.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Collapse</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/dropdown.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Dropdown</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/list-group.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">List group</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/modal.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Modals</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                href="#nv-navs-_and_-Tabs" data-bs-toggle="collapse"
                                                aria-expanded="false" aria-controls="nv-navs-_and_-Tabs">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon"><span
                                                            class="fas fa-caret-right"></span></div><span
                                                        class="nav-link-text">Navs &amp; Tabs</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent" data-bs-parent="#components"
                                                    id="nv-navs-_and_-Tabs">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/components/navs-and-tabs/navs.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Navs</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/components/navs-and-tabs/navbar.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Navbar</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../modules/components/navs-and-tabs/tabs.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Tabs</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/offcanvas.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Offcanvas</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/progress-bar.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Progress bar</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/placeholder.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Placeholder</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/pagination.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Pagination</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/popovers.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Popovers</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/scrollspy.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Scrollspy</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/sortable.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Sortable</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/spinners.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Spinners</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/toast.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Toast</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/tooltips.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Tooltips</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/components/chat-widget.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Chat widget</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-utilities" role="button" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="nv-utilities">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span
                                                class="fas fa-caret-right"></span></div><span
                                            class="nav-link-icon"><span data-feather="tool"></span></span><span
                                            class="nav-link-text">Utilities</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-utilities">
                                        <li class="collapsed-nav-item-title d-none">Utilities</li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/background.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Background</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/borders.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Borders</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/colors.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Colors</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/display.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Display</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/flex.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Flex</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/stacks.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Stacks</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/float.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Float</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/grid.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Grid</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/interactions.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Interactions</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/opacity.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Opacity</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/overflow.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Overflow</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/position.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Position</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/shadows.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Shadows</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/sizing.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Sizing</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/spacing.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Spacing</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/typography.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Typography</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/vertical-align.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Vertical align</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../modules/utilities/visibility.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Visibility</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../widgets.html"
                                    role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                data-feather="server"></span></span><span
                                            class="nav-link-text-wrapper"><span
                                                class="nav-link-text">Widgets</span></span><span
                                            class="badge ms-2 badge badge-phoenix badge-phoenix-info nav-link-badge">New</span>
                                    </div>
                                </a></div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-multi-level" role="button" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="nv-multi-level">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span
                                                class="fas fa-caret-right"></span></div><span
                                            class="nav-link-icon"><span data-feather="layers"></span></span><span
                                            class="nav-link-text">Multi level</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-multi-level">
                                        <li class="collapsed-nav-item-title d-none">Multi level</li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                href="#nv-level-two" data-bs-toggle="collapse"
                                                aria-expanded="false" aria-controls="nv-level-two">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon"><span
                                                            class="fas fa-caret-right"></span></div><span
                                                        class="nav-link-text">Level two</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent" data-bs-parent="#multi-level"
                                                    id="nv-level-two">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../index-2.html#!.html" data-bs-toggle=""
                                                            aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Item 1</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../index-2.html#!.html" data-bs-toggle=""
                                                            aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Item 2</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                href="#nv-level-three" data-bs-toggle="collapse"
                                                aria-expanded="false" aria-controls="nv-level-three">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon"><span
                                                            class="fas fa-caret-right"></span></div><span
                                                        class="nav-link-text">Level three</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent" data-bs-parent="#multi-level"
                                                    id="nv-level-three">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../index-2.html#!.html" data-bs-toggle=""
                                                            aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Item 3</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                            href="#nv-item-4" data-bs-toggle="collapse"
                                                            aria-expanded="false" aria-controls="nv-item-4">
                                                            <div class="d-flex align-items-center">
                                                                <div class="dropdown-indicator-icon"><span
                                                                        class="fas fa-caret-right"></span></div><span
                                                                    class="nav-link-text">Item 4</span>
                                                            </div>
                                                        </a><!-- more inner pages-->
                                                        <div class="parent-wrapper">
                                                            <ul class="nav collapse parent"
                                                                data-bs-parent="#level-three" id="nv-item-4">
                                                                <li class="nav-item"><a class="nav-link"
                                                                        href="../index-2.html#!.html"
                                                                        data-bs-toggle="" aria-expanded="false">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="nav-link-text">Item 5</span>
                                                                        </div>
                                                                    </a><!-- more inner pages-->
                                                                </li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                        href="../index-2.html#!.html"
                                                                        data-bs-toggle="" aria-expanded="false">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="nav-link-text">Item 6</span>
                                                                        </div>
                                                                    </a><!-- more inner pages-->
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                href="#nv-level-four" data-bs-toggle="collapse"
                                                aria-expanded="false" aria-controls="nv-level-four">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon"><span
                                                            class="fas fa-caret-right"></span></div><span
                                                        class="nav-link-text">Level four</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent" data-bs-parent="#multi-level"
                                                    id="nv-level-four">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="../index-2.html#!.html" data-bs-toggle=""
                                                            aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Item 6</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                            href="#nv-item-7" data-bs-toggle="collapse"
                                                            aria-expanded="false" aria-controls="nv-item-7">
                                                            <div class="d-flex align-items-center">
                                                                <div class="dropdown-indicator-icon"><span
                                                                        class="fas fa-caret-right"></span></div><span
                                                                    class="nav-link-text">Item 7</span>
                                                            </div>
                                                        </a><!-- more inner pages-->
                                                        <div class="parent-wrapper">
                                                            <ul class="nav collapse parent"
                                                                data-bs-parent="#level-four" id="nv-item-7">
                                                                <li class="nav-item"><a class="nav-link"
                                                                        href="../index-2.html#!.html"
                                                                        data-bs-toggle="" aria-expanded="false">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="nav-link-text">Item 8</span>
                                                                        </div>
                                                                    </a><!-- more inner pages-->
                                                                </li>
                                                                <li class="nav-item"><a
                                                                        class="nav-link dropdown-indicator"
                                                                        href="#nv-item-9" data-bs-toggle="collapse"
                                                                        aria-expanded="false"
                                                                        aria-controls="nv-item-9">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="dropdown-indicator-icon"><span
                                                                                    class="fas fa-caret-right"></span>
                                                                            </div><span class="nav-link-text">Item
                                                                                9</span>
                                                                        </div>
                                                                    </a><!-- more inner pages-->
                                                                    <div class="parent-wrapper">
                                                                        <ul class="nav collapse parent"
                                                                            data-bs-parent="#item-7" id="nv-item-9">
                                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="../index-2.html#!.html"
                                                                                    data-bs-toggle=""
                                                                                    aria-expanded="false">
                                                                                    <div
                                                                                        class="d-flex align-items-center">
                                                                                        <span
                                                                                            class="nav-link-text">Item
                                                                                            10</span></div>
                                                                                </a><!-- more inner pages-->
                                                                            </li>
                                                                            <li class="nav-item"><a class="nav-link"
                                                                                    href="../index-2.html#!.html"
                                                                                    data-bs-toggle=""
                                                                                    aria-expanded="false">
                                                                                    <div
                                                                                        class="d-flex align-items-center">
                                                                                        <span
                                                                                            class="nav-link-text">Item
                                                                                            11</span></div>
                                                                                </a><!-- more inner pages-->
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- label-->
                            <p class="navbar-vertical-label">Documentation</p>
                            <hr class="navbar-vertical-line" /><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link label-1"
                                    href="../documentation/getting-started.html" role="button" data-bs-toggle=""
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                data-feather="life-buoy"></span></span><span
                                            class="nav-link-text-wrapper"><span class="nav-link-text">Getting
                                                started</span></span></div>
                                </a></div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-customization" role="button" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="nv-customization">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span
                                                class="fas fa-caret-right"></span></div><span
                                            class="nav-link-icon"><span data-feather="settings"></span></span><span
                                            class="nav-link-text">Customization</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-customization">
                                        <li class="collapsed-nav-item-title d-none">Customization</li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../documentation/customization/configuration.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Configuration</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../documentation/customization/styling.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Styling</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../documentation/customization/dark-mode.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Dark mode</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../documentation/customization/plugin.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Plugin</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-layouts-doc" role="button" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="nv-layouts-doc">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span
                                                class="fas fa-caret-right"></span></div><span
                                            class="nav-link-icon"><span data-feather="table"></span></span><span
                                            class="nav-link-text">Layouts doc</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-layouts-doc">
                                        <li class="collapsed-nav-item-title d-none">Layouts doc</li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../documentation/layouts/vertical-navbar.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Vertical navbar</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../documentation/layouts/horizontal-navbar.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Horizontal navbar</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../documentation/layouts/combo-navbar.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Combo navbar</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="../documentation/layouts/dual-nav.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Dual nav</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link label-1"
                                    href="../documentation/gulp.html" role="button" data-bs-toggle=""
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fa-brands fa-gulp ms-1 me-1 fa-lg"></span></span><span
                                            class="nav-link-text-wrapper"><span
                                                class="nav-link-text">Gulp</span></span></div>
                                </a></div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link label-1"
                                    href="../documentation/design-file.html" role="button" data-bs-toggle=""
                                    aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                data-feather="figma"></span></span><span
                                            class="nav-link-text-wrapper"><span class="nav-link-text">Design
                                                file</span></span></div>
                                </a></div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../changelog.html"
                                    role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                data-feather="git-merge"></span></span><span
                                            class="nav-link-text-wrapper"><span
                                                class="nav-link-text">Changelog</span></span></div>
                                </a></div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link label-1" href="../showcase.html"
                                    role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                data-feather="monitor"></span></span><span
                                            class="nav-link-text-wrapper"><span
                                                class="nav-link-text">Showcase</span></span></div>
                                </a></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navbar-vertical-footer"><button
                    class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 white-space-nowrap d-flex align-items-center"><span
                        class="uil uil-left-arrow-to-left fs-0"></span><span
                        class="uil uil-arrow-from-right fs-0"></span><span
                        class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
        </nav>
        <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarTop" style="display:none;">
            <div class="navbar-logo">
                <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse"
                    aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                        class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                <a class="navbar-brand me-1 me-sm-3" href="{{ route('beranda') }}">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center"><img src="{{ asset('assets/img/storyset/logo_atk_ryan.png') }}"
                                alt="logo" width="45" />
                            <p class="logo-text ms-2 d-none d-sm-block">Toko ATK Ryan</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
                id="navbarTopCollapse">
                <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
                    <li class="navbar-nav"><a class="nav-link lh-1 {{ request()->routeIs('beranda') ? 'show' : '' }}" href="{{ route('beranda') }}"
                            role="button"
                            aria-haspopup="true" aria-expanded="false"><span
                                class="uil fs-0 me-2" data-feather="pie-chart"></span>Beranda</a>
                    </li>
                    <li class="navbar-nav"><a class="nav-link lh-1 {{ request()->routeIs('barang') ? 'show' : '' }}" href="{{ route('barang') }}"
                            role="button"
                            aria-haspopup="true" aria-expanded="false"><span
                                class="uil fs-0 me-2 uil-cube" data-feather="box"></span>Data Barang</a>
                    </li>
                    <li class="navbar-nav"><a class="nav-link lh-1 {{ request()->routeIs('kategori') ? 'show' : '' }}" href="{{ route('kategori') }}"
                            role="button"
                            aria-haspopup="true" aria-expanded="false"><span
                                class="uil fs-0 me-2" data-feather="list"></span>Kategori</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-nav-icons flex-row">
                <li class="nav-item">
                    <div class="theme-control-toggle fa-icon-wait px-2"><input
                            class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                            data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                            for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Switch theme"><span class="icon" data-feather="moon"></span></label><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                            for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
                </li>
                {{-- <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal"
                        data-bs-target="#searchBoxModal"><span data-feather="search"
                            style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li> --}}
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" href="#" style="min-width: 2.5rem" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        data-bs-auto-close="outside"><span data-feather="bell"
                            style="height:20px;width:20px;"></span></a>
                    <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
                        id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                        <div class="card position-relative border-0">
                            <div class="card-header p-2">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-black mb-0">Notificatons</h5><button
                                        class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as
                                        read</button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="scrollbar-overlay" style="height: 27rem;">
                                    <div class="border-300">
                                        <div
                                            class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img
                                                            class="rounded-circle"
                                                            src="../assets/img/team/40x40/30.webp" alt="" />
                                                    </div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs--2'>💬</span>Mentioned you in a
                                                            comment.<span
                                                                class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                                                        <p class="text-800 fs--1 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">10:41 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="font-sans-serif d-none d-sm-block"><button
                                                        class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        data-boundary="window" aria-haspopup="true"
                                                        aria-expanded="false" data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">Mark as unread</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3">
                                                        <div class="avatar-name rounded-circle"><span>J</span></div>
                                                    </div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs--1 text-black">Jane Foster</h4>
                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs--2'>📅</span>Created an event.<span
                                                                class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                                        <p class="text-800 fs--1 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">10:20 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="font-sans-serif d-none d-sm-block"><button
                                                        class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        data-boundary="window" aria-haspopup="true"
                                                        aria-expanded="false" data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">Mark as unread</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img
                                                            class="rounded-circle avatar-placeholder"
                                                            src="../assets/img/team/40x40/avatar.webp"
                                                            alt="" /></div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs--1 text-black">Jessie Samson</h4>
                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs--2'>👍</span>Liked your comment.<span
                                                                class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                                                        <p class="text-800 fs--1 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">9:30 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="font-sans-serif d-none d-sm-block"><button
                                                        class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        data-boundary="window" aria-haspopup="true"
                                                        aria-expanded="false" data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">Mark as unread</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-300">
                                        <div
                                            class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img
                                                            class="rounded-circle"
                                                            src="../assets/img/team/40x40/57.webp" alt="" />
                                                    </div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs--2'>💬</span>Mentioned you in a
                                                            comment.<span class="ms-2 text-400 fw-bold fs--2"></span>
                                                        </p>
                                                        <p class="text-800 fs--1 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">9:11 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="font-sans-serif d-none d-sm-block"><button
                                                        class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        data-boundary="window" aria-haspopup="true"
                                                        aria-expanded="false" data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">Mark as unread</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img
                                                            class="rounded-circle"
                                                            src="../assets/img/team/40x40/59.webp" alt="" />
                                                    </div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs--1 text-black">Herman Carter</h4>
                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs--2'>👤</span>Tagged you in a
                                                            comment.<span class="ms-2 text-400 fw-bold fs--2"></span>
                                                        </p>
                                                        <p class="text-800 fs--1 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">10:58 PM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="font-sans-serif d-none d-sm-block"><button
                                                        class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        data-boundary="window" aria-haspopup="true"
                                                        aria-expanded="false" data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">Mark as unread</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read ">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar avatar-m status-online me-3"><img
                                                            class="rounded-circle"
                                                            src="../assets/img/team/40x40/58.webp" alt="" />
                                                    </div>
                                                    <div class="flex-1 me-sm-3">
                                                        <h4 class="fs--1 text-black">Benjamin Button</h4>
                                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                                                class='me-1 fs--2'>👍</span>Liked your comment.<span
                                                                class="ms-2 text-400 fw-bold fs--2"></span></p>
                                                        <p class="text-800 fs--1 mb-0"><span
                                                                class="me-1 fas fa-clock"></span><span
                                                                class="fw-bold">10:18 AM </span>August 7,2021</p>
                                                    </div>
                                                </div>
                                                <div class="font-sans-serif d-none d-sm-block"><button
                                                        class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown"
                                                        data-boundary="window" aria-haspopup="true"
                                                        aria-expanded="false" data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">Mark as unread</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 border-top border-0">
                                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                                        href="../pages/notifications.html">Notification history</a></div>
                            </div>
                        </div>
                    </div>
                </li> --}}
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
                        aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                            <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                            <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                            <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                            <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                            <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                        </svg></a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300"
                        aria-labelledby="navbarDropdownNindeDots">
                        <div class="card bg-white position-relative border-0">
                            <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                <div class="row text-center align-items-center gx-0 gy-0">
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img src="../assets/img/nav-icons/behance.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img src="../assets/img/nav-icons/google-cloud.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img src="../assets/img/nav-icons/slack.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img src="../assets/img/nav-icons/gitlab.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img src="../assets/img/nav-icons/bitbucket.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img src="../assets/img/nav-icons/google-drive.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img src="../assets/img/nav-icons/trello.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img src="../assets/img/nav-icons/figma.webp"
                                                alt="" width="20" />
                                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img src="../assets/img/nav-icons/twitter.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img src="../assets/img/nav-icons/pinterest.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img src="../assets/img/nav-icons/ln.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img src="../assets/img/nav-icons/google-maps.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img src="../assets/img/nav-icons/google-photos.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                                            href="#!"><img src="../assets/img/nav-icons/spotify.webp"
                                                alt="" width="30" />
                                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> --}}
                {{-- <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser"
                        href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-l ">
                            <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                        aria-labelledby="navbarDropdownUser">
                        <div class="card position-relative border-0">
                            <div class="card-body p-0">
                                <div class="text-center pt-4 pb-3">
                                    <div class="avatar avatar-xl ">
                                        <img class="rounded-circle " src="../assets/img/team/72x72/57.webp"
                                            alt="" />
                                    </div>
                                    <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                                </div>
                                <div class="mb-3 mx-3"><input class="form-control form-control-sm"
                                        id="statusUpdateInput" type="text" placeholder="Update your status" />
                                </div>
                            </div>
                            <div class="overflow-auto scrollbar" style="height: 10rem;">
                                <ul class="nav d-flex flex-column mb-2 pb-1">
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                class="me-2 text-900"
                                                data-feather="user"></span><span>Profile</span></a></li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"><span
                                                class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                class="me-2 text-900" data-feather="lock"></span>Posts &amp;
                                            Activity</a></li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                class="me-2 text-900" data-feather="settings"></span>Settings &amp;
                                            Privacy </a></li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                class="me-2 text-900" data-feather="help-circle"></span>Help
                                            Center</a></li>
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                                </ul>
                            </div>
                            <div class="card-footer p-0 border-top">
                                <ul class="nav d-flex flex-column my-3">
                                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                class="me-2 text-900" data-feather="user-plus"></span>Add another
                                            account</a></li>
                                </ul>
                                <hr />
                                <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                        href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign
                                        out</a></div>
                                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1"
                                        href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1"
                                        href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                                        href="#!">Cookies</a></div>
                            </div>
                        </div>
                    </div>
                </li> --}}
            </ul>
        </nav>
        <script>
            var navbarVertical = document.querySelector('.navbar-vertical');
            navbarVertical.remove();
            navbarTop.removeAttribute('style');
        </script>
        <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true"
            data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
            <div class="modal-dialog">
                <div class="modal-content mt-15 rounded-pill">
                    <div class="modal-body p-0">
                        <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}'
                            style="width: auto;">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                <input class="form-control search-input fuzzy-search rounded-pill form-control-lg"
                                    type="search" placeholder="Search..." aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                                data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0"
                                    aria-label="Close"></button></div>
                            <div class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
                                <div class="scrollbar-overlay" style="max-height: 30rem;">
                                    <div class="list pb-3">
                                        <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span
                                                class="text-500">results</span></h6>
                                        <hr class="text-200 my-0" />
                                        <h6
                                            class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                            Recently Searched </h6>
                                        <div class="py-2"><a class="dropdown-item"
                                                href="../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"><span
                                                            class="fa-solid fa-clock-rotate-left"
                                                            data-fa-transform="shrink-2"></span> Store Macbook</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item"
                                                href="../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"> <span
                                                            class="fa-solid fa-clock-rotate-left"
                                                            data-fa-transform="shrink-2"></span> MacBook Air - 13″
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="text-200 my-0" />
                                        <h6
                                            class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                            Products</h6>
                                        <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                                                href="../apps/e-commerce/landing/product-details.html">
                                                <div class="file-thumbnail me-2"><img
                                                        class="h-100 w-100 fit-cover rounded-3"
                                                        src="../assets/img/products/60x60/3.png" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                                                    <p class="fs--2 mb-0 d-flex text-700"><span
                                                            class="fw-medium text-600">8GB Memory - 1.6GHz - 128GB
                                                            Storage</span></p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 d-flex align-items-center"
                                                href="../apps/e-commerce/landing/product-details.html">
                                                <div class="file-thumbnail me-2"><img class="img-fluid"
                                                        src="../assets/img/products/60x60/3.png" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                                                    <p class="fs--2 mb-0 d-flex text-700"><span
                                                            class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span>
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="text-200 my-0" />
                                        <h6
                                            class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                            Quick Links</h6>
                                        <div class="py-2"><a class="dropdown-item"
                                                href="../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"><span
                                                            class="fa-solid fa-link text-900"
                                                            data-fa-transform="shrink-2"></span> Support MacBook House
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item"
                                                href="../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"> <span
                                                            class="fa-solid fa-link text-900"
                                                            data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="text-200 my-0" />
                                        <h6
                                            class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                            Files</h6>
                                        <div class="py-2"><a class="dropdown-item"
                                                href="../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"><span
                                                            class="fa-solid fa-file-zipper text-900"
                                                            data-fa-transform="shrink-2"></span> Library MacBook
                                                        folder.rar</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item"
                                                href="../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"> <span
                                                            class="fa-solid fa-file-lines text-900"
                                                            data-fa-transform="shrink-2"></span> Feature MacBook
                                                        extensions.txt</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item"
                                                href="../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"> <span
                                                            class="fa-solid fa-image text-900"
                                                            data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="text-200 my-0" />
                                        <h6
                                            class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                            Members</h6>
                                        <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                                                href="../pages/members.html">
                                                <div class="avatar avatar-l status-online  me-2 text-900">
                                                    <img class="rounded-circle "
                                                        src="../assets/img/team/40x40/10.webp" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                                                    <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 d-flex align-items-center"
                                                href="../pages/members.html">
                                                <div class="avatar avatar-l  me-2 text-900">
                                                    <img class="rounded-circle "
                                                        src="../assets/img/team/40x40/12.webp" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-1000 title">John Smith</h6>
                                                    <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="text-200 my-0" />
                                        <h6
                                            class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                            Related Searches</h6>
                                        <div class="py-2"><a class="dropdown-item"
                                                href="../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"><span
                                                            class="fa-brands fa-firefox-browser text-900"
                                                            data-fa-transform="shrink-2"></span> Search in the Web
                                                        MacBook</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item"
                                                href="../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"> <span
                                                            class="fa-brands fa-chrome text-900"
                                                            data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var navbarTopShape = window.config.config.phoenixNavbarTopShape;
            var navbarPosition = window.config.config.phoenixNavbarPosition;
            var body = document.querySelector('body');
            var navbarDefault = document.querySelector('#navbarDefault');
            var navbarTop = document.querySelector('#navbarTop');
            var topNavSlim = document.querySelector('#topNavSlim');
            var navbarTopSlim = document.querySelector('#navbarTopSlim');
            var navbarCombo = document.querySelector('#navbarCombo');
            var navbarComboSlim = document.querySelector('#navbarComboSlim');
            var dualNav = document.querySelector('#dualNav');

            var documentElement = document.documentElement;
            var navbarVertical = document.querySelector('.navbar-vertical');

            if (navbarPosition === 'dual-nav') {
                topNavSlim.remove();
                navbarTop.remove();
                navbarVertical.remove();
                navbarTopSlim.remove();
                navbarCombo.remove();
                navbarComboSlim.remove();
                navbarDefault.remove();
                dualNav.removeAttribute('style');
                documentElement.classList.add('dual-nav');
            } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
                navbarDefault.remove();
                navbarTop.remove();
                navbarTopSlim.remove();
                navbarCombo.remove();
                navbarComboSlim.remove();
                topNavSlim.style.display = 'block';
                navbarVertical.style.display = 'inline-block';
                body.classList.add('nav-slim');
            } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
                navbarDefault.remove();
                navbarVertical.remove();
                navbarTop.remove();
                topNavSlim.remove();
                navbarCombo.remove();
                navbarComboSlim.remove();
                navbarTopSlim.removeAttribute('style');
                body.classList.add('nav-slim');
            } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
                navbarDefault.remove();
                //- navbarVertical.remove();
                navbarTop.remove();
                topNavSlim.remove();
                navbarCombo.remove();
                navbarTopSlim.remove();
                navbarComboSlim.removeAttribute('style');
                navbarVertical.removeAttribute('style');
                body.classList.add('nav-slim');
            } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                navbarDefault.remove();
                topNavSlim.remove();
                navbarVertical.remove();
                navbarTopSlim.remove();
                navbarCombo.remove();
                navbarComboSlim.remove();
                navbarTop.removeAttribute('style');
                documentElement.classList.add('navbar-horizontal');
            } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
                topNavSlim.remove();
                navbarTop.remove();
                navbarTopSlim.remove();
                navbarDefault.remove();
                navbarComboSlim.remove();
                navbarCombo.removeAttribute('style');
                navbarVertical.removeAttribute('style');
                documentElement.classList.add('navbar-combo')

            } else {
                topNavSlim.remove();
                navbarTop.remove();
                navbarTopSlim.remove();
                navbarCombo.remove();
                navbarComboSlim.remove();
                navbarDefault.removeAttribute('style');
                navbarVertical.removeAttribute('style');
            }

            var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
            var navbarTop = document.querySelector('.navbar-top');
            if (navbarTopStyle === 'darker') {
                navbarTop.classList.add('navbar-darker');
            }

            var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
            var navbarVertical = document.querySelector('.navbar-vertical');
            if (navbarVerticalStyle === 'darker') {
                navbarVertical.classList.add('navbar-darker');
            }
        </script>
        <div class="content">

            @yield('main')

            <footer class="footer position-absolute">
                <div class="row g-0 justify-content-between align-items-center h-100">
                    <div class="col-12 text-center">
                        <p class="mb-0 mt-2 mt-sm-0 text-900">Toko ATK Ryan - Solusi lengkap untuk kebutuhan kantor dan sekolah Anda.</p>
                    </div>
                </div>
            </footer>
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/anchorjs/anchor.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../vendors/feather-icons/feather.min.js"></script>
    <script src="../vendors/dayjs/dayjs.min.js"></script>
    <script src="../assets/js/phoenix.js"></script>
    <script src="../vendors/echarts/echarts.min.js"></script>
    <script src="../vendors/leaflet/leaflet.js"></script>
    <script src="../vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="../vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="../assets/js/ecommerce-dashboard.js"></script>
</body>


<!-- Mirrored from prium.github.io/phoenix/v1.13.0/demo/navbar-top.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 13:02:16 GMT -->

</html>
