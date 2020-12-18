<?php
  defined('BASEPATH') OR exit('Ação não permitida');

   class pagar extends CI_Controller{
   	  
   	  public function __construct(){

   	  	parent::__construct();


                  if (!$this->ion_auth->logged_in()){
                  	   $this->session->set_flashdata('info','Sua sessão expirou!');
 					   redirect('login');
			    }

			 }
       //o codigo abaixo lista as pagar na tabela
      public function index(){
        		$data = array(
          
               'titulo'=>'Contas a pagar cadastrados',

                'styles'=> array(
                'vendor/datatables/dataTables.bootstrap4.min.css',
               ),

                'scripts'=> array(
                'vendor/datatables/jquery.dataTables.min.js',
                'vendor/datatables/dataTables.bootstrap4.min.js',
                'vendor/datatables/app.js'
                ),
    
  			    'contas_pagar'=> $this->core_model->get_all('contas_pagar'),
  		        );

        	     $this->load->view('layout/header', $data);	
        	     $this->load->view('pagar/index');	
        	     $this->load->view('layout/footer');	
       }

     }
?>