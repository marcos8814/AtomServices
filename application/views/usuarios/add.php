
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
            <form class="user" method="POST" name="form_add"> <!--altera para o form-add -->
                  <div class="form-group row"> <!--altera o tamanho do campo nome  -->
                     <div class="col-md-4"> 
                       <label>Nome *</label>
                          <input type="text" class="form-control form-control-user" name="first_name" placeholder="Seu nome" value="<?php echo set_value('first_name');?>"> <!--o codigo acima deixa o campo com os caracteres que vc digitou  -->
                          <?php echo form_error('first_name','<small class="form-text text-danger">','</small>'); ?>
                            <!--o codigo acima deixa o campo com os caracteres que vc digitou  -->
                    </div>

                    <div class="col-md-4"> 
                       <label>Sobrenome *</label>
                          <input type="text" class="form-control form-control-user" name="last_name" placeholder="Seu sobrenome" value="<?php echo set_value('last_name');?>">  <!--o codigo acima deixa o campo com os caracteres que vc digitou  -->
                          <?php echo form_error('last_name','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->

                    </div>

                    <div class="col-md-4"> 
                       <label>E-mail *</label>
                          <input type="email" class="form-control form-control-user" name="email" placeholder="Seu E-mail(Login)" value="<?php echo set_value('email');?>">  <!--o codigo acima deixa o campo com os caracteres que vc digitou  -->
                          <?php echo form_error('email','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>

                  </div>
                   <div class="form-group row">
                        <div class="col-md-4"> 
                       <label>Usuário *</label>
                          <input type="text" class="form-control form-control-user" name="username" placeholder="Seu usuário" value="<?php echo set_value('username');?>">  <!--o codigo acima deixa o campo com os caracteres que vc digitou  -->
                          <?php echo form_error('username','<small class="form-text text-danger">','</small>'); ?>
                           <!-- O codigo verifica se o campo obirgatorio esta preechido-->
                    </div>


                       <div class="col-md-4"> 
                       <label>Ativo</label>
                        
                       <select class="form-control form-control-user" name="active">
                         <option value="0">Não</option>
                         <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
                         <option value="1">Sim</option>
                         <!-- o codigo acima verifica no banco de dados se a opção esta ativo ou não -->
                       </select>   
                         
                    </div>

                     <div class="col-md-4"> 
                       <label>Perfil de acesso</label>
                        
                       <select class="form-control form-control-user" name="perfil_usuario">
                         <option value="2">Vendedor</option>
                         <!-- o codigo acima verifica no banco de dados o perfil do usuário -->
                         <option value="1">Administrador</option>
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

                    
                 </div> 

                  <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     