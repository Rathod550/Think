<div class="col-12">

    <div class="heading-block center border-bottom-0 flip animated" data-animate="flip">
        <h2>{{ $frontSetting['slider-title'][session('language') ?? 'value_english'] }}</h2>
        <span>{{ $frontSetting['slider-description'][session('language') ?? 'value_english'] }}</span>
    </div>

    <div class="fslider" data-pagi="false" data-animation="fade">
        <div class="flexslider">
            <div class="slider-wrap">
                @if(!empty($sliders) && $sliders->count() > 0)
                    @foreach($sliders as $key => $value)
                        <div class="slide"><a href="#"><img src="{{ asset($value->image) }}" alt="About Image"></a></div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

</div>