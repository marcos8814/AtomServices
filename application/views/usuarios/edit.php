
 <?php $this->load->view('layout/sidebar'); ?>

    

      <!-- Main Content -->
      <div id="content">

       <?php $this->load->view('layout/navibar')  ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('usuários'); ?>">Usuários</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php  echo $titulo; ?></li>
           </ol>
        </nav>
           
                     <!--  -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              
            </div>
            <div class="card-body">
             <!--back end  -->
            <form class="user" method="POST" name="form_edit"> <!--metodo post reponsavel por proteger campo da url -->
                  <div class="form-group row"> <!--altera o tamanho do campo nome  -->
                     <div class="col-md-4"> 
                       <label>Nome *</label>
                          <input type="text" class="form-control form-control-user" name="first_name" placeholder="Seu nome" value="<?php echo $usuario->first_name; ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('first_name','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>

                    <div class="col-md-4"> 
                       <label>Sobrenome *</label>
                          <input type="text" class="form-control form-control-user" name="last_name" placeholder="Seu sobrenome" value="<?php echo $usuario->last_name; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('last_name','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->

                    </div>

                    <div class="col-md-4"> 
                       <label>E-mail *</label>
                          <input type="email" class="form-control form-control-user" name="email" placeholder="Seu E-mail(Login " value="<?php echo $usuario->email; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('email','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>

                  </div>
                   <div class="form-group row">
                        <div class="col-md-4"> 
                       <label>Usuário *</label>
                          <input type="text" class="form-control form-control-user" name="username" placeholder="Seu usuário" value="<?php echo $usuario->username; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                          <?php echo form_error('username','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>


                       <div class="col-md-4"> 
                       <label>Ativo</label>
                        
                       <select class="custom-select" name="active">
                         <option value="0"<?php echo ($usuario->active == 0) ?'selected' :'' ?>>Não</option>
                         <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
                         <option value="1"<?php echo ($usuario->active == 1) ?'selected' :'' ?>>Sim</option>
                         <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
                       </select>   

                         
                    </div>

                     <div class="col-md-4"> 
                       <label>Perfil de acesso</label>
                        
                       <select  class="custom-select" name="perfil_usuario">
                         <option value="2"<?php echo ($perfil_usuario->id == 2) ?'selected' :'' ?>>Vendedor</option>
                         <!-- o codigo acima verifica no banco de dados o perfil do usuário -->
                         <option value="1"<?php echo ($perfil_usuario->id == 1) ?'selected' :'' ?>>Administrador</option>
                         <!-- o codigo acima verifica no banco de dados o perfil do usuário -->
                       </select>   
                         
                    </div>

                   </div>
                   <div class="form-group row">
                    <div class="col-md-6"> 
                           <label>Senha *</label>
                          <input type="password" class="form-control form-control-user" name="password" placeholder="Sua senha"> <!--password é o nome do campo da tabela que esta no banco de dados  -->
                           <?php echo form_error('password','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>
                       
                       <div class="col-md-6"> 
                           <label>Confirme *</label>
                          <input type="password" class="form-control form-control-user" name="confirme_password" placeholder="Confirme sua senha"> <!--password é o nome do campo da tabela que esta no banco de dados  -->
                           <?php echo form_error('confirme_password','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>

                    <input type="hidden" name="usuario_id" value="<?php echo $usuario->id  ?>">
                    
                 </div> 

                  <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                  <a title="Voltar"href="<?php echo base_url($this->router->fetch_class());?>" class="btn btn-success btn-sm ml-2"><i>Voltar</a> <!-- neste campo vc altera o incon de voltar -->
            </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     