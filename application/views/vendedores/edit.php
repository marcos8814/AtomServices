
<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

 <?php $this->load->view('layout/navibar')  ?>

 <!-- Begin Page Content -->
 <div class="container-fluid">


  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('vendedores'); ?>">vendedores</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php  echo $titulo; ?></li>
    </ol>
  </nav>

  <!--  -->
  <div class="card shadow mb-4">

    <div class="card-body">
     <!--back end  -->
     <form class="user" method="POST" name="form_edit"> <!--metodo post reponsavel por proteger campo da url -->
      <p><strong><i class="fas fa-user-clock"></i>&nbsp;&nbsp;Útima Alteração: </strong><?php echo formata_data_banco_com_hora( $vendedor->vendedor_data_alteracao);?></p>:

      <!--O codigo abaixo moldura dos dados pessoais   -->
      <fieldset class="mt-4 border p-2">          
       <!--O codigo abaixo se refere os iconis dos dados pessoais -->
       <legend class="font-small"><i class="fas fa-id-card"></i></i></i>&nbsp;Dados do vendedor</legend>


       <div class="form-group row"> <!--altera o tamanho do campo nome  -->
         

         <div class="col-md-6"> 
           <label>Nome *</label>
           <input type="text" class="form-control form-control-user" name="vendedor_nome_completo" placeholder="Nome do vendedor" value="<?php echo $vendedor->vendedor_nome_completo; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
           <?php echo form_error('vendedor_nome_completo','<small class="form-text text-danger">','</small>'); ?>
           <!-- O codigo verifica se o campo obirgatorio esta preechido-->

         </div>

        <div class="col-md-"> 
         <label>CPF </label>
         <input type="text" class="form-control form-control-user cpf" name="vendedor_cpf" placeholder="CPF do vendedor" value="<?php echo $vendedor->vendedor_cpf; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
         <?php echo form_error('vendedor_cpf','<small class="form-text text-danger">','</small>'); ?>
         <!-- O codigo verifica se o campo obirgatorio esta preechido-->

       </div>

       <div class="col-md-4"> 
         <label>R.G</label>
         <input type="text" class="form-control form-control-user rg " name="vendedor_rg" placeholder="R.G do vendedor" value="<?php echo $vendedor->vendedor_rg; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
         <?php echo form_error('vendedor_rg','<small class="form-text text-danger">','</small>'); ?>
         <!-- O codigo verifica se o campo obirgatorio esta preechido-->

       </div>

   </div>
    <div class="form-group row">
       <div class="col-md-4"> 
         <label>Telefone Fixo </label>
         <input type="text" class="form-control form-control-user sp_celphones" name="vendedor_telefone" placeholder="Telefone fixo" value="<?php echo $vendedor->vendedor_telefone; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
         <?php echo form_error('vendedor_telefone','<small class="form-text text-danger">','</small>'); ?>
         <!-- O codigo verifica se o campo obirgatorio esta preechido-->

       </div>
    
      <div class="col-md-4"> 
       <label>Telefone Movel </label>
       <input type="text" class="form-control form-control-user sp_celphones" name="vendedor_celular" placeholder="Telefone Movel" value="<?php echo $vendedor->vendedor_celular; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
       <?php echo form_error('vendedor_celular','<small class="form-text text-danger">','</small>'); ?>
       <!-- O codigo verifica se o campo obirgatorio esta preechido-->

     </div>

     <div class="col-md-4"> 
       <label>E-mail*</label>
       <input type="email" class="form-control form-control-user " name="vendedor_email" placeholder="Email do vendedor" value="<?php echo $vendedor->vendedor_email; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
       <?php echo form_error('vendedor_email','<small class="form-text text-danger">','</small>'); ?>
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
     <input type="text" class="form-control form-control-user" name="vendedor_endereco" placeholder="Endereço do vendedor" value="<?php echo $vendedor->vendedor_endereco; ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('vendedor_endereco','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->
   </div>

   <div class="col-md-2"> 
     <label>Número</label>
     <input type="text" class="form-control form-control-user " name="vendedor_numero_endereco" placeholder="Numero" value="<?php echo $vendedor->vendedor_numero_endereco; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('vendedor_numero_endereco','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->

   </div>

   <div class="col-md-5"> 
     <label>Complemento</label>
     <input type="text" class="form-control form-control-user " name="vendedor_complemento" placeholder="Complemento" value="<?php echo $vendedor->vendedor_complemento; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('vendedor_complemento','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->

   </div>

 </div> 

 <div class="form-group row"> <!--altera o tamanho do campo nome  -->
   <div class="col-md-5"> 
     <label>Bairro*</label>
     <input type="text" class="form-control form-control-user " name="vendedor_bairro" placeholder="Bairro" value="<?php echo $vendedor->vendedor_bairro; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('vendedor_bairro','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->
   </div>
   <div class="col-md-2"> 
     <label>CEP</label>
     <input type="text" class="form-control form-control-user cep" name="vendedor_cep" placeholder="CEP" value="<?php echo $vendedor->vendedor_cep; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('vendedor_cep','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->
   </div>  


   <div class="col-md-4"> 
     <label>Cidade*</label>
     <input type="text" class="form-control form-control-user" name="vendedor_cidade" placeholder="Endereço do vendedor" value="<?php echo $vendedor->vendedor_cidade; ?>"> <!--vendedor_cidade é o nome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('vendedor_cidade','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->
   </div>

   <div class="col-md-1"> 
     <label>UF</label>
     <input type="text" class="form-control form-control-user uf" name="vendedor_estado" placeholder="UF" value="<?php echo $vendedor->vendedor_estado; ?>"> <!--vendedor_estado é o sobrenome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('vendedor_estado','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->

   </div>

 </fieldset> 

 <fieldset class="mt-4 border p-2">          
   <!--O codigo abaixo se refere os iconis dos dados pessoais -->
   <legend class="font-small"><i class="fas fa-user-cog"></i></i></i>&nbsp;Configurações</legend>
   <div class="form-group row">  

     <div class="col-md-2"> 
       <label>Vendedor ativo</label>

       <select class="custom-select" name="vendedor_ativo">
         <option value="0"<?php echo ($vendedor->vendedor_ativo == 0) ?'selected' :'' ?>>Não</option>
         <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
         <option value="1"<?php echo ($vendedor->vendedor_ativo == 1) ?'selected' :'' ?>>Sim</option>
         <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
       </select>   

     </div>
     <div class="col-md-3"> 
           <label>Codigo </label>
           <input type="text" class="form-control form-control-user" name="vendedor_codigo" placeholder="Codigo" value="<?php echo $vendedor->vendedor_codigo; ?>" readonly=""> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
           <?php echo form_error('vendedor_codigo','<small class="form-text text-danger">','</small>'); ?>
           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
         </div>
     <div class="col-md-7"> 
       <label>Observação*</label>
       <textarea class="form-control form-control-user " name="vendedor_obs"><?php echo $vendedor->vendedor_obs; ?></textarea> <!--email é o nome do campo da tabela que esta no banco de dados  -->
       <?php echo form_error('vendedor_obs','<small class="form-text text-danger">','</small>'); ?>
       <!-- O codigo verifica se o campo obirgatorio esta preechido-->
     </div>
   </div>

 </fieldset> 

 <div class="form-group row">  



   <input type="hidden" name="vendedor_id" value="<?php echo $vendedor->vendedor_id;?>"/>

 </div> 

 <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
 <a title="Voltar"href="<?php echo base_url($this->router->fetch_class());?>" class="btn btn-success btn-sm ml-2">Voltar</a> <!-- neste campo vc altera o incon de voltar -->
</form>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

