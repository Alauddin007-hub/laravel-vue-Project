<script setup>
import { Link } from '@inertiajs/vue3';
import Footer from '@/Components/Footer.vue';
import ScrollTop from '@/Components/ScrollTop.vue';
import MobileMenu from '@/Components/MobileMenu.vue';
</script>

<template>
    <div class="header">
        <div class="sticky-header">
            <div class="header-container container">
                <div class="header-wrapper">

                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <Link :href="route('home')"><img src="assets/images/logo/logo.png" alt="Logo"></Link>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    <div class="main-menu d-none d-lg-flex">
                        <ul>
                            <li>
                                <Link class="active" :href="route('home')">Home</Link>
                            </li>
                            <li>
                                <Link :href="route('about')">About Us</Link>
                            </li>
                            <li class="has-children">
                                <Link :href="route('service')">Service</Link>
                            </li>
                            <li class="has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><Link :href="route('gallery')">Gallery</Link></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <Link :href="route('blog')">Blog</Link>
                                <ul class="sub-menu">
                                    <li><Link :href="route('blog.detail')">Blog Details Sidebar</Link></li>
                                </ul>
                            </li>
                            <li>
                                <Link :href="route('contact')">Contact</Link>
                            </li>
                        </ul>
                    </div>
                    <!-- Header Menu End -->

                    <!-- Header Actions Start -->
                    <div class="header-actions">

                        <!-- Appoinment Button Start -->
                        <div class="appoinment-button">
                            <a href="contact.html" class="btn btn-outline-success btn-hover-success">Appoinment<i
                                    class="icofont-calendar"></i></a>
                        </div>
                        <!-- Appoinment Button End -->

                        <!-- Mobile Menu Hambarger Action Button Start -->
                        <a class="header-action-btn header-action-btn-menu d-lg-none d-md-flex" href="#/">
                            <i class="icofont-navigation-menu"></i>
                        </a>
                        <!-- Mobile Menu Hambarger Action Button End -->

                    </div>
                    <!-- Header Actions End -->

                </div>
            </div>
        </div>
    </div>
    <slot />

     <!-- Footer Section Start -->
     <Footer />
    <!-- Footer Section End -->

    <!-- Scroll Top Start -->
    <ScrollTop />
    <!-- Scroll Top End -->

    <!-- Mobile Menu Start -->
    <MobileMenu />
    <!-- Mobile Menu End -->
</template>