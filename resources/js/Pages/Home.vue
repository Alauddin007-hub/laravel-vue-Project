<script setup>
import NavBarLayout from "@/Layouts/NavBarLayout.vue";
import Service from "@/Components/Service.vue";
import Slider from "@/Components/Slider.vue";
import About from "@/Components/About.vue";
import Service2 from "@/Components/Service2.vue";
import TeamBanner from "@/Components/TeamBanner.vue";
import Testimonial from '@/Components/Testimonial.vue';
import Blog from '@/Components/Blog.vue';
import Appointment from '@/Components/Appointment.vue';
</script>

<template>
    <!-- Header Section Start -->
    <NavBarLayout>
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
    <Blog />
    <!-- News Blog Section End -->

    <!-- Appoinment Section Start -->
    <Appointment />
    <!-- Appoinment Section End -->

   
</NavBarLayout>
</template>
