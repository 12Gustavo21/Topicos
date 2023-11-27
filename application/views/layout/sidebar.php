                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="index.html">
                            <div class="logo-img">
                                <img src="<?php echo base_url() ?>public/src/img/brand-white.svg" class="header-brand-img" alt="lavalite">
                            </div>
                            <span class="text">ThemeKit</span>
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
                                    <a href="<?php echo base_url() . 'categorias' ?>"><i class="ik ik-align-justify"></i><span>Categorias</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="<?php echo base_url() . 'localizacao' ?>"><i class="ik ik-navigation"></i><span>Localizações</span></a>
                                </div>
                                <div class="nav-lavel">Permissões</div>
                                <div class="nav-item">
                                    <a href="<?php echo base_url() . 'grupos' ?>"><i class="ik ik-user-check"></i><span>Grupos de usuários</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="<?php echo base_url() . 'users' ?>"><i class="ik ik-user-plus"></i><span>Usuários</span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>