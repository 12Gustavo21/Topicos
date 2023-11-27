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
                            <i class="ik ik-navigation bg-dark"></i>
                            <div class="d-inline">
                                <h5>Localizações</h5>
                                <span>Localizações cadastradas no sistema</span>
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
                                <li class="breadcrumb-item active" aria-current="page">Localizações</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Fim do page header                         -->
            <div class="card">
                <div class="card-header">
                    <!-- Botão para acionar modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalInserirLocalizacao">
                        + Nova Localização
                    </button>
                </div>
                <!-- Modal Inserir Localizacao-->
                <div class="modal fade" id="modalInserirLocalizacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nova Localização</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Inicio do formulario -->
                                <form class="forms-sample" id="inserirLocalizacao" name="inserirLocalizacao" action="<?php echo base_url($this->router->fetch_class() . '/insert/'); ?>" method="POST">
                                    <div class="form-group">
                                        <label for="codigo">Código</label>
                                        <input type="text" class="form-control" id="locacodigo" name="locacodigo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="locadescricao">Descrição</label>
                                        <input type="text" class="form-control" id="locadescricao" name="locadescricao" required>
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

                            <?php foreach ($localizacoes as $localizacao) : ?>
                                <tr>
                                    <!-- Inicio do modal view localizacao -->
                                    <div class="modal fade" id="modalviewLocalizacao<?php echo $localizacao->locaid ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Localização: <?php echo $localizacao->locadescricao; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Inicio do formulario -->
                                                    <form class="forms-sample" id="viewcategoria" name="viewcategoria">
                                                        <div class="form-group">
                                                            <label for="codigo">Código</label>
                                                            <input type="text" class="form-control" id="locacodigo" name="locacodigo" value="<?php echo $localizacao->locacodigo; ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="descricao">Descrição</label>
                                                            <input type="text" class="form-control" id="locadescricao" name="locadescricao" value="<?php echo $localizacao->locadescricao; ?>" readonly>
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
                                    <div class="modal fade" id="modaleditLocalizacao<?php echo $localizacao->locaid ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Alterar Localização:
                                                        <?php echo $localizacao->locadescricao; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Inicio do formulario -->
                                                    <form class="forms-sample" id="editLocalizacao" name="editLocalizacao" action="<?php echo base_url($this->router->fetch_class() . '/edit/'); ?>" method="POST">
                                                        <input type="hidden" class="form-control" id="locaid" name="locaid" value="<?php echo $localizacao->locaid; ?>">

                                                        <div class="form-group">
                                                            <label for="codigo">Código</label>
                                                            <input type="text" class="form-control" id="locacodigo" name="locacodigo" value="<?php echo $localizacao->locacodigo; ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="descricao">Descrição</label>
                                                            <input type="text" class="form-control" id="locadescricao" name="locadescricao" value="<?php echo $localizacao->locadescricao; ?>" required>
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
                                    <div class="modal fade" id="modaldeleteLocalizacao<?php echo $localizacao->locaid ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Deseja excluir a Localização:
                                                        <?php echo $localizacao->locadescricao; ?>?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Inicio do formulario -->
                                                    <form class="forms-sample" id="deleteLocalizacao" name="deleteLocalizacao" action="<?php echo base_url($this->router->fetch_class() . '/delete/'); ?>" method="POST">
                                                        <input type="hidden" class="form-control" id="locaid" name="locaid" value="<?php echo $localizacao->locaid; ?>">

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
                                    <td><?php echo $localizacao->locaid; ?></td>
                                    <td><?php echo $localizacao->locacodigo; ?></td>
                                    <td><?php echo $localizacao->locadescricao; ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalviewLocalizacao<?php echo $localizacao->locaid ?>">
                                                <i class="ik ik-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modaleditLocalizacao<?php echo $localizacao->locaid ?>">
                                                <i class="ik ik-edit-2"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modaldeleteLocalizacao<?php echo $localizacao->locaid ?>">
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