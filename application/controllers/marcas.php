<?php
  defined('BASEPATH') OR exit('Ação não permitida');

   class marcas extends CI_Controller{
   	  
   	  public function __construct(){

   	  	parent::__construct();


                  if (!$this->ion_auth->logged_in()){
                  	   $this->session->set_flashdata('info','Sua sessão expirou!');
 					   redirect('login');
			    }

			 }
       //o codigo abaixo lista as marcas na tabela
      public function index(){
        		$data = array(
          
               'titulo'=>'Marca cadastrados',

                'styles'=> array(
                'vendor/datatables/dataTables.bootstrap4.min.css',
               ),

                'scripts'=> array(
                'vendor/datatables/jquery.dataTables.min.js',
                'vendor/datatables/dataTables.bootstrap4.min.js',
                'vendor/datatables/app.js'
                ),
    
  			    'marcas'=> $this->core_model->get_all('marcas'),
  		        );

        	     $this->load->view('layout/header', $data);	
        	     $this->load->view('marcas/index');	
        	     $this->load->view('layout/footer');	
       }

        public function add(){
        

              $this->form_validation->set_rules('marca_nome','','trim|required|max_length[145]|is_unique[marcas.marca_nome]');


       if ($this->form_validation->run()) {


        
         //o codigo abaixo permite que faça alteração no campo 
         $data = elements(
              array(
                'marca_nome',
               
                'marca_ativa',   
                
              ),$this->input->post()
            );

             $data = html_escape($data);

             $this->core_model->insert('marcas', $data);

             redirect('marcas');
      }else{
                      // Erro de validação

          $data = array(

           'titulo'=>'Cadastrar marcas',

           'scripts'=> array(
            'vendor/mask/jquery.mask.min.js',
            'vendor/mask/app.js',
          ),

         );


                  $this->load->view('layout/header', $data);  
                  $this->load->view('marcas/add'); 
                  $this->load->view('layout/footer');
                }
      }
    

       public function edit($marca_id = NULL){
            if (!$marca_id || !$this->core_model->get_by_id('marcas', array('marca_id'  => $marca_id))) {
               $this->session->set_flashdata('error', 'marca não encontrado');
                redirect('marcas');
              }else{


              $this->form_validation->set_rules('marca_nome','','trim|required|max_length[145]|callback_check_nome_marca');



            if ($this->form_validation->run()) {

                 $categoria_ativa = $this->input->post('marca_ativa');
                //o codigo abaixo verifica não permite a desativação de uma categoria, se a tabela produto estiver ultizando
                if ($this->db->table_exists('marcas')) {
                  
                   if ($marca_ativa == 0 && $this->core_model->get_by_id('produtos', 
                     array('produto_marca_id' => $marca_id, 'produto_ativo' => 1))) {
                           $this->session->set_flashdata('error','Esta marca não poder ser desativada, pois está sendo ultilizada em produtos');
                           redirect('marcas');
                       }
                }
        
             //o codigo abaixo permite que faça alteração no campo 
             $data = elements(
              array(
                'marca_nome',
                'marca_ativa',
                
              ),$this->input->post()
            );

             $data = html_escape($data);

             $this->core_model->update('marcas', $data, array('marca_id'=> $marca_id));

             redirect('marcas');
              }else{
                      // Erro de validação

              $data = array(

               'titulo'=>'Atualizar Marca',

                'scripts'=> array(
                'vendor/mask/jquery.mask.min.js',
                'vendor/mask/app.js',
              ),

                'marca' => $this->core_model->get_by_id('marcas', array('marca_id' => $marca_id)),
             );


                  $this->load->view('layout/header', $data);  
                  $this->load->view('marcas/edit'); 
                  $this->load->view('layout/footer');
        }
      }
    }

    public function check_nome_marca ($marca_nome)
       {
        $marca_id = $this->input->post('marca_id');
  
          if($this->core_model->get_by_id('marcas',array('marca_nome'=>$marca_nome,'marca_id !=' => $marca_id))){

          $this->form_validation->set_message('check_nome_marca', 'Esta marca já existe');
        
        return FALSE; 

         }else{
           return TRUE; 

         }
       }
    public function del($marca_id='NULL'){
      
      if (!$marca_id||!$this->core_model->get_by_id('marcas',array('marca_id'=>$marca_id))) {
        
        $this->session->set_flashdata('error,','marca não encontrado');
        redirect('marcas');
      }else{
         $this->core_model->delete('marcas', array('marca_id'=>$marca_id));
         redirect('marcas');
      }
    }

     }
  ?>