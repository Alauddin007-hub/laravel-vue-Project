<script setup>
import NavBarLayout from "@/Layouts/NavBarLayout.vue";
import Appointment from '@/Components/Appointment.vue';
</script>

<template>
    <!-- Header Section Start -->
    <NavBarLayout>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Start -->
    <div class="section breadcrumb-section bg-name-primary">
        <div class="layer shape-1"></div>
        <div class="container section-padding">
            <div class="row">
                <div class="col-12 align-items-center text-center">
                    <!-- Breadcrumb Wrapper Start -->
                    <div class="breadcrumb-wrapper">
                        <h1 class="title">Neurological Treatment</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Service Details</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Gallery Long title Start -->
    <div class="section section-margin-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-long-title text-center">
                        <h2 class="title"> <span>We are sharing some happy</span> <br> moments with our staff and <span
                                class="text-style word-wave" data-splitting="words" data-aos="zoom-in"
                                data-aos-duration="2000">happy patients.</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Long title End -->

    <!-- Gallery Section Start -->
    <div class="section gallery-section">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="2400">
                    <div class="gallery-filter-nav bg-name-seashell">
                        <button class="filter-button active" data-filter="*">All</button>
                        <button class="filter-button" data-filter=".cardiac">Cardiac Clinic</button>
                        <button class="filter-button" data-filter=".Gastroenterology">Gastroenterology</button>
                        <button class="filter-button" data-filter=".Surgery">Outpatient Surgery</button>
                        <button class="filter-button" data-filter=".Health">Primary Health Care</button>
                        <button class="filter-button" data-filter=".Kids">Kids Care</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="gallery-filter-wrapper m-b-n50" data-aos="fade-up" data-aos-duration="3000">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 m-b-50 filter-item cardiac Health">
                                <!-- Single Gallery Start -->
                                <div class="single-gallery">
                                    <div class="gallery-thumb popup-gallery">
                                        <a href="assets/images/gallery/1.jpg">
                                            <img class="fit-image" src="assets/images/gallery/1.jpg"
                                                alt="Gallery Image">
                                            <div class="bg-overlay"></div>
                                        </a>
                                        <span>Operation</span>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="service-details.html">Surgeons Performing</a></h4>
                                    </div>
                                </div>
                                <!-- Single Gallery End -->
                            </div>
                            <div class="col-md-6 col-lg-4 m-b-50 filter-item Gastroenterology Kids">
                                <!-- Single Gallery Start -->
                                <div class="single-gallery">
                                    <div class="gallery-thumb popup-gallery">
                                        <a href="assets/images/gallery/2.jpg">
                                            <img class="fit-image" src="assets/images/gallery/2.jpg"
                                                alt="Gallery Image">
                                            <div class="bg-overlay"></div>
                                        </a>
                                        <span>Doctor's</span>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="service-details.html">Pressure Measurement</a></h4>
                                    </div>
                                </div>
                                <!-- Single Gallery End -->
                            </div>
                            <div class="col-md-6 col-lg-4 m-b-50 filter-item Surgery Health">
                                <!-- Single Gallery Start -->
                                <div class="single-gallery">
                                    <div class="gallery-thumb popup-gallery">
                                        <a href="assets/images/gallery/3.jpg">
                                            <img class="fit-image" src="assets/images/gallery/3.jpg"
                                                alt="Gallery Image">
                                            <div class="bg-overlay"></div>
                                        </a>
                                        <span>Medical</span>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="service-details.html">Medical Healthcare</a></h4>
                                    </div>
                                </div>
                                <!-- Single Gallery End -->
                            </div>
                            <div class="col-md-6 col-lg-4 m-b-50 filter-item cardiac Surgery Kids">
                                <!-- Single Gallery Start -->
                                <div class="single-gallery">
                                    <div class="gallery-thumb popup-gallery">
                                        <a href="assets/images/gallery/4.jpg">
                                            <img class="fit-image" src="assets/images/gallery/4.jpg"
                                                alt="Gallery Image">
                                            <div class="bg-overlay"></div>
                                        </a>
                                        <span>Operation</span>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="service-details.html">Surgical Operating</a></h4>
                                    </div>
                                </div>
                                <!-- Single Gallery End -->
                            </div>
                            <div class="col-md-6 col-lg-4 m-b-50 filter-item cardiac Gastroenterology">
                                <!-- Single Gallery Start -->
                                <div class="single-gallery">
                                    <div class="gallery-thumb popup-gallery">
                                        <a href="assets/images/gallery/5.jpg">
                                            <img class="fit-image" src="assets/images/gallery/5.jpg"
                                                alt="Gallery Image">
                                            <div class="bg-overlay"></div>
                                        </a>
                                        <span>Doctor's</span>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="service-details.html">Using Hammer Knock</a></h4>
                                    </div>
                                </div>
                                <!-- Single Gallery End -->
                            </div>
                            <div class="col-md-6 col-lg-4 m-b-50 filter-item Gastroenterology Surgery">
                                <!-- Single Gallery Start -->
                                <div class="single-gallery">
                                    <div class="gallery-thumb popup-gallery">
                                        <a href="assets/images/gallery/6.jpg">
                                            <img class="fit-image" src="assets/images/gallery/6.jpg"
                                                alt="Gallery Image">
                                            <div class="bg-overlay"></div>
                                        </a>
                                        <span>Medical</span>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="service-details.html">Woman Dentist Chair</a></h4>
                                    </div>
                                </div>
                                <!-- Single Gallery End -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12" data-aos="fade-up" data-aos-duration="2400">
                    <!-- Pagination Start -->
                    <nav class="pagination-wrapper">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#/">01</a></li>
                            <li class="page-item"><a class="page-link" href="#/">02</a></li>
                            <li class="page-item"><a class="page-link active" href="#/">03</a></li>
                            <li class="page-item">
                                <a class="page-link rounded-0" href="#/" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Pagination End -->

                </div>
            </div>

        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Appoinment Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-items-center">
                    <div class="appoinment-section bg-name-success">
                        <div class="layer-4 shape-5"></div>
                        <div class="layer-4 shape-6"></div>
                        <div class="layer-4 shape-7"></div>
                        <div class="appoinment-wrapper">
                            <div class="appoinment-content" data-aos="fade-up" data-aos-duration="1500">
                                <h2 class="title">You can contact for appoinment.</h2>
                            </div>
                            <div class="appoinment-info-wrapper">
                                <div class="contact-info" data-aos="flip-left" data-aos-duration="2000">
                                    <div class="icon-box">
                                        <i class="round-shape round-shape-negative icofont-ui-call"></i>
                                    </div>
                                    <div class="info">
                                        <h5 class="title">Call us:</h5>
                                        <a class="number" href="tel:+0089458648">+00 89 458 648</a>
                                    </div>
                                </div>
                                <div class="contact-info" data-aos="flip-right" data-aos-duration="2000">
                                    <div class="icon-box">
                                        <i class="round-shape icofont-envelope-open"></i>
                                    </div>
                                    <div class="info">
                                        <h5 class="title">Email us:</h5>
                                        <a class="number" href="mailto:neonal@gmail.com">neonal@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Appoinment Section End -->

    
</NavBarLayout>
</template>