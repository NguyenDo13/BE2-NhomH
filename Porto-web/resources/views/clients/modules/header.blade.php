<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/header.css">
</head>

<body> -->
<header>
    <div class="header-container">
        <div class="header-top">
            <div class="header-top-container">
                <!--header-top-list -->
                <ul class="header-top-list">
                    <li class="header-top-item">
                        <a href="/my-account">My Account</a>
                    </li>
                    <li class="header-top-item">
                        <a href="/contact-us">Contact Us</a>
                    </li>
                    <li class="header-top-item">
                        <a href="/blog">Blog</a>
                    </li>
                    <li class="header-top-item">
                        <a href="/wishlist">My Wishlist</a>
                    </li>
                    <li class="header-top-item">
                        <a href="/cart">Cart</a>
                    </li>
                    <li class="header-top-item">
                        <a href="/my-account">Login</a>
                    </li>
                </ul>

                <div class="nation">
                    <div class="languages">
                        <img class="languages-flag" src="{{ asset('assets/clients/images/flag-us.png') }}">
                        <span>ENG</span>
                        <i class="fa fa-angle-down" style="font-size:12px"></i>
                    </div>

                    <div class="money">
                        <span>USD</span>
                        <i class="fa fa-angle-down" style="font-size:12px"></i>
                    </div>
                </div>

                <div class="share">
                    <div class="facebook share-link">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                    <div class="twitter share-link">
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                    </div>
                    <div class="instagram share-link">
                        <a href=""><i class="fa-brands fa-instagram-square"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="header-main">
            <div class="header-main-left">
                <img  src="{{ asset('assets/clients/images/logo.png') }}" alt="Photo 4">
            </div>
            <div class="header-main-right">
                <div class="header-main-right__input">
                    <input type="text" placeholder="Search...">
                    <div class="header-main-right__choose">
                        <span>All Categories</span> <i class="fa fa-angle-down" style="font-size:12px;"></i>
                        <!-- <div class="categories-search-list">
                                <div class="categories-search-item">All Categories</div>
                                <div class="categories-search-item">Accessories</div>
                                <div class="categories-search-item">Caps</div>
                                <div class="categories-search-item">Watches</div>
                                <div class="categories-search-item">Dress</div>
                                <div class="categories-search-item">Clothing</div>
                                <div class="categories-search-item">Music</div>
                                <div class="categories-search-item">Electronic</div>
                                <div class="categories-search-item">Headphone</div>
                                <div class="categories-search-item">Fashion</div>
                                <div class="categories-search-item">Shoes</div>

                            </div> -->
                    </div>
                    <div class="header-main-right__btn">
                        <i class="fa-solid fa-magnifying-glass btn-search"></i>
                    </div>
                </div>
                <div class="header-main-right__call">
                    <div class="header-main-right__call-icon">
                        <img src="{{ asset('assets/clients/images/phone.png') }}" alt="">
                    </div>
                    <div class="header-main-right__call-phone">
                        <span>CALL US NOW</span>
                        <p>+123 456 789</p>
                    </div>
                </div>
                <div class="header-main-right__wrapper">
                    <a href="{{ url('/login') }}" ><i class="fa-solid fa-user user cart"></i></a>
                    <a href=""><i class="fa-solid fa-heart heart cart"></i></a>
                    <i class="fas fa-shopping-cart shopping-cart cart"></i>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="header-bottom__nav">
                <div><a class="header-bottom__nav-item active" href="">HOME</a></div>
                <div class="container">
                    <a class="header-bottom__nav-item" href="">CATEGORIES <i class="fa fa-angle-down"
                            style="font-size:12px"></i></a>
                    <!--dropdown header-bottom-->
                    <div class="dropdown">
                        <div class="dropdown-row">
                            <div class="dropdown-col">
                                <h4>VARIATIONS 1</h4>
                                <ul>
                                    <li><a href="">FULL WITH BANNER</a></li>
                                    <li><a href="">NO SIDEBAR BANNER</a></li>
                                    <li><a href="">INFINITE AJAX SCROLL</a></li>
                                    <li><a href="">HORIZONTAL FILTER 1 <span class="new">new</span></a></li>
                                    <li><a href="">HORIZONTAL FILTER 2 <span class="new">new</span></a></li>
                                    <li><a href="">OFF CANVAS FILTER <span class="new">new</span></a></li>
                                    <li><a href="">IMAGE , COLOR SWATCH <span class="new">new</span></a></li>
                                    <li><a href="">WITH RIGHT SIDEBAR</a></li>
                                </ul>
                            </div>
                            <div class="dropdown-col">
                                <h4>VARIATIONS 2</h4>
                                <ul>
                                    <li><a href="">QUANTIFI FIELD <span class="new">new</span></a></li>
                                    <li><a href="">3 COLUMNS MODE</a></li>
                                    <li><a href="">4 COLUMNS MODE</a></li>
                                    <li><a href="">5 COLUMNS MODE</a></li>
                                    <li><a href="">6 COLUMNS MODE</a></li>
                                    <li><a href="">7 COLUMNS MODE</a></li>
                                    <li><a href="">8 COLUMNS MODE</a></li>
                                    <li><a href="">FULL WIDTH MODE</a></li>
                                </ul>
                            </div>
                            <div class="dropdown-col">
                                <img src="{{ asset('assets/clients/images/categories-img.PNG') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <a class="header-bottom__nav-item" href="">PRODUCT <i class="fa fa-angle-down"
                            style="font-size:12px"></i></a>
                    <div class="dropdown">
                        <div class="dropdown-row">
                            <div class="dropdown-col">
                                <h4>PODUCTS PAGE</h4>
                                <ul>
                                    <li><a href="">SIMPLE PRODUCT</a></li>
                                    <li><a href="">VARIABLE PRODUCT</a></li>
                                    <li><a href="">SALE PRODUCT</a></li>
                                    <li><a href="">FEATURED & ON SALE</a></li>
                                    <li><a href="">WITH CUSTOM TAB</a></li>
                                    <li><a href="">WITH LEFT SIDEBAR</a></li>
                                    <li><a href="">WITH RIGHT SIDEBAR</a></li>
                                    <li><a href="">ADD CART STICKY <span class="new">new</span></a></li>
                                    <li><a href="">IMAGE SWATCH <span class="new">new</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-col">
                                <h4>PRODUCT LAYOUTS</h4>
                                <ul>
                                    <li><a href="">EXTENDED LAYOUT</a></li>
                                    <li><a href="">GRID IMAGES</a></li>
                                    <li><a href="">FULL WIDTH LAYOUTS</a></li>
                                    <li><a href="">STICKY INFO</a></li>
                                    <li><a href="">LEFT & RIGHT STICKY</a></li>
                                    <li><a href="">TRANPARENT IMAGES</a></li>
                                    <li><a href="">CENTER VERTICAL THUMB</a></li>
                                    <li><a href="">LEFT SIDEBAR</a></li>
                                    <li><a href="">BUILD YOUR OWN <span class="new">new</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-col">
                                <img src="{{ asset('assets/clients/images/categories-img.PNG') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div> <a class="header-bottom__nav-item" href="">FEATURES <i class="fa fa-angle-down"
                            style="font-size:12px"></i></a></div>
                <div> <a class="header-bottom__nav-item" href="">BLOG</a></div>
                <div><a class="header-bottom__nav-item" href="">ABOUT US</a></div>
                <div><a class="header-bottom__nav-item" href="">ELEMENTS</a></div>
            </div>
        </div>
    </div>
</header>
{{-- </body>

</html> --}}
