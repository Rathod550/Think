@extends($adminTheme)

@section('title', 'Front Setting')

@section('style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
@endsection

@section('content')
<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h3>Front Settings</h3>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab1">Home Setting</a></li>
                            <li><a data-toggle="tab" href="#tab2">About Us Setting</a></li>
                            <li><a data-toggle="tab" href="#tab3">Contact Us Setting</a></li>
                        </ul>

                        <!-- Tab content -->
                        <div class="tab-content" style="margin-top: 20px;">
                            <div id="tab1" class="tab-pane fade in active">
                                @include('admin.frontSetting.homePageForm')
                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <h4>Tab 2 Content</h4>
                                <p>This is the content of Tab 2.</p>
                            </div>
                            <div id="tab3" class="tab-pane fade">
                                <h4>Tab 3 Content</h4>
                                <p>This is the content of Tab 3.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
