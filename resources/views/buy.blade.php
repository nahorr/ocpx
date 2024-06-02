@extends('layout.app')


@section('content')


<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('images/bg/02.jpg');">
            <div class="bg-overlay bg-gradient-overlay-2"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <p class="text-white-50 para-desc mx-auto mb-0">Buy Property</p>
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Find Your Dream Home</h5>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="features-absolute subscribe-search">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="text-center subscribe-form">
                                        <form style="max-width: 800px;">
                                            <div class="mb-0">
                                                <input type="text" id="help" name="name" class="border shadow rounded-3 bg-white" required="" placeholder="City, Address, Zip">
                                                <button type="submit" class="btn btn-primary rounded-3">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end div-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Featured Properties</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row g-4 mt-0">
                    <div class="col-lg-6 col-12">
                        <div class="card property property-list border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="d-md-flex">
                                <div class="property-image position-relative overflow-hidden shadow flex-md-shrink-0 rounded-3 m-2">
                                    <img src="images/property/1.jpg" class="img-fluid h-100 w-100" alt="">
                                    <ul class="list-unstyled property-icon">
                                        <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content p-3">
                                    <a href="property-detail.html" class="title fs-5 text-dark fw-medium">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</a>

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
                                            <p class="fw-medium mb-0">$5000</p>
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
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->
                    
                    <div class="col-lg-6 col-12">
                        <div class="card property property-list border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="d-md-flex">
                                <div class="property-image position-relative overflow-hidden shadow flex-md-shrink-0 rounded-3 m-2">
                                    <img src="images/property/2.jpg" class="img-fluid h-100 w-100" alt="">
                                    <ul class="list-unstyled property-icon">
                                        <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content p-3">
                                    <a href="property-detail.html" class="title fs-5 text-dark fw-medium">59345 STONEWALL DR, Plaquemine, LA 70764, USA</a>
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
                                            <p class="fw-medium mb-0">$5000</p>
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
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->
                    
                    <div class="col-lg-6 col-12">
                        <div class="card property property-list border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="d-md-flex">
                                <div class="property-image position-relative overflow-hidden shadow flex-md-shrink-0 rounded-3 m-2">
                                    <img src="images/property/3.jpg" class="img-fluid h-100 w-100" alt="">
                                    <ul class="list-unstyled property-icon">
                                        <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content p-3">
                                    <a href="property-detail.html" class="title fs-5 text-dark fw-medium">3723 SANDBAR DR, Addis, LA 70710, USA</a>
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
                                            <p class="fw-medium mb-0">$5000</p>
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
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->
                    
                    <div class="col-lg-6 col-12">
                        <div class="card property property-list border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="d-md-flex">
                                <div class="property-image position-relative overflow-hidden shadow flex-md-shrink-0 rounded-3 m-2">
                                    <img src="images/property/4.jpg" class="img-fluid h-100 w-100" alt="">
                                    <ul class="list-unstyled property-icon">
                                        <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content p-3">
                                    <a href="property-detail.html" class="title fs-5 text-dark fw-medium">Lot 21 ROYAL OAK DR, Prairieville, LA 70769, USA</a>
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
                                            <p class="fw-medium mb-0">$5000</p>
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
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->
                    
                    <div class="col-lg-6 col-12">
                        <div class="card property property-list border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="d-md-flex">
                                <div class="property-image position-relative overflow-hidden shadow flex-md-shrink-0 rounded-3 m-2">
                                    <img src="images/property/5.jpg" class="img-fluid h-100 w-100" alt="">
                                    <ul class="list-unstyled property-icon">
                                        <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content p-3">
                                    <a href="property-detail.html" class="title fs-5 text-dark fw-medium">710 BOYD DR, Unit #1102, Baton Rouge, LA 70808, USA</a>
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
                                            <p class="fw-medium mb-0">$5000</p>
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
                            </div>
                        </div><!--end items-->
                    </div><!--end col-->
                    
                    <div class="col-lg-6 col-12">
                        <div class="card property property-list border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="d-md-flex">
                                <div class="property-image position-relative overflow-hidden shadow flex-md-shrink-0 rounded-3 m-2">
                                    <img src="images/property/6.jpg" class="img-fluid h-100 w-100" alt="">
                                    <ul class="list-unstyled property-icon">
                                        <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content p-3">
                                    <a href="property-detail.html" class="title fs-5 text-dark fw-medium">5133 MCLAIN WAY, Baton Rouge, LA 70809, USA</a>
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
                                            <p class="fw-medium mb-0">$5000</p>
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

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Buyer Benefits</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
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
                                <a href="#" class="fw-medium title text-dark fs-5">Free Consultation</a>
                                <p class="text-muted mt-3 mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
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
                                <a href="#" class="fw-medium title text-dark fs-5">Buyer Rebate Programs</a>
                                <p class="text-muted mt-3 mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
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
                                <a href="#" class="fw-medium title text-dark fs-5">Save Money</a>
                                <p class="text-muted mt-3 mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row g-4">
                    <div class="col-md-4">
                        <ul class="nav nav-pills nav-justified flex-column bg-white rounded-3 shadow p-3 mb-0 sticky-bar" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link rounded-3 active" id="pre-approval-office" data-bs-toggle="pill" href="#pills-pre-approval" role="tab" aria-controls="pills-pre-approval" aria-selected="false">
                                    <div class="text-center pt-1 pb-1">
                                        <h6 class="title fw-normal mb-0">Pre Approval Letter</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded-3" id="schedule-office" data-bs-toggle="pill" href="#pills-schedule" role="tab" aria-controls="pills-schedule" aria-selected="false">
                                    <div class="text-center pt-1 pb-1">
                                        <h6 class="title fw-normal mb-0">Schedule a Showing</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded-3" id="offer-space" data-bs-toggle="pill" href="#pills-offer" role="tab" aria-controls="pills-offer" aria-selected="false">
                                    <div class="text-center pt-1 pb-1">
                                        <h6 class="title fw-normal mb-0">Submit an Offer</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded-3" id="inspection-room" data-bs-toggle="pill" href="#pills-inspection" role="tab" aria-controls="pills-inspection" aria-selected="false">
                                    <div class="text-center pt-1 pb-1">
                                        <h6 class="title fw-normal mb-0">Property Inspection</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded-3" id="appraisal-room" data-bs-toggle="pill" href="#pills-appraisal" role="tab" aria-controls="pills-appraisal" aria-selected="false">
                                    <div class="text-center pt-1 pb-1">
                                        <h6 class="title fw-normal mb-0">Appraisal</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded-3" id="closing-room" data-bs-toggle="pill" href="#pills-closing" role="tab" aria-controls="pills-closing" aria-selected="false">
                                    <div class="text-center pt-1 pb-1">
                                        <h6 class="title fw-normal mb-0">Closing Deal</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                        </ul><!--end nav pills-->
                    </div><!--end col-->

                    <div class="col-md-8 col-12">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade bg-white show active" id="pills-pre-approval" role="tabpanel" aria-labelledby="pre-approval-office">
                                <img src="images/svg/Agent_Monochromatic.svg" class="img-fluid" alt="">
                                <div class="mt-4">
                                    <h5 class="">Pre Approval Letter</h5>
                                    <p class="text-muted">Most buyers think the first step is finding their dream house, but the truth is finding the funding is the first step. Towntor streamlines the Loan Pre-Approval process with our ecosystem of Premier Partners or simply upload your own Pre-Approval letter.</p>
                                    <a href="javascript:void(0)" class="text-primary">See More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                </div>
                            </div><!--end teb pane-->
                            
                            <div class="tab-pane fade bg-white" id="pills-schedule" role="tabpanel" aria-labelledby="schedule-office">
                                <img src="images/svg/presentation_Flatline.svg" class="img-fluid" alt="">
                                <div class="mt-4">
                                    <h5 class="">Schedule a Showing</h5>
                                    <p class="text-muted">Towntor allows a buyer to schedule an instant showing and gain a private viewing without the need for multiple parties to be involved. You pick the time that works for you!</p>
                                    <a href="javascript:void(0)" class="text-primary">See More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                </div>
                            </div><!--end teb pane-->

                            <div class="tab-pane fade bg-white" id="pills-offer" role="tabpanel" aria-labelledby="offer-space">
                                <img src="images/svg/session_Flatline.svg" class="img-fluid" alt="">
                                <div class="mt-4">
                                    <h5 class="">Submit an Offer</h5>
                                    <p class="text-muted">Towntor walks a buyer through the purchase agreement process making the paperwork appear effortless. With our custom workflows and progress analytics, you will always know where your purchase stands. No more phone tag and unreturned emails!</p>
                                    <a href="javascript:void(0)" class="text-primary">See More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                </div>
                            </div><!--end teb pane-->
                            
                            <div class="tab-pane fade bg-white" id="pills-inspection" role="tabpanel" aria-labelledby="inspection-room">
                                <img src="images/svg/Startup_Flatline.svg" class="img-fluid" alt="">
                                <div class="mt-4">
                                    <h5 class="">Property Inspection</h5>
                                    <p class="text-muted">No one wants to buy a lemon. Book an inspection with a licensed inspector, then submit the repair requests all via the Towntor platform.</p>
                                    <a href="javascript:void(0)" class="text-primary">See More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                </div>
                            </div><!--end teb pane-->
                            
                            <div class="tab-pane fade bg-white" id="pills-appraisal" role="tabpanel" aria-labelledby="appraisal-room">
                                <img src="images/svg/team_Flatline.svg" class="img-fluid" alt="">
                                <div class="mt-4">
                                    <h5 class="">Appraisal</h5>
                                    <p class="text-muted">Towntor monitors the appraisal process ensuring the home you are purchasing meets or exceeds the price you are paying.</p>
                                    <a href="javascript:void(0)" class="text-primary">See More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                </div>
                            </div><!--end teb pane-->
                            
                            <div class="tab-pane fade bg-white" id="pills-closing" role="tabpanel" aria-labelledby="closing-room">
                                <img src="images/svg/Team_meeting_Two.svg" class="img-fluid" alt="">
                                <div class="mt-4">
                                    <h5 class="">Closing Deal</h5>
                                    <p class="text-muted">Finally the closing packet is sent to the Title office, and the day has come… You have Towntor the home of your dreams!</p>
                                    <a href="javascript:void(0)" class="text-primary">See More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                </div>
                            </div><!--end teb pane-->
                        </div><!--end tab content-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h4 class="title mb-3">Have Question ? Get in touch!</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                            <div class="mt-4 pt-2">
                                <a href="contactus.html" class="btn btn-pills btn-primary"><span class="h5 mb-0 me-1"><i data-feather="mail" class="fea icon-sm"></i></span> Contact us</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->


        @endsection