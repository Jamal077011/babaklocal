<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Search form -->
        <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative input-group-merge">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder={{__('Dashboard.Search')}} type="text">
            </div>
          </div>
          <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </form>
        <li class="nav-item dropdown">
          <button class="btn " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #fff"><span>Company</span><i class="fa-sharp fa-solid fa-arrow-down"></i></button>
          <div class="dropdown-menu dropdown-menu-m  dropdown-menu-right  py-0 overflow-hidden">
            <div class="px-3 py-3">
              <h6 class="text-sm text-muted m-0">Company one</h6>
            </div>
            <div class="px-3 py-3">
              <h6 class="text-sm text-muted m-0">Company Two</h6>
            </div>
            <div class="px-3 py-3">
              <h6 class="text-sm text-muted m-0">Company Three</h6>
            </div>
            <div class="px-3 py-3">
              <h6 class="text-sm text-muted m-0">Company Four</h6>
            </div>

          </div>
        </li>
        <li class=" dropdown">
          <a class="btn " style="background-color: #fff" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa-solid fa-globe fa-xl" style="color: #007bff;"></i>
          </a>
          <div class="dropdown-menu  dropdown-menu-left ">
              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <div class="px-3 py-3">
                      <a rel="alternate" class="text-muted" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                          {{ $properties['native'] }}
                      </a>
                    </div>
              @endforeach

          </div>
        </li>
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center  ml-md-auto ">
          <li class="nav-item d-xl-none">
            <!-- Sidenav toggler -->
            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </div>
          </li>
          <li class="nav-item d-sm-none">
            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
              <i class="ni ni-zoom-split-in"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <button class="btn " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #fff"><i class="fa-solid fa-square-plus fa-2xl" style="margin: 3px; margin-left: 3px; color: #1ad53a;"></i><span>{{__('Dashboard.Add New')}}</span></button>
            <div class="dropdown-menu dropdown-menu-m  dropdown-menu-right  py-0 overflow-hidden">
              <div class="px-3 py-3">
                <h6 class="text-sm text-muted m-0">Company</h6>
              </div>
              <div class="px-3 py-3">
                <h6 class="text-sm text-muted m-0">Company File</h6>
              </div>
              <div class="px-3 py-3">
                <h6 class="text-sm text-muted m-0">Employee</h6>
              </div>
              <div class="px-3 py-3">
                <h6 class="text-sm text-muted m-0">Employee File</h6>
              </div>

            </div>
          </li>

          <li>
            <a href="{{route('dashboard.wallet')}}">
              <i class="fa-solid fa-wallet fa-xl mx-2" title="Show wallet" style="color: #525f7f;"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-bell-55"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
              <!-- Dropdown header -->
              <div class="px-3 py-3">
                <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">1</strong> notifications.</h6>
              </div>
              <!-- List group -->
              <div class="list-group list-group-flush">
                <a href="#!" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">John Snow</h4>
                        </div>
                        <div class="text-right text-muted">
                          <small>2 hrs ago</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                    </div>
                  </div>
                </a>
              </div>
              <!-- View all -->
              <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{ auth()->user()->avatar ? asset('storage/backend/avatar/'. auth('admin')->user()->avatar) : 'https://media.tenor.com/images/4fd49de4149a6d348e04f2465a3970af/tenor.gif' }}">
                </span>
                <div class="media-body  ml-2  d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu  dropdown-menu-right ">
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">{{__('Dashboard.Welcome!')}}</h6>
              </div>
              <a href="#" class="dropdown-item">
                <i class="  ni ni-single-02"></i>
                <span class="">{{__('Dashboard.My profile')}}</span>
              </a>
              <div class="dropdown-divider"></div>
              
              <a class="dropdown-item" href="{{ route('dashboard.logout') }}"
                  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                  <i class="ni ni-user-run"></i>
                  <span>{{__('Dashboard.Logout')}}</span>
              </a> 

              <form id="logout-form" action="{{ route('dashboard.logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
            
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
