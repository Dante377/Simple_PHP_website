
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./" class="brand-link">
        <span class="brand-text font-weight-light"><h2>Dziennik</h2></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <h4>
                    <?php
                    echo $_SESSION["logged"]["Name"]." ".$_SESSION["logged"]["LastName"];
                    ?>
                </h4>
            </div>
        </div>

        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../scripts/Move_historia_nauczyciel.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Historia modyfikacji</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../scripts/Move_oceny_uczniow.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Oceny uczniów</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

