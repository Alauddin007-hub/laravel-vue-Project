<script setup>
import NavBarLayout from "@/Layouts/NavBarLayout.vue";
import ServiceDetail from "@/Components/ServiceDetail.vue";
import AppointmentSubmit from "@/Components/AppointmentSubmit.vue";
import Appointment from '@/Components/Appointment.vue';
import ProfessionalDoctors from '@/Components/ProfessionalDoctors.vue';
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

        <!-- Service Details Section Start -->
        <ServiceDetail />
        <!-- Service Details Section End -->

        <!-- Submit Form Section Start -->
        <AppointmentSubmit />
        <!-- Submit Form Section End -->

        <!-- Team Section Start -->
        <ProfessionalDoctors />

        <!-- Team Section End -->

        <!-- Appoinment Section Start -->
        <Appointment />
        <!-- Appoinment Section End -->
    </NavBarLayout>
</template>