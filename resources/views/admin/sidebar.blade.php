<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
     
      <div class="title">
        <h1 class="h5">Admin dashboard</h1>
        <p>welcome</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="active"><a href="{{url('/redirect')}}"> <i class="icon-home"></i>Home </a></li>
            <li><a href="{{url('show_user')}}"> <i class="icon-grid"></i>User </a></li>
            <li><a href="{{url('show_contact')}}"> <i class="fa fa-bar-chart"></i>Show contact </a></li>
            <li><a href="{{url('create_about')}}"> <i class="icon-padnote"></i>creat About </a></li>
            
            <li><a href="{{url('show_about')}}"> <i class="icon-logout"></i>Showabout </a></li>
            <li><a href="{{url('offer_post')}}"> <i class="icon-logout"></i>create offer </a></li>
            <li><a href="{{url('showoffer')}}"> <i class="icon-logout"></i>show offer </a></li>
    </ul><span class="heading">Extras</span>
   
  </nav>