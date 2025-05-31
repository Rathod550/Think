<div class="col-12">

    <div class="heading-block center border-bottom-0 flip animated" data-animate="flip">
        <h2>{{ $frontSetting['slider-title'][session('language') ?? 'value_english'] }}</h2>
        <span>{{ $frontSetting['slider-description'][session('language') ?? 'value_english'] }}</span>
    </div>

    <div class="fslider" data-pagi="false" data-animation="fade">
        <div class="flexslider">
            <div class="slider-wrap">
                <div class="slide"><a href="#"><img src="{{ asset('frontTheme/images/about/4.jpg') }}" alt="About Image"></a></div>
                <div class="slide"><a href="#"><img src="{{ asset('frontTheme/images/about/5.jpg') }}" alt="About Image"></a></div>
                <div class="slide"><a href="#"><img src="{{ asset('frontTheme/images/about/6.jpg') }}" alt="About Image"></a></div>
                <div class="slide"><a href="#"><img src="{{ asset('frontTheme/images/about/7.jpg') }}" alt="About Image"></a></div>
            </div>
        </div>
    </div>

</div>