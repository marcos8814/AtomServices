
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
     <form class="user" method="POST" name="form_edit"> <!--metodo post reponsavel por proteger campo da url -->
      <p><strong><i class="far fa-clock"></i>&nbsp;&nbsp;Útima Alteração: </strong><?php echo formata_data_banco_com_hora( $produto->produto_data_alteracao);?></p>:

      <!--O codigo abaixo moldura dos dados pessoais   -->
      <fieldset class="mt-4 border p-2">          
       <!--O codigo abaixo se refere os iconis dos dados pessoais -->
       <legend class="font-small"><i class="fab fa-product-hunt"></i></i>&nbsp;Dados do produto</legend>


       <div class="form-group row"> <!--altera o tamanho do campo nome  -->
         <div class="col-md-2 mb-3 "> 
           <label>Código interno do produto</label>
           <input type="text" class="form-control form-control-user" name="produto_codigo"  value="<?php echo $produto->produto_codigo; ?> " readonly=""> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
           
         </div>

         <div class="col-md-10"> 
           <label>Descrição do produto</label>
           <input type="text" class="form-control form-control-user" name="produto_descricao" placeholder="Descrição do produto" value="<?php echo $produto->produto_descricao; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
           <?php echo form_error('produto_descricao','<small class="form-text text-danger">','</small>'); ?>
           <!-- O codigo verifica se o campo obirgatorio esta preechido-->

         </div>
       </div>


       <div class="form-group row mb-3"> <!--altera o tamanho do campo nome  -->
         <!-- O codigo abaixo busca na tabela categoria os campos categoria nome e tras para o formularia da tabela produtos-->
         <div class="col-md-4 mb-3 "> 
           <label>Marca</label>
           <select class="custom-select" name="produto_marca_id">
              <?php foreach ($marcas as $marca):?>
              <option value="<?php echo $marca->marca_id ?>"<?php echo ($marca->marca_id == $produto->produto_marca_id ? 'selected' : '' ) ?>><?php echo $marca->marca_nome ?></option>
            <?php endforeach; ?>
           </select>
         </div>
        
          <!-- O codigo abaixo busca na tabela categoria os campos categoria nome e tras para o formularia da tabela produtos-->
         <div class="col-md-4 mb-3 "> 
           <label>Categoria</label>
           <select class="custom-select" name="produto_categoria_id">
              <?php foreach ($categorias as $categoria):?>
              <option value="<?php echo $categoria->categoria_id ?>"<?php echo ($categoria->categoria_id == $produto->produto_categoria_id ? 'selected' : '' ) ?>><?php echo $categoria->categoria_nome ?></option>
            <?php endforeach; ?>
           </select>
         </div>
          <!-- O codigo abaixo busca na tabela categoria os campos categoria nome e tras para o formularia da tabela produtos-->
          <div class="col-md-4 mb-3 "> 
           <label>Fornecedor</label>
           <select class="custom-select" name="produto_fornecedor_id">
              <?php foreach ($fornecedores as $fornecedor):?>
              <option value="<?php echo $fornecedor->fornecedor_id ?>"<?php echo ($fornecedor->fornecedor_id == $produto->produto_fornecedor_id ? 'selected' : '' ) ?>><?php echo $fornecedor->fornecedor_nome_fantasia?></option>
            <?php endforeach; ?>
           </select>
         </div>

         
       </div>
       
       
       
     </fieldset>




     <div class="form-group row">  
       <input type="hidden" name="produto_id" value="<?php echo $produto->produto_id;?>"/>
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

