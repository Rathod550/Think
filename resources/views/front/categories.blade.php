@extends($frontTheme)

@section('title', 'Home')

@section('style')
    
@endsection

@section('content')
<section id="page-title" class="page-title-mini">

            <div class="container clearfix fadeInRightBig animated" data-animate="fadeInRightBig">
                <h1>
                    @if(session('language') == 'value_english')
                        {{ $blogCategory->name }} Categoryes
                    @elseif(session('language') == 'value_hindi')
                        {{ $blogCategory->name_hindi }} श्रेणियाँ
                    @elseif(session('language') == 'value_gujrati')
                        {{ $blogCategory->name_gujrati }} શ્રેણીઓ
                    @endif
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">
                        @if(session('language') == 'value_english')
                            Home
                        @elseif(session('language') == 'value_hindi')
                            घर
                        @elseif(session('language') == 'value_gujrati')
                            ઘર
                        @endif
                    </a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        @if(session('language') == 'value_english')
                            {{ $blogCategory->name }} Categoryes
                        @elseif(session('language') == 'value_hindi')
                            {{ $blogCategory->name_hindi }} श्रेणियाँ
                        @elseif(session('language') == 'value_gujrati')
                            {{ $blogCategory->name_gujrati }} શ્રેણીઓ
                        @endif
                    </li>
                </ol>
            </div>

        </section>
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix fadeInLeftBig animated" data-animate="fadeInLeftBig">
                @if(!empty($blogSubCategorys) && $blogSubCategorys->count() > 0)
                    <div class="container clearfix">
                        <div class="row grid-container" data-layout="masonry" style="overflow: visible">
                            @foreach($blogSubCategorys as $key => $value)
                                <div class="col-lg-4 mb-4">
                                    <div class="flip-card text-center top-to-bottom">
                                        <div class="flip-card-front dark" style="background-image: url('{{ asset($value->image) }}');">
                                            <div class="flip-card-inner">
                                                <div class="card bg-transparent border-0 text-center">
                                                    <div class="card-body">
                                                        <h3 class="card-title">
                                                            @if(session('language') == 'value_english')
                                                                {{ $value->name }}
                                                            @elseif(session('language') == 'value_hindi')
                                                                {{ $value->name_hindi }}
                                                            @elseif(session('language') == 'value_gujrati')
                                                                {{ $value->name_gujrati }}
                                                            @endif
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flip-card-back" style="background-image: url('{{ asset($value->image) }}');">
                                            <div class="flip-card-inner">
                                                <p class="mb-2 text-white">
                                                    @if(session('language') == 'value_english')
                                                        {{ $value->description_english }}
                                                    @elseif(session('language') == 'value_hindi')
                                                        {{ $value->description_hindi }}
                                                    @elseif(session('language') == 'value_gujrati')
                                                        {{ $value->description_gujrati }}
                                                    @endif
                                                </p>
                                                <a href="{{ route('blogs', ['sub-categories', $value->slug]) }}" type="button" class="btn btn-outline-light mt-2">
                                                    @if(session('language') == 'value_english')
                                                        Show Blogs
                                                    @elseif(session('language') == 'value_hindi')
                                                        ब्लॉग दिखाएं
                                                    @elseif(session('language') == 'value_gujrati')
                                                        બ્લોગ્સ બતાવો
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

@section('script')
    
@endsection