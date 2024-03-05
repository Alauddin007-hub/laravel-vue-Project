<script setup>
import Header from "@/Components/Header.vue";
import Service from "@/Components/Service.vue";
import Slider from "@/Components/Slider.vue";
import About from "@/Components/About.vue";
import Service2 from "@/Components/Service2.vue";
import TeamBanner from "@/Components/TeamBanner.vue";
import Testimonial from '@/Components/Testimonial.vue';
</script>

<template>
    <!-- Header Section Start -->
    <Header />
    <!-- Header Section End -->

    <!-- Slider Section Start -->
    <Slider />
    <!-- Slider Section End -->

    <!-- Service Sector Section Start -->
    <Service />
    <!-- Service Sector Section End -->

    <!-- About Section Start -->
    <About />
    <!-- About Section End -->

    <!-- Service Section Start -->
    <Service2 />
    <!-- Service Section End -->

    <!-- Team & Video Banner Section Start -->
    <TeamBanner />
    <!-- Team & Video Banner Section End -->

    <!-- Testimonial Section Start -->
    <Testimonial />
    <!-- Testimonial Section End -->

    <!-- News Blog Section Start -->
    <div class="section section-padding bg-name-seashell">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- News Blog Area Start -->
                    <div class="news-blog-area">
                        <!-- News Blog Wrapper Start -->
                        <div class="news-blog-wrapper">
                            <img
                                class="fit-image"
                                src="assets/images/blog/blog-news.jpg"
                                alt="Blog News"
                            />
                            <!-- News Content Start -->
                            <div class="news-content">
                                <span
                                    class="subtitle"
                                    data-aos="fade-up"
                                    data-aos-duration="1100"
                                    >Blog Post</span
                                >
                                <h2
                                    class="title"
                                    data-aos="fade-up"
                                    data-aos-duration="1500"
                                >
                                    Latest news form our blog
                                </h2>
                                <a
                                    href="service-details.html"
                                    class="btn btn-outline-success btn-hover-success"
                                    data-aos="fade-up"
                                    data-aos-duration="2500"
                                    >All Post<i class="icofont-double-right"></i
                                ></a>
                            </div>
                            <!-- News Content End -->
                        </div>
                        <!-- News Blog Wrapper End -->

                        <!-- Blog Wrapper Start -->
                        <div class="blog-wrapper">
                            <!-- Single Blog Start -->
                            <div
                                class="single-blog"
                                data-aos="fade-up"
                                data-aos-duration="1500"
                            >
                                <!-- Blog Thumb Start -->
                                <div class="blog-thumb">
                                    <a href="blog-details.html"
                                        ><img
                                            class="fit-image"
                                            src="assets/images/blog/blog-1.jpg"
                                            alt="Blog Image"
                                    /></a>
                                </div>
                                <!-- Blog Thumb End -->

                                <!-- Blog Content Start -->
                                <div class="blog-content">
                                    <span class="subtitle">Medical</span>
                                    <h2 class="title">
                                        <a href="blog-details.html"
                                            >See their doctor for many
                                            different...</a
                                        >
                                    </h2>
                                    <p>
                                        Lorem Ipsum simply dummy text printing
                                        and typesetng industry has been industry
                                        standard.
                                    </p>
                                    <div class="meta">
                                        <span>09 March, 2021</span>
                                    </div>
                                </div>
                                <!-- Blog Content End -->
                            </div>
                            <!-- Single Blog End -->

                            <!-- Single Blog Start -->
                            <div
                                class="single-blog"
                                data-aos="fade-up"
                                data-aos-duration="2500"
                            >
                                <!-- Blog Thumb Start -->
                                <div class="blog-thumb">
                                    <a href="blog-details.html"
                                        ><img
                                            class="fit-image"
                                            src="assets/images/blog/blog-2.jpg"
                                            alt="Blog Image"
                                    /></a>
                                </div>
                                <!-- Blog Thumb End -->

                                <!-- Blog Content Start -->
                                <div class="blog-content">
                                    <span class="subtitle">Medical</span>
                                    <h2 class="title">
                                        <a href="blog-details.html"
                                            >How often should you get a
                                            medical...</a
                                        >
                                    </h2>
                                    <p>
                                        Lorem Ipsum simply dummy text printing
                                        and typesetng industry has been industry
                                        standard.
                                    </p>
                                    <div class="meta">
                                        <span>09 March, 2021</span>
                                    </div>
                                </div>
                                <!-- Blog Content End -->
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <!-- Blog Wrapper End -->
                    </div>
                    <!-- News Blog Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- News Blog Section End -->

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
                            <div
                                class="appoinment-content"
                                data-aos="fade-up"
                                data-aos-duration="1500"
                            >
                                <h2 class="title">
                                    You can contact for appoinment.
                                </h2>
                            </div>
                            <div class="appoinment-info-wrapper">
                                <div
                                    class="contact-info"
                                    data-aos="flip-left"
                                    data-aos-duration="2000"
                                >
                                    <div class="icon-box">
                                        <i
                                            class="round-shape round-shape-negative icofont-ui-call"
                                        ></i>
                                    </div>
                                    <div class="info">
                                        <h5 class="title">Call us:</h5>
                                        <a class="number" href="tel:+0089458648"
                                            >+00 89 458 648</a
                                        >
                                    </div>
                                </div>
                                <div
                                    class="contact-info"
                                    data-aos="flip-right"
                                    data-aos-duration="2000"
                                >
                                    <div class="icon-box">
                                        <i
                                            class="round-shape icofont-envelope-open"
                                        ></i>
                                    </div>
                                    <div class="info">
                                        <h5 class="title">Email us:</h5>
                                        <a
                                            class="number"
                                            href="mailto:neonal@gmail.com"
                                            >neonal@gmail.com</a
                                        >
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

    <!-- Footer Section Start -->
    <footer class="section footer-section">
        <!-- Footer Top Start -->
        <div class="footer-top bg-name-primary section-padding">
            <!-- Shape Start -->
            <div class="footer-shape-left layer-shape"></div>
            <div class="footer-shape-right layer-shape"></div>
            <!-- Shape End -->
            <div class="container">
                <div class="row m-b-n40">
                    <div
                        class="col-12 col-md-6 col-lg-3 col-xl-4 m-b-40"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    >
                        <div class="single-footer-widget">
                            <div class="footer-logo m-b-20">
                                <a href="index.html"
                                    ><img
                                        src="assets/images/logo/logo.png"
                                        alt="Logo"
                                /></a>
                            </div>
                            <p class="desc-content m-b-35">
                                Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry.has been since the
                                printer took.
                            </p>
                            <div class="appoinment-button">
                                <a
                                    href="contact.html"
                                    class="btn btn-outline-success btn-hover-success"
                                    >Appoinment<i class="icofont-calendar"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-sm-6 col-md-6 col-lg-2 col-xl-2 m-b-40"
                        data-aos="fade-up"
                        data-aos-duration="1500"
                    >
                        <div class="single-footer-widget">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul class="widget-list">
                                <li>
                                    <a href="about.html"
                                        ><i class="icofont-plus"></i> About
                                        Us</a
                                    >
                                </li>
                                <li>
                                    <a href="service.html"
                                        ><i class="icofont-plus"></i> Service</a
                                    >
                                </li>
                                <li>
                                    <a href="contact.html"
                                        ><i class="icofont-plus"></i> Doctors</a
                                    >
                                </li>
                                <li>
                                    <a href="contact.html"
                                        ><i class="icofont-plus"></i>
                                        Departments</a
                                    >
                                </li>
                                <li>
                                    <a href="contact.html"
                                        ><i class="icofont-plus"></i> Online
                                        Payment</a
                                    >
                                </li>
                                <li>
                                    <a href="contact.html"
                                        ><i class="icofont-plus"></i> Contact
                                        Us</a
                                    >
                                </li>
                                <li>
                                    <a href="account.html"
                                        ><i class="icofont-plus"></i> My
                                        Account</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="col-sm-6 col-md-6 col-lg-3 col-xl-2 m-b-40"
                        data-aos="fade-up"
                        data-aos-duration="2000"
                    >
                        <div
                            class="single-footer-widget single-footer-space-left"
                        >
                            <h4 class="widget-title">Neonal Services</h4>
                            <ul class="widget-list">
                                <li>
                                    <a href="contact.html"
                                        ><i class="icofont-plus"></i> Pediatric
                                        Clinic</a
                                    >
                                </li>
                                <li>
                                    <a href="contact.html"
                                        ><i class="icofont-plus"></i> Diagnosis
                                        Clinic</a
                                    >
                                </li>
                                <li>
                                    <a href="contact.html"
                                        ><i class="icofont-plus"></i> Cardiac
                                        Clinic</a
                                    >
                                </li>
                                <li>
                                    <a href="contact.html"
                                        ><i class="icofont-plus"></i> Laboratory
                                        Analysis</a
                                    >
                                </li>
                                <li>
                                    <a href="contact.html"
                                        ><i class="icofont-plus"></i>
                                        Gynecological Clinic</a
                                    >
                                </li>
                                <li>
                                    <a href="contact.html"
                                        ><i class="icofont-plus"></i> Personal
                                        Counseling</a
                                    >
                                </li>
                                <li>
                                    <a href="contact.html"
                                        ><i class="icofont-plus"></i> Dental
                                        Clinic</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="col-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-lg-end m-b-40"
                        data-aos="fade-up"
                        data-aos-duration="2500"
                    >
                        <div class="single-footer-widget">
                            <h4 class="widget-title">Working Hours</h4>
                            <ul class="widget-list table-list">
                                <li>
                                    <span>Monday</span>
                                    <span class="table-list-middle">-</span>
                                    <span>10 am to 07 pm</span>
                                </li>
                                <li>
                                    <span>Tuesday</span>
                                    <span class="table-list-middle">-</span>
                                    <span>10 am to 07 pm</span>
                                </li>
                                <li>
                                    <span>Wednesday</span>
                                    <span class="table-list-middle">-</span>
                                    <span>10 am to 07 pm</span>
                                </li>
                                <li>
                                    <span>Thursday</span>
                                    <span class="table-list-middle">-</span>
                                    <span>10 am to 07 pm</span>
                                </li>
                                <li>
                                    <span>Friday</span>
                                    <span class="table-list-middle">-</span>
                                    <span>10 am to 07 pm</span>
                                </li>
                                <li>
                                    <span>Satarday</span>
                                    <span class="table-list-middle">-</span>
                                    <span>10 am to 07 pm</span>
                                </li>
                                <li>
                                    <span>Sunday</span>
                                    <span class="table-list-middle">-</span>
                                    <span class="text-color-success"
                                        >Close</span
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom bg-name-primary p-t-20 p-b-20">
            <div class="container">
                <div class="row m-b-n10">
                    <div class="col-md-6 m-b-10">
                        <div class="copyright-content">
                            <p class="mb-0">
                                © 2021
                                <strong class="text-color-success"
                                    >Neonal
                                </strong>
                                Made with
                                <i
                                    class="icofont-heart-alt text-color-success"
                                ></i>
                                by
                                <a
                                    href="https://hasthemes.com/"
                                    class="text-color-success"
                                    >HasThemes.</a
                                >
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 m-b-10">
                        <!-- Footer Menu Start -->
                        <div class="footer-menu">
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="about.html">Affiliates</a></li>
                                <li><a href="contact.html">Careers</a></li>
                                <li><a href="blog-details.html">News</a></li>
                            </ul>
                        </div>
                        <!-- Footer Menu End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!-- Footer Section End -->

    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top show" id="scroll-top">
        <i class="arrow-top icofont-bubble-up"></i>
        <i class="arrow-bottom icofont-bubble-up"></i>
    </a>
    <!-- Scroll Top End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Mobile Menu Inner Start -->
        <div class="mobile-menu-inner">
            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="icofont-close-line"></i>
            </div>
            <!-- Button Close End -->

            <!-- Mobile Menu Inner Wrapper Start -->
            <div class="mobile-menu-inner-wrapper">
                <!-- Appoinment Button Start -->
                <div class="appoinment-button">
                    <a
                        href="contact.html"
                        class="btn btn-outline-success btn-hover-success"
                        >Appoinment<i class="icofont-calendar"></i
                    ></a>
                </div>
                <!-- Appoinment Button End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="service-details.html">Service</a></li>
                            <li class="has-children">
                                <a href="#"
                                    >Pages
                                    <i
                                        class="icofont-dotted-down"
                                        aria-hidden="true"
                                    ></i
                                ></a>
                                <ul class="dropdown">
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li>
                                        <a href="error-404.html">Error 404</a>
                                    </li>
                                    <li><a href="faq.html">FAQ</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#"
                                    >Blog
                                    <i
                                        class="icofont-dotted-down"
                                        aria-hidden="true"
                                    ></i
                                ></a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="blog-details.html"
                                            >Blog Details</a
                                        >
                                    </li>
                                    <li>
                                        <a href="blog-details-sidebar.html"
                                            >Blog Details Sidebar</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->

                <!-- Contact Links/Social Links Start -->
                <div class="mt-auto bottom-0">
                    <!-- Contact Links Start -->
                    <ul class="contact-links">
                        <li>
                            <i class="icofont-phone"></i
                            ><a href="tel:+0123456789"> +012 3456 789</a>
                        </li>
                        <li>
                            <i class="icofont-envelope-open"></i
                            ><a href="mailto:info@example.com">
                                info@example.com</a
                            >
                        </li>
                        <li>
                            <i class="icofont-wall-clock"></i>
                            <span>Monday - Sunday 9.00 - 18.00</span>
                        </li>
                    </ul>
                    <!-- Contact Links End -->
                </div>
                <!-- Contact Links/Social Links End -->
            </div>
            <!-- Mobile Menu Inner Wrapper End -->
        </div>
        <!-- Mobile Menu Inner End -->
    </div>
    <!-- Mobile Menu End -->
</template>
