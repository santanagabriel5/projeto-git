<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/admin-lte/dist/img/avatar5.png") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Seu Nome</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Pesquisar..."/>
      <span class="input-group-btn">
        <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
      </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->

            <li class="treeview">
              <li class="active treeview menu-open">
                <a href="#">
                  <i class="fa fa-leanpub"></i> <span>Disciplinas</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{action('DisciplinaController@novo')}}"><i class="fa fa-plus"></i> Novo</a></li>
                  <li><a href="{{action('DisciplinaController@lista')}}"><i class="fa fa-list-ul"></i> Lista</a></li>
                  <li class="threeview-menu"><a href="#"><i class="fa fa-tags"></i> Seções
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                    <ul class="treeview-menu">
                      <li><a href="#">Primeiro bimestre</a></li>
                      <li><a href="#">Segundo bimestre</a></li>
                    </ul>
                  </li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
