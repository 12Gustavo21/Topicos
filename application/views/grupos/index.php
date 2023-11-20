<?php $this->load->view('layout/header.php') ?>

<style>
    ::-webkit-scrollbar {
        display: none;
    }
</style>

<div class="page-wrap">
    <?php $this->load->view('layout/sidebar.php') ?>
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
                            <i class="ik ik-user-check bg-dark"></i>
                            <div class="d-inline">
                                <h5>Grupos</h5>
                                <span>Grupos cadastrados no sistema</span>
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
                                <li class="breadcrumb-item active" aria-current="page">Clientes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Fim do cabeçalho -->
            <div class="card">
                <div class="card-header">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#inserirCliente">
                        + Novo Grupo
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="inserirCliente" tabindex="-1" role="dialog" aria-labelledby="inserirClienteLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Novo cliente</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Início do formulário -->
                                <form id='form' action="<?php echo base_url($this->router->fetch_class() . '/insert/'); ?>" method="POST">
                                    <div class="form-group">
                                        <label for="clieNome">Nome: <span class='text-danger'>*</span></label>
                                        <input type="text" class="form-control" id="clieNome" name="clieNome" placeholder="Ex: Gustavo Almeida" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="clieCpf">CPF: <span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" id="clieCpf" name="clieCpf" placeholder="Ex: 111.222.333-44" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="clieDataNascimento">Data de nascimento: <span class='text-danger'>*</span></label>
                                                <input type="date" class="form-control" id="clieDataNascimento" name="clieDataNascimento" placeholder="Ex: 25/02/2022" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="clieEndereco">Endereço: <span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" id="clieEndereco" name="clieEndereco" placeholder="Ex: Rua Francisco Chagas" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="clieNumero">Número: <span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" id="clieNumero" name="clieNumero" placeholder="Ex: 32" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="clieBairro">Bairro: <span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" id="clieBairro" name="clieBairro" placeholder="Ex: Bairro São Paulo" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="clieCep">CEP: <span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" id="clieCep" name="clieCep" placeholder="Ex: 12345-678" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label for="clieCidade">Cidade: <span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" id="clieCidade" name="clieCidade" placeholder="Ex: João Pessoa" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="clieEstado">Estado: <span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" id="clieEstado" name="clieEstado" placeholder="Ex: PB" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="clieReferencia">Referência: <span class='text-danger'>*</span></label>
                                        <input type="text" class="form-control" id="clieReferencia" name="clieReferencia" placeholder="Ex: Atrás da prefeitura municipal" required>
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
                                <th>Nome</th>
                                <th>CPF</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clientes as $cliente) : ?>
                                <tr>
                                    <!-- Início do modal viewCliente -->
                                    <div class="modal fade" id="modalviewCliente<?php echo $cliente->clieId; ?>" tabindex="-1" role="dialog" aria-labelledby="modalviewClienteLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Cliente: <?php echo $cliente->clieNome; ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="forms-sample" id="viewCliente" name="viewCliente">
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label for="clieCpf">CPF:</label>
                                                                        <input type="text" class="form-control" id="clieCpf" name="clieCpf" value="<?php echo $cliente->clieCpf; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="clieDataNascimento">Data de nascimento:</label>
                                                                        <input type="date" class="form-control" id="clieDataNascimento" name="clieDataNascimento" value="<?php echo $cliente->clieDataNascimento; ?>" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label for="clieEndereco">Endereço:</label>
                                                                        <input type="text" class="form-control" id="clieEndereco" name="clieEndereco" value="<?php echo $cliente->clieEndereco ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="clieNumero">Número:</label>
                                                                        <input type="text" class="form-control" id="clieNumero" name="clieNumero" value="<?php echo $cliente->clieNumero ?>" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label for="clieBairro">Bairro:</label>
                                                                        <input type="text" class="form-control" id="clieBairro" name="clieBairro" value="<?php echo $cliente->clieBairro ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="clieCep">CEP:</label>
                                                                        <input type="text" class="form-control" id="clieCep" name="clieCep" value="<?php echo $cliente->clieCep ?>" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label for="clieCidade">Cidade:</label>
                                                                        <input type="text" class="form-control" id="clieCidade" name="clieCidade" value="<?php echo $cliente->clieCidade ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="clieEstado">Estado:</label>
                                                                        <input type="text" class="form-control" id="clieEstado" name="clieEstado" value="<?php echo $cliente->clieEstado ?>" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="clieReferencia">Referência:</label>
                                                                <input type="text" class="form-control" id="clieReferencia" name="clieReferencia" value="<?php echo $cliente->clieReferencia ?>" readonly>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim do modal viewCliente -->
                                    <!-- Início do modal editCliente -->
                                    <div class="modal fade" id="editCliente<?php echo $cliente->clieId; ?>" tabindex="-1" role="dialog" aria-labelledby="editClienteLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Alterar cliente: <?php echo $cliente->clieNome; ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="forms-sample" id="editCliente" name="editCliente" action="<?php echo base_url($this->router->fetch_class() . '/edit/'); ?>" method="POST">
                                                            <div class="form-group">
                                                                <label for="clieNome">Nome: <span class='text-danger'>*</span></label>
                                                                <input type="text" class="form-control" id="clieNome" name="clieNome" placeholder="Ex: Gustavo Almeida" value="<?php echo $cliente->clieNome; ?>" required>
                                                            </div>
                                                            <!-- Identificador do cliente -->
                                                            <input type="hidden" class="form-control" id="clieId" name="clieId" placeholder="Ex: Gustavo Almeida" value="<?php echo $cliente->clieId; ?>" required>
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label for="clieCpf">CPF: <span class='text-danger'>*</span></label>
                                                                        <input type="text" class="form-control" id="clieCpf" name="clieCpf" placeholder="Ex: 111.222.333-44" value="<?php echo $cliente->clieCpf; ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="clieDataNascimento">Data de nascimento: <span class='text-danger'>*</span></label>
                                                                        <input type="date" class="form-control" id="clieDataNascimento" name="clieDataNascimento" placeholder="Ex: 25/02/2022" value="<?php echo $cliente->clieDataNascimento ?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label for="clieEndereco">Endereço: <span class='text-danger'>*</span></label>
                                                                        <input type="text" class="form-control" id="clieEndereco" name="clieEndereco" placeholder="Ex: Rua Francisco Chagas" value="<?php echo $cliente->clieEndereco ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="clieNumero">Número: <span class='text-danger'>*</span></label>
                                                                        <input type="text" class="form-control" id="clieNumero" name="clieNumero" placeholder="Ex: 32" value="<?php echo $cliente->clieNumero ?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label for="clieBairro">Bairro: <span class='text-danger'>*</span></label>
                                                                        <input type="text" class="form-control" id="clieBairro" name="clieBairro" placeholder="Ex: Bairro São Paulo" value="<?php echo $cliente->clieBairro ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="clieCep">CEP: <span class='text-danger'>*</span></label>
                                                                        <input type="text" class="form-control" id="clieCep" name="clieCep" placeholder="Ex: 12345-678" value="<?php echo $cliente->clieCep ?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label for="clieCidade">Cidade: <span class='text-danger'>*</span></label>
                                                                        <input type="text" class="form-control" id="clieCidade" name="clieCidade" placeholder="Ex: João Pessoa" value="<?php echo $cliente->clieCidade ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label for="clieEstado">Estado: <span class='text-danger'>*</span></label>
                                                                        <input type="text" class="form-control" id="clieEstado" name="clieEstado" placeholder="Ex: PB" value="<?php echo $cliente->clieEstado ?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="clieReferencia">Referência: <span class='text-danger'>*</span></label>
                                                                <input type="text" class="form-control" id="clieReferencia" name="clieReferencia" placeholder="Ex: Atrás da prefeitura municipal" value="<?php echo $cliente->clieReferencia ?>" required>
                                                            </div>
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
                                    <!-- Fim do modal editCliente -->
                                    <!-- Início do modal deleteCliente -->
                                    <div class="modal fade" id="modalDeleteCliente<?php echo $cliente->clieId; ?>" tabindex="-1" role="dialog" aria-labelledby="modalDeleteClienteLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Deseja excluir o cliente: <?php echo $cliente->clieNome; ?> ?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="forms-sample" id="deleteCliente" name="deleteCliente" action="<?php echo base_url($this->router->fetch_class() . '/delete/'); ?>" method="POST">
                                                            <input type="hidden" class="form-control" id="clieId" name="clieId" value="<?php echo $cliente->clieId; ?>" required>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                                                            <button type="submit" class="btn btn-success">Sim</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fim do modal deleteCliente -->
                                    <td><?php echo $cliente->clieId; ?></td>
                                    <td><?php echo $cliente->clieNome; ?></td>
                                    <td><?php echo $cliente->clieCpf; ?></td>

                                    <td>
                                        <div class="table-actions">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalviewCliente<?php echo $cliente->clieId; ?>">
                                                <i class="ik ik-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editCliente<?php echo $cliente->clieId; ?>">
                                                <i class="ik ik-edit-2"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDeleteCliente<?php echo $cliente->clieId; ?>">
                                                <i class="ik ik-trash-2"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php if (!$clientes) : ?>
                                <tr>
                                    <td colspan="5">
                                        <div class="alert alert-danger" role="alert">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: currentColor; --darkreader-inline-stroke: currentColor;">
                                                <path d="M11.953 2C6.465 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.493 2 11.953 2zM13 17h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                                            </svg>
                                            Nenhum cliente cadastrado!
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('layout/footer.php') ?>