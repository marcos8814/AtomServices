
<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

 <?php $this->load->view('layout/navibar')  ?>

 <!-- Begin Page Content -->
 <div class="container-fluid">


  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('servicos'); ?>">servicos</a></li>
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
       <legend class="font-small"><i class="fas fa-tools"></i>&nbsp;Dados do servico</legend>


       <div class="form-group row"> <!--altera o tamanho do campo nome  -->
         <div class="col-md-5"> 
           <label>Serviço*</label>
           <input type="text" class="form-control form-control-user" name="servico_nome" placeholder="Tipo de serviço " value="<?php echo set_value ('servico_nome'); ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
           <?php echo form_error('servico_nome','<small class="form-text text-danger">','</small>'); ?>
           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
         </div>

         <div class="col-md-4"> 
           <label>Preço *</label>
           <input type="text" class="form-control form-control-user .money" name="servico_preco" placeholder="Preço" value="<?php echo set_value('servico_preco'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
           <?php echo form_error('servico_preco','<small class="form-text text-danger">','</small>'); ?>
           <!-- O codigo verifica se o campo obirgatorio esta preechido-->

         </div>

         <div class="col-md-2"> 
           <label>servico ativo</label>

           <select class="custom-select" name="servico_ativo">
             <option value="0">Não</option>
             <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
             <option value="1">Sim</option>
              <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
           </select>   

          </div>

      </div>
       <div class="form-group row"> 
          <div class="col-md-10"> 
               <label>Descrição do serviço*</label>
               <textarea class="form-control form-control-user " name="servico_descricao" style="min-height: 100px!important" value ="<?php echo set_value( 'servico_descricao'); ?>"></textarea> <!--email é o nome do campo da tabela que esta no banco de dados  -->
               <?php echo form_error('servico_descricao','<small class="form-text text-danger">','</small>'); ?>
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

