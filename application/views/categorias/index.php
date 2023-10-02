<?php $this->load->view('layout/header.php'); ?>

<style>
    ::-webkit-scrollbar {
        display: none;
    }
</style>

<div class="page-wrap">
    <?php $this->load->view('layout/sidebar.php'); ?>
    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1.5em" width="1.5em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8 157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z"></path>
                        </svg>
                        <strong><?php echo $this->session->flashdata('success'); ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="ik ik-package bg-dark"></i>
                            <div class="d-inline">
                                <h5>Categorias</h5>
                                <span>Categorias cadastradas no sistema</span>
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
                                    <a href="#">Cadastro</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Categorias</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Fim do cabeçalho -->
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#inserirCategoria">
                        + Nova categoria
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="inserirCategoria" tabindex="-1" role="dialog" aria-labelledby="inserirCategoriaLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nova categoria</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Início do formulário -->
                                <form id='form' action="<?php echo base_url($this->router->fetch_class() . '/insert/'); ?>" method="POST">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="catecodigo">Código: <span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" id="catecodigo" name="catecodigo" placeholder="Ex: TI-001" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="catedescricao">Descrição: <span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" id="catedescricao" name="catedescricao" placeholder="Ex: Placas mãe" required>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- Fim do formulário -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success" form='form'>Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="data_table" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Código</th>
                                <th>Descrição</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($categorias)) : ?>
                                <tr>
                                    <td colspan="4">
                                        <div class="alert alert-danger" role="alert">
                                            Nenhuma categoria cadastrada!
                                        </div>
                                    </td>
                                </tr>
                            <?php else : ?>
                                <?php foreach ($categorias as $categoria) : ?>
                                    <tr>
                                        <td><?php echo $categoria->cateid; ?></td>
                                        <td><?php echo $categoria->catecodigo; ?></td>
                                        <td><?php echo $categoria->catedescricao; ?></td>
                                        <td>
                                            <div class="table-actions">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalviewCategoria<?php echo $categoria->cateid; ?>">
                                                    <i class="ik ik-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editCategoria<?php echo $categoria->cateid; ?>">
                                                    <i class="ik ik-edit-2"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDeleteCategoria<?php echo $categoria->cateid; ?>">
                                                    <i class="ik ik-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Início do modal viewCategoria -->
                                    <div class="modal fade" id="modalviewCategoria<?php echo $categoria->cateid; ?>" tabindex="-1" role="dialog" aria-labelledby="modalviewCategoriaLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Categoria: <?php echo $categoria->catedescricao; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="forms-sample" id="viewCategoria" name="viewCategoria">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="form-group">
                                                                    <label for="catecodigo">Código:</label>
                                                                    <input type="text" class="form-control" id="catecodigo" name="catecodigo" value="<?php echo $categoria->catecodigo; ?>" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="form-group">
                                                                    <label for="catedescricao">Descrição:</label>
                                                                    <input type="text" class="form-control" id="catedescricao" name="catedescricao" value="<?php echo $categoria->catedescricao; ?>" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim do modal viewCategoria -->

                                    <!-- Início do modal editCategoria -->
                                    <div class="modal fade" id="editCategoria<?php echo $categoria->cateid; ?>" tabindex="-1" role="dialog" aria-labelledby="editCategoriaLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Alterar categoria: <?php echo $categoria->catedescricao; ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="forms-sample" id="editCategoria" name="editCategoria" action="<?php echo base_url($this->router->fetch_class() . '/edit/'); ?>" method="POST">
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label for="catecodigo">Código: <span class='text-danger'>*</span></label>
                                                                        <input type="text" class="form-control" id="catecodigo" name="catecodigo" placeholder="Ex: TI-001" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="catedescricao">Descrição: <span class='text-danger'>*</span></label>
                                                                        <input type="text" class="form-control" id="catedescricao" name="catedescricao" placeholder="Ex: Placas mãe" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" class="form-control" id="cateid" name="cateid" placeholder="Ex: Gustavo Almeida" value="<?php echo $categoria->cateid; ?>" required>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                                                <button type="submit" class="btn btn-success mr-2">Salvar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim do modal editCategoria -->

                                    <!-- Início do modal deleteCategoria -->
                                    <div class="modal fade" id="modalDeleteCategoria<?php echo $categoria->cateid; ?>" tabindex="-1" role="dialog" aria-labelledby="modalDeleteCategoriaLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Deseja excluir a categoria: <?php echo $categoria->catedescricao; ?> ?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="forms-sample" id="deleteCategoria" name="deleteCategoria" action="<?php echo base_url($this->router->fetch_class() . '/delete/'); ?>" method="POST">
                                                            <input type="hidden" class="form-control" id="cateid" name="cateid" value="<?php echo $categoria->cateid; ?>" required>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                                                            <button type="submit" class="btn btn-success">Sim</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim do modal deleteCategoria -->
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer.php'); ?>