@extends($adminTheme)

@section('title', 'Dashboard')

@section('style')

@endsection

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row dashboard">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    @if(auth()->user()->can('User List'))
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li><a class="dropdown-item" href="{{ route('admin.users') }}">View</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Users <span></span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $userCount }}</h6>
                                            {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>  --}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endif

                    @if(auth()->user()->can('User Role List'))
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li><a class="dropdown-item" href="{{ route('admin.roles') }}">View</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Roles <span></span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                          <i class="fa fa-users" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $userRoleCount }}</h6>
                                            {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>  --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(auth()->user()->can('User Blog Category List'))
                        <div class="col-xxl-3 col-xl-12">
                            <div class="card info-card customers-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li><a class="dropdown-item" href="{{ route('admin.blog.category') }}">View</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Blog Categorys <span></span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $userBlogCategoryCount }}</h6>
                                            {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="col-xxl-3 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li><a class="dropdown-item" href="{{ route('admin.notes') }}">View</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Notes <span></span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $userNoteCount }}</h6>
                                        {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>  --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- End Left side columns -->
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    @if(auth()->user()->can('User Trafic Email List'))
                        <div class="col-xxl-3 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li><a class="dropdown-item" href="{{ route('admin.trafic.email') }}">View</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Trafic Emails <span></span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                          <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $traficEmails }}</h6>
                                            {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>  --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>

</main><!-- End #main -->
@endsection

@section('script')

@endsection