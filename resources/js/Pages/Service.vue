<script setup>
import Header from "@/Components/Header.vue";
import Service from "@/Components/Service.vue";
import Service2 from "@/Components/Service2.vue";
import Blog from '@/Components/Blog.vue';
import Appointment from '@/Components/Appointment.vue';
import Footer from '@/Components/Footer.vue';
import ScrollTop from '@/Components/ScrollTop.vue';
import MobileMenu from '@/Components/MobileMenu.vue';
import NavBarLayout from "@/Layouts/NavBarLayout.vue";
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
                            <h1 class="title">Service</h1>
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

        <!-- Service Sector Section Start -->
        <Service />
        <!-- Service Sector Section End -->

        <!-- Service Section Start -->
        <Service2 />
        <!-- Service Section End -->

        <!-- News Blog Section Start -->
        <Blog />
        <!-- News Blog Section End -->

        <!-- Appoinment Section Start -->
        <Appointment />
        <!-- Appoinment Section End -->

        
    </NavBarLayout>
</template>
