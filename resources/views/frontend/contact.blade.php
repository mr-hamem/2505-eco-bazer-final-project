<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="shortcut icon" href="./img/plant 1.png">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>
<body>
    <header>
    <div id="headertop">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 d-none d-lg-block text-center text-lg-start">
            <address>
                <iconify-icon icon="tdesign:location"></iconify-icon>Store Location: Lincoln- 344, Illinois, Chicago, USA
            </address>
            </div>
            <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-end">
                <form>
                    <select>
                        <option>Eng</option>
                        <option>Ban</option>
                    </select>
                    <select>
                        <option>USD</option>
                        <option>BDT</option>
                    </select>
                    <a href="./signin.html">Sign In / Sign Up</a>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div id="headermid">
        <div class="container d-none d-lg-block">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <a href="#"><img src="./img/Logo.png" alt=""></a>
                </div>
                <div class="col-lg-6 m-auto">
                    <form>
                        <input type="search" placeholder="Search">
                        <iconify-icon icon="teenyicons:search-outline" width="15" height="15"  style="color: #000"></iconify-icon>
                        <button class="btnsearch">Search</button>
                    </form>
                </div>
                <div class="col-lg-3 d-flex justify-content-end">
                    <a href="#" class="iconsLove">
                        <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                    </a>
                    <a href="#" class="iconsCart">
                        <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                        <p>2</p>
                    </a>
                    <div class="price">
                    <p>Shopping cart:</p>
                    <h6>$57.00</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="headerlast d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="nav col-lg-8">
                        <ul class="d-flex">
                            <li>
                                <a href="./index.html" class="active">Home</a>
                            </li>
                            <li>
                                <a href="./shop.html">Shop</a>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="contact col-lg-4 text-end">
                        <a href="tel:(219) 555-0114" class="callBtn"><iconify-icon icon="bx:phone-call" width="24" height="24"></iconify-icon> (219) 555-0114</a>
                    </div>
                </div>
            </div>
        </div>
    <div class="mblnavbar d-lg-none d-flex">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-1">
                  <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">
                    <iconify-icon icon="heroicons-solid:menu-alt-1" style="color: #000"></iconify-icon>
                  </button> 
                </div>
                <div class="col-8 text-center">
                    <a href="#">
                        <img src="./img/Logo.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                  <a href="#" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                     <iconify-icon icon="teenyicons:search-outline"></iconify-icon>
                  </a>
                  <a href="#" class="iconsCart" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                     <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                     <p>2</p>
                  </a>   
                </div>
            </div>
        </div>
    </div>
    <div class="offCanvas d-lg-none d-flex">
        <div class="mblNavBtn">
        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft"></button>

<div class="offcanvas offcanvas-start" tabindex="1" id="offcanvasLeft" aria-labelledby="offcanvasLeftLabel">
  <div class="offcanvas-header">
    <a href="#"><img src="./img/Logo.png" class="offcanvas-title img-fluid" id="offcanvasLeftLabel" alt=""></a>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="nav flex-column">
        <a href="./index.html" class="active">Home</a>
        <a href="./shop.html">Shop</a>
        <a href="#">Pages</a>
        <a href="#">Blog</a>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
    </div>
  </div>
</div></div>
<div class="mblSearchBtn">
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"></button>

<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasTopLabel"></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <form>
        <input type="search" placeholder="Search">
        <iconify-icon icon="teenyicons:search-outline"></iconify-icon>
        <button class="btnsearch">Search</button>
    </form>
  </div>
</div>
</div>
<div class="mblCartBtn">
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Purchase item <img src="./img/plant 1.png" class="img-fluid"></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="buyItem">
        <div class="container">
            <div class="row">    
        <div class="carditem col-5">
            <a href="#">
                <img src="./img/Apple.png" alt="">
                <h5>Green Apple</h5>
                <p>2 Kg  <b>15$</b></p>
            </a>
        </div>
        <div class="carditem col-5">
            <a href="#">
                <img src="./img/Malta.png" alt="">
                <h5>Indian Malta</h5>
                <p>2 Kg  <b>15$</b></p>
            </a>
        </div>
    </div>
    </div>
        </div>
  </div>
