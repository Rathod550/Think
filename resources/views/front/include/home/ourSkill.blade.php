<div class="section parallax bottommargin-lg m-0" style="background-image: url('{{ asset('frontTheme/images/parallax/3.jpg') }}'); padding: 100px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div class="heading-block center border-bottom-0 mb-0 heartBeat animated" data-animate="heartBeat">
        <h2>" {{ $frontSetting['slogan-text'][session('language') ?? 'value_english'] }} "</h2>
    </div>
</div>

<div class="container clearfix">

    <div class="row gutter-40 mb-0">

        <div class="col-lg-6">

            <div class="accordion accordion-border mb-0">

                <div class="accordion-header">
                    <div class="accordion-icon">
                        <i class="accordion-closed icon-ok-circle"></i>
                        <i class="accordion-open icon-remove-circle"></i>
                    </div>
                    <div class="accordion-title">
                        {{ $frontSetting['information-section-1-title'][session('language') ?? 'value_english'] }}
                    </div>
                </div>
                <div class="accordion-content">{{ $frontSetting['information-section-1-description'][session('language') ?? 'value_english'] }}</div>

                <div class="accordion-header">
                    <div class="accordion-icon">
                        <i class="accordion-closed icon-ok-circle"></i>
                        <i class="accordion-open icon-remove-circle"></i>
                    </div>
                    <div class="accordion-title">
                        {{ $frontSetting['information-section-2-title'][session('language') ?? 'value_english'] }}
                    </div>
                </div>
                <div class="accordion-content">{{ $frontSetting['information-section-2-description'][session('language') ?? 'value_english'] }}</div>

                <div class="accordion-header">
                    <div class="accordion-icon">
                        <i class="accordion-closed icon-ok-circle"></i>
                        <i class="accordion-open icon-remove-circle"></i>
                    </div>
                    <div class="accordion-title">
                        {{ $frontSetting['information-section-3-title'][session('language') ?? 'value_english'] }}
                    </div>
                </div>
                <div class="accordion-content">{{ $frontSetting['information-section-3-description'][session('language') ?? 'value_english'] }}</div>

                <div class="accordion-header">
                    <div class="accordion-icon">
                        <i class="accordion-closed icon-ok-circle"></i>
                        <i class="accordion-open icon-remove-circle"></i>
                    </div>
                    <div class="accordion-title">
                        {{ $frontSetting['information-section-4-title'][session('language') ?? 'value_english'] }}
                    </div>
                </div>
                <div class="accordion-content">{{ $frontSetting['information-section-4-description'][session('language') ?? 'value_english'] }}</div>

            </div>

        </div>

        <div class="col-lg-6 col-md-6">

            <div class="fancy-title title-border">
                <h4>{{ $frontSetting['progress-bar-section-title'][session('language') ?? 'value_english'] }}</h4>
            </div>

            <ul class="skills">
                <li data-percent="{{ $frontSetting['progress-bar-1-percentage'][session('language') ?? 'value_english'] }}">
                    <span>{{ $frontSetting['progress-bar-1-title'][session('language') ?? 'value_english'] }}</span>
                    <div class="progress">
                        <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="{{ $frontSetting['progress-bar-1-percentage'][session('language') ?? 'value_english'] }}" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
                    </div>
                </li>
                <li data-percent="{{ $frontSetting['progress-bar-2-percentage'][session('language') ?? 'value_english'] }}">
                    <span>{{ $frontSetting['progress-bar-2-title'][session('language') ?? 'value_english'] }}</span>
                    <div class="progress">
                        <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="{{ $frontSetting['progress-bar-2-percentage'][session('language') ?? 'value_english'] }}" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
                    </div>
                </li>
                <li data-percent="{{ $frontSetting['progress-bar-3-percentage'][session('language') ?? 'value_english'] }}">
                    <span>{{ $frontSetting['progress-bar-3-title'][session('language') ?? 'value_english'] }}</span>
                    <div class="progress">
                        <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="{{ $frontSetting['progress-bar-3-percentage'][session('language') ?? 'value_english'] }}" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
                    </div>
                </li>
                <li data-percent="{{ $frontSetting['progress-bar-4-percentage'][session('language') ?? 'value_english'] }}">
                    <span>{{ $frontSetting['progress-bar-4-title'][session('language') ?? 'value_english'] }}</span>
                    <div class="progress">
                        <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="{{ $frontSetting['progress-bar-4-percentage'][session('language') ?? 'value_english'] }}" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
                    </div>
                </li>
                <li data-percent="{{ $frontSetting['progress-bar-5-percentage'][session('language') ?? 'value_english'] }}">
                    <span>{{ $frontSetting['progress-bar-5-title'][session('language') ?? 'value_english'] }}</span>
                    <div class="progress">
                        <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="{{ $frontSetting['progress-bar-5-percentage'][session('language') ?? 'value_english'] }}" data-refresh-interval="30" data-speed="1000"></span>%</div></div>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</div>