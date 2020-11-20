
<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

 <?php $this->load->view('layout/navibar')  ?>

 <!-- Begin Page Content -->
 <div class="container-fluid">


  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('fornecedores'); ?>">fornecedores</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php  echo $titulo; ?></li>
    </ol>
  </nav>

  <!--  -->
  <div class="card shadow mb-4">

    <div class="card-body">
     <!--back end  -->
     <form class="user" method="POST" name="form_add"> <!--metodo post reponsavel por proteger campo da url -->
      <?php if (isset($fornecedor)):?>
        <p><strong><i class="fas fa-user-clock"></i>&nbsp;&nbsp;Útima Alteração: </strong><?php echo formata_data_banco_com_hora( $fornecedor->fornecedor_data_alteracao);?></p>:
      <?php endif;  ?>
      <!--O codigo abaixo moldura dos dados pessoais   -->
      <fieldset class="mt-4 border p-2">          
       <!--O codigo abaixo se refere os iconis dos dados pessoais -->
       <legend class="font-small"><i class="fas fa-user-tag"></i>&nbsp;Dados do Fornecedor</legend>


       <div class="form-group row"> <!--altera o tamanho do campo nome  -->
         <div class="col-md-6"> 
           <label>Razão Social *</label>
           <input type="text" class="form-control form-control-user" name="fornecedor_razao" placeholder="Razão Social " value="<?php echo set_value('fornecedor_razao'); ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
           <?php echo form_error('fornecedor_razao','<small class="form-text text-danger">','</small>'); ?>
           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
         </div>

         <div class="col-md-6"> 
           <label>Nome Fantasia *</label>
           <input type="text" class="form-control form-control-user" name="fornecedor_nome_fantasia" placeholder="Nome Fantasia" value="<?php echo set_value('fornecedor_nome_fantasia'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
           <?php echo form_error('fornecedor_nome_fantasia','<small class="form-text text-danger">','</small>'); ?>
           <!-- O codigo verifica se o campo obirgatorio esta preechido-->

         </div>
       </div> 
       <div class="form-group row">

        <div class="col-md-4"> 
         <label>CNPJ </label>
         <input type="text" class="form-control form-control-user cnpj" name="fornecedor_cnpj" placeholder="Telefone fixo" value="<?php echo set_value('fornecedor_cnpj'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
         <?php echo form_error('fornecedor_cnpj','<small class="form-text text-danger">','</small>'); ?>
         <!-- O codigo verifica se o campo obirgatorio esta preechido-->

       </div>

       <div class="col-md-4"> 
         <label>Inscrição Estadual</label>
         <input type="text" class="form-control form-control-user " name="fornecedor_ie" placeholder="Inscrição Estadual" value="<?php echo set_value('fornecedor_ie'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
         <?php echo form_error('fornecedor_ie','<small class="form-text text-danger">','</small>'); ?>
         <!-- O codigo verifica se o campo obirgatorio esta preechido-->

       </div>


       <div class="col-md-4"> 
         <label>Telefone Fixo </label>
         <input type="text" class="form-control form-control-user sp_celphones" name="fornecedor_telefone" placeholder="Telefone fixo" value="<?php echo set_value('fornecedor_telefone'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
         <?php echo form_error('fornecedor_telefone','<small class="form-text text-danger">','</small>'); ?>
         <!-- O codigo verifica se o campo obirgatorio esta preechido-->

       </div>



     </div>     

     <div class="form-group row">
      <div class="col-md-4"> 
       <label>Telefone Movel </label>
       <input type="text" class="form-control form-control-user sp_celphones" name="fornecedor_celular" placeholder="Telefone Movel" value="<?php echo set_value('fornecedor_celular'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
       <?php echo form_error('fornecedor_celular','<small class="form-text text-danger">','</small>'); ?>
       <!-- O codigo verifica se o campo obirgatorio esta preechido-->

     </div>

     <div class="col-md-4"> 
       <label>E-mail*</label>
       <input type="email" class="form-control form-control-user " name="fornecedor_email" placeholder="Email do fornecedor" value="<?php echo set_value('fornecedor_email'); ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
       <?php echo form_error('fornecedor_email','<small class="form-text text-danger">','</small>'); ?>
       <!-- O codigo verifica se o campo obirgatorio esta preechido-->
     </div>

     <div class="col-md-4"> 
      <label>Nome do contato*</label>
      <input type="text" class="form-control form-control-user " name="fornecedor_contato" placeholder="Nome do vendedor" value="<?php echo set_value('fornecedor_contato'); ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
      <?php echo form_error('fornecedor_contato','<small class="form-text text-danger">','</small>'); ?>
      <!-- O codigo verifica se o campo obirgatorio esta preechido-->
    </div>

  </div>

