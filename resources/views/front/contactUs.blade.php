@extends($frontTheme)

@section('title', 'Contact Us')

@section('style')
    
@endsection

@section('content')
    <!-- Page Title
        ============================================= -->
        <section id="page-title" class="page-title-mini">

            <div class="container clearfix fadeInRightBig animated" data-animate="fadeInRightBig">
                <h1>Contact Us</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </div>

        </section>
    <!-- #page-title end -->

    <!-- Content
        ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row align-items-stretch col-mb-50 mb-0">
                    <!-- Contact Form
                    ============================================= -->
                    <div class="col-lg-6 backInLeft animated" data-animate="backInLeft">

                        <div class="fancy-title title-border">
                            <h3>{{ $frontSetting['form-title'][session('language') ?? 'value_english'] }}</h3>
                        </div>

                        <div class="form-widget">

                            <div class="form-result"></div>

                            <form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-name">{{ $frontSetting['form-name'][session('language') ?? 'value_english'] }} <small>*</small></label>
                                        <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-email">{{ $frontSetting['form-email'][session('language') ?? 'value_english'] }} <small>*</small></label>
                                        <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-phone">{{ $frontSetting['form-mobile-number'][session('language') ?? 'value_english'] }}</label>
                                        <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-md-12 form-group">
                                        <label for="template-contactform-subject">{{ $frontSetting['form-subject'][session('language') ?? 'value_english'] }} <small>*</small></label>
                                        <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-12 form-group">
                                        <label for="template-contactform-message">{{ $frontSetting['form-message'][session('language') ?? 'value_english'] }} <small>*</small></label>
                                        <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                                    </div>

                                    <div class="col-12 form-group d-none">
                                        <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                    </div>

                                    <div class="col-12 form-group">
                                        <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0">Submit Comment</button>
                                    </div>
                                </div>

                                <input type="hidden" name="prefix" value="template-contactform-">

                            </form>
                        </div>

                    </div><!-- Contact Form End -->

                    <!-- Google Map
                    ============================================= -->
                    <div class="col-lg-6 min-vh-50 ">
                        <div class="gmap h-100 bounceInRight animated" data-animate="bounceInRight" data-address="Melbourne, Australia" data-markers='[{address: "Melbourne, Australia", html: "<div class=\"p-2\" style=\"width: 300px;\"><h4 class=\"mb-2\">Hi! We are <span>Envato!</span></h4><p class=\"mb-0\" style=\"font-size:1rem;\">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day.</p></div>", icon:{ image: "images/icons/map-icon-red.png", iconsize: [32, 39], iconanchor: [32,39] } }]'></div>
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

@endsection