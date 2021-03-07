

<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

 <?php $this->load->view('layout/navibar');  ?>

 <!-- Begin Page Content -->
 <div class="container-fluid">



  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php  echo $titulo; ?></li>
    </ol>
  </nav>
  <!-- o codigo abaixo mvendatra a menssagem de sucesso!  -->
  <?php if($message = $this->session->flashdata('sucesso')): ?>

    <div class="row">

     <div class="col-md-12">

      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><i class="far fa-smile-wink"></i>&nbsp;&nbsp;<?php echo $message;  ?></strong>
        <button type="button" class="clvendae" data-dismiss="alert" aria-label="Clvendae">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


    </div> 

  </div>

 <?php endif; ?>
 <!-- o codigo abaixo mvendatra a menssagem de erro! -->
 <?php if($message = $this->session->flashdata('error')): ?>

  <div class="row">

   <div class="col-md-12">

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong><i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;<?php echo $message;  ?></strong>
      <button type="button" class="clvendae" data-dismiss="alert" aria-label="Clvendae">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>


  </div> 

 </div>

 <?php endif; ?>

 <!-- DataTales Example -->
 <div class="card shadow mb-4">
  <div class="card-header py-3">           <!-- o codigo em php abaixo carrega ação do btn -->
    <a title="Cadastrar nova venda"href="<?php echo base_url('vendas/add'); ?>" class="btn btn-success btn-sm float-right"><i class="fas fa-shopping-cart"></i></i>&nbsp;Nova</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered dataTable"  width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Data emissão</th>
            <th>Cliente</th>
            <th>Forma de pagamento</th>
            <th>Valor total</th>
            <th class="text-right no-sort pr-2">Ações</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($vendas as $venda): ?>
            <tr>
              <td> <?php echo $venda->venda_id ?></td>
              <td> <?php echo formata_data_banco_com_hora( $venda->venda_data_emissao) ?></td>
              <td> <?php echo $venda->cliente_nome_completo?></td>
              <td> <?php echo $venda->forma_pagamento?></td>
              <td> <?php echo 'R$&nbsp;'.$venda->venda_valor_total?></td>
              <!-- o codigo acima colocar um campo sim para ativo em cor azul e não para não ativo em cor vermelho, e colocar o campo ATIVO centralizado com o campo abaixo-->
              <td class="text-right">
                <a title="Imprimir" href="<?php echo base_url('vendas/pdf/'.$venda->venda_id); ?>" class="btn btn-sm btn-dark"><i class="fas fa-print"></i></a>
                <a title="Visualisar" href="<?php echo base_url('vendas/edit/'.$venda->venda_id); ?>" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                <a title="Excluir" href="javascript(void)" data-toggle="modal" data-target="#venda-<?php echo $venda->venda_id; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
              </td>

            </tr>
            <!-- Codigo que chama o Modal(Tela pergunta se o usuário tem certeza que deseja excluir)-->
            <div class="modal fade" id="venda-<?php echo $venda->venda_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja excluir esta venda?</h5>
                    <button class="clvendae" type="button" data-dismiss="modal" aria-label="Clvendae">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">Para excluir esta venda clique em <strong>"Sim"</strong></div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Não</button>
                    <a class="btn btn-danger btn-sm" href="<?php echo base_url('vendas/del/'.$venda->venda_id);?>">Sim</a>
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

