
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="/home ">
     
      <span class="ms-1 font-weight-bold text-white">Debo Seedling Dashboard</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('home') ? 'bg-gradient-primary' :''}}" href="/home">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('setting') ? 'bg-gradient-primary' :''}}" href="/setting">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">Account Settings</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('new-orders') ? 'bg-gradient-primary' :''}}" href="{{ url('new-orders') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
           <i class="material-icons opacity-10">notifications</i>
          </div>
          <span class="nav-link-text ms-1">New orders</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('completed-orders') ? 'bg-gradient-primary' :''}}" href="{{ url('completed-orders') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
           <i class="nav-icon fa fa-check"></i>
          </div>
          <span class="nav-link-text ms-1">Completed orders</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white {{ Request::is('all-orders') ? 'bg-gradient-primary' :''}}" href="{{ url('all-orders') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="nav-icon fa fa-history"></i>
          </div>
          <span class="nav-link-text ms-1">All orders</span>
        </a>
      </li>
      
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Products</h6>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white {{ Request::is('create') ? ' bg-gradient-primary' :''}}" href="{{ url('create') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="nav-icon fa fa-plus"></i>
          </div>
          <span class="nav-link-text ms-1">Add product</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white {{ Request::is('product') ? 'bg-gradient-primary' :''}}" href="{{ url('product') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="nav-icon fa fa-angle-down"></i>
          </div>
          <span class="nav-link-text ms-1">All products</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white {{ Request::is('category') ? 'bg-gradient-primary' :''}}" href="{{ url('category') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="nav-icon fa fa-list"></i>
          </div>
          <span class="nav-link-text ms-1">Categories</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white {{ Request::is('add-category') ? 'bg-gradient-primary' :''}}" href="{{ url('add-category') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="nav-icon fa fa-plus"></i>
          </div>
          <span class="nav-link-text ms-1">Add category</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Sales</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('add_sales') ? 'bg-gradient-primary' :''}}" href="{{ url('add_sales') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="nav-icon fa fa-user"></i>

          </div>
          <span class="nav-link-text ms-1">Add sales</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ Request::is('manage') ? 'bg-gradient-primary' :''}}" href="{{ url('manage') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="nav-icon fa fa-tasks"></i>
          </div>
          <span class="nav-link-text ms-1">Manage</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"class="nav-link text-white ">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa fa-sign-out"></i>
          </div>
          <span class="nav-link-text ms-1">{{ __('Logout') }}</span>
        </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
        </form>
      </li>
    </ul>
  </div>

</aside>