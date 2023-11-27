<?php $this->load->view('layout/header.php') ?>
<div class="page-wrap">
    <?php $this->load->view('layout/sidebar.php') ?>
    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <?php if ($this->session->flashdata('sucesso')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?php echo $this->session->flashdata('sucesso'); ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="ik ik-user-check bg-dark"></i>
                            <div class="d-inline">
                                <h5>Grupos</h5>
                                <span>Grupos cadastradas no sistema</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo base_url() ?>"><i class="ik ik-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Cadastros</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Grupos</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Fim do page header                         -->
            <div class="card">
                <div class="card-header">
                    <!-- Botão para acionar modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalInserirGrupo">
                        + Novo Grupo
                    </button>
                </div>
                <!-- Modal Inserir Localizacao-->
                <div class="modal fade" id="modalInserirGrupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Novo Grupo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Inicio do formulario -->
                                <form class="forms-sample" id="inserirGrupo" name="inserirGrupo" action="<?php echo base_url($this->router->fetch_class() . '/insert/'); ?>" method="POST">
                                    <div class="form-group">
                                        <label for="codigo">Código</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Descrição</label>
                                        <input type="text" class="form-control" id="description" name="description" required>
                                    </div>

                                    <button type="submit" class="btn btn-success mr-2">Salvar</button>

                                </form>
                                <!-- fim do formulario -->
                            </div>
                            <!-- <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-primary">Salvar mudanças</button>
                                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="data_table" class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Código</th>
                                <th>Descrição</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($grupos as $grupo) : ?>
                                <tr>
                                    <!-- Inicio do modal view localizacao -->
                                    <div class="modal fade" id="modalviewGrupo<?php echo $grupo->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Localização: <?php echo $grupo->description; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Inicio do formulario -->
                                                    <form class="forms-sample" id="viewcategoria" name="viewcategoria">
                                                        <div class="form-group">
                                                            <label for="codigo">Código</label>
                                                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $grupo->name; ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="descricao">Descrição</label>
                                                            <input type="text" class="form-control" id="description" name="description" value="<?php echo $grupo->description; ?>" readonly>
                                                        </div>
                                                        <!-- <button type="submit" class="btn btn-success mr-2">Salvar</button> -->
                                                    </form>
                                                    <!-- fim do formulario -->
                                                </div>
                                                <!-- <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                                <button type="submit" class="btn btn-primary">Salvar mudanças</button>
                                                            </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim do modal view Localizacao -->

                                    <!-- inicio do modal editar categoria -->
                                    <div class="modal fade" id="modaleditGrupo<?php echo $grupo->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Alterar Localização:
                                                        <?php echo $grupo->description; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Inicio do formulario -->
                                                    <form class="forms-sample" id="editGrupo" name="editGrupo" action="<?php echo base_url($this->router->fetch_class() . '/edit/'); ?>" method="POST">
                                                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $grupo->id; ?>">

                                                        <div class="form-group">
                                                            <label for="codigo">Código</label>
                                                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $grupo->name; ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="descricao">Descrição</label>
                                                            <input type="text" class="form-control" id="description" name="description" value="<?php echo $grupo->description; ?>" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-success mr-2">Salvar</button>
                                                    </form>
                                                    <!-- fim do formulario -->
                                                </div>
                                                <!-- <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                                <button type="submit" class="btn btn-primary">Salvar mudanças</button>
                                                            </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Final do modal editar localizacao -->
                                    <!-- inicio do modal deletar localizacao -->
                                    <div class="modal fade" id="modaldeleteGrupo<?php echo $grupo->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Deseja excluir a Localização:
                                                        <?php echo $grupo->description; ?>?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Inicio do formulario -->
                                                    <form class="forms-sample" id="deleteGrupo" name="deleteGrupo" action="<?php echo base_url($this->router->fetch_class() . '/delete/'); ?>" method="POST">
                                                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $grupo->id; ?>">

                                                        <button type="submit" class="btn btn-success mr-2">Confirmar</button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                    </form>
                                                    <!-- fim do formulario -->
                                                </div>
                                                <!-- <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                                <button type="submit" class="btn btn-primary">Salvar mudanças</button>
                                                            </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- final do modal deletar localizacao -->
                                    <td><?php echo $grupo->id; ?></td>
                                    <td><?php echo $grupo->name; ?></td>
                                    <td><?php echo $grupo->description; ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalviewGrupo<?php echo $grupo->id ?>">
                                                <i class="ik ik-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modaleditGrupo<?php echo $grupo->id ?>">
                                                <i class="ik ik-edit-2"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modaldeleteGrupo<?php echo $grupo->id ?>">
                                                <i class="ik ik-trash-2"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('layout/footer.php') ?>