<div class="promo promo-light p-4 p-md-5 mb-5">
    <div class="row align-items-center">
        <div class="col-12 col-lg">
            <h3>{{ $frontSetting['go-to-blogs-title-about'][session('language') ?? 'value_english'] }}</h3>
            <span>{{ $frontSetting['go-to-blogs-title-about-description'][session('language') ?? 'value_english'] }}</span>
        </div>
        <div class="col-12 col-lg-auto mt-4 mt-lg-0">
            <a href="{{ route('blogs') }}" class="button button-large button-circle button-black m-0">
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