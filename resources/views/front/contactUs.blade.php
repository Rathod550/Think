@extends($frontTheme)

@section('title', 'Contact Us')

@section('style')
    <style>
        #success-message {
            transition: opacity 0.5s ease;
        }
        #success-message.fade-out {
            opacity: 0;
        }
    </style>    
@endsection

@section('content')
    <!-- Page Title
        ============================================= -->
        <section id="page-title" class="page-title-mini">

            <div class="container clearfix fadeInRightBig animated" data-animate="fadeInRightBig">
                <h1>
                    @if(session('language') == 'value_english')
                        Contact Us
                    @elseif(session('language') == 'value_hindi')
                        हमसे संपर्क करें
                    @elseif(session('language') == 'value_gujrati')
                        અમારો સંપર્ક કરો
                    @endif
                </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">
                        @if(session('language') == 'value_english')
                            Home
                        @elseif(session('language') == 'value_hindi')
                            घर
                        @elseif(session('language') == 'value_gujrati')
                            ઘર
                        @endif
                    </a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        @if(session('language') == 'value_english')
                            Contact Us
                        @elseif(session('language') == 'value_hindi')
                            हमसे संपर्क करें
                        @elseif(session('language') == 'value_gujrati')
                            અમારો સંપર્ક કરો
                        @endif
                    </li>
                </ol>
            </div>

        </section>
    <!-- #page-title end -->

    <!-- Content
        ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                @if (session('success'))
                    <div id="success-message" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row align-items-stretch col-mb-50 mb-0">
                    <!-- Contact Form
                    ============================================= -->
                    <div class="col-lg-6">

                        <div class="fancy-title title-border">
                            <h3>{{ $frontSetting['form-title'][session('language') ?? 'value_english'] }}</h3>
                        </div>
                        <form class="mb-0" action="{{ route('contactUsStore') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label>{{ $frontSetting['form-name'][session('language') ?? 'value_english'] }} <small>*</small></label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="sm-form-control required" />
                                    @error('name')
                                        @if(session('language') == 'value_english')
                                            <small class="text-danger">{{ $message }}</small>
                                        @elseif(session('language') == 'value_hindi')
                                            <small class="text-danger">कृपया अपना नाम दर्ज करें।</small>
                                        @elseif(session('language') == 'value_gujrati')
                                            <small class="text-danger">કૃપા કરીને તમારું નામ દાખલ કરો.</small>
                                        @endif
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group">
                                    <label>{{ $frontSetting['form-email'][session('language') ?? 'value_english'] }} <small>*</small></label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="required email sm-form-control" />
                                    @error('email')
                                        @if(session('language') == 'value_english')
                                            <small class="text-danger">{{ $message }}</small>
                                        @elseif(session('language') == 'value_hindi')
                                            <small class="text-danger">कृपया अपना ईमेल एड्रेस इंटर करें।</small>
                                        @elseif(session('language') == 'value_gujrati')
                                            <small class="text-danger">કૃપા કરીને તમારું ઇમેઇલ સરનામું દાખલ કરો.</small>
                                        @endif
                                    @enderror
                                </div>

                                <div class="col-md-4 form-group">
                                    <label>{{ $frontSetting['form-mobile-number'][session('language') ?? 'value_english'] }}</label>
                                    <input type="text" name="mobile_number" value="{{ old('mobile_number') }}" class="sm-form-control" />
                                </div>

                                <div class="col-md-12 form-group">
                                    <label>{{ $frontSetting['form-subject'][session('language') ?? 'value_english'] }} <small>*</small></label>
                                    <input type="text" name="subject" value="{{ old('subject') }}" class="required sm-form-control" />
                                    @error('subject')
                                        @if(session('language') == 'value_english')
                                            <small class="text-danger">{{ $message }}</small>
                                        @elseif(session('language') == 'value_hindi')
                                            <small class="text-danger">कृपया विषय दर्ज करें.</small>
                                        @elseif(session('language') == 'value_gujrati')
                                            <small class="text-danger">કૃપા કરીને કોઈ વિષય દાખલ કરો.</small>
                                        @endif
                                    @enderror
                                </div>

                                <div class="col-12 form-group">
                                    <label>{{ $frontSetting['form-message'][session('language') ?? 'value_english'] }} <small>*</small></label>
                                    <textarea name="message" rows="6" class="required sm-form-control">{{ old('message') }}</textarea>
                                    @error('message')
                                        @if(session('language') == 'value_english')
                                            <small class="text-danger">{{ $message }}</small>
                                        @elseif(session('language') == 'value_hindi')
                                            <small class="text-danger">कृपया अपना संदेश दर्ज करें.</small>
                                        @elseif(session('language') == 'value_gujrati')
                                            <small class="text-danger">કૃપા કરીને તમારો સંદેશ દાખલ કરો.</small>
                                        @endif
                                    @enderror
                                </div>

                                <div class="col-12 form-group">
                                    <button type="submit" class="button button-3d m-0">
                                        @if(session('language') == 'value_english')
                                            Submit Comment
                                        @elseif(session('language') == 'value_hindi')
                                            टिप्पणी भेजें
                                        @elseif(session('language') == 'value_gujrati')
                                            ટિપ્પણી કરો
                                        @endif
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div><!-- Contact Form End -->

                    <!-- Google Map
                    ============================================= -->
                    <div class="col-lg-6 min-vh-50 backInRight animated" data-animate="backInRight">
                        <div id="googleMap" style="width:100%;height:500px;"></div>
                    </div><!-- Google Map End -->
                </div>

                <!-- Contact Info
                ============================================= -->
                <div class="row col-mb-50">
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-map-marker2"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{ $frontSetting['our-headquarters'][session('language') ?? 'value_english'] }}
                                    <span class="subtitle">
                                        {{ $frontSetting['our-headquarters-content'][session('language') ?? 'value_english'] }}
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-phone3"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{ $frontSetting['speak-to-us'][session('language') ?? 'value_english'] }}
                                    <span class="subtitle">
                                        {{ $frontSetting['speak-to-us-content'][session('language') ?? 'value_english'] }}
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-skype2"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{ $frontSetting['make-a-video-call'][session('language') ?? 'value_english'] }}
                                    <span class="subtitle">
                                        {{ $frontSetting['make-a-video-call-content'][session('language') ?? 'value_english'] }}
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-twitter2"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{ $frontSetting['follow-on-twitter'][session('language') ?? 'value_english'] }}
                                    <span class="subtitle">
                                        {{ $frontSetting['follow-on-twitter-content'][session('language') ?? 'value_english'] }}
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div><!-- Contact Info End -->

            </div>
        </div>
    </section>
    <!-- #content end -->

    
@endsection

@section('script')
    <script>
    function myMap() {
      var myLocation = new google.maps.LatLng(22.260543, 70.781710);

      var mapProp = {
        center: myLocation,
        zoom: 15,
      };

      var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

      var marker = new google.maps.Marker({
        position: myLocation,
        map: map,
        title: "You are here!",
        icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png' // Red marker
      });
    }

    document.addEventListener('DOMContentLoaded', function () {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(() => {
                successMessage.classList.add('fade-out');
                setTimeout(() => {
                    successMessage.remove();
                }, 500); // matches transition time
            }, 5000);
        }
    });
  </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD72715OxbNkJWKtCi86dPQD3l1DzDaG6c&callback=myMap"></script>
@endsection