<?php 

  defined('BASEPATH')OR exit('Ação não permitida');

  class Usuarios extends CI_Controller{
  	
  	 public function __construct(){
  		parent::__construct();

      //Definir se ha sessão

  	}

  	public function index(){
  		$data = array(
          
         'titulo'=>'Usuários cadastrados',

         'styles'=> array(
          'vendor/datatables/dataTables.bootstrap4.min.css',
         ),

          'scripts'=> array(
              'vendor/datatables/jquery.dataTables.min.js',
              'vendor/datatables/dataTables.bootstrap4.min.js',
              'vendor/datatables/app.js'
          ),

  			'usuarios'=> $this->ion_auth->users()->result(),
  		);
         
       //  echo '<pre>';
         //print_r($data['usuarios']);
         //exit();

  		$this->load->view('layout/header', $data);
  		$this->load->view('usuarios/index');
  		$this->load->view('layout/footer');
  	}
    
    public function edit($usuario_id = NULL) {

      if (!$usuario_id || !$this->ion_auth->user($usuario_id)->row()) {
        
        $this->session->set_flashdata('error','Usuário não encontrado!');
        redirect('usuarios');
      } else {

         /* [first_name] => Admin
          [last_name] => istrator
          [email] => admin@admin.com
          [username] => administrator
          [active] => 1
          [perfil_usuario] => 1
          [password] => 
          [confirme_password] => 
          [usuario_id] => 1
        */
      
        //o codigo abaixo verifica o debug no sistema
       /*echo '<pre>' ;
       print_r($this->input->post());
       exit();*/


        
         //O CODIGO ABAIXO É RESPOSAVEL POR FAZER O ANTIGO SELECT*FROM NO BANCO DE DADOS!!
        $this->form_validation->set_rules('first_name','','trim|required');//validando o campo nome do usuário
        $this->form_validation->set_rules('last_name','','trim|required');//validando o campo sobrenome do usuário
        $this->form_validation->set_rules('email','','trim|required');//validando o campo email do usuário
        $this->form_validation->set_rules('username','','trim|required');//validando o campo usuário do usuário
        $this->form_validation->set_rules('password','','trim|required');//validando o campo usuário do usuário
        $this->form_validation->set_rules('confirme_password','','trim|required');//validando o campo usuário do usuário
        
        




        if ($this->form_validation->run()) {
          
             exit('Validado');

        }else{
            
          $data = array(
         'titulo'=> 'Editar usuário',
          //o codigo abaixo busca o usuário no banco de dados
         'usuario'=> $this->ion_auth->user($usuario_id)->row(),
          //o codigo abaixo busca o perfil do usuario no banco de dados
         'perfil_usuario'=> $this->ion_auth->get_users_groups($usuario_id)->row(),
           );

             $this->load->view('layout/header', $data);
             $this->load->view('usuarios/edit');
             $this->load->view('layout/footer');

        }

      }
    }
  }
?>  	