</div>
</div>
    </div>
    <div class="mblFooterMenu d-lg-none">
        <div class="container">
            <div class="row align-items-center">
                <ul>
                    <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                    <li><a href="./shop.html"><iconify-icon icon="clarity:shopping-bag-line"></iconify-icon></a></li>
                    <li><a href="./contact.html"><iconify-icon icon="cil:home"></iconify-icon></a></li>
                    <li><a href="#"><iconify-icon icon="teenyicons:discount-outline"></iconify-icon></a></li>
                    <li><a href="./signin.html"><iconify-icon icon="gg:profile"></iconify-icon></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="d-lg-none d-flex">
        <div class="container">
            <div class="contactCardMb">
                <div class="row align-item-center">
                    <div class="col-4">
                        <a href="#">
                        <iconify-icon class="text-center" icon="tdesign:location"></iconify-icon>
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="#">
                            2715 Ash Dr. San Jose, <br> South Dakota 83475
                        </a>
                    </div>
                </div>
            </div>
            <div class="contactCardMb">
                <div class="row align-item-center">
                    <div class="col-4">
                        <a href="#">
                        <iconify-icon class="text-center" icon="streamline-cyber:email-2"></iconify-icon>
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="#">
                            Proxy@gmail.com <br> Help.proxy@gmail.com
                        </a>
                    </div>
                </div>
            </div>
            <div class="contactCardMb">
                <div class="row align-item-center">
                    <div class="col-4">
                        <a href="#">
                        <iconify-icon class="text-center" icon="mingcute:phone-call-line"></iconify-icon>
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="#">
                            (219) 555-0114 <br>(164) 333-0487
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row align-item-center">
                <div class="contactCardFull col-lg-4 d-none d-lg-block">
                    <div class="contactCard">
                        <a href="#">
                        <iconify-icon class="text-center" icon="tdesign:location"></iconify-icon>
                        <p>2715 Ash Dr. San Jose, <br> South Dakota 83475</p>
                        </a>
                    </div>
                    <div class="contactCard">
                        <a href="#">
                        <iconify-icon class="text-center" icon="streamline-cyber:email-2"></iconify-icon>
                        <p>Proxy@gmail.com <br> Help.proxy@gmail.com</p>
                        </a>
                    </div>
                    <div class="contactCard">
                        <a href="#">
                        <iconify-icon class="text-center" icon="mingcute:phone-call-line"></iconify-icon>
                        <p>(219) 555-0114 <br>(164) 333-0487</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cardHello">
                    <div class="container">                  
                            <h2>Just Say Hello!</h2>
                            <p>Do you fancy saying hi to me or you want to get started with your <br> project and you need my help? Feel free to contact me.</p>
                            </div>
                            <div class="row align-item-center">
                                <form>
                                    <input class="one col" type="text" placeholder="Template Cookie">
                                    <input class="one col" type="email" placeholder="zakirsoft@gmail.com">
                                </form>
                            </div>
                            <input id="two" type="text" placeholder="Hello">
                            <textarea placeholder="Subject"></textarea>
                            <button class="massage"> Send Massage </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="map">
        <div class="container">
        <div class="embed-map-responsive"><div class="embed-map-container"><iframe class="embed-map-frame" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=626&height=400&hl=en&q=bangladesh&t=p&z=14&ie=UTF8&iwloc=B&output=embed"></iframe><a href="https://funclicker.org" style="font-size:2px!important;color:gray!important;position:absolute;bottom:0;left:0;z-index:1;max-height:1px;overflow:hidden">Fun Clicker</a></div><style>.embed-map-responsive{position:relative;text-align:right;width:100%;height:0;padding-bottom:63.897763578274756%;}.embed-map-container{overflow:hidden;background:none!important;width:100%;height:100%;position:absolute;top:0;left:0;}.embed-map-frame{width:100%!important;height:100%!important;position:absolute;top:0;left:0;}</style></div>
        </div>
    </section>
</main>
<footer>
    <div class="container">
        <div class="row pb-lg-5">
            <div class="col-lg-3">
                <div class="about d-none d-lg-block">
                    <h5>About Shopery</h5>
                    <p>Morbi cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget bibendum magna congue nec.</p>
                    <a class="contact" href="callto:(219) 555-0114">(219) 555-0114</a>
                    <span>or</span>
                    <a class="contact" href="mailto:proxy@gmail.com">proxy@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-2">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="./signin.html">My Account</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Setting</a></li>
                    </ul>
            </div>
            <div class="col-lg-2">
                    <h5>Help</h5>
                    <ul>
                        <li><a href="./contact.html">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
            </div>
            <div class="col-lg-2">
                    <h5>Proxy</h5>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Products Details</a></li>
                        <li><a href="#">Track Order</a></li>
                    </ul>
            </div>
            <div class="col-lg-3">
                <div class="apps">
                    <h5>Download Our Mobile App</h5>
                    <div class="row justify-content-between">
                        <div class="col-lg-6 col-6">
                            <div class="appStore">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-3">
                                        <span class="appsLogo"><iconify-icon icon="ic:baseline-apple"></iconify-icon></span>
                                    </div>
                                    <div class="col-lg-9 col-9">
                                        <a href="#">
                                            Download on the <span>App Store</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6">
                            <div class="playStore">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-3">
                                        <span class="apps_logo"><iconify-icon icon="mage:playstore"></iconify-icon></span>
                                    </div>
                                    <div class="col-lg-9 col-9">
                                         <a href="#">
                                            Download on the <span>Play Store</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-lg-between copyright">
            <div class="col-lg-3">
                <div class="socialMedia">
                    <ul>
                        <li><a href="#"><iconify-icon icon="ri:facebook-fill"></iconify-icon></a></li>
                        <li><a href="#"><iconify-icon icon="mynaui:twitter"></iconify-icon></a></li>
                        <li><a href="#"><iconify-icon icon="mingcute:pinterest-line"></iconify-icon></a></li>
                        <li><a href="#"><iconify-icon icon="mdi:instagram"></iconify-icon></a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright col-lg-4 d-lg-flex justify-content-lg-center">
                <p>Ecobazar eCommerce © 2021. All Rights Reserved</p>
            </div>
            <div class="col-lg-4 d-lg-flex justify-content-lg-end">
                <ul class="payment d-flex">
                    <li>
                        <a href="#"><img src="./img/pay1.png" class="img-fluid" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="./img/pay2.png" class="img-fluid" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="./img/pay3.png" class="img-fluid" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="./img/pay4.png" class="img-fluid" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="./img/pay5.png" class="img-fluid" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
 </footer>
 <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script> 
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./jQuery.countdown-master/jQuery.countdown-master/dist/jquery.countdown.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
</body>
</html>