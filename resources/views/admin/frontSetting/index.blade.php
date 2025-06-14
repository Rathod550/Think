@extends($adminTheme)

@section('title', 'Front Setting')

@section('style')
<!-- Optional: Custom tab styling -->
@endsection

@section('content')
<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h3 class="mt-3">Front Settings</h3>

                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs mt-3" id="frontSettingTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">
                                    Home
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about"
                                    type="button" role="tab" aria-controls="about" aria-selected="false">
                                    About Us
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false">
                                    Contact Us
                                </button>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content pt-3" id="frontSettingTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                @include('admin.frontSetting.homePageForm')
                            </div>
                            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                @include('admin.frontSetting.aboutUsForm')
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                @include('admin.frontSetting.contactUsForm')
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Restore the active tab from localStorage
        const activeTab = localStorage.getItem('activeTab');
        if (activeTab) {
            const triggerTab = document.querySelector(`button[data-bs-target="${activeTab}"]`);
            if (triggerTab) {
                new bootstrap.Tab(triggerTab).show();
            }
        }

        // Save active tab on tab change
        const tabButtons = document.querySelectorAll('button[data-bs-toggle="tab"]');
        tabButtons.forEach(button => {
            button.addEventListener('shown.bs.tab', function (event) {
                const target = event.target.getAttribute('data-bs-target');
                localStorage.setItem('activeTab', target);
            });
        });
    });
</script>
@endsection
