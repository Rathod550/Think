<div class="section header-stick m-0">
    <div class="container clearfix">
        <div class="row">

            <div class="col-lg-9">
                <div class="heading-block bottommargin-sm">
                    <h3>{{ $frontSetting['go-to-blogs-title'][session('language') ?? 'value_english'] }}</h3>
                </div>

                <p class="mb-0">{{ $frontSetting['go-to-blogs-description'][session('language') ?? 'value_english'] }}</p>
            </div>

            <div class="col-lg-3">
                <a href="{{ route('blogs') }}" class="button button-3d button-dark button-large btn-block center" style="margin-top: 30px;">
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

<div class="row bottommargin-lg align-items-stretch margin-force-close">
    <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #1abc9c;">
        <div>
            <h3 class="text-uppercase" style="font-weight: 600;">{{ $frontSetting['why-choose-us-title'][session('language') ?? 'value_english'] }}</h3>
            <p style="line-height: 1.8;">{{ $frontSetting['why-choose-us-description'][session('language') ?? 'value_english'] }}</p>
            <a href="{{ route('aboutUs') }}" class="button button-border button-light button-rounded button-reveal text-right text-uppercase m-0"><i class="icon-angle-right"></i>
                <span>
                    @if(session('language') == 'value_english')
                        Read More
                    @elseif(session('language') == 'value_hindi')
                        और पढ़ें
                    @elseif(session('language') == 'value_gujrati')
                        વધુ વાંચો
                    @endif
                </span>
            </a>
            <i class="icon-bulb bgicon"></i>
        </div>
    </div>

    <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #34495e;">
        <div>
            <h3 class="text-uppercase" style="font-weight: 600;">{{ $frontSetting['our-mission-title'][session('language') ?? 'value_english'] }}</h3>
            <p style="line-height: 1.8;">{{ $frontSetting['our-mission-description'][session('language') ?? 'value_english'] }}</p>
            <a href="{{ route('aboutUs') }}" class="button button-border button-light button-rounded button-reveal text-right text-uppercase m-0"><i class="icon-angle-right"></i>
                <span>
                    @if(session('language') == 'value_english')
                        Read More
                    @elseif(session('language') == 'value_hindi')
                        और पढ़ें
                    @elseif(session('language') == 'value_gujrati')
                        વધુ વાંચો
                    @endif
                </span>
            </a>
            <i class="icon-cog bgicon"></i>
        </div>
    </div>

    <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #e74c3c;">
        <div>
            <h3 class="text-uppercase" style="font-weight: 600;">{{ $frontSetting['what-you-get-title'][session('language') ?? 'value_english'] }}</h3>
            <p style="line-height: 1.8;">{{ $frontSetting['what-you-get-description'][session('language') ?? 'value_english'] }}</p>
            <a href="{{ route('aboutUs') }}" class="button button-border button-light button-rounded button-reveal text-right text-uppercase m-0"><i class="icon-angle-right"></i>
                <span>
                    @if(session('language') == 'value_english')
                        Read More
                    @elseif(session('language') == 'value_hindi')
                        और पढ़ें
                    @elseif(session('language') == 'value_gujrati')
                        વધુ વાંચો
                    @endif
                </span>
            </a>
            <i class="icon-thumbs-up bgicon"></i>
        </div>
    </div>
</div>