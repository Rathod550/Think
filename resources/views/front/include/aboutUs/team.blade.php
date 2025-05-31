<div class="heading-block center">
    <h2>{{ $frontSetting['our-team-title'][session('language') ?? 'value_english'] }}</h2>
    <span>{{ $frontSetting['our-team-description'][session('language') ?? 'value_english'] }}</span>
</div>

<div class="row col-mb-50 mb-0">
    @if(!empty($ourTeams) && $ourTeams->count() > 0)
        @foreach($ourTeams as $key => $member)
            <div class="col-lg-6">
                <div class="team team-list row align-items-center">
                    <div class="team-image col-sm-6">
                        <img src="{{ asset($member->image) }}" alt="{{ $member->name }}">
                    </div>
                    <div class="team-desc col-sm-6">
                        <div class="team-title">
                            <h4>
                                @if(empty(session('language')))
                                    {{ $member->name }}
                                @elseif(session('language') == 'value_english')
                                    {{ $member->name }}
                                @elseif(session('language') == 'value_hindi')
                                    {{ $member->name_hindi }}
                                @elseif(session('language') == 'value_gujrati')
                                    {{ $member->name_gujrati }}
                                @else
                                    {{ $member->name }}
                                @endif
                            </h4>
                            <span>
                                @if(empty(session('language')))
                                    {{ $member->company_role }}
                                @elseif(session('language') == 'value_english')
                                    {{ $member->company_role }}
                                @elseif(session('language') == 'value_hindi')
                                    {{ $member->company_role_hindi }}
                                @elseif(session('language') == 'value_gujrati')
                                    {{ $member->company_role_gujrati }}
                                @else
                                    {{ $member->company_role }}
                                @endif
                            </span>
                        </div>
                        <div class="team-content">
                            <p>
                                @if(empty(session('language')))
                                    {{ $member->description }}
                                @elseif(session('language') == 'value_english')
                                    {{ $member->description }}
                                @elseif(session('language') == 'value_hindi')
                                    {{ $member->description_hindi }}
                                @elseif(session('language') == 'value_gujrati')
                                    {{ $member->description_gujrati }}
                                @else
                                    {{ $member->description }}
                                @endif
                            </p>
                        </div>
                        <a href="{{ $member->facebook_link }}" class="social-icon inline-block si-small si-light si-rounded si-facebook" target="_blank">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="{{ $member->instagram_link }}" class="social-icon inline-block si-small si-light si-rounded si-twitter" target="_blank">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>
                        <a href="{{ $member->twitter_link }}" class="social-icon inline-block si-small si-light si-rounded si-gplus" target="_blank">
                            <i class="icon-twitter1"></i>
                            <i class="icon-twitter1"></i>
                        </a>
                        <a href="{{ $member->linkedin_link }}" class="social-icon inline-block si-small si-light si-rounded si-gplus" target="_blank">
                            <i class="icon-linkedin-sign"></i>
                            <i class="icon-linkedin-sign"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

</div>