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
                            <i class="ik ik-map-pin bg-dark"></i>
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
                                    <a href="#">Cadastro</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Localizações</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Fim do cabeçalho -->
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#inserirLocalizacoes">
                        + Nova localização
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="inserirLocalizacoes" tabindex="-1" role="dialog" aria-labelledby="inserirLocalizacoesLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nova localização</h5>
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
                                                <label for="locacodigo">Código: <span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" id="locacodigo" name="locacodigo" placeholder="Ex: AN-001" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="locadescricao">Descrição: <span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" id="locadescricao" name="locadescricao" placeholder="Ex: Rua Antonio Maia" required>
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
                            <?php if (empty($localizacoes)) : ?>
                                <tr>
                                    <td colspan="4">
                                        <div class="alert alert-danger" role="alert">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: currentColor; --darkreader-inline-stroke: currentColor;">
                                                <path d="M11.953 2C6.465 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.493 2 11.953 2zM13 17h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                                            </svg>
                                            Nenhuma localização cadastrada!
                                        </div>
                                    </td>
                                </tr>
                            <?php else : ?>
                                <?php foreach ($localizacoes as $localizacao) : ?>
                                    <tr>
                                        <td><?php echo $localizacao->locaid; ?></td>
                                        <td><?php echo $localizacao->locacodigo; ?></td>
                                        <td><?php echo $localizacao->locadescricao; ?></td>
                                        <td>
                                            <div class="table-actions">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalviewlocalizacao<?php echo $localizacao->locaid; ?>">
                                                    <i class="ik ik-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editlocalizacao<?php echo $localizacao->locaid; ?>">
                                                    <i class="ik ik-edit-2"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDeletelocalizacao<?php echo $localizacao->locaid; ?>">
                                                    <i class="ik ik-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Início do modal viewlocalizacao -->
                                    <div class="modal fade" id="modalviewlocalizacao<?php echo $localizacao->locaid; ?>" tabindex="-1" role="dialog" aria-labelledby="modalviewlocalizacaoLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">localizacao: <?php echo $localizacao->locadescricao; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="forms-sample" id="viewlocalizacao" name="viewlocalizacao">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="form-group">
                                                                    <label for="locacodigo">Código:</label>
                                                                    <input type="text" class="form-control" id="locacodigo" name="locacodigo" value="<?php echo $localizacao->locacodigo; ?>" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="form-group">
                                                                    <label for="locadescricao">Descrição:</label>
                                                                    <input type="text" class="form-control" id="locadescricao" name="locadescricao" value="<?php echo $localizacao->locadescricao; ?>" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim do modal viewlocalizacao -->

                                    <!-- Início do modal editlocalizacao -->
                                    <div class="modal fade" id="editlocalizacao<?php echo $localizacao->locaid; ?>" tabindex="-1" role="dialog" aria-labelledby="editlocalizacaoLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Alterar localizacao: <?php echo $localizacao->locadescricao; ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="forms-sample" id="editlocalizacao" name="editlocalizacao" action="<?php echo base_url($this->router->fetch_class() . '/edit/'); ?>" method="POST">
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label for="locacodigo">Código: <span class='text-danger'>*</span></label>
                                                                        <input type="text" class="form-control" id="locacodigo" name="locacodigo" placeholder="Ex: AN-001" value="<?php echo $localizacao->locacodigo; ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="locadescricao">Descrição: <span class='text-danger'>*</span></label>
                                                                        <input type="text" class="form-control" id="locadescricao" name="locadescricao" placeholder="Ex: Rua Antonio Maia" value="<?php echo $localizacao->locadescricao; ?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" class="form-control" id="locaid" name="locaid" value="<?php echo $localizacao->locaid; ?>" required>
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
                                    <!-- Fim do modal editlocalizacao -->

                                    <!-- Início do modal deletelocalizacao -->
                                    <div class="modal fade" id="modalDeletelocalizacao<?php echo $localizacao->locaid; ?>" tabindex="-1" role="dialog" aria-labelledby="modalDeletelocalizacaoLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Deseja excluir a localizacao: <?php echo $localizacao->locadescricao; ?> ?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="forms-sample" id="deletelocalizacao" name="deletelocalizacao" action="<?php echo base_url($this->router->fetch_class() . '/delete/'); ?>" method="POST">
                                                            <input type="hidden" class="form-control" id="locaid" name="locaid" value="<?php echo $localizacao->locaid; ?>" required>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                                                            <button type="submit" class="btn btn-success">Sim</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim do modal deletelocalizacao -->
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