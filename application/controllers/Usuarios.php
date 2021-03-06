<?php 

  defined('BASEPATH')OR exit('Ação não permitida');

  class Usuarios extends CI_Controller{
  	
  	 public function __construct(){
  		parent::__construct();

      if (!$this->ion_auth->logged_in()){
             $this->session->set_flashdata('info','Sua sessão expirou!');
             redirect('login');
          }

  	}

  	public function index(){

      //o codigo abaixo verificar de o perfil e de admin, se for vendendor ele enibe a função index
          if (!$this->ion_auth->is_admin()) {
           $this->session->set_flashdata('info','Você não tem permissão para acessar este menu Usuários!');
           redirect('home');
          }
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
         
      
  		$this->load->view('layout/header', $data);
  		$this->load->view('usuarios/index');
  		$this->load->view('layout/footer');
  	}
     // a função abaixo adiciona um novo usuário no banco de dados
    public function add(){
      //o codigo abaixo verificar de o perfil e de admin, se for vendendor ele enibe a função add
          if (!$this->ion_auth->is_admin()) {
           $this->session->set_flashdata('info','Você não tem permissão para acessar este menu Usuários!');
           redirect('/');
          }

          //O CODIGO ABAIXO É RESPOSAVEL POR FAZER O ANTIGO  INSERT*FROM NO BANCO DE DADOS(Cadastrar)!!
        $this->form_validation->set_rules('first_name','','trim|required');//validando o campo nome do usuário
        $this->form_validation->set_rules('last_name','','trim|required');//validando o campo sobrenome do usuário
        $this->form_validation->set_rules('email','','trim|required|valid_email|is_unique[users.email]');//codigo  verifica se o campo email ja existe  no banco de dados
        $this->form_validation->set_rules('username','','trim|required|is_unique[users.username]');//codigo  verifica se o campo username ja existe  no banco de dados
        $this->form_validation->set_rules('password','Senha','required|min_length[5]|max_length[255]');//validando o campo usuário do usuário
        $this->form_validation->set_rules('confirme_password','Confirme','matches[password]');//validando o campo usuário do usuário

        if ($this->form_validation->run()) {
          
          $username = $this->security->xss_clean($this->input->post('username'));
          $password = $this->security->xss_clean($this->input->post('password'));
          $email = $this->security->xss_clean($this->input->post('email'));
         
          $additional_data = array(
            'username'=> $this->input->post('username'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'active' => $this->input->post('active'),
         );
          
          $group = array($this->input->post('perfil_usuario'));

           $additional_data = $this->security->xss_clean($additional_data);

           $group = $this->security->xss_clean($group);

           
         if ($this->ion_auth->register($username, $password, $email, $additional_data, $group)) {
           
           $this->session->set_flashdata('Sucesso','Dados salvos com sucesso');

         }else{

          $this->session->set_flashdata('error','Error ao salvar os dados');

         }
           
          redirect('usuarios');

        }else{

         //Error de validação

             $data = array(

         'titulo'=> 'Cadastrar usuário',
           );


            $this->load->view('layout/header', $data);
            $this->load->view('usuarios/add');
            $this->load->view('layout/footer');
        }

     }
        
    
    public function edit($usuario_id = NULL) {
     //Este codigo um usuário que não é admim não pode edita o usuário diferente do seu pelo http:
      if (!$this->ion_auth->is_admin()) {
        
        if (($this->session->userdata('user_id') != $usuario_id)) {
            $this->session->set_flashdata('info','Você não pode edital um usuário diferente do seu!');
             redirect('/');
         }


      }
      
        //fim do codigo  

      if (!$usuario_id || !$this->ion_auth->user($usuario_id)->row()) {
        
        $this->session->set_flashdata('error','Usuário não encontrado!');
        redirect('usuarios');
      } else {

     

         //O CODIGO ABAIXO É RESPOSAVEL POR FAZER O ANTIGO SELECT*FROM NO BANCO DE DADOS(Alterar)!!
        $this->form_validation->set_rules('first_name','','trim|required');//validando o campo nome do usuário
        $this->form_validation->set_rules('last_name','','trim|required');//validando o campo sobrenome do usuário
        $this->form_validation->set_rules('email','','trim|required|valid_email|callback_email_check');//codigo  verifica se o campo email ja existe  no banco de dados
        $this->form_validation->set_rules('username','','trim|required|callback_username_check');//codigo  verifica se o campo username ja existe  no banco de dados
        $this->form_validation->set_rules('password','Senha','min_length[5]|max_length[255]');//validando o campo usuário do usuário
        $this->form_validation->set_rules('confirme_password','Confirme','matches[password]');//validando o campo usuário do usuário
        
        




        if ($this->form_validation->run()) {

          //echo'<pre>';
          //print_r($this->input->post());
          //exit();
          
            $data = elements(
                
                   array(
                  'first_name',
                  'last_name',
                  'email',
                  'username',
                  'active',
                  'password'

                   ), $this->input->post()
            );
            //o codigo abaixo inibe active se o usuário não for admin
            if (!$this->ion_auth->is_admin()) {
              unset($data['active']);
            }

                 $data = $this->security->xss_clean($data);
                  
                  //o codigo abaixo verifica se foi passado o password
                 $password = $this->input->post('password');
                  
                  if (!$password) {
                    unset($data['password']);
                 }

                 if($this->ion_auth->update($usuario_id, $data)){

                                 
                 $perfil_usuario_db = $this->ion_auth->get_users_groups($usuario_id)->row();

                 $perfil_usuario_post = $this ->input->post('perfil_usuario');
                
                if ($this->ion_auth->is_admin()) {
                   //o codigo abaixo se for diferente, atualizar o grupo!
                  if($perfil_usuario_db->id != $perfil_usuario_post){

                   $this->ion_auth->remove_from_group($perfil_usuario_db->id,$usuario_id);
                   $this->ion_auth->add_to_group($perfil_usuario_post, $usuario_id);

                  }
                 }
              

                $this->session->set_flashdata('sucesso','Dados salvos com sucesso');
           
            }else{
                
                 $this->session->set_flashdata('Error','Error ao salvar os dados');
            }

            //o codigo abaixo verificar de o perfil e de admin, se for vendendor ele enibe a função 
            if ($this->ion_auth->is_admin()) {
            
             redirect('usuarios'); 

           }else{

             redirect('home');

           }

              
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
       //Esta função e reposanvel por deletar os dados de um usuário. 
     public function del($usuario_id = NULL) {

      //o codigo abaixo verificar de o perfil e de admin, se for vendendor ele enibe a função deletar
          if (!$this->ion_auth->is_admin()) {
           $this->session->set_flashdata('info','Você não tem permissão para acessar este menu Usuários!');
           redirect('/');
          }


      if (!$usuario_id || !$this->ion_auth->user($usuario_id)->row()) {
        
        $this->session->set_flashdata('error', 'Usuário não encontrado');
        redirect('usuarios');
      }

      if ($this->ion_auth->is_admin($usuario_id)) {
      
       $this->session->set_flashdata('error', 'Administrador não pode ser excluido');
        redirect('usuarios');
      }

      if ($this->ion_auth->delete_user($usuario_id)) {
        $this->session->set_flashdata('sucesso', 'Usuário excluido com sucesso' );
        redirect('usuarios');
      }else{
        
        $this->session->set_flashdata('error', 'O administrador não pode ser excluido' );
        redirect('usuarios');
       

      }
      

    }
    //codigo abaixo verifica se o e-mail cadastrado ja existe  
    public function email_check($email){

      $usuario_id = $this->input->post('usuario_id');

      if ($this->core_model->get_by_id('users', array('email' => $email, 'id !=' => $usuario_id))) {
           
           $this->form_validation->set_message('email_check', 'Esse e-mail já existe');

           return FALSE;

      }else{

        return TRUE;
      }
    }
     //codigo abaixo verifica se o campo usuario ja existe  
    public function username_check($username){

      $usuario_id = $this->input->post('usuario_id');

      if ($this->core_model->get_by_id('users', array('username' => $username, 'id !=' => $usuario_id))) {
           
           $this->form_validation->set_message('username_check', 'Esse usuário já existe');

           return FALSE;

      }else{

        return TRUE;
      }
    }
    

  }
?>  	
