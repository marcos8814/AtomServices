
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
           
                     <!--  -->
          <div class="card shadow mb-4">
            
            <div class="card-body">
             <!--back end  -->
            <form class="user" method="POST" name="form_edit"> <!--metodo post reponsavel por proteger campo da url -->
                <div class="form-group row mb-3"> <!--altera o tamanho do campo nome  -->
                     
                     <div class="col-md-3"> 
                       <label>Razão Social *</label>
                          <input type="text" class="form-control form-control-user"  name="sistema_razao_social" placeholder="Razão Social" value="<?php echo $sistema->sistema_razao_social; ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('sistema_razao_social','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>

                    <div class="col-md-3"> 
                       <label>Nome Fantasia*</label>
                          <input type="text" class="form-control form-control-user" name="sistema_nome_fantasia" placeholder="Seu sobrenome" value="<?php echo $sistema->sistema_nome_fantasia; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('sistema_nome_fantasia','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->

                    </div>

                    <div class="col-md-3"> 
                       <label>CNPJ*</label>
                          <input type="text" class="form-control form-control-user cnpj" name="sistema_cnpj" placeholder="CNPJ " value="<?php echo $sistema->sistema_cnpj; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('sistema_cnpj','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>

                    <div class="col-md-3"> 
                       <label>I.E(Inscrição Estadual)*</label>
                          <input type="text" class="form-control form-control-user" name="sistema_ie" placeholder="Inscrição Estadual" value="<?php echo $sistema->sistema_ie; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('sistema_ie','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>
                 </div>  
                  
                  <div class="form-group row mb-3">
                      <!--altera o tamanho do campo nome  -->
                         <div class="col-md-3"> 
                           <label>Telefone fixo *</label>
                              <input type="text" class="form-control form-control-user sp_celphones" name="sistema_telefone_fixo" placeholder="Telefone fixo" value="<?php echo $sistema->sistema_telefone_fixo; ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
                              <?php echo form_error('sistema_telefone_fixo','<small class="form-text text-danger">','</small>'); ?>
                               <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                        </div>

                        <div class="col-md-3"> 
                           <label>Celular*</label>
                              <input type="text" class="form-control form-control-user sp_celphones" name="sistema_telefone_movel" placeholder="Celular" value="<?php echo $sistema->sistema_telefone_movel; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
                              <?php echo form_error('sistema_telefone_movel','<small class="form-text text-danger">','</small>'); ?>
                               <!-- O codigo verifica se o campo obirgatorio esta preechido-->

                        </div>

                        <div class="col-md-3"> 
                           <label>URL do site*</label>
                              <input type="text" class="form-control form-control-user" name="sistema_site_url" placeholder="Site" value="<?php echo $sistema->sistema_site_url; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                              <?php echo form_error('sistema_site_url','<small class="form-text text-danger">','</small>'); ?>
                               <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                        </div>

                         <div class="col-md-3"> 
                           <label>E-mail do contato*</label>
                              <input type="email" class="form-control form-control-user" name="sistema_email" placeholder="CNPJ " value="<?php echo $sistema->sistema_email; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                              <?php echo form_error('sistema_email','<small class="form-text text-danger">','</small>'); ?>
                               <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                        </div>
                    </div>  

                    <div class="form-group row mb-3">
                          <!--altera o tamanho do campo nome  -->
                             <div class="col-md-4"> 
                               <label>Endereço*</label>
                                  <input type="text" class="form-control form-control-user" name="sistema_endereco" placeholder="Endereço" value="<?php echo $sistema->sistema_endereco; ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
                                  <?php echo form_error('sistema_endereco','<small class="form-text text-danger">','</small>'); ?>
                                   <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                            </div>

                            <div class="col-md-2"> 
                               <label>Cep*</label>
                                  <input type="text" class="form-control form-control-user cep" name="sistema_cep" placeholder="Cep" value="<?php echo $sistema->sistema_cep; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
                                  <?php echo form_error('sistema_cep','<small class="form-text text-danger">','</small>'); ?>
                                   <!-- O codigo verifica se o campo obirgatorio esta preechido-->

                            </div>

                            <div class="col-md-2"> 
                               <label>Numero*</label>
                                  <input type="text" class="form-control form-control-user" name="sistema_numero" placeholder="Numero" value="<?php echo $sistema->sistema_numero; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                                  <?php echo form_error('sistema_numero','<small class="form-text text-danger">','</small>'); ?>
                                   <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                            </div>

                             <div class="col-md-2"> 
                               <label>Cidade*</label>
                                  <input type="text" class="form-control form-control-user" name="sistema_cidade" placeholder="Cidade " value="<?php echo $sistema->sistema_cidade; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                                  <?php echo form_error('sistema_cidade','<small class="form-text text-danger">','</small>'); ?>
                                   <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                            </div>

                            <div class="col-md-2"> 
                               <label>UF*</label>
                                  <input type="text" class="form-control form-control-user uf" name="sistema_estado" placeholder="Estado " value="<?php echo $sistema->sistema_estado; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                                  <?php echo form_error('sistema_estado','<small class="form-text text-danger">','</small>'); ?>
                                   <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                            </div>
                  </div> 
                  <div class="form-group row mb-3">
                          <!--altera o tamanho do campo nome  -->
                             <div class="col-md-12"> 
                               <label>Texto de ordem de serviço*</label>
                                  <textarea class="form-control form-control-user" name="sistema_txt_ordem_servico" placeholder="Texto de ordem de serviço e venda"><?php echo $sistema->sistema_txt_ordem_servico;?></textarea>  <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
                                  <?php echo form_error('sistema_txt_ordem_servico','<small class="form-text text-danger">','</small>'); ?>
                                   <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                            </div>

                           
                  </div> 

              <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
           
            </form>
            </div>
     

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     