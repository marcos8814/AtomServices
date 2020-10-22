<?php
  defined('BASEPATH') OR exit('Ação não permitida');

   class clientes extends CI_Controller{
   	  
   	  public function __construct(){

   	  	parent::__construct();


                  if (!$this->ion_auth->logged_in()){
                  	   $this->session->set_flashdata('info','Sua sessão expirou!');
 					   redirect('login');
			    }

			 }
      public function index(){
        		$data = array(
          
               'titulo'=>'Clientes cadastrados',

                'styles'=> array(
                'vendor/datatables/dataTables.bootstrap4.min.css',
               ),

                'scripts'=> array(
                'vendor/datatables/jquery.dataTables.min.js',
                'vendor/datatables/dataTables.bootstrap4.min.js',
                'vendor/datatables/app.js'
                ),
    
  			    'clientes'=> $this->core_model->get_all('clientes'),
  		        );

  		        //echo'<pre>';
  		        //print_r($data['clientes']);
  		        //exit();

        	     $this->load->view('layout/header', $data);	
        	     $this->load->view('clientes/index');	
        	     $this->load->view('layout/footer');	
       }
      //o codigo abaixo e responsavel por editar o usuário 
         public function edit ($cliente_id = NULL){ 

       	  if (!$cliente_id || !$this->core_model->get_by_id('clientes', array('cliente_id '=> $cliente_id))) {

       	  	  $this->session->set_flashdata('error', 'Cliente não encontrado');

               redirect('clientes');
       	  }else{

       	  	/**
       	  	* [cliente_id] => 1
            [cliente_data_cadastro] => 2020-10-17 22:18:17
            [cliente_tipo] => 1
            [cliente_nome] => Maria 
            [cliente_sobrenome] => Alencar
            [cliente_data_nascimento] => 2009-05-01
            [cliente_cpf_cnpj] => 120.866.990-77
            [cliente_rg_ie] => 10.427.416-5
            [cliente_email] => 
            [cliente_telefone] => 
            [cliente_celular] => 
            [cliente_cep] => 
            [cliente_endereco] => 
            [cliente_numero_endereco] => 
            [cliente_bairro] => 
            [cliente_complemento] => 
            [cliente_cidade] => 
            [cliente_estado] => 
            [cliente_ativo] => 0
            [cliente_obs] =>
       	  	*/
             
             $this->form_validation->set_rules('cliente_nome','','trim|requerid|min_lengt[4]|max_length[45]');
             $this->form_validation->set_rules('cliente_sobrenome','','trim|requerid|min_lengt[4]|max_length[150]');
             $this->form_validation->set_rules('cliente_data_nascimento','','requerid');
             $this->form_validation->set_rules('cliente_cpf_cnpj','','trim|requerid|exact_length[18]');
             $this->form_validation->set_rules('cliente_rg_ie','','trim|requerid|max_length[20]');
             $this->form_validation->set_rules('cliente_email','','trim|requerid|valid_email|max_length[50]');
             $this->form_validation->set_rules('cliente_telefone','','trim|max_lenget[14]');
             $this->form_validation->set_rules('cliente_celular','','trim|max_lenget[15]');
             $this->form_validation->set_rules('cliente_cep','','trim|requerid|exact_length[9]');
             $this->form_validation->set_rules('cliente_endereco','','trim|requerid|exact_length[155]');
             $this->form_validation->set_rules('cliente_numero_endereco','','trim|max_length[20]');
             $this->form_validation->set_rules('cliente_bairro','','trim|requerid|max_length[45]');
             $this->form_validation->set_rules('cliente_complemento','','trim|max_length[145]');
             $this->form_validation->set_rules('cliente_cidade','','trim|requerid|max_length[50]');
             $this->form_validation->set_rules('cliente_estado','','trim|requerid|exact_length[2]');
             $this->form_validation->set_rules('cliente_obs','','max_length[500]');

             if ($this->form_validation->run()) {

             	echo'<pre>';
             	print_r($this->input->post());
             	exit();

             }else{
             	//erro de validação
             		$data = array(
          
               'titulo'=>'Atualizar cliente',

               'scripts'=> array(
             	'vendor/mask/jquery.mask.min.js',
             	'vendor/mask/app.js',
               ),

              'cliente' => $this->core_model->get_by_id('clientes', array('cliente_id' => $cliente_id)),
  		      );

  		        //echo'<pre>';
  		        //print_r($data['cliente']);
  		        //exit();

        	     $this->load->view('layout/header', $data);	
        	     $this->load->view('clientes/edit');	
        	     $this->load->view('layout/footer');
             }

       	  }
       }
    
    }

?>