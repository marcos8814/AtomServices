
<?php $this->load->view('layout/sidebar'); ?>



<!-- Main Content -->
<div id="content">

 <?php $this->load->view('layout/navibar')  ?>

 <!-- Begin Page Content -->
 <div class="container-fluid">


  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('produtos'); ?>">produtos</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php  echo $titulo; ?></li>
    </ol>
  </nav>

  <!--  -->
  <div class="card shadow mb-4">

    <div class="card-body">
     <!--back end  -->
     <form class="user" method="POST" name="form_add"> 

      <fieldset class="mt-4 border p-2">          
       <!--O codigo abaixo se refere os iconis dos dados pessoais -->
       <legend class="font-small"><i class="fab fa-product-hunt"></i>&nbsp;Dados do produto</legend>


       <div class="form-group row"> <!--altera o tamanho do campo nome  -->
         <div class="col-md-2"> 
           <label>Código do produto</label>
           <input type="text" class="form-control form-control-user" name="produto_codigo"  value="<?php echo $produto_codigo; ?>" readonly = ""> 
         </div>

         <div class="col-md-10"> 
           <label>Descrição do produto</label>
           <input type="text" class="form-control form-control-user" name="produto_descricao" placeholder="Descrição do produto" value="<?php echo set_value('produto_descricao'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
           <?php echo form_error('produto_descricao','<small class="form-text text-danger">','</small>'); ?>
           <!-- O codigo verifica se o campo obirgatorio esta preechido-->

         </div>
      </div>
          <div class="form-group row"> 
          <div class="col-md-3 mb-3 "> 
           <label>Marca</label>
           <select class="custom-select" name="produto_marca_id">
            <?php foreach ($marcas as $marca):?>
              <option  value="<?php echo $marca->marca_id ?>"><?php echo $marca->marca_nome; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        
        <!-- O codigo abaixo busca na tabela categoria os campos categoria nome e tras para o formularia da tabela produtos-->
        <div class="col-md-3 mb-2 "> 
         <label>Categoria</label>
         <select class="custom-select" name="produto_categoria_id">
          <?php foreach ($categorias as $categoria):?>
            <option  value="<?php echo $categoria->categoria_id ?>"><?php echo $categoria->categoria_nome; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <!-- O codigo abaixo busca na tabela categoria os campos categoria nome e tras para o formularia da tabela produtos-->
      <div class="col-md-3 mb-2 "> 
       <label>Fornecedor</label>
       <select class="custom-select" name="produto_fornecedor_id">
        <?php foreach ($fornecedores as $fornecedor):?>
          <option  value="<?php echo $fornecedor->fornecedor_id ?>"><?php echo $fornecedor->fornecedor_nome_fantasia; ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="col-md-3"> 
     <label>Unidade do produto</label>
     <input type="text" class="form-control form-control-user" name="produto_unidade" placeholder="Unidade do produto" value="<?php echo set_value('produto_unidade');; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('produto_unidade','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->

   </div>
          
  </div>
       
      
      
  </fieldset>
  <fieldset class="mt-4 border p-2">          
 <!--O codigo abaixo se refere os iconis dos dados pessoais -->
 <legend class="font-small"><i class="fas fa-funnel-dollar"></i></i>&nbsp;Precificação e estoque</legend>


 <div class="form-group row mb-3"> 
   <div class="col-md-3"> 
     <label>Preço de custo</label>
     <input type="text" class="form-control form-control-user money" name=" produto_preco_custo" placeholder="Preço de custo" value="<?php echo set_value('produto_preco_custo'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('produto_preco_custo','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->

   </div>

   <div class="col-md-3"> 
     <label>Preço venda</label>
     <input type="text" class="form-control form-control-user money" name=" produto_preco_venda" placeholder="Preço de venda" value="<?php echo set_value('produto_preco_venda'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('produto_preco_venda','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->

   </div>

   <div class="col-md-3"> 
     <label>Estoque minimo</label>
     <input type="text" class="form-control form-control-user " name="produto_estoque_minimo" placeholder="Estoque minimo" value="<?php echo set_value('produto_estoque_minimo'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('    produto_estoque_minimo','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->

   </div>

   <div class="col-md-3"> 
     <label>Quantidade de produto em estoque </label>
     <input type="text" class="form-control form-control-user " name=" produto_qtde_estoque" placeholder="Quantidade em estoque" value="<?php echo set_value('produto_qtde_estoque'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
     <?php echo form_error('  produto_qtde_estoque','<small class="form-text text-danger">','</small>'); ?>
     <!-- O codigo verifica se o campo obirgatorio esta preechido-->

   </div>



 </div>

 <div class="form-group row mb-3"> 

   <div class="col-md-2"> 
     <label>Produto ativo</label>

     <select class="custom-select" name="produto_ativo">
       <option value="0">Não</option>
       <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
       <option value="1">Sim</option>
       <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
     </select>   

   </div>

    <div class="col-md-10"> 
       <label>Descrição do produto*</label>
       <textarea class="form-control form-control-user " name="produto_obs"><?php echo set_value('produto_obs'); ?></textarea> <!--email é o nome do campo da tabela que esta no banco de dados  -->
       <?php echo form_error('produto_obs','<small class="form-text text-danger">','</small>'); ?>
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

