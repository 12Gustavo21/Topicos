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
                <h5>Usuários</h5>
                <span>Usuários cadastrados no sistema</span>
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
                <li class="breadcrumb-item active" aria-current="page">Usuários</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
      <!-- Fim do page header                         -->
      <div class="card">
        <div class="card-header">
          <!-- Botão para acionar modal -->
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#inserirUsuario">
            + Novo Usuário
          </button>
        </div>
        <!-- Modal Inserir Usuário-->
        <div class="modal fade" id="inserirUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novo Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- Inicio do formulario -->
                <form class="forms-sample" id="inserirUsuario" name="inserirUsuario" action="<?php echo base_url($this->router->fetch_class() . '/insert/'); ?>" method="POST">

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="first_name">Primeiro nome</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="last_name">Sobrenome</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="username">Nome de Usuário</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
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
                <th>Email</th>
                <th class="nosort">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user) : ?>
                <tr>
                  <!-- Inicio do modal view usuario -->
                  <div class="modal fade" id="modalviewUsuario<?php echo $user->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Usuário: <?php echo $user->username; ?></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- Inicio do formulario -->
                          <form class="forms-sample" id="viewUsuario" name="viewUsuario">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="first_name">Primeiro nome</label>
                                  <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $user->first_name; ?>" readonly>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="last_name">Sobrenome</label>
                                  <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $user->last_name; ?>" readonly>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="username">Nome de Usuário</label>
                              <input type="text" class="form-control" id="username" name="username" value="<?php echo $user->username; ?>" readonly>
                            </div>
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" name="email" value="<?php echo $user->email; ?>" readonly>
                            </div>
                            <div class="form-group">
                              <label for="password">Senha</label>
                              <input type="password" class="form-control" id="password" name="password" value="<?php echo $user->password; ?>" readonly>
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
                  <!-- inicio do modal deletar cliente -->
                  <div class="modal fade" id="modaldeleteUsuario<?php echo $user->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Deseja excluir o Cliente: <?php echo $user->username; ?>?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- Inicio do formulario -->
                          <form class="forms-sample" id="deleteCliente" name="deleteCliente" action="<?php echo base_url($this->router->fetch_class() . '/delete/'); ?>" method="POST">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $user->id; ?>">

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
                  <td><?php echo $user->id; ?></td>
                  <td><?php echo $user->username; ?></td>
                  <td><?php echo $user->email; ?></td>
                  <td>
                    <div class="table-actions">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalviewUsuario<?php echo $user->id ?>">
                        <i class="ik ik-eye"></i>
                      </button>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modaldeleteUsuario<?php echo $user->id ?>">
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