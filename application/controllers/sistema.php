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

          if (!$this->ion_auth->is_admin()) {
           $this->session->set_flashdata('info','Você não tem permissão para acessar este menu Sistema!');
           redirect('/');
          }
      
         

		   	}

		   	public function index(){
		   		
            $data = array(
              'titulo' => 'Editar inrformações do sistema',
             //o codigo abaixo coloca a maskara nos campo destinados.
             'scripts'=> array(
             	'vendor/mask/jquery.mask.min.js',
             	'vendor/mask/app.js',
             ),

              'sistema' => $this->core_model->get_by_id('sistema', array('sistema_id' => 1)),
            );

           
            //o codigo abaixo verifica se os dados cadastrados estão de conformidade com cada campo
            $this->form_validation->set_rules('sistema_razao_social','Razão Social','required|min_length[5]|max_length[145]');
            $this->form_validation->set_rules('sistema_nome_fantasia','Nome Fantasia','required|min_length[5]|max_length[145]');
            $this->form_validation->set_rules('sistema_cnpj','','required|exact_length[18]');
            $this->form_validation->set_rules('sistema_ie','Inscrição Estadual','required|max_length[25]');
            $this->form_validation->set_rules('sistema_telefone_fixo','','required|max_length[25]');
            $this->form_validation->set_rules('sistema_telefone_movel','','required|max_length[25]');
            $this->form_validation->set_rules('sistema_email','','required|valid_email|max_length[100]');
            $this->form_validation->set_rules('sistema_site_url','URL do site','required|valid_url|max_length[100]');
            $this->form_validation->set_rules('sistema_cep','CEP','required|exact_length[9]');
            $this->form_validation->set_rules('sistema_endereco','','required|max_length[145]');
            $this->form_validation->set_rules('sistema_numero','Numero','max_length[25]');
            $this->form_validation->set_rules('sistema_cidade','Cidade','required|max_length[45]');
            $this->form_validation->set_rules('sistema_estado','UF','required|exact_length[2]');
            $this->form_validation->set_rules('sistema_txt_ordem_servico','Texto da ordem de serviço e senha','max_length[500]');
            
            if ( $this->form_validation->run()) {
	            
	       
				    //o codigo abaixo faz o update(Editar) no banco de dados.
				    $data = elements(
                       
                       
                       array(
                       'sistema_razao_social', 
                       'sistema_nome_fantasia',
                       'sistema_cnpj',
                       'sistema_ie',
                       'sistema_telefone_fixo',
                       'sistema_telefone_movel',
                       'sistema_email',
                       'sistema_site_url',
                       'sistema_cep',
                       'sistema_endereco',
                       'sistema_numero',
                       'sistema_cidade',
                       'sistema_estado',
                       'sistema_txt_ordem_servico',
                       ), $this->input->post()
				       );


                  $data = html_escape($data);

                  $this->core_model->update('sistema',$data,array('sistema_id'=>1));
                  
                  redirect('sistema');

            }else{

               //Erro de validação

             $this->load->view('layout/header', $data);
             $this->load->view('sistema/index');
             $this->load->view('layout/footer');
		   	
              }
            
          }
      
      }
?>
