
@extends('layout.app')


@section('content')


 <!-- Hero Start -->
 <section class="bg-half-170 d-table w-100" style="background: url('images/bg/realp7.jpg');">
            <div class="bg-overlay bg-gradient-overlay-2"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <p class="text-white-50 para-desc mx-auto mb-0">Get in touch !</p>
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Contact us</h5>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html">Towntor</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                        </ul>
                    </nav>
                </div>
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
        <section class="section pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="p-4 rounded-3 shadow">
                            <form method="post" name="myForm" onsubmit="return validateForm()">
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Name :">
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Email :">
                                        </div> 
                                    </div><!--end col-->
    
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Subject</label>
                                            <input name="subject" id="subject" class="form-control" placeholder="Subject :">
                                        </div>
                                    </div><!--end col-->
    
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Comments <span class="text-danger">*</span></label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Message :"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="position-relative features text-center mx-lg-4 px-md-1">
                            <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                                <i data-feather="hexagon" class="hexagon"></i>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i data-feather="phone" class="fea icon-m-md text-primary"></i>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <h5 class="mb-3">Phone</h5>
                                <p class="text-muted">Start working with Courage Onochie and Partners that can provide everything</p>
                                <a href="tel:+152534-468-854" class="text-primary">+234 803 637 7529, +234 708 644 1658</a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4">
                        <div class="position-relative features text-center mx-lg-4 px-md-1">
                            <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                                <i data-feather="hexagon" class="hexagon"></i>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i data-feather="mail" class="fea icon-m-md text-primary"></i>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <h5 class="mb-3">Email</h5>
                                <p class="text-muted">Start working with Courage Onochie and Partners</p>
                                <a href="mailto:contact@example.com" class="text-primary">info@courageonochieandpartners.com</a>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4">
                        <div class="position-relative features text-center mx-lg-4 px-md-1">
                            <div class="feature-icon position-relative overflow-hidden d-flex justify-content-center">
                                <i data-feather="hexagon" class="hexagon"></i>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i data-feather="map-pin" class="fea icon-m-md text-primary"></i>
                                </div>
                            </div>
    
                            <div class="mt-4">
                                <h5 class="mb-3">Location</h5>
                                <p class="text-muted">Suite 25, B.O.S Plaza, Ire-Akari Estate Road, Isolo, Lagos State.<br>Houston, USA 485</p>
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.9455204372916!2d3.320302874063392!3d6.528565323106355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8f1970ea37bd%3A0x55804bd2777d065c!2sB.%20O.%20S.%20Plaza!5e0!3m2!1sen!2sng!4v1715005368423!5m2!1sen!2sng" class="lightbox text-primary" data-type="iframe" data-group="iframe" data-width="1024px" data-height="576px">View on Google map</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container-fluid mt-100 mt-60">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card map border-0">
                            <div class="card-body p-0">
                                
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.9455204372916!2d3.320302874063392!3d6.528565323106355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8f1970ea37bd%3A0x55804bd2777d065c!2sB.%20O.%20S.%20Plaza!5e0!3m2!1sen!2sng!4v1715005368423!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->



@endsection