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
                            <i class="ik ik-users bg-dark"></i>
                            <div class="d-inline">
                                <h5>Clientes</h5>
                                <span>Clientes cadastrados no sistema</span>
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
                                <li class="breadcrumb-item active" aria-current="page">Clientes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Fim do page header                         -->
            <div class="card">
                <div class="card-header">
                    <!-- Botão para acionar modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#inserirCliente">
                        + Novo Cliente
                    </button>
                </div>
                <!-- Modal Inserir Cliente-->
                <div class="modal fade" id="inserirCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Novo Cliente</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Inicio do formulario -->
                                <form class="forms-sample" id="inserirCliente" name="inserirCliente" action="<?php echo base_url($this->router->fetch_class() . '/insert/'); ?>" method="POST">
                                    <div class="form-group">
                                        <label for="cpf">CPF</label>
                                        <input type="text" class="form-control" id="clieCPF" name="clieCPF" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input type="text" class="form-control" id="clieNome" name="clieNome" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Data_de_nascimento">Data de nascimento</label>
                                        <input type="date" class="form-control" id="clieDatadenascimento" name="clieDatadenascimento" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="endereco">Endereço</label>
                                                <input type="text" class="form-control" id="clieEndereco" name="clieEndereco" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="numero">Número</label>
                                                <input type="text" class="form-control" id="clieNumero" name="clieNumero" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="bairro">Bairro</label>
                                                <input type="text" class="form-control" id="clieBairro" name="clieBairro" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cep">CEP</label>
                                                <input type="text" class="form-control" id="clieCEP" name="clieCEP" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="cidade">Cidade</label>
                                                <input type="text" class="form-control" id="clieCidade" name="clieCidade" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="estado">Estado</label>
                                                <input type="text" class="form-control" id="clieEstado" name="clieEstado" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="referencia">Referência</label>
                                        <input type="text" class="form-control" id="clieReferencia" name="clieReferencia" required>
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
                                <th>Nome</th>
                                <th>CPF</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- 
                                            [clieId] => 1
                                            [clieCPF] => 00011122244
                                            [clieNome] => Alex
                                            [clieDatadenascimento] => 1981-01-13
                                            [clieEndereco] => Teste
                                            [clieNumero] => 1234
                                            [clieBairro] => Centro
                                            [clieCep] => 58884000
                                            [clieCidade] => Mossoro
                                            [clieEstado] => PB
                                            [clieReferencia] => Teste -->
                            <?php foreach ($clientes as $cliente) : ?>
                                <tr>
                                    <!-- Inicio do modal view cliente -->
                                    <div class="modal fade" id="modalviewCliente<?php echo $cliente->clieId ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Cliente: <?php echo $cliente->clieNome; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Inicio do formulario -->
                                                    <form class="forms-sample" id="viewCliente" name="viewCliente">
                                                        <div class="form-group">
                                                            <label for="cpf">CPF</label>
                                                            <input type="text" class="form-control" id="clieCPF" name="clieCPF" value="<?php echo $cliente->clieCPF; ?>" readonly>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="Data_de_nascimento">Data de nascimento</label>
                                                            <input type="date" class="form-control" id="clieDatadenascimento" name="clieDatadenascimento" value="<?php echo $cliente->clieDatadenascimento; ?>" readonly>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label for="endereco">Endereço</label>
                                                                    <input type="text" class="form-control" id="clieEndereco" name="clieEndereco" value="<?php echo $cliente->clieEndereco; ?>" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="numero">Número</label>
                                                                    <input type="text" class="form-control" id="clieNumero" name="clieNumero" value="<?php echo $cliente->clieNumero; ?>" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label for="bairro">Bairro</label>
                                                                    <input type="text" class="form-control" id="clieBairro" name="clieBairro" value="<?php echo $cliente->clieBairro; ?>" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="cep">CEP</label>
                                                                    <input type="text" class="form-control" id="clieCEP" name="clieCEP" value="<?php echo $cliente->clieCep; ?>" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <div class="form-group">
                                                                    <label for="cidade">Cidade</label>
                                                                    <input type="text" class="form-control" id="clieCidade" name="clieCidade" value="<?php echo $cliente->clieCidade; ?>" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label for="estado">Estado</label>
                                                                    <input type="text" class="form-control" id="clieEstado" name="clieEstado" value="<?php echo $cliente->clieEstado; ?>" readonly>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="referencia">Referência</label>
                                                            <input type="text" class="form-control" id="clieReferencia" name="clieReferencia" value="<?php echo $cliente->clieReferencia; ?>" readonly>
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
                                    <!-- Fim do modal view cliente -->

                                    <!-- inicio do modal editar cliente -->
                                    <div class="modal fade" id="modaleditCliente<?php echo $cliente->clieId ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Alterar Cliente: <?php echo $cliente->clieNome; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Inicio do formulario -->
                                                    <form class="forms-sample" id="editCliente" name="editCliente" action="<?php echo base_url($this->router->fetch_class() . '/edit/'); ?>" method="POST">
                                                        <input type="hidden" class="form-control" id="clieId" name="clieId" value="<?php echo $cliente->clieId; ?>">

                                                        <div class="form-group">
                                                            <label for="cpf">CPF</label>
                                                            <input type="text" class="form-control" id="clieCPF" name="clieCPF" value="<?php echo $cliente->clieCPF; ?>" required>
                                                        </div>
                                                        <input type="hidden" class="form-control" id="clieId" name="clieId" value="<?php echo $cliente->clieId; ?>">

                                                        <div class="form-group">
                                                            <label for="nome">Nome</label>
                                                            <input type="text" class="form-control" id="clieNome" name="clieNome" value="<?php echo $cliente->clieNome; ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Data_de_nascimento">Data de nascimento</label>
                                                            <input type="date" class="form-control" id="clieDatadenascimento" name="clieDatadenascimento" value="<?php echo $cliente->clieDatadenascimento; ?>" requerid>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label for="endereco">Endereço</label>
                                                                    <input type="text" class="form-control" id="clieEndereco" name="clieEndereco" value="<?php echo $cliente->clieEndereco; ?>" requerid>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="numero">Número</label>
                                                                    <input type="text" class="form-control" id="clieNumero" name="clieNumero" value="<?php echo $cliente->clieNumero; ?>" requerid>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label for="bairro">Bairro</label>
                                                                    <input type="text" class="form-control" id="clieBairro" name="clieBairro" value="<?php echo $cliente->clieBairro; ?>" requerid>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="cep">CEP</label>
                                                                    <input type="text" class="form-control" id="clieCEP" name="clieCEP" value="<?php echo $cliente->clieCep; ?>" requerid>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <div class="form-group">
                                                                    <label for="cidade">Cidade</label>
                                                                    <input type="text" class="form-control" id="clieCidade" name="clieCidade" value="<?php echo $cliente->clieCidade; ?>" requerid>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label for="estado">Estado</label>
                                                                    <input type="text" class="form-control" id="clieEstado" name="clieEstado" value="<?php echo $cliente->clieEstado; ?>" requerid>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="referencia">Referência</label>
                                                            <input type="text" class="form-control" id="clieReferencia" name="clieReferencia" value="<?php echo $cliente->clieReferencia; ?>" requerid>
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
                                    <!-- Final do modal editar cliente -->
                                    <!-- inicio do modal deletar cliente -->
                                    <div class="modal fade" id="modaldeleteCliente<?php echo $cliente->clieId ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Deseja excluir o Cliente: <?php echo $cliente->clieNome; ?>?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Inicio do formulario -->
                                                    <form class="forms-sample" id="deleteCliente" name="deleteCliente" action="<?php echo base_url($this->router->fetch_class() . '/delete/'); ?>" method="POST">
                                                        <input type="hidden" class="form-control" id="clieId" name="clieId" value="<?php echo $cliente->clieId; ?>">

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
                                    <!-- final do modal deletar cliente -->
                                    <td><?php echo $cliente->clieId; ?></td>
                                    <td><?php echo $cliente->clieNome; ?></td>
                                    <td><?php echo $cliente->clieCPF; ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalviewCliente<?php echo $cliente->clieId ?>">
                                                <i class="ik ik-eye"></i>
                                            </button>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modaleditCliente<?php echo $cliente->clieId ?>">
                                                <i class="ik ik-edit-2"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modaldeleteCliente<?php echo $cliente->clieId ?>">
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