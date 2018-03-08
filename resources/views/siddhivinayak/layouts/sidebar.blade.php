<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/siddhivinayak/admin-lte/dist/img/admin.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{!! Auth::user()->name !!}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
<span class="input-group-btn">
  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
</span>
            </div>
        </form> --}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Main Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{URL::route('dashboard')}}"><span>Dashboard</span></a></li>

            <li class="treeview">
                <a href="{{URL::route('siddhivinayak.news.index')}}"><span><i class="fa fa-angle-double-right"> </i> Event</span></a>
               </li>

         
               <li><a href="{{URL::route('siddhivinayak.masters.folder.index')}}"><span><i class="fa fa-angle-double-right"> </i>Gallery Folder</span></a></li>
               <li><a href="{{URL::route('siddhivinayak.masters.gallery.index')}}"><span><i class="fa fa-angle-double-right"> </i>Gallery photos</span></a></li> 
            
             

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>