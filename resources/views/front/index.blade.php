@extends($frontTheme)

@section('title', 'Home')

@section('style')

@endsection

@section('content')

<!-- Slider Start -->
    @include('front.homeSection.slider')
<!-- Section Intro Start -->

@include('front.homeSection.weAreCreativeSection')
<!-- Section Intro END -->

<!-- Section About Start -->
@include('front.homeSection.aboutSection')
<!-- Section About End -->

<!-- section Counter Start -->
@include('front.homeSection.projectDoneSection')
<!-- section Counter End  -->

<!--  Section Services Start -->
@include('front.homeSection.ourServiceSection')
<!--  Section Services End -->

<!-- Section Cta Start -->
@include('front.homeSection.ctaSection')
<!--  Section Cta End-->

<!-- Section Testimonial Start -->
@include('front.homeSection.testimonialSection')
<!-- Section Testimonial End -->

<!-- Section Latest News Start -->
<hr>
{{-- @include('front.homeSection.latestNewsSection') --}}
<!-- Section Latest News End -->

<!-- Every type business Start -->
@include('front.homeSection.everyTypeBusinessSection')
<!-- Every type business Start -->

@endsection

@section('script')

@endsection