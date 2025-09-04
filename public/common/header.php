<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="nshfret">

    <link rel="apple-touch-icon" sizes="57x57" href="public/assets/images/header/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="public/assets/images/header/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="public/assets/images/header/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="public/assets/images/header/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="public/assets/images/header/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="public/assets/images/header/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="public/assets/images/header/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="public/assets/images/header/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="public/assets/images/header/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="public/assets/images/header/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/assets/images/header/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="public/assets/images/header/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/images/header/fav/favicon-16x16.png">
    <link rel="manifest" href="public/assets/images/header/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="public/assets/images/header/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="public/lib/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="public/lib/carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="public/lib/carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/css/swiper.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="public/assets/css/styles.css">

</head>

<body>

<div class="page-loader" id="page-loader">
        <?php include_once 'public/common/loader.php' ?>
    </div>

    <a href="https://wa.me/9899122363" class="whatsaap-chat" target="_blank">
        <img src="public/assets/images/icons/whatsaap.png" alt="">
    </a>

    <header class="nsh-header <?php echo $headerBg; ?>" id="nsh-header">
        <div class="header-bar">
            <div class="d-flex align-items-center gap-5">
                <div class="" id="nsh-openSidebar">
                    <div class="toggle-menu"></div>
                </div>
                <!-- <button class="btn btn-default search-btn btn-schedules d-none">Schedules</button> -->
            </div>
            <div class="web-header-logo">
                <a href="./"> <img src="public/assets/images/header/web-logo.png" alt="nshh website logo"></a>
            </div>

            <div class="header-tools">
                <ul>
                    <li class="search-bar" style="display:none" id="header_search">
                        <form action="">
                            <div class="input-group">
                                <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                <input type="text" class="form-control" placeholder="Search.." aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                        </form>
                    </li>
                    <!-- <li id="update_search">
                        <img src="public/assets/images/header/search.png" alt="search">
                        <span>Search</span>
                    </li> -->

                    <!-- <li class="qr-contact-btn">
                        <img src="public/assets/images/header/1.png" alt="tracking">
                        <span>Contact
                        </span>
                    </li> -->
                    <!-- <li class="languages-dropdown">
                        <img src="public/assets/images/header/en.png" alt="en">
                        <span>EN</span>
                        <div class="language-dropdown-menu">
                            <ul>
                                <li>
                                    <a title="English" href="" class="active">ENGLISH</a>
                                </li>
                                <li>
                                    <a title="Hindi" href="" class="active">हिन्दी</a>
                                </li>


                            </ul>
                        </div>
                    </li> -->

                    <li >
                        <a href="https://u.wechat.com/kO-miaWKY63-1HDBV1wS2vs?s=2" target="_blank">
                        <img src="public/assets/images/header/wechat-icon.svg" width="70" alt="we-chat">
                        <span>We Chat</span>
                        </a>
                    </li>

                    <li class="<?php echo ($currentPage == 'queries.php') ? 'active-menu' : ''; ?>">
                        <a href="./queries.php">
                        <img src="public/assets/images/header/query.png" alt="search">
                        <span>Queries</span>
                        </a>
                    </li>
                    <li class="<?php echo ($currentPage == 'index.php') ? 'active-menu' : ''; ?>">
                        <a href="./">
                            <img src="public/assets/images/header/user.png" alt="search">
                            <span>Home</span>
                        </a>
                    </li>
                </ul>

            </div>

        </div>

        <div class="navbar-layout" id="nsh-sidebar">
            <div class="navbar-inner-layout" id="navbar-inner-layout">
                <div class="close-btn-block" id="nsh-closeSidebar">
                    <button class="btn btn-default close-btn"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <nav>
                    <ul class="nsh-first-unoderlist">
                        <li> <a href="./about.php"> About Us</a></li>
                        <li id="solutions_link">
                            <a href="javascript:void(0)"
                                class="d-flex justify-content-between align-items-center"><span>Service Overview</span>
                                <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="inner-dropdown" id="inner-dropdown-solution">
                                <li class="nav-item">
                                    <a>Shiping solutions</a>
                                    <ul class="inner-dropdown-solution">
                                        <li class="nav-item"><a href="./fcl-lcl.php">FCL/LCL</a> </li>
                                        <li class="nav-item"><a href="./dry-cargo.php">Dry Cargo</a> </li>
                                        <li class="nav-item"><a href="./reefer.php">Reefer Cargo</a> </li>
                                        <li class="nav-item"><a href="./haz-cargo.php">Haz Cargo</a> </li>
                                        <li class="nav-item"><a href="./bulk-cargo.php">Bulk cargo</a> </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="./transportation.php"> Our logistic solutions</a>
                                    <ul class="inner-dropdown-solution">
                                        <li class="nav-item"><a href="./transportation.php">Inland/Local transportation</a> </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="./custom-clearence.php"> Custom clearance</a> </li>
                                <li class="nav-item"><a href="./legal-documantation.php"> Legal documentation</a> </li>
                                <li class="nav-item"><a href="./air-cargo.php"> Air cargo</a> </li>
                                <li class="nav-item"><a href="./international-courier.php"> International courier</a> </li>
                                <li class="nav-item"><a href="./international_trading.php"> International Trading</a> </li>
                            </ul>
                        </li>
                        <li> <a href="./careers.php"> Career</a></li>
                        <li> <a href="./education.php"> Education</a></li>
                        <li> <a href="./packaging-printing.php">Packaging & Printing Industry</a></li>
                        <li> <a href="./blog">Latest News </a> </li>
                        <li> <a href="./lets-connect.php">Let's Connect</a></li>
                        <li> <a href="./why-we.php">Why We</a></li>
                    </ul>

                    <!-- <ul>
                        <li><a href="javascript:void(0)">
                                <span class="link-icon"><img src="public/assets/images/header/calender.png"
                                        alt=""></span> <span>Sea Tracking
                                </span></a>
                        </li>
                        <li><a href="javascript:void(0)">
                                <span class="link-icon location"><img src="public/assets/images/header/tracking.png"
                                        alt=""></span> <span>Inland Tracking</span></a>
                        </li>
                        <li><a href="javascript:void(0)">
                                <span class="link-icon"><img src="public/assets/images/header/mynsh.png" alt=""></span>
                                <span>Air Tracking</span></a>
                        </li>
                    </ul> -->

                    <!-- <ul>
                        <li> <a href="javascript:void(0)"> Newsroom</a></li>
                        <li> <a href="javascript:void(0)"> Events</a></li>
                        <li> <a href="javascript:void(0)"> Blog</a></li>
                        <li> <a href="javascript:void(0)"> Local information</a> </li>
                        <li> <a href="./careers"> Careers</a></li>
                        <li> <a href="javascript:void(0)"> Contact </a> </li>
                        <li> <a href="javascript:void(0)"> Tools</a></li>
                    </ul> -->


                </nav>
            </div>
        </div>
        <!-- <div class="qr-contact">
            <ul>
                <li><span>Facebook</span> <span><a href=""><img src="public/assets/images/header/qr-code.png" alt=""></a></span></li>
                <li><span>Instagram</span> <span><a href=""><img src="public/assets/images/header/qr-code1.png" alt=""></a></span></li>
                <li><span>Email</span> <span><a href=""><img src="public/assets/images/header/qr-code2.png" alt=""></a></span></li>
            </ul>
        </div> -->
    </header>