</fieldset>

<fieldset class="mt-4 border p-2">          
 <!--O codigo abaixo se refere os iconis dos dados pessoais -->
 <legend class="font-small"><i class="fas fa-map-marker-alt"></i></i>&nbsp;Dados de Endereço</legend>

 <div class="form-group row"> <!--altera o tamanho do campo nome  -->


   <div class="col-md-5"> 
     <label>Endereço *</label>
     <input type="text" class="form-control form-control-user" name="fornecedor_endereco" placeholder="Endereço do fornecedor" value="<?php echo set_value('fornecedor_endereco'); ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('fornecedor_endereco','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->
   </div>

   <div class="col-md-2"> 
     <label>Número</label>
     <input type="text" class="form-control form-control-user " name="fornecedor_numero_endereco" placeholder="Numero" value="<?php echo set_value('fornecedor_numero_endereco'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('fornecedor_numero_endereco','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->

   </div>

   <div class="col-md-5"> 
     <label>Complemento</label>
     <input type="text" class="form-control form-control-user " name="fornecedor_complemento" placeholder="Complemento" value="<?php echo set_value('fornecedor_complemento'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('fornecedor_complemento','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->

   </div>

 </div> 

 <div class="form-group row"> <!--altera o tamanho do campo nome  -->
   <div class="col-md-5"> 
     <label>Bairro*</label>
     <input type="text" class="form-control form-control-user " name="fornecedor_bairro" placeholder="Bairro" value="<?php echo set_value('fornecedor_bairro'); ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('fornecedor_bairro','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->
   </div>
   <div class="col-md-2"> 
     <label>CEP</label>
     <input type="text" class="form-control form-control-user cep" name="fornecedor_cep" placeholder="CEP" value="<?php echo set_value('fornecedor_cep'); ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('fornecedor_cep','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->
   </div>  


   <div class="col-md-4"> 
     <label>Cidade*</label>
     <input type="text" class="form-control form-control-user" name="fornecedor_cidade" placeholder="Endereço do fornecedor" value="<?php echo set_value('fornecedor_cidade'); ?>"> <!--fornecedor_cidade é o nome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('fornecedor_cidade','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->
   </div>

   <div class="col-md-1"> 
     <label>UF</label>
     <input type="text" class="form-control form-control-user uf" name="fornecedor_estado" placeholder="UF" value="<?php echo set_value('fornecedor_estado'); ?>"> <!--fornecedor_estado é o sobrenome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('fornecedor_estado','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->

   </div>

 </fieldset> 

 <fieldset class="mt-4 border p-2">          
   <!--O codigo abaixo se refere os iconis dos dados pessoais -->
   <legend class="font-small"><i class="fas fa-user-cog"></i></i></i>&nbsp;Configurações</legend>
   <div class="form-group row">  

     <div class="col-md-2"> 
       <label>fornecedor ativo</label>

       <select class="custom-select" name="fornecedor_ativo">
         <option value="0">Não</option>
         <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
         <option value="1">Sim</option>
         <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
       </select>   

     </div>
     <div class="col-md-10"> 
       <label>Observação*</label>
       <textarea class="form-control form-control-user " name="fornecedor_obs"><?php set_value('fornecedor_obs'); ?></textarea> <!--email é o nome do campo da tabela que esta no banco de dados  -->
       <?php echo form_error('fornecedor_obs','<small class="form-text text-danger">','</small>'); ?>
       <!-- O codigo verifica se o campo obirgatorio esta preechido-->
     </div>
   </div>

 </fieldset> 



 <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
 <a title="Voltar"href="<?php echo base_url($this->router->fetch_class());?>" class="btn btn-success btn-sm ml-2">Voltar</a> <!-- neste campo vc altera o incon de voltar -->
</form>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

