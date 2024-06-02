@extends('layout.app')


@section('content')



        <!-- Hero Start -->
        <section class="swiper-slider-hero position-relative d-block vh-100" id="home">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide d-flex align-items-center overflow-hidden">
                        <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: center center;" data-background="images/bg/realp7.jpg">
                            <div class="bg-overlay"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="title-heading">
                                            <h1 class="heading fw-bold text-white title-dark mb-3">Victoria Park Estate, <br> Osapa London, Lekki.</h1>
                                            <p class="para-desc text-white-50 title-dark mb-0">We offer valuation, Property Management, Real Estate Agency and Asset Management.</p>
                                            
                                            <div class="mt-4 pt-2">
                                                <a href="javascript:void(0)" class="btn btn-pills btn-primary">View Details <i class="mdi mdi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end container-->
                        </div><!-- end slide-inner --> 
                    </div> <!-- end swiper-slide -->

                    <div class="swiper-slide d-flex align-items-center overflow-hidden">
                        <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: center center;" data-background="images/bg/realp5.jpg">
                            <div class="bg-overlay"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="title-heading">
                                            <h1 class="heading fw-bold text-white title-dark mb-3">Coker Estate, <br> Shasha, Alimosho LGA, Lagos State</h1>
                                            <p class="para-desc text-white-50 title-dark mb-0">We offer valuation, Property Management, Real Estate Agency and Asset Management.</p>
                                            
                                            <div class="mt-4 pt-2">
                                                <a href="javascript:void(0)" class="btn btn-pills btn-primary">View Details <i class="mdi mdi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end container-->
                        </div><!-- end slide-inner --> 
                    </div> <!-- end swiper-slide -->

                    <div class="swiper-slide d-flex align-items-center overflow-hidden">
                        <div class="slide-inner slide-bg-image d-flex align-items-center" style="background: center center;" data-background="images/bg/realp11.jpg">
                            <div class="bg-overlay"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="title-heading">
                                            <h1 class="heading fw-bold text-white title-dark mb-3">Osapa London, Lekki, <br> Lagos.</h1>
                                            <p class="para-desc text-white-50 title-dark mb-0">We offer valuation, Property Management, Real Estate Agency and Asset Management.</p>
                                            
                                            <div class="mt-4 pt-2">
                                                <a href="javascript:void(0)" class="btn btn-pills btn-primary">View Details <i class="mdi mdi-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end container-->
                        </div><!-- end slide-inner --> 
                    </div> <!-- end swiper-slide -->
                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <div class="swiper-button-next rounded-circle text-center"></div>
                <div class="swiper-button-prev rounded-circle text-center"></div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="about-left">
                            <div class="position-relative shadow p-2 rounded-top-pill rounded-5 bg-white img-one">
                                <img src="images/copoffice2.jpg" class="img-fluid rounded-top-pill rounded-5" alt="work-image">
    
                                <!--<div class="cta-video">
                                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow card d-flex justify-content-center align-items-center lightbox">
                                        <i class="mdi mdi-play mdi-24px text-primary"></i>
                                    </a>
                                </div>-->

                                <div class="position-absolute top-0 start-0 z-n1">
                                    <img src="images/svg/dots.svg" class="avatar avatar-xl-large" alt="">
                                </div>
                            </div>

                            <div class="img-two shadow rounded-3 overflow-hidden p-2 bg-white">
                                <img src="images/copoffice.jpg" class="img-fluid rounded-3" alt="work-image">
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="section-title ms-lg-5">
                            <h4 class="text-primary fw-medium mb-2">Our story: Courage Onochie and Partners</h4>
                            <h3 class="title mb-3">Efficiency. <br> Transparency. Control.</h3>
                            <p class="text-muted para-desc mb-0"> is a fast growing registered firm of 
