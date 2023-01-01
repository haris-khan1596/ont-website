<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ONT-Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('assets/img/favicon.jpg')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('admin/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{url('admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{url('admin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('admin/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('admin/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{route('homePage')}}" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">ONT Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->



          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{url('admin/img/messages-1.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{url('admin/img/messages-2.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{url('admin/img/messages-3.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{url('admin/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
<main id='main' class='main'>
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#member_nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Team Members</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="member_nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('ont-admin/members/show')}}">
              <i class="bi bi-circle"></i><span>View Team Members</span>
            </a>
          </li>
          <li>
            <a href="{{url('ont-admin/members/add')}}">
              <i class="bi bi-circle"></i><span>Add new Team Member</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
          <strong>Pages</strong>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#research-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-text"></i><span>Research</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="research-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('ont-admin/domains/show')}}">
              <i class="bi bi-circle"></i><span>View Research Domains</span>
            </a>
          </li>
          <li>
            <a href="{{url('ont-admin/domains/add')}}">
              <i class="bi bi-circle"></i><span>Add new Research Domain</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#projects-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark-code"></i><span>Projects</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="projects-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('ont-admin/projects/show')}}">
              <i class="bi bi-circle"></i><span>View Projects</span>
            </a>
          </li>
          <li>
            <a href="{{url('ont-admin/projects/add')}}">
              <i class="bi bi-circle"></i><span>Add new Projects</span>
            </a>
          </li>
        </ul>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#events-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-calendar2-event"></i><span>Events</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="events-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('ont-admin/events/show')}}">
              <i class="bi bi-circle"></i><span>View Events</span>
            </a>
          </li>
          <li>
            <a href="{{url('ont-admin/events/add')}}">
              <i class="bi bi-circle"></i><span>Add new Events</span>
            </a>
          </li>
        </ul>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#pubs-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journals"></i><span>Publications</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pubs-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('ont-admin/journals/show')}}">
              <i class="bi bi-circle"></i><span>View Journals</span>
            </a>
          </li>
          <li>
            <a href="{{url('ont-admin/conference/show')}}">
              <i class="bi bi-circle"></i><span>View Conferences</span>
            </a>
          </li>
          <li>
            <a href="{{url('ont-admin/publications/add')}}">
              <i class="bi bi-circle"></i><span>Add new Publications</span>
            </a>
          </li>
        </ul>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#collabs-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-link-45deg"></i><span>Collaborators</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="collabs-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('ont-admin/collabs/show')}}">
              <i class="bi bi-circle"></i><span>View Collaborators</span>
            </a>
          </li>
          <li>
            <a href="{{url('ont-admin/collabs/add')}}">
              <i class="bi bi-circle"></i><span>Add new Collaborators</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#blogs-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Blogs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="blogs-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('ont-admin/blogs/show')}}">
              <i class="bi bi-circle"></i><span>View Blogs</span>
            </a>
          </li>
          <li>
            <a href="{{url('ont-admin/blogs/add')}}">
              <i class="bi bi-circle"></i><span>Add new Blogs</span>
            </a>
          </li>
        </ul>
      </li>
      

    </ul>

  </aside><!-- End Sidebar-->


