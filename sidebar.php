  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu"><!-- sidebar menu -->
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li class="<?php if(isset($active1)){echo $active1;}?>">
                        <a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <!--<li class="<?php if(isset($active2)){echo $active2;}?>">
                        <a href="tickets.php"><i class="fa fa-ticket"></i> Tickets</a>
                    </li> -->
                    <li class="treeview active">
                      <a href="#">
                        <i class="fa fa-ticket"></i> <span>Tickets</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <a href="tickets.php"><i class="fa fa-circle-o"></i> Tickets Registrados</a>
                        <!-- <li class=""><a href="asignados.php"><i class="fa fa-circle-o"></i> Tickets Asignados</a></li>-->
                        </br><a href="atender_casos.php"><i class="fa fa-headphones"></i> Atender Tickets</a>
                        <!--<li class=""><a href="cancelados.php"><i class="fa fa-circle-o"></i> Tickets Con Incidencia</a></li>-->
                        <!--<li class=""><a href="atendidos.php"><i class="fa fa-circle-o"></i> Tickets Atendidos</a></li>-->
                      </ul>
                    </li>

                    <li class="<?php if(isset($active3)){echo $active3;}?>">
                        <a href="projects.php"><i class="fa fa-list-alt"></i> Proyectos</a>
                    </li>

                    <li class="<?php if(isset($active4)){echo $active4;}?>">
                        <a href="categories.php"><i class="fa fa-align-left"></i> Categorias</a>
                    </li>

                    <li class="<?php if(isset($active5)){echo $active5;}?>">
                        <a href="reports.php"><i class="fa fa-area-chart"></i> Reportes</a>
                    </li>

                    <li class="<?php if(isset($active6)){echo $active6;}?>">
                        <a href="users.php"><i class="fa fa-users"></i> Usuarios</a>
                    </li>

                    <li class="<?php if(isset($active7)){echo $active7;}?>">
                        <a href="asesor.php"><i class="fa fa-child"></i> Asesores</a>
                    </li>

                    <!-- <li class="<?php if(isset($active8)){echo $active8;}?>">
                        <a href="about.php"><i class="fa fa-child"></i> Sobre Mi</a>
                    </li> -->

                </ul>
            </div>
        </div><!-- /sidebar menu -->
    </div>
</div> 
     
    <div class="top_nav"><!-- top navigation -->
        <div class="nav_menu">
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="images/profiles/<?php echo $profile_pic;?>" alt=""><?php echo $name;?>
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="dashboard.php"><i class="fa fa-user"></i> Mi cuenta</a></li>
                            <li><a href="action/logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- /top navigation -->    