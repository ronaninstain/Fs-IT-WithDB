@extends('layouts.app')

@section('content')
    <!--Top Area Start Here -->

    @include('utilities._top-area')

    <!--Top Area End Here-->

    <!--Header Area Start Here-->

    @include('utilities._header')

    <!--Header Area End Here-->

	 <!-- Slider Area Start Here-->

     @include('sliders._home-slider')

    <!-- Slider Area End Here -->

    <!-- About Area Start Here -->

    @include('homies._home-about')

    <!-- About Area End Here -->

	<!-- Skill Area Start Here -->

    @include('utilities._skill-area')

    <!-- Skill Area End Here -->

    <!-- Services Area Start Here -->

    @include('homies._home-services')

    <!-- Services Area End Here -->

    <!-- Counter Area Start Here -->

    @include('utilities._counter-area')

    <!-- Counter Area End Here -->

	<!-- Team Area Start -->

    @include('homies._team-area')

    <!-- Team Area End -->

    <!-- Testimonials Area Start Here -->

    @include('homies._testimonials')

    <!-- Testimonials Area End Here -->

	<!-- Blog Area Start -->

    @include('homies._blog-area')

    <!-- Blog Area End -->

    <!-- Call To Action Area Start Here -->

    @include('utilities._cta-area')

    <!-- Call To Action Area End Here -->

    <!-- Footer Area Start Here -->

    @include('utilities._footer')

    <!-- Footer Area End Here -->

@endsection
