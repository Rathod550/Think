<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
    <div class="slider-inner">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                @if(!empty($sliders) && $sliders->count() > 0)
                    @foreach($sliders as $key => $value)
                        @if($value->formate == 0)
                            <div class="swiper-slide dark">
                                <div class="container">
                                    <div class="slider-caption slider-caption-center">
                                        <h2 data-animate="fadeInUp">
                                            @if(empty(session('language')))
                                                {{ $value->title }}
                                            @elseif(session('language') == 'value_english')
                                                {{ $value->title }}
                                            @elseif(session('language') == 'value_hindi')
                                                {{ $value->title_hindi }}
                                            @elseif(session('language') == 'value_gujrati')
                                                {{ $value->title_gujrati }}
                                            @else
                                                {{ $value->title }}
                                            @endif
                                        </h2>
                                        <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">
                                            @if(empty(session('language')))
                                                {{ $value->description }}
                                            @elseif(session('language') == 'value_english')
                                                {{ $value->description }}
                                            @elseif(session('language') == 'value_hindi')
                                                {{ $value->description_hindi }}
                                            @elseif(session('language') == 'value_gujrati')
                                                {{ $value->description_gujrati }}
                                            @else
                                                {{ $value->description }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide-bg" style="background-image: url('{{ asset($value->image) }}');"></div>
                            </div>
                        @else
                            <div class="swiper-slide">
                                <div class="container">
                                    <div class="slider-caption">
                                        <h2 data-animate="fadeInUp">
                                            @if(empty(session('language')))
                                                {{ $value->title }}
                                            @elseif(session('language') == 'value_english')
                                                {{ $value->title }}
                                            @elseif(session('language') == 'value_hindi')
                                                {{ $value->title_hindi }}
                                            @elseif(session('language') == 'value_gujrati')
                                                {{ $value->title_gujrati }}
                                            @else
                                                {{ $value->title }}
                                            @endif
                                        </h2>
                                        <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">
                                            @if(empty(session('language')))
                                                {{ $value->description }}
                                            @elseif(session('language') == 'value_english')
                                                {{ $value->description }}
                                            @elseif(session('language') == 'value_hindi')
                                                {{ $value->description_hindi }}
                                            @elseif(session('language') == 'value_gujrati')
                                                {{ $value->description_gujrati }}
                                            @else
                                                {{ $value->description }}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide-bg" style="background-image: url('{{ asset($value->image) }}'); background-position: center top;"></div>
                            </div>  
                        @endif
                    @endforeach
                @endif
            </div>
            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
        </div>

        <a href="#" data-scrollto="#content" data-offset="100" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

    </div>
</section>