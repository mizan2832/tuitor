@extends('front.master')
@section('content')
    <!-- Slider Start -->
    @include('front.include.banner')
    {{-- <section class="features">
       @include('front.include.worktime')
    </section> --}}

{{-- 
    <section class="section about">
        @include('front.include.about')
    </section> --}}

   
    {{-- <section class="section appoinment">
        @include('front.include.appointment')
    </section> --}}
    <section class="section testimonial-2 gray-bg">
        @include('front.include.testmonial')
    </section>
    <section class="section clients">
       @include('front.include.support')
    </section>
    <!-- footer Start -->    
@endsection