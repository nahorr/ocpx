@extends('layout.app')


@section('content')


<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('images/bg/03.jpg');">
            <div class="bg-overlay bg-gradient-overlay-2"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <p class="text-white-50 para-desc mx-auto mb-0">Sell Properties</p>
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Sell Faster. Save Thousands.</h5>
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
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">How It Works</h4>
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
                                <a href="#" class="fw-medium title text-dark fs-5">Evaluate Property</a>
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
                                <a href="#" class="fw-medium title text-dark fs-5">Meeting with Agent</a>
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
                                <a href="#" class="fw-medium title text-dark fs-5">Close the Deal</a>
                                <p class="text-muted mt-3 mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-3">Brokerage Calculator</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center mt-4 pt-2">
                    <div class="col-lg-8 col-12">
                        <div class="p-4 shadow rounded-3" role="form">
                            <ul class="list-unstyled d-flex justify-content-between mb-0">
                                <li class="h6 mb-0">Min $ 10000</li>
                                <li class="h6 mb-0">Max $ 200000</li>
                            </ul>

                            <div class="row">
                                <div class="col-sm-12 mb-4">
                                    <label for="slider" class="form-label"></label>
                                    <input type="range" value="10000" min="10000" max="200000" class="form-range custom-range" id="slider">
                                </div><!--end col-->
                            </div><!--end row-->

                            <ul class="list-unstyled text-center d-md-flex justify-content-between mb-0">
                                <li>
                                    <ul class="mb-0 text-md-start brokerage-form list-unstyled">
                                        <li class="h5 mb-0"><label class="control-label">Total Value ($)</label></li>
                                        <li class="h5 mb-0"><input type="hidden" id="amount" class="form-control"><span class="text-primary">$</span> <p class="mb-0 d-inline-block h5 text-primary" id="amount-label"></p></li>
                                    </ul>
                                </li>

                                <li class="mt-2 mt-sm-0">
                                    <ul class="mb-0 text-md-end brokerage-form list-unstyled">
                                        <li class="h5 mb-0"><label class="control-label">Brokerage Fee</label></li>
                                        <li class="h5 mb-0"><input type="hidden" id="saving" class="form-control mb-0"><span class="text-primary">$</span> <p class="mb-0 d-inline-block h5 text-primary" id="saving-label"></p></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->





@endsection