<!doctype html>
<html lang="en">
	

<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Courage Onochie and Partners - Real Estate Estate Firm</title>
	    <meta name="description" content="Real Estate Bootstrap 5 Landing Template" />
	    <meta name="keywords" content="Let Property, Rent Property, Buy Property, Sell Property, multipurpose property, clean property, Real Estate, buy, sell, Rent, Property Valuation, Property, Valuation" />
	    <meta name="Eze Jerry" content="Real Estate Website" />
	    <meta name="website" content="https://onochiecourageabdpartners.com/" />
	    <meta name="email" content="inf@onochiecourageabdpartners.com" />
	    <meta name="version" content="1.0.0" />
    <!-- Place favicon.ico in the root directory -->
    <link href="{{ asset('assets/images/coplogo64.png') }}" rel="shortcut icon">

    @vite(['resources/css/app.css',
            'resources/js/app.js'
         ])
    
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tobii.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">

    
    <!--<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-DdKP39WO.css') }}">-->
   
</head>

<body>
    
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <a class="logo" href="{{ url('/') }}">
                    <span class="logo-light-mode">
                        <img src="{{ asset('assets/images/logo-dark.png') }}" class="l-dark" alt="">
                        <img src="{{ asset('assets/images/logo-light.png') }}" class="l-light" alt="">
                    </span>
                    <img src="{{ asset('assets/images/logo-light.png') }}" class="logo-dark-mode" alt="">
                </a>

                <div class="menu-extras">
                    <div class="menu-item">
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>

                <ul class="buy-button list-inline mb-0">
                    <li class="list-inline-item ps-1 mb-0">
                        <div class="dropdown">
                            <button type="button" class="dropdown-toggle btn btn-sm btn-icon btn-pills btn-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="search" class="icons"></i>
                            </button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white rounded-3 border-0 mt-3 p-0" style="width: 240px;">
                                <div class="search-bar">
                                    <div id="itemSearch" class="menu-search mb-0">
                                        <form role="search" method="get" id="searchItemform" class="searchform">
                                            <input type="text" class="form-control rounded-3 border" name="s" id="searchItem" placeholder="Search...">
                                            <input type="submit" id="searchItemsubmit" value="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item ps-1 mb-0">
                        <a href="auth-login.html" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="user" class="icons"></i></a>
                    </li>
                </ul>
        
                <div id="navigation">
                    <ul class="navigation-menu nav-left nav-light">
                        <li>
                            <a href="{{ url('/') }}">Home</a><span class="sub-menu-item"></span>
                                                       
                        </li>

                        <li>
                            
                            <a href="{{ url('/about') }}">About</a><span class="sub-menu-item"></span>
                            
                        </li>
                        
                        <li><a href="{{ url('buys') }}" class="sub-menu-item">Buy</a></li>
                        
                        <li><a href="{{ url('sells') }}" class="sub-menu-item">Sell</a></li>

                        <li><a href="{{ url('lists') }}" class="sub-menu-item">Listing</a></li>
                        

                        
        
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="{{ url('blogs') }}">Blog</a><span class="menu-arrow"></span>
                            
                        </li>
                        
                        <li><a href="{{ url('contact') }}" class="sub-menu-item">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Navbar End -->


@yield('content')


                <!-- Footer Start -->
        <section class="bg-building-pic d-table w-100" style="background: url('images/building.png') bottom no-repeat;"></section>
        <footer class="bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-py-60 footer-border">
                            <div class="row">
                                <div class="col-lg-5 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                                    <a href="{{ url('/') }}" class="logo-footer">
                                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="">
                                    </a>
                                    <p class="mt-4">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                                    <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                         
                                        <li class="list-inline-item"><a href="http://linkedin.com/company/courageonochieandpartners" target="_blank" class="rounded-3"><i data-feather="linkedin" class="fea icon-sm align-middle" title="Linkedin"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.facebook.com/courageonochieandpartners" target="_blank" class="rounded-3"><i data-feather="facebook" class="fea icon-sm align-middle" title="facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.instagram.com/courageonochieandpartners/" target="_blank" class="rounded-3"><i data-feather="instagram" class="fea icon-sm align-middle" title="instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="https://twitter.com/courageonochieandpartners" target="_blank" class="rounded-3"><i data-feather="twitter" class="fea icon-sm align-middle" title="twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="mailto:info@courageonochieandpartners.com" class="rounded-3"><i data-feather="mail" class="fea icon-sm align-middle" title="email"></i></a></li>
                                    </ul><!--end icon-->
                                </div><!--end col-->
                                
                                <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <h5 class="footer-head">Company</h5>
                                    <ul class="list-unstyled footer-list mt-4">
                                        <li><a href="{{ url('about') }}" class="text-foot"><i class="mdi mdi-chevron-right align-middle me-1"></i> About us</a></li>
                                        <li><a href="{{ url('services') }}" class="text-foot"><i class="mdi mdi-chevron-right align-middle me-1"></i> Services</a></li>
                                        <li><a href="{{ url('team') }}" class="text-foot"><i class="mdi mdi-chevron-right align-middle me-1"></i> Team</a></li>
                                        <li><a href="{{ url('blog') }}" class="text-foot"><i class="mdi mdi-chevron-right align-middle me-1"></i> Blog</a></li>
                                    </ul>
                                </div><!--end col-->
                                
                                <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <h5 class="footer-head">Usefull Links</h5>
                                    <ul class="list-unstyled footer-list mt-4">
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right align-middle me-1"></i> Terms of Services</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right align-middle me-1"></i> Privacy Policy</a></li>
                                        <li><a href="javascript:void(0)" class="text-foot"><i class="mdi mdi-chevron-right align-middle me-1"></i> Listing</a></li>
                                        <li><a href="{{ url('/contact') }}" class="text-foot"><i class="mdi mdi-chevron-right align-middle me-1"></i> Contact us</a></li>
                                    </ul>
                                </div><!--end col-->
            
                                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <h5 class="footer-head">Contact Details</h5>

                                    <div class="d-flex mt-4">
                                        <i data-feather="map-pin" class="fea icon-sm text-primary mt-1 me-3"></i>
                                        <div class="">
                                            <p class="mb-2">Suite 25, B.O.S Plaza,  <br> Ire-Akari Estate Road, <br> Isolo, Lagos State</p>
                                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.9455204372916!2d3.320302874063392!3d6.528565323106355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8f1970ea37bd%3A0x55804bd2777d065c!2sB.%20O.%20S.%20Plaza!5e0!3m2!1sen!2sng!4v1715005368423!5m2!1sen!2sng" data-type="iframe" class="text-primary lightbox">View on Google map</a>
                                        </div>
                                    </div>
        
                                    <div class="d-flex mt-4">
                                        <i data-feather="mail" class="fea icon-sm text-primary mt-1 me-3"></i>
                                        <a href="mailto:contact@example.com" class="text-foot">info@courageonochieandpartners.com</a>
                                    </div>
                                    
                                    <div class="d-flex mt-4">
                                        <i data-feather="phone" class="fea icon-sm text-primary mt-1 me-3"></i>
                                        <a href="tel:+152534-468-854" class="text-foot">+234 803 637 7529, +234 708 644 1658</a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="footer-py-30 footer-bar">
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Courage Onochie and Partners <a href="https://courageonochieandpartners.com/" target="_blank" class="text-reset">COP</a>.</p>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top rounded-pill fs-5"><i data-feather="arrow-up" class="fea icon-sm align-middle"></i></a>
        <!-- Back to top -->
        

        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/swiper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/tobii.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/feather.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins.init.js') }}"></script>

</body>


</html>