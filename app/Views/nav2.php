<!-- app-Header -->
<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="<?php echo base_url(); ?>">
                <img src="https://dekolor.ro/assets/smart-home.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="https://dekolor.ro/assets/smart-home.png" class="header-brand-img light-logo1"
                     alt="logo">
            </a>
            <!-- LOGO -->
<!--            <div class="main-header-center ms-3 d-none d-lg-block">-->
<!--                <input class="form-control" placeholder="Search for results..." type="search">-->
<!--                <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>-->
<!--            </div>-->
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <!-- SEARCH -->
                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                        aria-controls="navbarSupportedContent-4" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                </button>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">
                            <!-- Theme-Layout -->
                            <div class="dropdown  d-flex notifications">
                                <a class="nav-link icon" data-bs-toggle="dropdown"><i
                                        class="fe fe-bell"></i><span class=" pulse"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading border-bottom">
                                        <div class="d-flex">
                                            <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="notifications-menu">
                                        <a class="dropdown-item d-flex" href="notify-list.html">
                                            <div class="me-3 notifyimg  bg-primary brround box-shadow-primary">
                                                <i class="fe fe-mail"></i>
                                            </div>
                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">New Application received
                                                </h5>
                                                <span class="notification-subtext">3 days ago</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="notify-list.html">
                                            <div class="me-3 notifyimg  bg-secondary brround box-shadow-secondary">
                                                <i class="fe fe-check-circle"></i>
                                            </div>
                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">Project has been
                                                    approved</h5>
                                                <span class="notification-subtext">2 hours ago</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="notify-list.html">
                                            <div class="me-3 notifyimg  bg-success brround box-shadow-success">
                                                <i class="fe fe-shopping-cart"></i>
                                            </div>
                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">Your Product Delivered
                                                </h5>
                                                <span class="notification-subtext">30 min ago</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="notify-list.html">
                                            <div class="me-3 notifyimg bg-pink brround box-shadow-pink">
                                                <i class="fe fe-user-plus"></i>
                                            </div>
                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">Friend Requests</h5>
                                                <span class="notification-subtext">1 day ago</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="notify-list.html"
                                       class="dropdown-item text-center p-3 text-muted">View all
                                        Notification</a>
                                </div>
                            </div>
                            <!-- NOTIFICATIONS -->
                            <div class="dropdown d-flex profile-1">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                    <img src="https://dekolor.ro/assets/images/users/21.jpg" alt="profile-user"
                                         class="avatar  profile-user brround cover-image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading">
                                        <div class="text-center">
                                            <h5 class="text-dark mb-0 fs-14 fw-semibold"><?php echo $username; ?></h5>
<!--                                            <small class="text-muted">Senior Admin</small>-->
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item" href="<?php echo base_url('profile'); ?>">
                                        <i class="dropdown-icon fe fe-user"></i> Profil
                                    </a>
                                    <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">
                                        <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /app-Header -->

<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="<?php echo base_url(); ?>">
                <img src="https://dekolor.ro/assets/smart-home.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="https://dekolor.ro/assets/smart-home.png" class="header-brand-img toggle-logo"
                     alt="logo">
                <img src="https://dekolor.ro/assets/smart-home.png" class="header-brand-img light-logo" alt="logo">
                <img src="https://dekolor.ro/assets/smart-home.png" class="header-brand-img light-logo1"
                     alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <ul class="side-menu">
                <li class="slide">
                    <a class="slide-item" data-bs-toggle="slide" href="<?php echo base_url(); ?>"><i
                            class="side-menu__icon fe fe-home"></i><span
                            class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="slide">
                    <a class="slide-item" data-bs-toggle="slide" href="<?php echo base_url('scene'); ?>"><i
                            class="side-menu__icon fe fe-menu"></i><span
                            class="side-menu__label">Scene</span></a>
                </li>
                <li class="slide">
                    <a class="slide-item" data-bs-toggle="slide" href="<?php echo base_url('devices'); ?>"><i
                            class="side-menu__icon fe fe-wifi"></i><span
                            class="side-menu__label">Device-uri</span></a>
                </li>
                <li class="slide">
                    <a class="slide-item" data-bs-toggle="slide" href="<?php echo base_url('auto'); ?>"><i
                            class="side-menu__icon fe fe-cpu"></i><span
                            class="side-menu__label">Automatizari</span></a>
                </li>
                <li class="slide">
                    <a class="slide-item" data-bs-toggle="slide" href="<?php echo base_url('settings'); ?>"><i
                            class="side-menu__icon fe fe-settings"></i><span
                            class="side-menu__label">Setari</span></a>
                </li>
                <li class="slide">
                    <a class="slide-item" data-bs-toggle="slide" href="<?php echo base_url('apicalls'); ?>"><i
                            class="side-menu__icon fe fe-alert-triangle"></i><span
                            class="side-menu__label">API Calls</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>
<br />