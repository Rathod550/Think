@extends($frontTheme)

@section('title', 'About Us')

@section('style')
    
@endsection

@section('content')
    <!-- Page Title
        ============================================= -->
        <section id="page-title" class="page-title-mini">

            <div class="container clearfix fadeInRightBig animated" data-animate="fadeInRightBig">
                <h1>About Us</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </div>

        </section>
    <!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row col-mb-80 mb-0">

                    {{-- Slider Section --}}
                    @include('front.include.aboutUs.slider')

                    {{-- counter Section --}}
                    @include('front.include.aboutUs.counter')

                </div>

                {{-- go to blog Section --}}
                @include('front.include.aboutUs.goToBlog')

                {{-- team Section --}}
                @include('front.include.aboutUs.team')

            </div>

            {{-- clientSays Section --}}
            @include('front.include.aboutUs.clientSays')

        </div>
    </section>
    <!-- #content end -->
@endsection

@section('script')

@endsection