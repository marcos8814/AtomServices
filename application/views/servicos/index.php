

   <?php $this->load->view('layout/sidebar'); ?>

    

      <!-- Main Content -->
      <div id="content">

       <?php $this->load->view('layout/navibar')  ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php  echo $titulo; ?></li>
           </ol>
        </nav>
              <!-- o codigo abaixo mostra a menssagem de sucesso!  -->
         <?php if($message = $this->session->flashdata('sucesso')): ?>

          <div class="row">
           
             <div class="col-md-12">

              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="far fa-smile-wink"></i>&nbsp;&nbsp;<?php echo $message;  ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
               

             </div> 

          </div>

        <?php endif; ?>
              <!-- o codigo abaixo mostra a menssagem de erro! -->
        <?php if($message = $this->session->flashdata('error')): ?>

          <div class="row">
           
             <div class="col-md-12">

              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;<?php echo $message;  ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
               

             </div> 

          </div>

        <?php endif; ?>
           
                     <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">           <!-- o codigo em php abaixo carrega ação do btn -->
              <a title="Cadastrar novo servico"href="<?php echo base_url('servicos/add'); ?>" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i></i>&nbsp;Novo</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered dataTable"  width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Serviço</th>
                      <th>Preço</th>
                      <th>Descrição do serviço</th>
                      <th class="text-center">Ativo</th>
                      <th class="text-right no-sort pr-2">Ações</th>
                    </tr>
                  </thead>
                 
                <tbody>
                    <?php foreach ($servicos as $servico): ?>
                    <tr>
                      <td> <?php echo $servico->servico_id ?></td>
                      <td> <?php echo $servico->servico_nome ?></td>
                      <td> <?php echo 'R$&nbsp;'.$servico->servico_preco?></td>
                      <td> <?php echo word_limiter( $servico->servico_descricao, 10); ?></td>
                      <td class="text-center pr-4"> <?php echo ($servico->servico_ativo == 1 ? '<span class="badge badge-info btn-sm">Sim</span>' : '<span class="badge badge-danger btn-sm">Não</span>') ?>
                      </td> <!-- o codigo acima colocar um campo sim para ativo em cor azul e não para não ativo em cor vermelho, e colocar o campo ATIVO centralizado com o campo abaixo-->
                      <td class="text-right">
                        
                        <a title="Editar" href="<?php echo base_url('servicos/edit/'.$servico->servico_id); ?>" class="btn btn-sm btn-primary"><i class=" fas fa-edit"></i></a>
                        <a title="Excluir" href="javascript(void)" data-toggle="modal" data-target="#servico-<?php echo $servico->servico_id; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                      </td>

                    </tr>
                    <!-- Codigo que chama o Modal(Tela pergunta se o usuário tem certeza que deseja excluir)-->
                      <div class="modal fade" id="servico-<?php echo $servico->servico_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja excluir este servico?</h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">Para excluir este servico clique em <strong>"Sim"</strong></div>
                            <div class="modal-footer">
                              <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Não</button>
                              <a class="btn btn-danger btn-sm" href="<?php echo base_url('servicos/del/'.$servico->servico_id);?>">Sim</a>
                            </div>
                          </div>
                        </div>
                      </div>


                    <?php endforeach; ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     