Estate Surveyors and valuers set up to render wide, thorough, comprehensive 
and professional real estate consultancy in the building industry.</p>
                        
                            <div class="mt-4">
                                <a href="{{ url('/about') }}" class="btn btn-pills btn-primary">Read More <i class="mdi mdi-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Our Services</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">We offer valuation, Property Management, Real Estate Agency and Asset Management.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row g-4 mt-0">
                    <div class="col-md-4">
                        <div class="position-relative features text-center mx-lg-4 px-md-1">
                            <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                                <i data-feather="hexagon" class="hexagon"></i>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i data-feather="home" class="fea icon-m-md text-primary"></i>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <a href="#" class="fw-medium title text-dark fs-5">Valuation of Properties</a>
                                <p class="text-muted mt-3 mb-0">Through valuation, we determine the right value for your property so as to allow you enjoy the prevailing value of the said property.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4">
                        <div class="position-relative features text-center mx-lg-4 px-md-1">
                            <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                                <i data-feather="hexagon" class="hexagon"></i>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i data-feather="briefcase" class="fea icon-m-md text-primary"></i>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <a href="#" class="fw-medium title text-dark fs-5">Property Management</a>
                                <p class="text-muted mt-3 mb-0">Let us manage your property with the right experties to achieve maximum target benefit you desire.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4">
                        <div class="position-relative features text-center mx-lg-4 px-md-1">
                            <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                                <i data-feather="hexagon" class="hexagon"></i>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i data-feather="key" class="fea icon-m-md text-primary"></i>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <a href="#" class="fw-medium title text-dark fs-5">Real Estate Agency</a>
                                <p class="text-muted mt-3 mb-0">Let us make your dream of buying or selling a property come through without stories. With our exparties, we get you a property that is devoid of any encumbrances.</p>
                            </div>
                        </div>
                    </div><!--end col-->


                    <div class="col-md-4">
                        <div class="position-relative features text-center mx-lg-4 px-md-1">
                            <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                                <i data-feather="hexagon" class="hexagon"></i>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i data-feather="briefcase" class="fea icon-m-md text-primary"></i>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <a href="#" class="fw-medium title text-dark fs-5">Project Management</a>
                                <p class="text-muted mt-3 mb-0">Our training makes us the first in real estate development, let us start,  and hand over your project.</p>
                            </div>
                        </div>
                    </div><!--end col-->


                    <div class="col-md-4">
                        <div class="position-relative features text-center mx-lg-4 px-md-1">
                            <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                                <i data-feather="hexagon" class="hexagon"></i>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i data-feather="key" class="fea icon-m-md text-primary"></i>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <a href="#" class="fw-medium title text-dark fs-5">Feasibility and Viability Appraisal</a>
                                <p class="text-muted mt-3 mb-0">Let us evaluate the feasibility and viability of your real estate dream projects, to ascertain if is worthwhile</p>
                            </div>
                        </div>
                    </div><!--end col-->


                    <div class="col-md-4">
                        <div class="position-relative features text-center mx-lg-4 px-md-1">
                            <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                                <i data-feather="hexagon" class="hexagon"></i>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i data-feather="home" class="fea icon-m-md text-primary"></i>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <a href="#" class="fw-medium title text-dark fs-5">Real Estate Consultancy</a>
                                <p class="text-muted mt-3 mb-0">Let us proffer valuable solutions to your real estate questions.</p>
                            </div>
                        </div>
                    </div><!--end col-->




                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Featured Properties</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">We offer valuation, Property Management, Real Estate Agency and Asset Management.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row g-4 mt-0">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="property-image position-relative overflow-hidden shadow">
                                <img src="images/property/realp5.jpg" class="img-fluid" alt="">
                                <ul class="list-unstyled property-icon">
                                    <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content p-4">
                                <a href="property-detail.html" class="title fs-5 text-dark fw-medium">Victory park estate, Osapa lekki, lagos </a>

                                <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                    <li class="d-flex align-items-center me-3">
                                        <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">8000sqf</span>
                                    </li>
    
                                    <li class="d-flex align-items-center me-3">
                                        <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">4 Beds</span>
                                    </li>
    
                                    <li class="d-flex align-items-center">
                                        <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">4 Baths</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                    <li class="list-inline-item mb-0">
                                        <span class="text-muted">Price</span>
                                        <p class="fw-medium mb-0">N250m</p>
                                    </li>
                                    <li class="list-inline-item mb-0 text-muted">
                                        <span class="text-muted">Rating</span>
                                        <ul class="fw-medium text-warning list-unstyled mb-0">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="property-image position-relative overflow-hidden shadow">
                                <img src="images/property/realp3.jpg" class="img-fluid" alt="">
                                <ul class="list-unstyled property-icon">
                                    <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content p-4">
                                <a href="property-detail.html" class="title fs-5 text-dark fw-medium">Victory park estate, Osapa lekki, lagos</a>
                                <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                    <li class="d-flex align-items-center me-3">
                                        <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">8000sqf</span>
                                    </li>
    
                                    <li class="d-flex align-items-center me-3">
                                        <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">4 Beds</span>
                                    </li>
    
                                    <li class="d-flex align-items-center">
                                        <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">4 Baths</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                    <li class="list-inline-item mb-0">
                                        <span class="text-muted">Price</span>
                                        <p class="fw-medium mb-0">N250m</p>
                                    </li>
                                    <li class="list-inline-item mb-0 text-muted">
                                        <span class="text-muted">Rating</span>
                                        <ul class="fw-medium text-warning list-unstyled mb-0">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="property-image position-relative overflow-hidden shadow">
                                <img src="images/property/realp4.jpg" class="img-fluid" alt="">
                                <ul class="list-unstyled property-icon">
                                    <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content p-4">
                                <a href="property-detail.html" class="title fs-5 text-dark fw-medium">Victory park estate, Osapa lekki, lagos</a>
                                <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                    <li class="d-flex align-items-center me-3">
                                        <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">8000sqf</span>
                                    </li>
    
                                    <li class="d-flex align-items-center me-3">
                                        <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">4 Beds</span>
                                    </li>
    
                                    <li class="d-flex align-items-center">
                                        <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">4 Baths</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                    <li class="list-inline-item mb-0">
                                        <span class="text-muted">Price</span>
                                        <p class="fw-medium mb-0">$250m</p>
                                    </li>
                                    <li class="list-inline-item mb-0 text-muted">
                                        <span class="text-muted">Rating</span>
                                        <ul class="fw-medium text-warning list-unstyled mb-0">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="property-image position-relative overflow-hidden shadow">
                                <img src="images/property/realp8.jpg" class="img-fluid" alt="">
                                <ul class="list-unstyled property-icon">
                                    <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content p-4">
                                <a href="property-detail.html" class="title fs-5 text-dark fw-medium">Victory park estate, Osapa lekki, lagos</a>
                                <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                    <li class="d-flex align-items-center me-3">
                                        <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">8000sqf</span>
                                    </li>
    
                                    <li class="d-flex align-items-center me-3">
                                        <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">4 Beds</span>
                                    </li>
    
                                    <li class="d-flex align-items-center">
                                        <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">4 Baths</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                    <li class="list-inline-item mb-0">
                                        <span class="text-muted">Price</span>
                                        <p class="fw-medium mb-0">N250m</p>
                                    </li>
                                    <li class="list-inline-item mb-0 text-muted">
                                        <span class="text-muted">Rating</span>
                                        <ul class="fw-medium text-warning list-unstyled mb-0">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="property-image position-relative overflow-hidden shadow">
                                <img src="images/property/realp9.jpg" class="img-fluid" alt="">
                                <ul class="list-unstyled property-icon">
                                    <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content p-4">
                                <a href="property-detail.html" class="title fs-5 text-dark fw-medium">Victory park estate, Osapa lekki, lagos</a>
                                <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                    <li class="d-flex align-items-center me-3">
                                        <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">8000sqf</span>
                                    </li>
    
                                    <li class="d-flex align-items-center me-3">
                                        <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">4 Beds</span>
                                    </li>
    
                                    <li class="d-flex align-items-center">
                                        <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">4 Baths</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                    <li class="list-inline-item mb-0">
                                        <span class="text-muted">Price</span>
                                        <p class="fw-medium mb-0">N250m</p>
                                    </li>
                                    <li class="list-inline-item mb-0 text-muted">
                                        <span class="text-muted">Rating</span>
                                        <ul class="fw-medium text-warning list-unstyled mb-0">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="property-image position-relative overflow-hidden shadow">
                                <img src="images/property/realp11.jpg" class="img-fluid" alt="">
                                <ul class="list-unstyled property-icon">
                                    <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                    <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content p-4">
                                <a href="property-detail.html" class="title fs-5 text-dark fw-medium">Victory park estate, Osapa lekki, lagos</a>
                                <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                    <li class="d-flex align-items-center me-3">
                                        <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">8000sqf</span>
                                    </li>
    
                                    <li class="d-flex align-items-center me-3">
                                        <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">4 Beds</span>
                                    </li>
    
                                    <li class="d-flex align-items-center">
                                        <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                        <span class="text-muted">4 Baths</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                    <li class="list-inline-item mb-0">
                                        <span class="text-muted">Price</span>
                                        <p class="fw-medium mb-0">N250m</p>
                                    </li>
                                    <li class="list-inline-item mb-0 text-muted">
                                        <span class="text-muted">Rating</span>
                                        <ul class="fw-medium text-warning list-unstyled mb-0">
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->

                    <div class="col-12 mt-4 pt-2">
                        <div class="text-center">
                            <a href="grid.html" class="mt-3 fs-6 text-primary">View More Properties <i class="mdi mdi-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div><!--end row-->
            </div><!--end container-->

            <div class="container-fluid mt-100 mt-60">
                <div class="position-relative overflow-hidden rounded-3 shadow py-5" style="background: url('images/bg/realp9.jpg') center center fixed;">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-4 py-3">
                                <div class="counter-box text-center">
                                    <h1 class="mb-0 text-white fw-bold"><span class="counter-value" data-target="154">1</span>+</h1>
                                    <h6 class="counter-head text-white fs-5 fw-semibold mb-0">Projects Completed</h6>
                                </div><!--end counter box-->
                            </div><!--end col-->
        
                            <div class="col-4 py-3">
                                <div class="counter-box text-center">
                                    <h1 class="mb-0 text-white fw-bold"><span class="counter-value" data-target="2">1</span>+</h1>
                                    <h6 class="counter-head text-white fs-5 fw-semibold mb-0">Awards</h6>
                                </div><!--end counter box-->
                            </div><!--end col-->
        
                            <div class="col-4 py-3">
                                <div class="counter-box text-center">
                                    <h1 class="mb-0 text-white fw-bold"><span class="counter-value" data-target="154">1</span>+</h1>
                                    <h6 class="counter-head text-white fs-5 fw-semibold mb-0">Happy Clients</h6>
                                </div><!--end counter box-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div>
            </div><!--end container fluid-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Our Team</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">We offer valuation, Property Management, Real Estate Agency and Asset Management.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row g-4 mt-0">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="card team team-primary text-center">
                            <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                                <img src="images/client/free-user-icon.png" class="img-fluid" alt="">
                                <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                                <ul class="list-unstyled team-social mb-0">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook" class="icons fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram" class="icons fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter" class="icons fea-social"></i></a></li>
                                </ul><!--end icon-->
                            </div>

                            <div class="content mt-3">
                                <a href="#" class="text-dark h5 mb-0 title">COURAGE AYOTIDE ONOCHIE</a>
                                <h6 class="text-muted mb-0 fw-normal">Principal Partner</h6>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="card team team-primary text-center">
                            <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                                <img src="images/client/free-user-icon.png" class="img-fluid" alt="">
                                <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                                <ul class="list-unstyled team-social mb-0">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook" class="icons fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram" class="icons fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter" class="icons fea-social"></i></a></li>
                                </ul><!--end icon-->
                            </div>

                            <div class="content mt-3">
                                <a href="#" class="text-dark h5 mb-0 title">ADEMAYOWA OLUWADAMILOLA OYEBADE</a>
                                <h6 class="text-muted mb-0 fw-normal">Head of Agency Dept</h6>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="card team team-primary text-center">
                            <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                                <img src="images/client/free-user-icon.png" class="img-fluid" alt="">
                                <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                                <ul class="list-unstyled team-social mb-0">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook" class="icons fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram" class="icons fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter" class="icons fea-social"></i></a></li>
                                </ul><!--end icon-->
                            </div>

                            <div class="content mt-3">
                                <a href="#" class="text-dark h5 mb-0 title">GABRIEL DEMILADE OSUNKOYA</a>
                                <h6 class="text-muted mb-0 fw-normal">Broker</h6>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="card team team-primary text-center">
                            <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                                <img src="images/client/free-user-icon.png" class="img-fluid" alt="">
                                <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                                <ul class="list-unstyled team-social mb-0">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook" class="icons fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram" class="icons fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter" class="icons fea-social"></i></a></li>
                                </ul><!--end icon-->
                            </div>

                            <div class="content mt-3">
                                <a href="page-team-detail.html" class="text-dark h5 mb-0 title">ETIEFE, DANIEL FRANK</a>
                                <h6 class="text-muted mb-0 fw-normal">Head Marketind Dept</h6>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h4 class="title mb-3">Have Question ? Get in touch!</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">We offer valuation, Property Management, Real Estate Agency and Asset Management.</p>
                            <div class="mt-4 pt-2">
                                <a href="{{ url('contact') }}" class="btn btn-pills btn-primary"><span class="h5 mb-0 me-1"><i data-feather="mail" class="fea icon-sm"></i></span> Contact us</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->

        



@endsection