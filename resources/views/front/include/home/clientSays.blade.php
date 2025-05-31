<div class="section parallax dark mb-0 footer-stick mt-0" style="background-image: url('{{ asset('frontTheme/images/services/home-testi-bg.jpg') }}'); padding: 100px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

    <div class="heading-block center">
        <h3>{{ $frontSetting['what-clients-say'][session('language') ?? 'value_english'] }}</h3>
    </div>

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