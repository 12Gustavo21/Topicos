<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="index.html">
            <div class="logo-img">
                <img src="<?php echo base_url() ?>public/src/img/brand-white.svg" class="header-brand-img" alt="lavalite">
            </div>
            <span class="text">VendasV</span>
        </a>
        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-lavel">Cadastros</div>
                <div class="nav-item">
                    <a href="<?php echo base_url() . 'clientes' ?>"><i class="ik ik-users"></i><span>Clientes</span></a>
                </div>
                <div class="nav-item">
                    <a href="<?php echo base_url() . 'categorias' ?>"><i class="ik ik-package"></i><span>Categorias</span></a>
                </div>
                <div class="nav-item">
                    <a href="<?php echo base_url() . 'localizacoes' ?>"><i class="ik ik-map-pin"></i><span>Localizações</span></a>
                </div>
                <div class="nav-item">
                    <a href="<?php echo base_url() . 'cargos' ?>"><i class="ik ik-layers"></i><span>Cargos</span></a>
                </div>
                <div class="nav-item">
                    <a href="<?php echo base_url() . 'transportadora' ?>"><i class="ik ik-truck"></i><span>Transportadora</span></a>
                </div>
                <div class="nav-lavel">Permissões</div>
                <div class="nav-item">
                    <a href="<?php echo base_url() . 'grupos' ?>"><i class="ik ik-user-check"></i><span>Grupos de usuários</span></a>
                </div>
                <div class="nav-lavel">Navigation</div>
                <div class="nav-item active">
                    <a href="index.html"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                </div>
                <div class="nav-item">
                    <a href="../../../tema/pages/navbar.html"><i class="ik ik-menu"></i><span>Navigation</span> <span class="badge badge-success">New</span></a>
                </div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Widgets</span> <span class="badge badge-danger">150+</span></a>
                    <div class="submenu-content">
                        <a href="../../../tema/pages/widgets.html" class="menu-item">Basic</a>
                        <a href="../../../tema/pages/widget-statistic.html" class="menu-item">Statistic</a>
                        <a href="../../../tema/pages/widget-data.html" class="menu-item">Data</a>
                        <a href="../../../tema/pages/widget-chart.html" class="menu-item">Chart Widget</a>
                    </div>
                </div>
                <div class="nav-lavel">UI Element</div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-box"></i><span>Basic</span></a>
                    <div class="submenu-content">
                        <a href="../../../tema/pages/ui/alerts.html" class="menu-item">Alerts</a>
                        <a href="../../../tema/pages/ui/badges.html" class="menu-item">Badges</a>
                        <a href="../../../tema/pages/ui/buttons.html" class="menu-item">Buttons</a>
                        <a href="../../../tema/pages/ui/navigation.html" class="menu-item">Navigation</a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-gitlab"></i><span>Advance</span> <span class="badge badge-success">New</span></a>
                    <div class="submenu-content">
                        <a href="../../../tema/pages/ui/modals.html" class="menu-item">Modals</a>
                        <a href="../../../tema/pages/ui/notifications.html" class="menu-item">Notifications</a>
                        <a href="../../../tema/pages/ui/carousel.html" class="menu-item">Slider</a>
                        <a href="../../../tema/pages/ui/range-slider.html" class="menu-item">Range Slider</a>
                        <a href="../../../tema/pages/ui/rating.html" class="menu-item">Rating</a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-package"></i><span>Extra</span></a>
                    <div class="submenu-content">
                        <a href="../../../tema/pages/ui/session-timeout.html" class="menu-item">Session Timeout</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="../../../tema/pages/ui/icons.html"><i class="ik ik-command"></i><span>Icons</span></a>
                </div>
                <div class="nav-lavel">Forms</div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-edit"></i><span>Forms</span></a>
                    <div class="submenu-content">
                        <a href="../../../tema/pages/form-components.html" class="menu-item">Components</a>
                        <a href="../../../tema/pages/form-addon.html" class="menu-item">Add-On</a>
                        <a href="../../../tema/pages/form-advance.html" class="menu-item">Advance</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="../../../tema/pages/form-picker.html"><i class="ik ik-terminal"></i><span>Form Picker</span> <span class="badge badge-success">New</span></a>
                </div>

                <div class="nav-lavel">Tables</div>
                <div class="nav-item">
                    <a href="../../../tema/pages/table-bootstrap.html"><i class="ik ik-credit-card"></i><span>Bootstrap Table</span></a>
                </div>
                <div class="nav-item">
                    <a href="../../../tema/pages/table-datatable.html"><i class="ik ik-inbox"></i><span>Data Table</span></a>
                </div>

                <div class="nav-lavel">Charts</div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-pie-chart"></i><span>Charts</span> <span class="badge badge-success">New</span></a>
                    <div class="submenu-content">
                        <a href="../../../tema/pages/charts-chartist.html" class="menu-item active">Chartist</a>
                        <a href="../../../tema/pages/charts-flot.html" class="menu-item">Flot</a>
                        <a href="../../../tema/pages/charts-knob.html" class="menu-item">Knob</a>
                        <a href="../../../tema/pages/charts-amcharts.html" class="menu-item">Amcharts</a>
                    </div>
                </div>

                <div class="nav-lavel">Apps</div>
                <div class="nav-item">
                    <a href="../../../tema/pages/calendar.html"><i class="ik ik-calendar"></i><span>Calendar</span></a>
                </div>
                <div class="nav-item">
                    <a href="../../../tema/pages/taskboard.html"><i class="ik ik-server"></i><span>Taskboard</span></a>
                </div>

                <div class="nav-lavel">Pages</div>

                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-lock"></i><span>Authentication</span></a>
                    <div class="submenu-content">
                        <a href="../../../tema/pages/login.html" class="menu-item">Login</a>
                        <a href="../../../tema/pages/register.html" class="menu-item">Register</a>
                        <a href="../../../tema/pages/forgot-password.html" class="menu-item">Forgot Password</a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-file-text"></i><span>Other</span></a>
                    <div class="submenu-content">
                        <a href="../../../tema/pages/profile.html" class="menu-item">Profile</a>
                        <a href="../../../tema/pages/invoice.html" class="menu-item">Invoice</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="../../../tema/pages/layouts.html"><i class="ik ik-layout"></i><span>Layouts</span><span class="badge badge-success">New</span></a>
                </div>
                <div class="nav-lavel">Other</div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Menu Levels</span></a>
                    <div class="submenu-content">
                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.1</a>
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)" class="menu-item">Menu Level 2.2</a>
                            <div class="submenu-content">
                                <a href="javascript:void(0)" class="menu-item">Menu Level 3.1</a>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="menu-item">Menu Level 2.3</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="javascript:void(0)" class="disabled"><i class="ik ik-slash"></i><span>Disabled Menu</span></a>
                </div>
                <div class="nav-item">
                    <a href="javascript:void(0)"><i class="ik ik-award"></i><span>Sample Page</span></a>
                </div>
                <div class="nav-lavel">Support</div>
                <div class="nav-item">
                    <a href="javascript:void(0)"><i class="ik ik-monitor"></i><span>Documentation</span></a>
                </div>
                <div class="nav-item">
                    <a href="javascript:void(0)"><i class="ik ik-help-circle"></i><span>Submit Issue</span></a>
                </div>
            </nav>
        </div>
    </div>
</div>