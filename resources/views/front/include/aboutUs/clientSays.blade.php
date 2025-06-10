<div class="section topmargin-sm footer-stick">

    <h4 class="text-uppercase center">{{ $frontSetting['what-clients-say-about'][session('language') ?? 'value_english'] }}</h4>

    <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
        <div class="flexslider">
            <div class="slider-wrap">
                @if(!empty($clientSays) && $clientSays->count() > 0)
                    @foreach($clientSays as $key => $value)
                        <div class="slide">
                            <div class="testi-image">
                                <a href="#"><img src="{{ asset($value->image) }}"></a>
                            </div>
                            <div class="testi-content">
                                <p>
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
                                <div class="testi-meta">
                                    @if(empty(session('language')))
                                        {{ $value->name }}
                                    @elseif(session('language') == 'value_english')
                                        {{ $value->name }}
                                    @elseif(session('language') == 'value_hindi')
                                        {{ $value->name_hindi }}
                                    @elseif(session('language') == 'value_gujrati')
                                        {{ $value->name_gujrati }}
                                    @else
                                        {{ $value->name }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

</div>