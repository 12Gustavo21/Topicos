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
              <i class="ik ik-truck bg-dark"></i>
              <div class="d-inline">
                <h5>Transportadoras</h5>
                <span>Transportadoras cadastradas no sistema</span>
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
                <li class="breadcrumb-item active" aria-current="page">Transportadoras</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
      <!-- Fim do cabeçalho -->
      <div class="card">
        <div class="card-header">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#inserirtransportadora">
            + Nova transportadora
          </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="inserirtransportadora" tabindex="-1" role="dialog" aria-labelledby="inserirtransportadoraLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nova transportadora</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- Início do formulário -->
                <form id='form' action="<?php echo base_url($this->router->fetch_class() . '/insert/'); ?>" method="POST">
                  <div class="form-group">
                    <label for="trancnpj">CNPJ: <span class='text-danger'>*</span></label>
                    <input type="text" class="form-control" id="trancnpj" name="trancnpj" placeholder="Ex: 01.234.567/1110-08" required>
                  </div>
                  <div class="row">
                    <div class="col-md-7">
                      <div class="form-group">
                        <label for="tranrazaosocial">Razão Social: <span class='text-danger'>*</span></label>
                        <input type="text" class="form-control" id="tranrazaosocial" name="tranrazaosocial" placeholder="Ex: Exemplo Web Tech Ltda" required>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label for="tranendereco">Endereço: <span class='text-danger'>*</span></label>
                        <input type="text" class="form-control" id="tranendereco" name="tranendereco" placeholder="Ex: Rua das Amostras" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-7">
                      <div class="form-group">
                        <label for="trannumero">Número: <span class='text-danger'>*</span></label>
                        <input type="text" class="form-control" id="trannumero" name="trannumero" placeholder="Ex: 123" required>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label for="tranbairro">Bairro: <span class='text-danger'>*</span></label>
                        <input type="text" class="form-control" id="tranbairro" name="tranbairro" placeholder="Ex: Amostraville" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-7">
                      <div class="form-group">
                        <label for="trancidade">Cidade: <span class='text-danger'>*</span></label>
                        <input type="text" class="form-control" id="trancidade" name="trancidade" placeholder="Ex: Fictiolândia" required>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label for="tranestado">Estado: <span class='text-danger'>*</span></label>
                        <input type="text" class="form-control" id="tranestado" name="tranestado" placeholder="Ex: Estado Fictício" required>
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
                <th>CNPJ</th>
                <th>Número</th>
                <th class="nosort">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php if (empty($transportadora)) : ?>
                <tr>
                  <td colspan="4">
                    <div class="alert alert-danger" role="alert">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" data-darkreader-inline-fill="" data-darkreader-inline-stroke="" style="--darkreader-inline-fill: currentColor; --darkreader-inline-stroke: currentColor;">
                        <path d="M11.953 2C6.465 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.493 2 11.953 2zM13 17h-2v-2h2v2zm0-4h-2V7h2v6z"></path>
                      </svg>
                      Nenhuma transportadora cadastrada!
                    </div>
                  </td>
                </tr>
              <?php else : ?>
                <?php foreach ($transportadora as $transportadora) : ?>
                  <tr>
                    <td><?php echo $transportadora->tranid; ?></td>
                    <td><?php echo $transportadora->trancnpj; ?></td>
                    <td><?php echo $transportadora->trannumero; ?></td>
                    <td>
                      <div class="table-actions">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalviewtransportadora<?php echo $transportadora->tranid; ?>">
                          <i class="ik ik-eye"></i>
                        </button>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edittransportadora<?php echo $transportadora->tranid; ?>">
                          <i class="ik ik-edit-2"></i>
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modaldeletetransportadora<?php echo $transportadora->tranid; ?>">
                          <i class="ik ik-trash-2"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <!-- Início do modal viewtransportadora -->
                  <div class="modal fade" id="modalviewtransportadora<?php echo $transportadora->tranid; ?>" tabindex="-1" role="dialog" aria-labelledby="modalviewtransportadoraLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Transportadora: <?php echo $transportadora->trancnpj; ?></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form id='form' action="<?php echo base_url($this->router->fetch_class() . '/insert/'); ?>" method="POST">
                            <div class="form-group">
                              <label for="trancnpj">CNPJ:</label>
                              <input type="text" class="form-control" id="trancnpj" name="trancnpj" placeholder="Ex: 01.234.567/1110-08" value=<?php echo $transportadora->trancnpj; ?> readonly>
                            </div>
                            <div class="row">
                              <div class="col-md-7">
                                <div class="form-group">
                                  <label for="tranrazaosocial">Razão Social:</label>
                                  <input type="text" class="form-control" id="tranrazaosocial" name="tranrazaosocial" placeholder="Ex: Exemplo Web Tech Ltda" value=<?php echo $transportadora->tranrazaosocial; ?> readonly>
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div class="form-group">
                                  <label for="tranendereco">Endereço:</label>
                                  <input type="text" class="form-control" id="tranendereco" name="tranendereco" placeholder="Ex: Rua das Amostras" value=<?php echo $transportadora->tranendereco; ?> readonly>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-7">
                                <div class="form-group">
                                  <label for="trannumero">Número:</label>
                                  <input type="text" class="form-control" id="trannumero" name="trannumero" placeholder="Ex: 123" value=<?php echo $transportadora->trannumero; ?> readonly>
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div class="form-group">
                                  <label for="tranbairro">Bairro:</label>
                                  <input type="text" class="form-control" id="tranbairro" name="tranbairro" placeholder="Ex: Amostraville" value=<?php echo $transportadora->tranbairro; ?> readonly>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-7">
                                <div class="form-group">
                                  <label for="trancidade">Cidade:</label>
                                  <input type="text" class="form-control" id="trancidade" name="trancidade" placeholder="Ex: Fictiolândia" value=<?php echo $transportadora->trancidade; ?> readonly>
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div class="form-group">
                                  <label for="tranestado">Estado:</label>
                                  <input type="text" class="form-control" id="tranestado" name="tranestado" placeholder="Ex: Estado Fictício" value=<?php echo $transportadora->tranestado; ?> readonly>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Fim do modal viewtransportadora -->

                  <!-- Início do modal edittransportadora -->
                  <div class="modal fade" id="edittransportadora<?php echo $transportadora->tranid; ?>" tabindex="-1" role="dialog" aria-labelledby="edittransportadoraLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Alterar transportadora: <?php echo $transportadora->trancnpj; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form class="forms-sample" id="edittransportadora" name="edittransportadora" action="<?php echo base_url($this->router->fetch_class() . '/edit/'); ?>" method="POST">
                              <div class="form-group">
                                <label for="trancnpj">CNPJ: <span class='text-danger'>*</span></label>
                                <input type="text" class="form-control" id="trancnpj" name="trancnpj" placeholder="Ex: 01.234.567/1110-08" value=<?php echo $transportadora->trancnpj; ?> required>
                              </div>
                              <div class="row">
                                <div class="col-md-7">
                                  <div class="form-group">
                                    <label for="tranrazaosocial">Razão Social: <span class='text-danger'>*</span></label>
                                    <input type="text" class="form-control" id="tranrazaosocial" name="tranrazaosocial" placeholder="Ex: Exemplo Web Tech Ltda" value=<?php echo $transportadora->tranrazaosocial; ?> required>
                                  </div>
                                </div>
                                <div class="col-md-5">
                                  <div class="form-group">
                                    <label for="tranendereco">Endereço: <span class='text-danger'>*</span></label>
                                    <input type="text" class="form-control" id="tranendereco" name="tranendereco" placeholder="Ex: Rua das Amostras" value=<?php echo $transportadora->tranendereco; ?> required>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-7">
                                  <div class="form-group">
                                    <label for="trannumero">Número: <span class='text-danger'>*</span></label>
                                    <input type="text" class="form-control" id="trannumero" name="trannumero" placeholder="Ex: 123" value=<?php echo $transportadora->trannumero; ?> required>
                                  </div>
                                </div>
                                <div class="col-md-5">
                                  <div class="form-group">
                                    <label for="tranbairro">Bairro: <span class='text-danger'>*</span></label>
                                    <input type="text" class="form-control" id="tranbairro" name="tranbairro" placeholder="Ex: Amostraville" value=<?php echo $transportadora->tranbairro; ?> required>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-7">
                                  <div class="form-group">
                                    <label for="trancidade">Cidade: <span class='text-danger'>*</span></label>
                                    <input type="text" class="form-control" id="trancidade" name="trancidade" placeholder="Ex: Fictiolândia" value=<?php echo $transportadora->trancidade; ?> required>
                                  </div>
                                </div>
                                <div class="col-md-5">
                                  <div class="form-group">
                                    <label for="tranestado">Estado: <span class='text-danger'>*</span></label>
                                    <input type="text" class="form-control" id="tranestado" name="tranestado" placeholder="Ex: Estado Fictício" value=<?php echo $transportadora->tranestado; ?> required>
                                  </div>
                                </div>
                              </div>
                              <input type="hidden" class="form-control" id="tranid" name="tranid" value="<?php echo $transportadora->tranid; ?>" required>
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
                  <!-- Fim do modal edittransportadora -->

                  <!-- Início do modal deletetransportadora -->
                  <div class="modal fade" id="modaldeletetransportadora<?php echo $transportadora->tranid; ?>" tabindex="-1" role="dialog" aria-labelledby="modaldeletetransportadoraLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Deseja excluir a transportadora: <?php echo $transportadora->trancnpj; ?> ?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form class="forms-sample" id="deletetransportadora" name="deletetransportadora" action="<?php echo base_url($this->router->fetch_class() . '/delete/'); ?>" method="POST">
                              <input type="hidden" class="form-control" id="tranid" name="tranid" value="<?php echo $transportadora->tranid; ?>" required>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                              <button type="submit" class="btn btn-success">Sim</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

        </div>
        <!-- Fim do modal deletetransportadora -->
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