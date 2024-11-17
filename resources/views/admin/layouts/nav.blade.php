<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('admin.dashboard.index') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('logo-white.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('logo-white.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('admin.dashboard.index') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('logo-white.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('logo-white.png') }}" alt="" height="50">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">General</span></li>

                <li class="nav-item ">
                    <a class="nav-link {{ active_route('admin.noticeboard.index') }} {{ active_route('admin.noticeboard.create') }} {{ active_route('admin.noticeboard.edit') }}"
                        href=" {{ route('admin.noticeboard.index') }}" data-key="t-analytics">
                        <i class=" las la-chalkboard-teacher"></i> <span data-key="t-banner">Notice Board</span> </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link {{ active_route('admin.banner.index') }} {{ active_route('admin.banner.create') }} {{ active_route('admin.banner.edit') }}"
                        href=" {{ route('admin.banner.index') }}" data-key="t-analytics">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-banner">Banners</span> </a>
                </li>


                <li class="nav-item ">
                    <a class="nav-link {{ active_route('admin.blog.index') }} {{ active_route('admin.blog.create') }} {{ active_route('admin.blog.edit') }}"
                        href=" {{ route('admin.blog.index') }}" data-key="t-analytics">
                        <i class="ri-book-2-line"></i> <span data-key="t-blog">Blog</span> </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link {{ active_route('admin.publication.index') }} {{ active_route('admin.publication.create') }} {{ active_route('admin.publication.edit') }}"
                        href="{{ route('admin.publication.index') }}" data-key="t-analytics">
                        <i class="ri-file-list-3-line"></i> <span data-key="t-publication">Articles &
                            Publications</span> </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link {{ active_route('admin.gallery.index') }} {{ active_route('admin.gallery.create') }}"
                        href="{{ route('admin.gallery.index') }}" data-key="t-analytics">
                        <i class="las la-image"></i> <span data-key="t-gallery">Gallery</span> </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link {{ active_route('admin.download.index') }}"
                        href="{{ route('admin.download.index') }}" data-key="t-analytics">
                        <i class="las la-download"></i> <span data-key="t-downloads">Downloads</span> </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link  {{ active_route('admin.faq.index') }}  {{ active_route('admin.faq.create') }} {{ active_route('admin.faq.edit') }}"
                        href="{{ route('admin.faq.index') }}" data-key="t-analytics">
                        <i class="las la-question"></i> <span data-key="t-downloads">FAQ</span> </a>
                </li>


                <li class="nav-item ">
                    <a class="nav-link {{ active_route('admin.career.index') }}  {{ active_route('admin.career.create') }} {{ active_route('admin.career.edit') }}"
                        href="{{ route('admin.career.index') }}" data-key="t-analytics">
                        <i class=" las la-briefcase"></i> <span data-key="t-career">Career</span> </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link {{ active_route('admin.profile.index') }} {{ active_route('admin.profile.photo') }}"
                        href="{{ route('admin.profile.index') }}" data-key="t-analytics">
                        <i class="   ri-user-3-line  "></i> <span data-key="t-dashboards">Profile</span> </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link {{ active_route('admin.accounts.index') }} {{ active_route('admin.accounts.create') }} {{ active_route('admin.accounts.edit') }}"
                        href="{{ route('admin.accounts.index') }}" data-key="t-analytics">
                        <i class="  ri-group-line"></i> <span data-key="t-dashboards">Accounts</span> </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
