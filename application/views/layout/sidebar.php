 <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('/');?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ordem <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Heading -->
      <div class="sidebar-heading">
        Modulos
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOs" aria-expanded="true" aria-controls="collapseOs">
         
          <i class="fas fa-store-alt"></i>
          <span>Vendas</span>
        </a>
        <div id="collapseOs" class="collapse" aria-labelledby="headingos" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Escolha uma opção:</h6>
            <a  title="Gerenciar ordem de Serviços" class="collapse-item" href="<?php echo base_url('os') ?>"> <i class="fas fa-shopping-basket text-gray-900"></i>&nbsp;&nbsp; Ordem de Serviços</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDois" aria-expanded="true" aria-controls="collapseDois">
         
          <i class="fas fa-database"></i>
          <span>Cadastros</span>
        </a>
        <div id="collapseDois" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Escolha uma opção:</h6>
            <a  title="Gerenciar Clientes" class="collapse-item" href="<?php echo base_url('clientes') ?>"> <i class="fas fa-user-tie text-gray-900"></i>&nbsp;&nbsp; Clientes</a>
            <a title="Gerenciar Fornecedores" class="collapse-item" href="<?php echo base_url('fornecedores') ?>"><i class="fas fa-user-tag text-gray-900 "></i>&nbsp;&nbsp;Fornecedores</a>
            <a title="Gerenciar Vendedores" class="collapse-item" href="<?php echo base_url('vendedores') ?>"><i class="fas fa-id-card"></i></i></i>&nbsp;&nbsp;Vendedores</a>
            <a title="Gerenciar Serviços" class="collapse-item" href="<?php echo base_url('servicos') ?>"><i class="fas fa-tools"></i></i></i></i>&nbsp;&nbsp;Serviços</a>
          </div>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTres" aria-expanded="true" aria-controls="collapseTres">
         
         <i class="fas fa-box-open"></i>
          <span>Estoque</span>
        </a>
        <div id="collapseTres" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Escolha uma opção:</h6>
           <a  title="Gerenciar Marcas" class="collapse-item" href="<?php echo base_url('marcas') ?>"> <i class="fas fa-copyright"></i></i>&nbsp;&nbsp; Marcas</a>
                 <a  title="Gerenciar Produtos" class="collapse-item" href="<?php echo base_url('produtos') ?>"> <i class="fab fa-product-hunt"></i></i>&nbsp;&nbsp; Produtos</a>

                <a  title="Gerenciar Categorias" class="collapse-item" href="<?php echo base_url('categorias') ?>"> <i class="fas fa-layer-group"></i></i>&nbsp;&nbsp; Categorias</a>
          </div>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseQuatro" aria-expanded="true" aria-controls="collapseQuatro">
         
            <i class="fas fa-file-invoice-dollar"></i>
          <span>Financeiro</span>
        </a>
        <div id="collapseQuatro" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Escolha uma opção:</h6>
           <a  title="Gerenciar contas a pagar" class="collapse-item" href="<?php echo base_url('pagar') ?>"> <i class="fas fa-money-bill-alt"></i></i>&nbsp;&nbsp; Contas a pagar</a>

                 <a  title="Gerenciar contas a receber" class="collapse-item" href="<?php echo base_url('receber') ?>"><i class="fas fa-hand-holding-usd"></i></i>&nbsp;&nbsp; Contas a receber</a>

                 <a  title="Gerenciar formas de pagamentos" class="collapse-item" href="<?php echo base_url('modulo') ?>"><i class="fas fa-money-check-alt"></i></i>&nbsp;&nbsp; Formas de pagamento</a>
          </div>
        </div>
      </li>    
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Configurações
      </div>

    

      <!-- O codigo abaixo leva para a pagna de usuários -->
      <li class="nav-item">
        <a title="Gerenciar usuários" class="nav-link" href="<?php echo base_url('usuarios') ?>">
         <i class="fas fa-users"></i>
          <span>Usuários</span></a>
      </li>


      <!-- O codigo abaixo leva para a pagna de sistema -->
      <li class="nav-item">
        <a title="Gerenciar dados do sistema" class="nav-link" href="<?php echo base_url('sistema') ?>">
         <i class="fas fa-cogs"></i>
          <span>Sistema</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">