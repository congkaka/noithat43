<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="{{route('dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <span>Slideshow</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('list.slide')}}"><i class="fa fa-circle-o"></i>List Slideshow</a></li>
            <li><a href="{{route('add.slide')}}"><i class="fa fa-circle-o"></i>Add Slideshow</a></li>
          </ul>
        </li>
        <li>
          <a href="{{route('list.comment')}}">
            <span>Comment</span>
          </a>
        </li>
        <li>
          <a href="{{route('list.setting')}}">
            <span>Setting</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>