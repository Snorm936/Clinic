
@extends('master')
@section('content')
    
    @include('partail.banner')
    


    <!-- Service Start -->
    @include ('partail.service')
    <!-- Service End -->





    <!-- Appointment Start -->
    @include ('partail.appoinment')
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    @include ('partail.testimonial')
    <!-- Testimonial End -->

    @endsection
