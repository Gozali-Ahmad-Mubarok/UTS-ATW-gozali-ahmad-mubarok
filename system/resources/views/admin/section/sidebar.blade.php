<!--// sidebar menu start -->
<div class="sidebar-menu sticky-sidebar-menu">

  <!-- logo start -->
  <div class="logo">
    <h1><a href="{{url('admin')}}">Collective</a></h1>
  </div> 
  
  <div class="logo-icon text-center">
    <a href="{{url('admin')}}" title="logo"><img src="{{url('public')}}/assets_admin/images/logo.png" alt="logo-icon"> </a>
  </div>
  <!-- //logo end -->

  <div class="sidebar-menu-inner">

    <!-- sidebar nav start -->
    <ul class="nav nav-pills nav-stacked custom-nav">
      <li class="active"><a href="{{url('admin')}}"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
      </li>
      <li><a href="{{url('user')}}"><i class="fa fa-user"></i> <span>User</span></a></li>
      <li><a href="{{url('artikel')}}"><i class="fa fa-book"></i> <span>Artikel</span></a></li>
      <li><a href="{{url('komentar')}}"><i class="fa fa-comment"></i> <span>Comment</span></a></li>
    </ul>
    <!-- //sidebar nav end -->
    <!-- toggle button start -->
    <a class="toggle-btn">
      <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
      <i class="fa fa-angle-double-right menu-collapsed__right"></i>
    </a>
    <!-- //toggle button end -->
  </div>
</div>
<!-- //sidebar menu end -->