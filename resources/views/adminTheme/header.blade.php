<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('adminTheme/assets/img/logo.png') }}" alt="">
            <span class="d-none d-lg-block">NiceAdmin</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            @php
                $notifications = showNotification(auth()->user())['notifications'];
                $newNotificationCount = showNotification(auth()->user())['newNotificationCount'];
            @endphp

            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell" data-route="{{ route('admin.remove.bell.number') }}"></i>
                    @if($newNotificationCount != 0)
                        <span class="badge bg-primary badge-number">{{ $newNotificationCount }}</span>
                    @endif
                </a><!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        You have {{ $newNotificationCount }} new notifications
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    @if(!empty($notifications) && $notifications->count() > 0)
                        @foreach($notifications as $key => $value)
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="notification-item">
                                @if($value->action_type == 0)
                                    <i class="bi bi-check-circle text-success"></i>
                                @elseif($value->action_type == 1)
                                    <i class="bi bi-info-circle text-primary"></i>
                                @elseif($value->action_type == 2)
                                    <i class="bi bi-x-circle text-danger"></i>
                                @else
                                    <i class="bi bi-info-circle text-primary"></i>
                                @endif
                                <div>
                                    <h4>{{ $value->sender_name ?? 'Deleted User' }}</h4>
                                    <p>{{ $value->message }}</p>
                                    <p>{{ dateHumanFormate($value->created_at) }}</p>
                                </div>
                            </li>
                        @endforeach
                    @endif
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="dropdown-footer">
                        <a href="#">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->
            </li><!-- End Notification Nav -->

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    @if(!empty(auth()->user()->profile) && auth()->user()->profile)
                        <img src="{{ asset(auth()->user()->profile) }}" alt="Profile" class="rounded-circle" width="42" height="42">
                    @else
                        <img src="{{ asset('adminTheme/assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle" width="42" height="42">
                    @endif
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ auth()->user()->name }}</h6>
                        <span>{{ auth()->user()->getRoleNames()->first() ?? 'No Role Assigned' }}</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.profile', [auth()->user()->id]) }}">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->