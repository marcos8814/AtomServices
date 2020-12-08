<?php
  defined('BASEPATH') OR exit('Ação não permitida');

   class produtos extends CI_Controller{
   	  
   	  public function __construct(){

   	  	parent::__construct();


                  if (!$this->ion_auth->logged_in()){
                  	   $this->session->set_flashdata('info','Sua sessão expirou!');
 					   redirect('login');
			    }

          $this->load->model('produtos_model');

			 }
      public function index(){
        		$data = array(
          
               'titulo'=>'Produtos cadastrados',

                'styles'=> array(
                'vendor/datatables/dataTables.bootstrap4.min.css',
               ),

                'scripts'=> array(
                'vendor/datatables/jquery.dataTables.min.js',
                'vendor/datatables/dataTables.bootstrap4.min.js',
                'vendor/datatables/app.js'
                ),
    
  			       'produtos'=> $this->produtos_model->get_all(),
  		        );

  		        //echo'<pre>';
  		        //print_r($data['produtos']);
  		        //exit();

        	     $this->load->view('layout/header', $data);	
        	     $this->load->view('produtos/index');	
        	     $this->load->view('layout/footer');	
       }

          public function edit($produto_id = NULL){
        if (!$produto_id || !$this->core_model->get_by_id('produtos', array('produto_id' => $produto_id))) {
          $this->session->set_flashdata('error', 'produto não encontrado');
          redirect('produtos');
       }else{


              $this->form_validation->set_rules('produto_nome_completo','','trim|required|max_length[200]');

               $this->form_validation->set_rules('produto_cpf','','trim|required|exact_length[14]|callback_valida_cpf');

               $this->form_validation->set_rules('produto_rg','','trim|required|max_length[20]|callback_check_produto_rg');


               $this->form_validation->set_rules('produto_email','','trim|required|valid_email|max_length[50]|callback_check_email');

               $this->form_validation->set_rules('produto_telefone','','trim|required|max_length[15] |callback_check_produto_telefone');

               $this->form_validation->set_rules('produto_celular','','trim|required|max_length[16]|callback_check_produto_celular');

               $this->form_validation->set_rules('produto_cep','','trim|required|exact_length[9]');

               $this->form_validation->set_rules('produto_endereco','','trim|required|max_length[155]');
               $this->form_validation->set_rules('produto_numero_endereco','','trim|max_length[20]');
               $this->form_validation->set_rules('produto_bairro','','trim|required|max_length[45]');
               $this->form_validation->set_rules('produto_complemento','','trim|max_length[145]');
               $this->form_validation->set_rules('produto_cidade','','trim|required|max_length[50]');
               $this->form_validation->set_rules('produto_estado','','trim|required|exact_length[2]');
               $this->form_validation->set_rules('produto_obs','','max_length[500]');


       if ($this->form_validation->run()) {


        
         //o codigo abaixo permite que faça alteração no campo 
         $data = elements(
              array(
                'produto_codigo',
                'produto_nome_completo',
                'produto_cpf',
                'produto_rg',
                'produto_email',
                'produto_telefone',
                'produto_celular',
                'produto_endereco',
                'produto_numero_endereco',
                'produto_complemento',
                'produto_bairro',
                'produto_cep',
                'produto_cidade',
                'produto_estado',
                'produto_ativo',
                'produto_obs',

              ),$this->input->post()
            );
           $data['produto_estado'] = strtoupper($this->input->post('produto_estado'));

             $data = html_escape($data);

             $this->core_model->update('produtos', $data, array('produto_id'=> $produto_id));

             redirect('produtos');
      }else{
                      // Erro de validação

          $data = array(

           'titulo'=>'Atualizar produto',

           'scripts'=> array(
            'vendor/mask/jquery.mask.min.js',
            'vendor/mask/app.js',
          ),

           'produto' => $this->core_model->get_by_id('produtos', array('produto_id' => $produto_id)),

           'marcas' => $this->core_model->get_all('marcas'),

           'categorias' => $this->core_model->get_all('categorias'),

           'fornecedores' => $this->core_model->get_all('fornecedores'),
         );


                  $this->load->view('layout/header', $data);  
                  $this->load->view('produtos/edit'); 
                  $this->load->view('layout/footer');
                }





      }
    }
  }
?>
