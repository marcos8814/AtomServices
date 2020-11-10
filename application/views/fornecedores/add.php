
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
            
          <div class="card-body">
             <!--back end  -->
            <form class="user" method="POST" name="form_add"> <!--metodo post reponsavel por proteger campo da url -->
             
              <div class="custom-control custom-radio custom-control-inline mt-2 ">
                    
                      <input type="radio" id="pessoa_fisica" name="cliente_tipo" class="custom-control-input" value="1"        <?php echo set_checkbox('cliente_tipo', '1') ?> checked="">
                      <label class="custom-control-label pt-1" for="pessoa_fisica">Pessoa física</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="pessoa_juridica" name="cliente_tipo" class="custom-control-input" value="2" <?php echo set_checkbox('cliente_tipo', '2') ?> >
                      <label class="custom-control-label pt-1" for="pessoa_juridica">Pessoa jurídica</label>
              </div>

              <!--O codigo abaixo moldura dos dados pessoais   -->
              <fieldset class="mt-5 border p-2">          
                     <!--O codigo abaixo se refere os iconis dos dados pessoais -->
                <legend class="font-small"><i class="fas fa-user-tie"></i>&nbsp;Dados Pessoais</legend>


                <div class="form-group row"> <!--altera o tamanho do campo nome  -->
                     
                       <div class="col-md-3">

                         <label>Nome *</label>
                         <input type="text" class="form-control form-control-user" name="cliente_nome" placeholder="Nome do cliente " value="<?php echo set_value('cliente_nome'); ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
                            <?php echo form_error('cliente_nome','<small class="form-text text-danger">','</small>'); ?>
                             <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                       </div>

                       <div class="col-md-6"> 

                         <label>Sobrenome *</label>
                            <input type="text" class="form-control form-control-user" name="cliente_sobrenome" placeholder="Sobrenome do clinte" value="<?php echo set_value('cliente_sobrenome'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
                            <?php echo form_error('cliente_sobrenome','<small class="form-text text-danger">','</small>'); ?>
                             <!-- O codigo verifica se o campo obirgatorio esta preechido-->

                       </div>

                       <div class="col-md-3"> 
                             <label>Data de Nascimento</label>
                             <input type="date" class="form-control form-control-user-date " name="cliente_data_nascimento"value="<?php echo set_value('cliente_data_nascimento')  ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('cliente_data_nascimento','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                       </div>

                      
                      
                 </div> 

                 <div class="form-group row">
                      
                       <div class="col-md-3"> 

                            <div class="pessoa_fisica">
                                <label>CPF</label>
                                <input type="text" class="form-control form-control-user cpf" name="cliente_cpf" placeholder="CPF do cliente" value="<?php echo set_value('cliente_cpf'); ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                                      <?php echo form_error('cliente_cpf','<small class="form-text text-danger">','</small>'); ?>
                                       <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                            </div>


                            <div class="pessoa_juridica">
                                <label>CNPJ</label>
                                <input type="text" class="form-control form-control-user cnpj" name="cliente_cnpj" placeholder="CNPJ do cliente" value="<?php echo set_value('cliente_cnpj'); ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                                      <?php echo form_error('cliente_cnpj','<small class="form-text text-danger">','</small>'); ?>
                                       <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                        
                            </div>
                               
                       </div>

                       <div class="col-md-3"> 

                            
                                <label class="pessoa_fisica">RG</label>
                                <label class="pessoa_juridica">Inscrição Estadual</label>
                                <input type="text" class="form-control form-control-user" name="cliente_rg_ie" value="<?php echo set_value('cliente_rg_ie'); ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                                <?php echo form_error('cliente_rg_ie','<small class="form-text text-danger">','</small>'); ?>
                                 <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                       </div>
                          
                       <div class="col-md-6"> 
                               <label>E-mail *</label>
                               <input type="email" class="form-control form-control-user" name="cliente_email" placeholder="E-mail do cliente" value="<?php echo set_value('cliente_email');; ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
                              <?php echo form_error('cliente_email','<small class="form-text text-danger">','</small>'); ?>
                               <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                       </div>  


                  </div>

                  <div class="form-group row">
                          <div class="col-md-3"> 
                              
                              <label>Telefone Fixo </label>
                              <input type="text" class="form-control form-control-user sp_celphones" name="cliente_telefone" placeholder="Telefone fixo" value="<?php echo set_value('cliente_telefone'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
                              <?php echo form_error('cliente_telefone','<small class="form-text text-danger">','</small>'); ?>
                               <!-- O codigo verifica se o campo obirgatorio esta preechido-->

                          </div>

                        <div class="col-md-3"> 
                           
                           <label>Telefone Movel*</label>
                            <input type="text" class="form-control form-control-user sp_celphones" name="cliente_celular" placeholder="Celular do cliente" value="<?php echo set_value('cliente_celular'); ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                              <?php echo form_error('cliente_celular','<small class="form-text text-danger">','</small>'); ?>
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
                            <input type="text" class="form-control form-control-user" name="cliente_endereco" placeholder="Endereço do cliente" value="<?php echo set_value('cliente_endereco'); ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
                            <?php echo form_error('cliente_endereco','<small class="form-text text-danger">','</small>'); ?>
                             <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                       </div>

                       <div class="col-md-2"> 
                            <label>Número</label>
                            <input type="text" class="form-control form-control-user " name="cliente_numero_endereco" placeholder="Numero" value="<?php echo set_value('cliente_numero_endereco'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
                            <?php echo form_error('cliente_numero_endereco','<small class="form-text text-danger">','</small>'); ?>
                             <!-- O codigo verifica se o campo obirgatorio esta preechido-->

                       </div>

                       <div class="col-md-5"> 
                            <label>Complemento</label>
                            <input type="text" class="form-control form-control-user " name="cliente_complemento" placeholder="Complemento" value="<?php echo set_value('cliente_complemento'); ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
                            <?php echo form_error('cliente_complemento','<small class="form-text text-danger">','</small>'); ?>
                             <!-- O codigo verifica se o campo obirgatorio esta preechido-->

                       </div>
                      
                   </div> 

                   <div class="form-group row"> <!--altera o tamanho do campo nome  -->
                         <div class="col-md-5"> 
                            <label>Bairro*</label>
                            <input type="text" class="form-control form-control-user " name="cliente_bairro" placeholder="Bairro" value="<?php echo set_value('cliente_bairro'); ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                            <?php echo form_error('cliente_bairro','<small class="form-text text-danger">','</small>'); ?>
                             <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                         </div>
                         <div class="col-md-2"> 
                            <label>CEP</label>
                            <input type="text" class="form-control form-control-user cep" name="cliente_cep" placeholder="CEP" value="<?php echo set_value('cliente_cep'); ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                            <?php echo form_error('cliente_cep','<small class="form-text text-danger">','</small>'); ?>
                             <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                         </div>  
                     

                         <div class="col-md-4"> 
                            <label>Cidade*</label>
                            <input type="text" class="form-control form-control-user" name="cliente_cidade" placeholder="Endereço do cliente" value="<?php echo set_value('cliente_cidade'); ?>"> <!--cliente_cidade é o nome do campo da tabela que esta no banco de dados  -->
                            <?php echo form_error('cliente_cidade','<small class="form-text text-danger">','</small>'); ?>
                             <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                         </div>

                          <div class="col-md-1"> 
                            <label>UF</label>
                            <input type="text" class="form-control form-control-user uf" name="cliente_estado" placeholder="UF" value="<?php echo set_value('cliente_estado'); ?>"> <!--cliente_estado é o sobrenome do campo da tabela que esta no banco de dados  -->
                            <?php echo form_error('cliente_estado','<small class="form-text text-danger">','</small>'); ?>
                             <!-- O codigo verifica se o campo obirgatorio esta preechido-->

                          </div>

              </fieldset>

              <fieldset class="mt-4 border p-2">          
                           <!--O codigo abaixo se refere os iconis dos dados pessoais -->
                       <legend class="font-small"><i class="fas fa-user-cog"></i></i></i>&nbsp;Configurações</legend>
                         <div class="form-group row">  

                                <div class="col-md-2"> 
                                  <label>Cliente ativo</label>
                                  
                                   <select class="custom-select" name="cliente_ativo">
                                     <option value="1">Não</option>
                                     <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
                                     <option value="2">Sim</option>
                                   <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
                                   </select>   
                                   
                                </div>
                                <div class="col-md-10"> 
                                    <label>Observação*</label>
                                    <textarea class="form-control form-control-user " name="cliente_obs"></textarea> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                                    <?php echo form_error('cliente_obs','<small class="form-text text-danger">','</small>'); ?>
                                     <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                                </div>
                         </div>
       
              </fieldset> 

      
                  <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                  <a title="Voltar"href="<?php echo base_url('clientes');?>" class="btn btn-success btn-sm ml-2">Voltar</a> <!-- neste campo vc altera o incon de voltar -->
          </form>
        </div>
      </div>

    </div>
        <!-- /.container-fluid -->

  </div>
      <!-- End of Main Content -->

     