<?php
  defined('BASEPATH') OR exit('Ação não permitida');

   class categorias extends CI_Controller{
   	  
   	  public function __construct(){

   	  	parent::__construct();


                  if (!$this->ion_auth->logged_in()){
                  	   $this->session->set_flashdata('info','Sua sessão expirou!');
 					   redirect('login');
			    }

			 }
       //o codigo abaixo lista as categorias na tabela
      public function index(){
        		 redirect('/');
       }

       public function produtos()
       {
         
         if (!$this->input>is_ajax_request()) {
            exit('Ação não permitida!');
         }else{
            $busca = $this->input->post('tem');
            $data['response'] = 'false';

            $query = $this->core_model->auto_complete_produtos($busca);
            
             if ($query) {
                 
                 $data['response'] = 'true';
                 $data['message'] = array();

                 foreach ($query as $row) {
                   
                   $data['message'][]=array(
                     'id' => $row->produto_id,
                     'value'=> $row->produto_descrição,
                     'produto_preco_venda'=> $row->produto_preco_venda,
                     'produto_qtde_estoque' =>$row->produto_qtde_estoque,

                   );

                 }

                 echo json_encode($data);
               }else{
                 echo json_encode($data);

               }
         }
       }
     }
  ?>