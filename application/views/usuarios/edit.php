
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
              <a title="Voltar"href="<?php echo base_url('usuarios');?>" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-left"></i>&nbsp;Voltar</a> <!-- neste campo vc altera o incon de voltar -->
            </div>
            <div class="card-body">
             <!--back end  -->
            <form method="POST" name="form_edit"> <!--metodo post reponsavel por proteger campo da url -->
                  <div class="form-group row"> <!--altera o tamanho do campo nome  -->
                     <div class="col-md-4"> 
                       <label>Nome</label>
                          <input type="text" class="form-control" name="first_name" placeholder="Seu nome" value="<?php echo $usuario->first_name; ?>"> <!--first_name é o nome do campo da tabela que esta no banco de dados  -->
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="col-md-4"> 
                       <label>Sobrenome</label>
                          <input type="text" class="form-control" name="last_name" placeholder="Seu sobrenome" value="<?php echo $usuario->last_name; ?>"> <!--last_name é o sobrenome do campo da tabela que esta no banco de dados  -->
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="col-md-4"> 
                       <label>E-mail</label>
                          <input type="email" class="form-control" name="email" placeholder="Seu nome" value="<?php echo $usuario->email; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                  </div>
                   <div class="form-group row">
                        <div class="col-md-4"> 
                       <label>Usuário</label>
                          <input type="text" class="form-control" name="username" placeholder="Seu usuário" value="<?php echo $usuario->username; ?>"> <!--email é o nome do campo da tabela que esta no banco de dados  -->
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>


                       <div class="col-md-4"> 
                       <label>Ativo</label>
                        
                       <select class="form-control" name="active">
                         <option value="0"<?php echo ($usuario->active == 0) ?'selected' :'' ?>>Não</option>
                         <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
                         <option value="1"<?php echo ($usuario->active == 1) ?'selected' :'' ?>>Sim</option>
                         <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
                       </select>   
                         
                    </div>

                     <div class="col-md-4"> 
                       <label>Perfil de acesso</label>
                        
                       <select class="form-control" name="perfil_usuario">
                         <option value="0"<?php echo ($perfil_usuario->id == 2) ?'selected' :'' ?>>Vendedor</option>
                         <!-- o codigo acima verifica no banco de dados o perfil do usuário -->
                         <option value="1"<?php echo ($perfil_usuario->id == 1) ?'selected' :'' ?>>Administrador</option>
                         <!-- o codigo acima verifica no banco de dados o perfil do usuário -->
                       </select>   
                         
                    </div>

                   </div>
                   <div class="form-group row">
                    <div class="col-md-6"> 
                           <label>Senha</label>
                          <input type="password" class="form-control" name="password" placeholder="Sua senha"> <!--password é o nome do campo da tabela que esta no banco de dados  -->
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                       
                       <div class="col-md-6"> 
                           <label>Confirme</label>
                          <input type="password" class="form-control" name="confirme_password" placeholder="Confirme sua senha"> <!--password é o nome do campo da tabela que esta no banco de dados  -->
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <input type="hidden" name="usuario_id" value="<?php echo $usuario->id  ?>">
                    
                 </div> 

                  <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     