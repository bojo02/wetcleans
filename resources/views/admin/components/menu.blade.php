<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{route('admin.index')}}" class="logo d-flex align-items-center">
       
        <span class="d-none d-lg-block">WetCleans</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="GET" action="{{route('admin.tickets.search')}}">
        @CSRF
        <input type="text" name="search" placeholder="Търси..." title="Enter search keyword">
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

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">{{auth()->user()->notSeenNotificationsCount()}}</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              @if(auth()->user()->notSeenNotificationsCount())
              Имате {{auth()->user()->notSeenNotificationsCount()}} известия/е
              @else
              Нямате известия :)
              @endif
              <a href="{{route('admin.notification.index')}}"><span class="badge rounded-pill bg-primary p-2 ms-2">Отвори</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            @foreach(auth()->user()->notSeenNotifications() as $notification)
            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>
                  
                  @if(!empty($notification->notification->user))
                  <a href="{{route('admin.notification.show', ['notification' => $notification->notification->id])}}">
                    {{$notification->notification->user->name}}
                  </a>
                  @else
                  <a href="{{route('admin.notification.show', ['notification' => $notification->notification->id])}}">
                    {{mb_substr($notification->notification->title, 0, 12)}}
                  </a>
                  @endif
                  <a href="{{route('admin.notification.make.seen', ['notification' => $notification->notification->id, 'user' => auth()->user()->id])}}"><i style="color:red;" class="bi bi-eye-slash-fill"></i></a>
                </h4>
                <p>{{  mb_substr($notification->notification->title, 0, 20)}}...</p>
                <p>{{$notification->notification->created_at->diffForHumans()}}</p>
              </div>
            </li>

           

            @if(!$loop->last)
              <li>
                <hr class="dropdown-divider">
              </li>
            @endif

            @endforeach

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="{{route('admin.notification.index')}}">Виж всички</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->
        @if(auth()->user()->isAdmin())

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-pen-fill"></i>
            <span class="badge bg-success badge-number">{{auth()->user()->activityLogCount()}}</span>
          </a><!-- End Messages Icon -->

         

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              Activity LOG: {{auth()->user()->activityLogCount()}}
              <a href="{{route('admin.activity.index')}}"><span class="badge rounded-pill bg-primary p-2 ms-2">Отвори</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            @foreach(auth()->user()->notSeenActivity() as $activity)

            <li class="message-item">
              <a href="{{route('admin.activity.show', ['notification' => $activity->notification->id])}}">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>
                    От {{$activity->notification->user->name}}
                    <a href="{{route('admin.activity.make.seen', ['notification' => $activity->notification->id, 'user' => auth()->user()->id])}}"><i style="color:red;" class="bi bi-eye-slash-fill"></i></a>
                  </h4>
                  <p>{{ mb_substr($activity->notification->title, 0, 20)}}</p>
                  <p>{{$activity->notification->created_at->diffForHumans()}}</p>
                </div>
              </a>
            </li>

              @if(!$loop->last)
              <li>
                <hr class="dropdown-divider">
              </li>
            @endif
            @endforeach

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="{{route('admin.activity.index')}}">Виж всички</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        @endif

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="{{asset('admin/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle"> -->
            <span class="d-none d-md-block dropdown-toggle ps-2"><i class="bi bi-person-fill"></i> {{auth()->user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{auth()->user()->name}}</h6>
              <span>{{auth()->user()->role->name}}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('admin.profile')}}">
                <i class="bi bi-person"></i>
                <span>Моят профил</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Излез</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    

    <ul class="sidebar-nav" id="sidebar-nav">
      

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.index')}}">
          <i class="bi bi-clock-fill"></i>
          <span>Чакащи почиствания</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#home-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-globe"></i><span>Бърз достъп до сайта</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="home-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('home')}}">
              <i class="bi bi-circle"></i><span>Начална страница</span>
            </a>
          </li>
          <li>
            <a href="{{route('contacts')}}">
              <i class="bi bi-circle"></i><span>Бързо запазване на час</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      
      @if(auth()->user()->role->slug == 'admin')

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#services-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-calendar2-fill"></i><span>Услуги</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="services-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.services.index')}}">
              <i class="bi bi-circle"></i><span>Всички</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.service.create')}}">
              <i class="bi bi-circle"></i><span>Добави нова</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      @endif
      

     
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tickets-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-card-list"></i><span>Билети</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tickets-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.index')}}">
              <i class="bi bi-circle"></i><span>Всички</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.ticket.create')}}">
              <i class="bi bi-circle"></i><span>Добави нов</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#notifications-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bell"></i><span>Нотификации</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="notifications-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.notification.index')}}">
              <i class="bi bi-circle"></i><span>Всички</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.notification.create')}}">
              @if(auth()->user()->isAdmin())
              <i class="bi bi-circle"></i><span>Добави нов</span>
              @endif
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      @if(auth()->user()->isAdmin())

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#activity-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-pen-fill"></i><span>Activity LOG</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="activity-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.activity.index')}}">
              <i class="bi bi-circle"></i><span>Всички</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.activity.create')}}">
              <i class="bi bi-circle"></i><span>Добави нов</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      @endif

      @if(auth()->user()->role->slug == 'admin')

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#statuses-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-exclamation-diamond-fill"></i><span>Статуси</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="statuses-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.statuses.index')}}">
              <i class="bi bi-circle"></i><span>Всички</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.status.create')}}">
              <i class="bi bi-circle"></i><span>Добави нов</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      @endif

      @if(auth()->user()->role->slug == 'admin')

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#images-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-image"></i><span>Галерия</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="images-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.gallery.index')}}">
              <i class="bi bi-circle"></i><span>Всички</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.gallery.create')}}">
              <i class="bi bi-circle"></i><span>Добави нова</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      @endif

      @if(auth()->user()->role->slug == 'admin')

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#roles-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-badge"></i><span>Роли</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="roles-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.roles.index')}}">
              <i class="bi bi-circle"></i><span>Всички</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.role.create')}}">
              <i class="bi bi-circle"></i><span>Добави нова</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      @endif

      @if(auth()->user()->role->slug == 'admin')
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people-fill"></i><span>Потребители</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.users.index')}}">
              <i class="bi bi-circle"></i><span>Всички</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.user.create')}}">
              <i class="bi bi-circle"></i><span>Добави нов</span>
            </a>
          </li>
          
          
        </ul>
      </li><!-- End Components Nav -->

      @endif

      

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     {{Session::get('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(Session::has('wrong'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
     {{Session::get('wrong')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif