<?php
  defined('BASEPATH') OR exit('Ação não permitida');

   class fornecedores extends CI_Controller{
   	  
   	  public function __construct(){

   	  	parent::__construct();


                  if (!$this->ion_auth->logged_in()){
                  	   $this->session->set_flashdata('info','Sua sessão expirou!');
 					   redirect('login');
			}

		}

		public function index(){
        		$data = array(
          
               'titulo'=>'Fornecedores cadastrados',

                'styles'=> array(
                'vendor/datatables/dataTables.bootstrap4.min.css',
               ),

                'scripts'=> array(
                'vendor/datatables/jquery.dataTables.min.js',
                'vendor/datatables/dataTables.bootstrap4.min.js',
                'vendor/datatables/app.js'
                ),
    
  			    'fornecedores'=> $this->core_model->get_all('fornecedores'),
  		        );

  		        //echo'<pre>';
  		        //print_r($data['fornecedores']);
  		        //exit();

        	     $this->load->view('layout/header', $data);	
        	     $this->load->view('fornecedores/index');	
        	     $this->load->view('layout/footer');	
        }
         //o codigo abaixo verifica se o fornecedor se encontra cadastrado no banco de dados 
        // caso não esteja ele envia uma messagem de erro .
        public function edit($fornecedor_id = NULL){
        	if (!$fornecedor_id || !$this->core_model->get_by_id('fornecedores', array('fornecedor_id' => $fornecedor_id))) {
        		$this->session->set_flashdata('error', 'Fornecedor não encontrado');
        		redirect('fornecedores');
        	}else{

        		$data = array(
          
               'titulo'=>'Atualizar fornecedor',

                'scripts'=> array(
              	   'vendor/mask/jquery.mask.min.js',
             	     'vendor/mask/app.js',
               ),

              'fornecedor' => $this->core_model->get_by_id('fornecedores', array('fornecedor_id' => $fornecedor_id)),
  		      );

                //echo '<pre>';
                //print_r($data['fornecedor']);
                //exit();

                /**[fornecedor_id] => 1
			    [fornecedor_data_cadastro] => 2020-11-10 16:53:34
			    [fornecedor_razao] => eletrônica carmen componentes LTDA
			    [fornecedor_nome_fantasia] => eletrônica inc
			    [fornecedor_cnpj] => 89.101.700/0001-86
			    [fornecedor_ie] => 18.368.116-9
			    [fornecedor_telefone] => 9236449178
			    [fornecedor_celular] => 92988143535
			    [fornecedor_email] => eletronica@gmail.com
			    [fornecedor_contato] => fulano de tal
			    [fornecedor_cep] => 69000000
			    [fornecedor_endereco] => rua teste 
			    [fornecedor_numero_endereco] => 33
			    [fornecedor_bairro] => teste
			    [fornecedor_complemento] => teste do teste 
			    [fornecedor_cidade] => manaus
			    [fornecedor_estado] => am
			    [fornecedor_ativo] => 1
			    [fornecedor_obs] => 
			    [fornecedor_data_alteracao] => 2020-11-10 16:53:34

                 */

        		$this->load->view('layout/header', $data);	
        	    $this->load->view('fornecedores/edit');	
        	    $this->load->view('layout/footer');
        		
        	}
        }
	}
?>

