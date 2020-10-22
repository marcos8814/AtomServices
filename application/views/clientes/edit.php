
 <?php $this->load->view('layout/sidebar'); ?>

    

      <!-- Main Content -->
      <div id="content">

       <?php $this->load->view('layout/navibar')  ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('clientes'); ?>">clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php  echo $titulo; ?></li>
           </ol>
        </nav>
           
                     <!--  -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a title="Voltar"href="<?php echo base_url('clientes');?>" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-left"></i>&nbsp;Voltar</a> <!-- neste campo vc altera o incon de voltar -->
            </div>
            <div class="card-body">
             <!--back end  -->
            <form class="user" method="POST" name="form_edit"> <!--metodo post reponsavel por proteger campo da url -->
                <div class="form-group row"> <!--altera o tamanho do campo nome  -->
                     <div class="col-md-4"> 
                       <label>Nome *</label>
                          <input type="text" class="form-control form-control-user" name="cliente_nome" placeholder="Nome do cliente " value="<?php echo $cliente->cliente_nome; ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_nome','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>

                    <div class="col-md-4"> 
                       <label>Sobrenome *</label>
                          <input type="text" class="form-control form-control-user" name="cliente_sobrenome" placeholder="Sobrenome do clinte" value="<?php echo $cliente->cliente_sobrenome; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_sobrenome','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->

                    </div>

                    <div class="col-md-2"> 
                       <label>CPF ou CNPJ*</label>
                          <input type="text" class="form-control form-control-user cnpj" name="cliente_cpf_cnpj" placeholder="CPF ou CNPJ" value="<?php echo $cliente->cliente_cpf_cnpj; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_cpf_cnpj','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>

                     <div class="col-md-2"> 
                       <label>RG ou I.E*</label>
                          <input type="text" class="form-control form-control-user" name="cliente_rg_ie" placeholder="RG ou I>E" value="<?php echo $cliente->cliente_rg_ie; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_rg_ie','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>
                    
                </div> 

                 <div class="form-group row"> <!--altera o tamanho do campo nome  -->
                     <div class="col-md-4"> 
                       <label>E-mail *</label>
                          <input type="email" class="form-control form-control-user" name="cliente_email" placeholder="E-mail do cliente" value="<?php echo $cliente->cliente_email; ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_email','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>

                    <div class="col-md-2"> 
                       <label>Telefone Fixo </label>
                          <input type="text" class="form-control form-control-user sp_celphones" name="cliente_telefone" placeholder="Telefone fixo" value="<?php echo $cliente->cliente_telefone; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_telefone','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->

                    </div>

                    <div class="col-md-2"> 
                       <label>Telefone Movel*</label>
                          <input type="text" class="form-control form-control-user sp_celphones" name="cliente_celular" placeholder="Celular do cliente" value="<?php echo $cliente->cliente_celular; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_celular','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>

                     <div class="col-md-4"> 
                       <label>Data de Nascimento</label>
                          <input type="date" class="form-control form-control-user " name="cliente_data_nascimento"value="<?php echo $cliente->cliente_data_nascimento; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_data_nascimento','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>
                    
                </div> 

                <div class="form-group row"> <!--altera o tamanho do campo nome  -->
                      <div class="col-md-2"> 
                       <label>CEP</label>
                          <input type="text" class="form-control form-control-user cep" name="cliente_cep" placeholder="CEP" value="<?php echo $cliente->cliente_cep; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_cep','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>

                     <div class="col-md-4"> 
                       <label>Endereço *</label>
                          <input type="email" class="form-control form-control-user" name="cliente_endereco" placeholder="Endereço do cliente" value="<?php echo $cliente->cliente_endereco; ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_endereco','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>

                    <div class="col-md-2"> 
                       <label>Número</label>
                          <input type="text" class="form-control form-control-user " name="cliente_numero_endereco" placeholder="Telefone fixo" value="<?php echo $cliente->cliente_numero_endereco; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_numero_endereco','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->

                    </div>

                    <div class="col-md-4"> 
                       <label>Bairro*</label>
                          <input type="text" class="form-control form-control-user " name="cliente_bairro" placeholder="Bairro" value="<?php echo $cliente->cliente_bairro; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_bairro','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>
                    
                </div> 

                 <div class="form-group row"> <!--altera o tamanho do campo nome  -->
  

                     <div class="col-md-3"> 
                       <label>Cidade*</label>
                          <input type="text" class="form-control form-control-user" name="cliente_cidade" placeholder="Endereço do cliente" value="<?php echo $cliente->cliente_cidade; ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_cidade','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>

                    <div class="col-md-1"> 
                       <label>UF</label>
                          <input type="text" class="form-control form-control-user uf" name="cliente_estado" placeholder="Telefone fixo" value="<?php echo $cliente->cliente_estado; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_estado','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->

                    </div>

                    <div class="col-md-8"> 
                       <label>Observação*</label>
                          <textarea class="form-control form-control-user " name="cliente_obs"><?php echo $cliente->cliente_obs; ?></textarea> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_obs','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>

                    <input type="hidden" name="cliente_id" value="<?php echo $cliente->cliente_id;?>"/>
                    
                </div> 

                  <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     