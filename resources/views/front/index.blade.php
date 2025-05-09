@extends($frontTheme)

@section('title', 'Home')

@section('style')
    
@endsection

@section('content')

    {{-- Slider Section --}}
    @include('front.include.home.slider')

    <section id="content">
        <div class="content-wrap">

            {{-- service title Section --}}
            @include('front.include.home.service')

            {{-- our skill Section --}}
            @include('front.include.home.ourSkill')

            {{-- our blog category Section --}}
            @include('front.include.home.ourBlogCategory')

            {{-- our latest blog Section --}}
            @include('front.include.home.latestBlog')

            {{-- our team Section --}}
            @include('front.include.home.team')

            {{-- our clientSays Section --}}
            @include('front.include.home.clientSays')

        </div>
    </section>
@endsection

@section('script')

@endsection