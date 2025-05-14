<div class="section margin-force-close">
    <div class="container clearfix">

        <div class="heading-block topmargin-sm center flip animated" data-animate="flip">
            <h3>{{ $frontSetting['meet-our-team'][session('language') ?? 'value_english'] }}</h3>
        </div>

        <div class="row">
            @if(!empty($ourTeams) && $ourTeams->count() > 0)
                @foreach($ourTeams as $key => $value)
                    <div class="col-lg-3 col-md-6 bottommargin">

                        <div class="team">
                            <div class="team-image">
                                <img src="{{ asset($value->image) }}" alt="John Doe">
                            </div>
                            <div class="team-desc team-desc-bg">
                                <div class="team-title">
                                    <h4>
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
                                    </h4>
                                    <span>
                                        @if(empty(session('language')))
                                            {{ $value->company_role }}
                                        @elseif(session('language') == 'value_english')
                                            {{ $value->company_role }}
                                        @elseif(session('language') == 'value_hindi')
                                            {{ $value->company_role_hindi }}
                                        @elseif(session('language') == 'value_gujrati')
                                            {{ $value->company_role_gujrati }}
                                        @else
                                            {{ $value->company_role }}
                                        @endif        
                                    </span>
                                </div>
                                <a href="{{ $value->facebook_link }}" class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="{{ $value->instagram_link }}" class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>
                                <a href="{{ $value->twitter_link }}" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                    <i class="icon-twitter1"></i>
                                    <i class="icon-twitter1"></i>
                                </a>
                                <a href="{{ $value->linkedin_link }}" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                    <i class="icon-linkedin-sign"></i>
                                    <i class="icon-linkedin-sign"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach
            @endif

        </div>

    </div>
</div>