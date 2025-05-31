<div class="col-lg-3 center" data-animate="bounceIn">
    <i class="i-plain i-xlarge mx-auto mb-0 icon-users"></i>
    <div class="counter counter-large" style="color: #3498db;"><span data-from="100" data-to="{{ $frontSetting['counter-number-one'][session('language') ?? 'value_english'] }}" data-refresh-interval="50" data-speed="2000"></span></div>
    <h5>{{ $frontSetting['counter-number-one-title'][session('language') ?? 'value_english'] }}</h5>
</div>

<div class="col-lg-3 center" data-animate="bounceIn" data-delay="200">
    <i class="i-plain i-xlarge mx-auto mb-0 icon-list2"></i>
    <div class="counter counter-large" style="color: #e74c3c;"><span data-from="100" data-to="{{ $frontSetting['counter-number-two'][session('language') ?? 'value_english'] }}" data-refresh-interval="50" data-speed="2500"></span></div>
    <h5>{{ $frontSetting['counter-number-two-title'][session('language') ?? 'value_english'] }}</h5>
</div>

<div class="col-lg-3 center" data-animate="bounceIn" data-delay="400">
    <i class="i-plain i-xlarge mx-auto mb-0 icon-blogger"></i>
    <div class="counter counter-large" style="color: #16a085;"><span data-from="100" data-to="{{ $frontSetting['counter-number-three'][session('language') ?? 'value_english'] }}" data-refresh-interval="50" data-speed="3500"></span></div>
    <h5>{{ $frontSetting['counter-number-three-title'][session('language') ?? 'value_english'] }}</h5>
</div>

<div class="col-lg-3 center" data-animate="bounceIn" data-delay="600">
    <i class="i-plain i-xlarge mx-auto mb-0 icon-cup"></i>
    <div class="counter counter-large" style="color: #9b59b6;"><span data-from="100" data-to="{{ $frontSetting['counter-number-four'][session('language') ?? 'value_english'] }}" data-refresh-interval="30" data-speed="2700"></span></div>
    <h5>{{ $frontSetting['counter-number-four-title'][session('language') ?? 'value_english'] }}</h5>
</div>