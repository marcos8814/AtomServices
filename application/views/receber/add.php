
<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

 <?php $this->load->view('layout/navibar')  ?>

 <!-- Begin Page Content -->
 <div class="container-fluid">


  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('receber'); ?>">Contas a receber</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php  echo $titulo; ?></li>
    </ol>
  </nav>

  <!--  -->
  <div class="card shadow mb-4">

    <div class="card-body">
     <!--back end  -->
     <form class="user" method="POST" name="form_add"> <!--metodo post reponsavel por proteger campo da url -->
      

      <!--O codigo abaixo moldura dos dados pessoais   -->
      <fieldset class="mt-4 border p-2">          
       <!--O codigo abaixo se refere os iconis dos dados pessoais -->
       <legend class="font-small"><i class="fas fa-money-bill-alt"></i>&nbsp;Dados da conta</legend>

        <div class="form-group row"> 
        
      <div class="col-md-5 mb-2 "> 
       <label>Clientes</label>
       <select class="custom-select contas_receber"  name="conta_receber_cliente_id">
        <?php foreach ($clientes as $cliente):?>
          <option  value="<?php echo $cliente->cliente_id ?>"><?php echo $cliente->cliente_nome; ?></option>
        <?php endforeach; ?>
      </select>
      <?php echo form_error('conta_receber_cliente_id','<small class="form-text text-danger">','</small>'); ?>
    </div>

     <div class="col-md-3"> 
     <label>Data de vencimento</label>
     <input type="date" class="form-control form-control-user-date" name="conta_receber_data_vencimento"  value="<?php echo set_value('conta_receber_data_vencimento'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('conta_receber_data_vencimento','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->

   </div>

    <div class="col-md-2"> 
     <label>Valor da conta</label>
     <input type="text" class="form-control form-control-user-date money2" name="conta_receber_valor"  value="<?php echo set_value('conta_receber_valor'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('conta_receber_valor','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->

   </div>

    

   <div class="col-md-2"> 
     <label>Status da conta</label>

     <select class="custom-select" name="conta_receber_status">
       <option value="1">Paga</option>
       <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
       <option value="0">Pendente</option>
       <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
     </select>   

   </div>
    <div class="col-md-12"> 
       <label>Observação</label>
       <textarea class="form-control " name="conta_receber_obs"><?php echo set_value('conta_receber_obs'); ?></textarea> <!--email é o nome do campo da tabela que esta no banco de dados  -->
       <?php echo form_error('conta_receber_obs','<small class="form-text text-danger">','</small>'); ?>
       <!-- O codigo verifica se o campo obirgatorio esta preechido-->
     </div>

       
      
      
  </fieldset>
 

  <button type="submit" class="btn btn-primary btn-sm" >Salvar</button>

 <a title="Voltar"href="<?php echo base_url($this->router->fetch_class());?>" class="btn btn-success btn-sm ml-2">Voltar</a> <!-- neste campo vc altera o incon de voltar -->
</form>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

