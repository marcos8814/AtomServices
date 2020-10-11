<?php 

   defined('BASEPATH') OR exit('Ação não permitida');
     

	   class Sistema extends CI_Controller{
	   	
		   	 public function __construct()
		   	{
		   		parent::__construct();

                  if (!$this->ion_auth->logged_in()){
                  	 $this->session->set_flashdata('info','Sua sessão expirou!');
			       redirect('login');
			    }
  

		   	}

		   	public function index(){
		   		
            $data = array(
              'titulo' => 'Editar inrformações do sistema',
              'sistema' => $this->core_model->get_by_id('sistema', array('sistema_id' => 1)),
            );

           /*
		            [sistema_id] => 1
				    [sistema_razao_social] => Atom
				    [sistema_nome_fantasia] => AtomServices
				    [sistema_cnpj] => 37.395.401/0001-06
				    [sistema_ie] => 
				    [sistema_telefone_fixo] => 
				    [sistema_telefone_movel] => 
				    [sistema_email] => atom@gmail.com
				    [sistema_site_url] => www.atom.com.br
				    [sistema_cep] => 69086-560
				    [sistema_endereco] => Rua dordeiro 
				    [sistema_numero] => 22
				    [sistema_cidade] => Manaus
				    [sistema_estado] => Am
				    [sistema_txt_ordem_servico] => 
				    [sistema_data_alteracao] => 2020-10-08 21:39:28
		           *
           */
            
           // echo '<pre>';
            //print_r($data['sistema']);
            //exit();

             $this->load->view('layout/header', $data);
             $this->load->view('sistema/index');
             $this->load->view('layout/footer');
		   	}

    }
?>
