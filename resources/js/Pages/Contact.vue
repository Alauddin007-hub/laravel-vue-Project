<script setup>
import NavBarLayout from "@/Layouts/NavBarLayout.vue";
import Footer from '@/Components/Footer.vue';
import ScrollTop from '@/Components/ScrollTop.vue';
import MobileMenu from '@/Components/MobileMenu.vue';
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
                            <h1 class="title">Contact Us</h1>
                            <ul class="breadcrumb-list">
                                <li><a href="index.html">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                        <!-- Breadcrumb Wrapper End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section End -->

        <!-- Contact Map Start -->
        <div class="section">

            <!-- Google Map Area Start -->
            <div class="google-map-area w-100" data-aos="fade-up" data-aos-duration="1000">
                <iframe class="contact-map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd"></iframe>
            </div>
            <!-- Google Map Area Start -->

        </div>
        <!-- Contact Map End -->

        <!-- Contact Info Section Start -->
        <div class="section section-margin-top">
            <div class="container">
                <div class="row m-b-n30">

                    <div class="col-md-6 col-xl-4 m-b-30">

                        <!-- Single Contact Information Start -->
                        <div class="single-contact-info">

                            <!-- Single Information Thumb Start -->
                            <div class="single-info-thumb">
                                <div class="rotate-around success">
                                    <span></span>
                                </div>
                                <img src="assets/images/icon/9.png" alt="Icon">
                            </div>
                            <!-- Single Information Thumb End -->

                            <!-- Single Contact Title Start -->
                            <div class="single-contact-title">
                                <h2 class="title"><a href="tel:123-123-456-789">+00 123 456 789</a></h2>
                                <h3 class="title"><a href="tel:123-123-456-789">+00 123 456 789</a></h3>
                            </div>
                            <!-- Single Contact Title End -->

                        </div>
                        <!-- Single Contact Information End -->

                    </div>

                    <div class="col-md-6 col-xl-4 m-b-30">

                        <!-- Single Contact Information Start -->
                        <div class="single-contact-info">

                            <!-- Single Information Thumb Start -->
                            <div class="single-info-thumb">
                                <div class="rotate-around success">
                                    <span></span>
                                </div>
                                <img src="assets/images/icon/10.png" alt="Icon">
                            </div>
                            <!-- Single Information Thumb End -->

                            <!-- Single Contact Title Start -->
                            <div class="single-contact-title">
                                <h2 class="title"><a href="mailto:demo@example.com">mail@gmail.com</a></h2>
                                <h3 class="title"><a href="mailto:demo@example.com">demo@example.com</a></h3>
                            </div>
                            <!-- Single Contact Title End -->

                        </div>
                        <!-- Single Contact Information End -->

                    </div>

                    <div class="col-md-6 col-xl-4 m-b-30">

                        <!-- Single Contact Information Start -->
                        <div class="single-contact-info">

                            <!-- Single Information Thumb Start -->
                            <div class="single-info-thumb">
                                <div class="rotate-around success">
                                    <span></span>
                                </div>
                                <img src="assets/images/icon/11.png" alt="Icon">
                            </div>
                            <!-- Single Information Thumb End -->

                            <!-- Single Contact Title Start -->
                            <div class="single-contact-title">
                                <h2 class="title">Your address goes here, 120 example, country.</h2>
                            </div>
                            <!-- Single Contact Title End -->

                        </div>
                        <!-- Single Contact Information End -->

                    </div>

                </div>
            </div>
        </div>
        <!-- Contact Info Section End -->

        <!-- Submit Form Section Start -->
        <div class="section section-margin-bottom contact-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="submit-form-wrapper bg-name-seashell mt-0">
                            <!-- Start Section Content -->
                            <div class="content">
                                <h2 class="title" data-aos="fade-up" data-aos-duration="1100">Contact Us</h2>
                                <p data-aos="fade-up" data-aos-duration="1800">If you need any help! Just drope a line.
                                </p>
                            </div>
                            <!-- End Section Content -->

                            <!-- Start Contact Form Box -->
                            <div class="contact-form-box">
                                <form id="contact-form" class="default-form contact-form" action="assets/php/neonal.php"
                                    method="post">
                                    <div class="row">
                                        <div class="col-lg-6">

                                            <div class="default-form-group m-b-20" data-aos="fade-up"
                                                data-aos-duration="1100">
                                                <input name="name" type="text" placeholder="First Name :" required>
                                            </div>

                                            <div class="default-form-group m-b-20" data-aos="fade-up"
                                                data-aos-duration="1200">
                                                <input name="lname" type="text" placeholder="Last Name :" required>
                                            </div>

                                            <div class="default-form-group m-b-20" data-aos="fade-up"
                                                data-aos-duration="1200">
                                                <input name="phone" type="tel" placeholder="Phone :" required>
                                            </div>

                                            <div class="default-form-group m-b-20" data-aos="fade-up"
                                                data-aos-duration="1300">
                                                <input name="email" type="email" placeholder="Email :" required>
                                            </div>

                                        </div>
                                        <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1700">
                                            <div class="default-form-group">
                                                <textarea name="message" cols="30" rows="10" placeholder="Comment"
                                                    required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 m-t-50" data-aos="fade-up" data-aos-duration="1800">
                                            <div class="default-form-group d-flex justify-content-center">
                                                <button class="btn btn-outline-whited btn-hover-primary" type="submit"
                                                    id="submit" name="submit">Submit Now<i
                                                        class="icofont-double-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                            <!-- End Contact Form Box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Submit Form Section End -->
    </NavBarLayout>
</template>
