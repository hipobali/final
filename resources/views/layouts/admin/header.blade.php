<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="{{ url('admin/dashboard') }}" style="text-decoration:none">Easy Donate</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class=" img-rounded " width="50" height="50"  src="{{ url('img/logo.png') }}"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Admin
            <strong>Dashboard</strong>
          </span>
        </div>
      </div>
      <div class="sidebar-menu">
        <ul>

          <li class="header-menu">
           <span>General</span>
          </li>
          <li>
            <a href="{{ url('admin/dashboard') }}">
              <span>Dashboard</span>
            </a>
          </li>
              <li>
                <a href="{{ url('admin/category') }}">
                  <span>Category</span>
                </a>
              </li>
              <li>
                <a href="{{ url('admin/donor_data') }}">
                  <span>Donor Data</span>
                </a>
              </li>
              <li>
                <a href="{{ url('admin/report') }}">
                  <span>Report Data</span>
                </a>
              </li>



          <li class="header-menu">
            <span>User</span>
          </li>
          <li>
          <a class="dropdown-item" href="{{route('foundation_register_view')}}">Foundation Signup</a>
          </li>
          <li>
            <a href="{{ url('admin/user_data') }}">
              <span>User Data</span>
            </a>
          </li>

          <li>
            <a href="{{ url('admin/admin_data') }}">
              <span>Admin Data</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/foundation_data') }}">
              <span> Foundation Data</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/people_data') }}">
              <span>People In Need Data</span>
            </a>
          </li>

          <li class="header-menu">
            <span>Post</span>
          </li>
          
          <li>
            <a href="{{ url('admin/foundation_post') }}">
              <span>Foundation Post Data</span>
            </a>
          </li>

          <li>
              <a href="{{ url('admin/people_post') }}">
              <span>People Request Post</span>
              </a>
          </li>

     
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
  </nav>

</div>
<!-- page-wrapper -->
