<?php $this->load->view('layout/header.php')?>
            <div class="page-wrap">
                <?php $this->load->view('layout/sidebar.php')?>
                <div class="main-content">
                    <div class="container-fluid">
                    <div class="page-header">
                     <?php if ($this->session->flashdata('sucesso')):?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><?php echo $this->session->flashdata('sucesso');?></strong> 
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
                                            <h5>Categorias</h5>
                                            <span>Categorias cadastradas no sistema</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="<?php echo base_url()?>"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Cadastros</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Categorias</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Fim do page header                         -->
                            <div class="card">
                                <div class="card-header">
                                    <!-- Botão para acionar modal -->
                                    <button type="button" class="btn btn-success" data-toggle="modal" 
                                    data-target="#modalInserirCategoria">
                                    + Nova Categoria
                                    </button>
                                </div>
                                <!-- Modal Inserir Categoria-->
                                <div class="modal fade" id="modalInserirCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Nova Categoria</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Inicio do formulario -->
                                            <form class="forms-sample" id="inserirCategoria" name="inserirCategoria" 
                                                                                
                                                action="<?php echo base_url($this->router->fetch_class() . '/insert/'); ?>" 
                                                method="POST">
                                                <div class="form-group">
                                                    <label for="codigo">Código</label>
                                                    <input type="text" class="form-control" id="catecodigo" name="catecodigo" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="catedescricao">Descrição</label>
                                                    <input type="text" class="form-control" id="catedescricao" name="catedescricao" required>
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
                                            
                                            <?php foreach($categorias as $categoria):?>
                                                <tr> 
                                                    <!-- Inicio do modal view categoria -->                                                   
                                                    <div class="modal fade" id="modalviewCategoria<?php echo $categoria->cateid?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Categoria: <?php echo $categoria->catedescricao;?></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Inicio do formulario -->
                                                                <form class="forms-sample" id="viewcategoria" name="viewcategoria">
                                                                    <div class="form-group">
                                                                        <label for="codigo">Código</label>
                                                                        <input type="text" class="form-control" id="catecodigo" 
                                                                           name="catecodigo" value="<?php echo $categoria->catecodigo;?>" readonly>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="descricao">Descrição</label>
                                                                        <input type="text" class="form-control" id="catedescricao" 
                                                                        name="catedescricao" value="<?php echo $categoria->catedescricao;?>" readonly>
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
                                                    <!-- Fim do modal view Categoria -->
                                                    
                                                    <!-- inicio do modal editar categoria -->
                                                    <div class="modal fade" id="modaleditCategoria<?php echo $categoria->cateid?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Alterar Categoria: 
                                                                    <?php echo $categoria->catedescricao;?></h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Inicio do formulario -->
                                                                <form class="forms-sample" id="editCategoria" name="editCategoria"
                                                                action="<?php echo base_url($this->router->fetch_class() . '/edit/'); ?>" 
                                                                method="POST"
                                                                >
                                                                    <input type="hidden" class="form-control" id="cateid" 
                                                                           name="cateid" value="<?php echo $categoria->cateid;?>" >                                                                           
                                                                    
                                                                    <div class="form-group">
                                                                        <label for="codigo">Código</label>
                                                                        <input type="text" class="form-control" id="catecodigo" 
                                                                           name="catecodigo" value="<?php echo $categoria->catecodigo;?>" required>
                                                                    </div>                                                                    
                                                                    <div class="form-group">
                                                                        <label for="descricao">Descrição</label>
                                                                        <input type="text" class="form-control" id="catedescricao" 
                                                                           name="catedescricao" value="<?php echo $categoria->catedescricao;?>" required>
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
                                                    <!-- Final do modal editar categoria -->
                                                    <!-- inicio do modal deletar categoria -->                                                    
                                                    <div class="modal fade" id="modaldeleteCategoria<?php echo $categoria->cateid?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Deseja excluir a Categoria: 
                                                                    <?php echo $categoria->catedescricao;?>?</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Inicio do formulario -->
                                                                <form class="forms-sample" id="deleteCategoria" name="deleteCategoria"
                                                                action="<?php echo base_url($this->router->fetch_class() . '/delete/'); ?>" 
                                                                method="POST"
                                                                >
                                                                    <input type="hidden" class="form-control" id="cateid" 
                                                                           name="cateid" value="<?php echo $categoria->cateid;?>" >                                                                           
                                                                                                                                        
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
                                                    <!-- final do modal deletar categoria -->
                                                    <td><?php echo $categoria->cateid;?></td>                                                    
                                                    <td><?php echo $categoria->catecodigo;?></td>                                                    
                                                    <td><?php echo $categoria->catedescricao;?></td>                                                    
                                                    <td>
                                                        <div class="table-actions">
                                                            <button type="button" class="btn btn-primary" 
                                                                data-toggle="modal" data-target="#modalviewCategoria<?php echo $categoria->cateid?>">
                                                                <i class="ik ik-eye"></i>                                                            
                                                            </button>
                                                            <button type="button" class="btn btn-warning" 
                                                                data-toggle="modal" data-target="#modaleditCategoria<?php echo $categoria->cateid?>">
                                                                <i class="ik ik-edit-2"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger" 
                                                                data-toggle="modal" data-target="#modaldeleteCategoria<?php echo $categoria->cateid?>">
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

                <?php $this->load->view('layout/footer.php')?> 
