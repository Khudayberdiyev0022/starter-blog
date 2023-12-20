<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- General CSS Files -->

  <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bundles/summernote/summernote-bs4.min.css') }}">

  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}"/>
  <!-- Scripts -->
  {{--  @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
  @stack('css')
</head>
<style>
  .dt-right {
    text-align: right;
  }
  .required::after {
    content: " *";
    color: red;
  }
</style>

<body>
{{--<div class="loader"></div>--}}
<div id="app">
  <div class="main-wrapper">
    <nav class="navbar navbar-expand-lg main-navbar sticky">
      <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
          <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
          <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
              <i data-feather="maximize"></i>
            </a></li>
          <li>
            <form class="form-inline mr-auto">
              <div class="search-element">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                <button class="btn" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </form>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                                     class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
            <span class="badge headerBadge1">
                6 </span> </a>
          <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
            <div class="dropdown-header">
              Messages
              <div class="float-right">
                <a href="#">Mark All As Read</a>
              </div>
            </div>
            <div class="dropdown-list-content dropdown-list-message">
              <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
											text-white"> <img alt="image" src="{{ asset('assets/img/users/user-1.png') }}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">John
                      Deo</span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
              </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{ asset('assets/img/users/user-2.png') }}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Request for leave
                      application</span>
                    <span class="time">5 Min Ago</span>
                  </span>
              </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{ asset('assets/img/users/user-5.png') }}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                      Ryan</span> <span class="time messege-text">Your payment invoice is
                      generated.</span> <span class="time">12 Min Ago</span>
                  </span>
              </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{ asset('assets/img/users/user-4.png') }}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                      Smith</span> <span class="time messege-text">hii John, I have upload
                      doc
                      related to task.</span> <span class="time">30
                      Min Ago</span>
                  </span>
              </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{ asset('assets/img/users/user-3.png') }}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                      Joshi</span> <span class="time messege-text">Please do as specify.
                      Let me
                      know if you have any query.</span> <span class="time">1
                      Days Ago</span>
                  </span>
              </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{ asset('assets/img/users/user-2.png') }}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Client Requirements</span>
                    <span class="time">2 Days Ago</span>
                  </span>
              </a>
            </div>
            <div class="dropdown-footer text-center">
              <a href="#">View All <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </li>
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                                     class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
          </a>
          <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
            <div class="dropdown-header">
              Notifications
              <div class="float-right">
                <a href="#">Mark All As Read</a>
              </div>
            </div>
            <div class="dropdown-list-content dropdown-list-icons">
              <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Template update is
                    available now! <span class="time">2 Min
                      Ago</span>
                  </span>
              </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
												fa-user"></i>
                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                      Sugiharto</b> are now friends <span class="time">10 Hours
                      Ago</span>
                  </span>
              </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                      class="fas
												fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                      Hours
                      Ago</span>
                  </span>
              </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                      class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                    clean it! <span class="time">17 Hours Ago</span>
                  </span>
              </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                    template! <span class="time">Yesterday</span>
                  </span>
              </a>
            </div>
            <div class="dropdown-footer text-center">
              <a href="#">View All <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </li>
        <li class="dropdown">
          <a href="javascript:void(false)" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('assets/img/user.png') }}" class="user-img-radious-style">
            <span class="d-sm-none d-lg-inline-block"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right pullDown">
            <div class="dropdown-title">{{ auth()->user()->name ?? '' }}</div>
            <a href="{{ route('admin.profile.edit') }}" class="dropdown-item has-icon {{ activeLink('admin.profile.edit') }}">
              <i class="far fa-user"></i>
              Profile
            </a>
            <a href="timeline.html" class="dropdown-item has-icon">
              <i class="fas fa-bolt"></i>
              Activities
            </a>
            <a href="#" class="dropdown-item has-icon">
              <i class="fas fa-cog"></i>
              Settings
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="d-flex align-items-center dropdown-item has-icon text-danger">
              <i class="fas fa-power-off"></i>
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
      </ul>
    </nav>
    <!-- Sidebar -->
    <div class="main-sidebar sidebar-style-2">
      <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
          <a href="{{ route('admin.index') }}"> <img alt="image" src="{{ asset('assets/img/logo.png') }}" class="header-logo"/>
            <span class="logo-name">Dashboard</span>
          </a>
        </div>
        <ul class="sidebar-menu">
          <li class="menu-header">Main</li>
          <li class="dropdown {{ activeLink('admin.index') }}">
            <a href="{{ route('admin.index') }}" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
          </li>
          <li class="dropdown {{ activeLink('admin.posts.*') }}">
            <a href="{{ route('admin.posts.index') }}" class="nav-link"><i class="far fa-newspaper"></i><span>Posts</span></a>
          </li>
          <li class="dropdown {{ activeLink('admin.categories.*') }}">
            <a href="{{ route('admin.categories.index') }}" class="nav-link"><i class="fas fa-sitemap"></i><span>Categories</span></a>
          </li>
          <li class="dropdown {{ activeLink('admin.tags.*') }}">
            <a href="{{ route('admin.tags.index') }}" class="nav-link"><i class="fas fa-tags"></i><span>Tags</span></a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.comments') }}" class="nav-link"><i class="fas fa-comments"></i><span>Comments</span></a>
          </li>
          <li class="dropdown">
            <a href="#" class="nav-link"><i class="fas fa-bell"></i><span>Notifications</span></a>
          </li>
          <li class="menu-header">Management</li>
          <li class="dropdown {{ activeLink('admin.settings.*') }}">
            <a href="{{ route('admin.settings.index') }}" class="nav-link"><i class="fas fa-cogs"></i><span>Settings</span></a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.backups') }}" class="nav-link"><i class="fas fa-undo"></i><span>Backups</span></a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.roles') }}" class="nav-link"><i class="fas fa-user-shield"></i><span>Roles</span></a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.users') }}" class="nav-link"><i class="fas fa-users"></i><span>Users</span></a>
          </li>
        </ul>
      </aside>
    </div>
    <!-- Sidebar End -->
    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        {{ $slot ?? '' }}
        @yield('content')
      </section>
      <!-- Main Content End -->
    </div>
    <footer class="footer bg-white py-2 pr-5 text-right" style="position:fixed; bottom: 0; width: 100%;">
      <p class="mb-0 text-dark">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
    </footer>
  </div>
</div>
<!-- General JS Scripts -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>
<!-- JS Libraries -->
<script src="{{ asset('assets/bundles/datatables/datatables.min.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('assets/bundles/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/page/index.js') }}"></script>
<script src="{{ asset('assets/js/page/datatables.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<!-- Custom JS File -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/bundles/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
@stack('script')
</body>

</html>
