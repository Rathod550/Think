<div class="container clearfix">
    <div class="fancy-title title-center title-border topmargin-sm backInRight animated" data-animate="backInRight">
            <h3>{{ $frontSetting['our-blog-categorys-title'][session('language') ?? 'value_english'] }}</h3>
        </div>

    <div class="owl-carousel image-carousel carousel-widget flip-card-wrapper clearfix" data-margin="20" data-nav="true" data-pagi="false" data-items-xs="2" data-items-sm="2" data-items-md="2" data-items-lg="3" data-items-xl="3" style="overflow: visible;">
        @if(!empty($blogCategorys) && $blogCategorys->count() > 0)
            @foreach($blogCategorys as $key => $value)
                <div class="flip-card">
                    <div class="flip-card-front dark" style="background-image: url('{{ asset($value->image) }}')">
                        <div class="flip-card-inner">
                            <div class="card bg-transparent border-0">
                                <div class="card-body">
                                    <h3 class="card-title mb-0">
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
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card-back bg-danger no-after">
                        <div class="flip-card-inner">
                            <p class="mb-2 text-white">
                                @if(empty(session('language')))
                                    {{ $value->description_english }}
                                @elseif(session('language') == 'value_english')
                                    {{ $value->description_english }}
                                @elseif(session('language') == 'value_hindi')
                                    {{ $value->description_hindi }}
                                @elseif(session('language') == 'value_gujrati')
                                    {{ $value->description_gujrati }}
                                @else
                                    {{ $value->description_english }}
                                @endif
                            </p>
                            <button type="button" class="btn btn-outline-light mt-2">{{ $frontSetting['our-blog-categorys-button'][session('language') ?? 'value_english'] }}</button>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>