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

  public function edit($produto_id = NULL) {

        if (!$produto_id || !$this->core_model->get_by_id('produtos', array('produto_id' => $produto_id))) {
         
          $this->session->set_flashdata('error', 'produto não encontrado');

          redirect('produtos');
      
       }else{


              $this->form_validation->set_rules('produto_descricao','','trim|required|min_length[3]|max_length[145]|callback_check_produto_descricao');

               $this->form_validation->set_rules('produto_unidade','Unidade','trim|required|min_length[2]|max_length[5]');

               $this->form_validation->set_rules('produto_preco_custo','Preço de custo','trim|required|max_length[45]');

                $this->form_validation->set_rules('produto_preco_venda','Preço de venda','trim|required|max_length[45]|callback_check_produto_preco_venda');

                $this->form_validation->set_rules(' produto_estoque_minimo','Estoque minimo','trim|greater_than_equal_to[0]');

                 $this->form_validation->set_rules('produto_qtde_estoque','Quantidade em estoque','trim|greater_than_equal_to[0]|required');

                  $this->form_validation->set_rules('produto_obs','Observação','trim|max_length[200]');

       if ($this->form_validation->run()) {

           $data = elements(
              array(

                'produto_codigo',
                'produto_categoria_id',
                'produto_marca_id',
                'produto_fornecedor_id',
                'produto_descricao',
                'produto_unidade',
                'produto_unidade',
                'produto_preco_custo',
                'produto_preco_venda',
                'produto_estoque_minimo',
                'produto_estoque_minimo',
                'produto_qtde_estoque',
                'produto_ativo',
                'produto_obs',

                
              ),$this->input->post()
            );

             $data = html_escape($data);

             $this->core_model->update('produtos', $data, array('produto_id' => $produto_id));

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

     public function check_produto_descricao ($produto_descricao)
    {
      $produto_id = $this->input->post('produto_id');

      if($this->core_model->get_by_id('produtos',array('produto_descricao'=>$produto_descricao,'produto_id !=' => $produto_id))){

          $this->form_validation->set_message('check_produto_descricao', 'Este produto já existe');
        
        return FALSE; 

      }else{
        return TRUE; 

      }
    }
    public function check_produto_preco_venda ($produto_preco_venda)
    {
      $produto_preco_custo = $this->input->post('produto_preco_custo');

      if($produto_preco_custo > $produto_preco_venda){

          $this->form_validation->set_message('check_produto_preco_venda', 'O preço de custo deve ser maior que o preço de venda');
        
        return FALSE; 

      }else{
        return TRUE; 

      }
    }
  }
?>
