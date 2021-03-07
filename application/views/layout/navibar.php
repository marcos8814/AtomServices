 <!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>



  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
      <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-search fa-fw"></i>
      </a>
      <!-- Dropdown - Messages -->
      <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
        <form class="form-inline mr-auto w-100 navbar-search">
          <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>

    <?php if ($this->ion_auth->is_admin()):?>

      <?php if (isset($contador_notificacoes) && $contador_notificacoes > 0):?>
        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter"><?php echo $contador_notificacoes; ?></span>
          </a>
          <!-- Dropdown - Alerts -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
              Central de Notificações
            </h6>

            <?php if ($contas_receber_vencidas):?>

             <a title="Gerenciar contas a receber" class="dropdown-item d-flex align-items-center" href=<?php echo base_url('receber');  ?>>
              <div class="mr-3">
                <div class="icon-circle badge-danger">
                  <i class="fas fa-hand-holding-usd fa-lg text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500"><?php echo formata_data_banco_sem_hora (date('Y-m-d'));  ?></div>
                <span class="font-weight-bold">Existem contas a receber vencidas!</span>
              </div>
            </a>

           

          <?php endif;  ?>



         </div>
       </li>

      <?php endif; ?>


    <?php endif; ?>



  <div class="topbar-divider d-none d-sm-block"></div>

  <!-- Nav Item - User Information -->
  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <!-- o codigo abaixo mostra o nome do usuário no perfil  -->
      <?php $user = $this->ion_auth->user()->row();?>

      <span class="mr-2 d-none d-lg-inline text-gray-900"><?php echo $user->first_name;  ?></span>
      <span class="" ><i class="far fa-user fa-2x"></i></i></span>
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="<?php echo base_url('usuarios/edit/' . $this->session->userdata('user_id')); ?>">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-900"></i>
        Perfil
      </a>

      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-900"></i>
        Sair
      </a>
    </div>
  </li>

 </ul>

</nav>
        <!-- End of Topbar -->