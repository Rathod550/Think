<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/dashboard*') ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        @if(auth()->user()->can('User List'))
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/users*') ? '' : 'collapsed' }}" href="{{ route('admin.users') }}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Users</span>
                </a>
            </li>
        @endif

        @if(auth()->user()->can('User Role List'))
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/roles*') ? '' : 'collapsed' }}" href="{{ route('admin.roles') }}">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>Roles</span>
                </a>
            </li>
        @endif

        @if(auth()->user()->can('User Blog Category List'))
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/blog-category*') ? '' : 'collapsed' }}" href="{{ route('admin.blog.category') }}">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                    <span>Blog Category</span>
                </a>
            </li>
        @endif

        @if(auth()->user()->can('Slider List'))
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/slider*') ? '' : 'collapsed' }}" href="{{ route('admin.slider') }}">
                    <i class="fa fa-sliders" aria-hidden="true"></i>
                    <span>Slider</span>
                </a>
            </li>
        @endif

        @if(auth()->user()->can('User Trafic Email List'))
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/trafic-email*') ? '' : 'collapsed' }}" href="{{ route('admin.trafic.email') }}">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>Trafic Email</span>
                </a>
            </li>
        @endif

        @if(auth()->user()->can('User Note List'))
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/notes*') ? '' : 'collapsed' }}" href="{{ route('admin.notes') }}">
                    <i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                    <span>Notes</span>
                </a>
            </li>
        @endif

        {{--  <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="tables-general.html">
                        <i class="bi bi-circle"></i><span>General Tables</span>
                    </a>
                </li>
                <li>
                    <a href="tables-data.html">
                        <i class="bi bi-circle"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li>--}}

    </ul>

</aside><!-- End Sidebar-->