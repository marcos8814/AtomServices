<?php 
 defined('BASEPATH') OR exit('Ação não permitida');
  /**
   * 
   */
  class Core_model extends CI_Model
  {
  	//condição de passar todos os dados de uma tabela
  	public function get_all($tabela = Null, $condicao = Null){
  	
  		if ($tabela) {
  			if (is_array($condicao)) {

  				$this->db->where($condicao);  			}
  		}
  		return $this->db->get($tabela)->result();
      } else{
      	return FALSE;
      }
  	
  	
    //
  	public function get_by_id($tabela = Null, $condicao = Null){
  		if ($tabela && is_array($condicao)) {

  			$this->db->where($condicao);
  			$this->db->limit(1);

  			return $this->db->get($tabela)->row();
  		}else{
  			return FALSE;
  		}
  	}
    //função para inserir dados na tabela
  	public function insert($tabela =Null, $data = Null, $get_last_id = null){
  		if ($tabela && is_array($data)) {

  			$this->db->insert($tabela, $data);

  			if($get_last_id){
  				$this->session->set_userdata('last_id',$this->db->insert_id());
  			}
           if ($this->db->affected_rows()>0) {
	        $this->session->set_flashdata('sucesso','Dados salvos com sucesso');
          } else {
	        $this->session->set_flashdata('error','erro ao salvar dados no banco de dados');
         }

  		}
  	}

      //função para altera dados na tabela
    public function update($tabela = Null, $data = null, $condicao = Null)
    {
    	if ($tabela && is_array($data)&& is_array($condicao)) {
    		
    		if ($this->db->update($tabela, $data, $condicao)) {

    			$this->session->set_flashdata('sucesso','Dados salvos com sucesso');
    		}else{
    			$this->session->set_flashdata('error','Error ao atualizar os dados');
    	}else{
    			return FALSE;
    		}
    	}
    }
   //função para deletar dados na tabela
    public function delete($tabela = Null, $condicao = null){
    
     $this->db->db_debug= FALSE;


    	if ($tabela && is_array($condicao))  {

    		$status = $this->db->($tabela, $condicao);

    		$error = $this->db->error();

            if (!$status) {
            	foreach ($error as $code) {
            		if($code ==1451){
            			$this->session->set_flashdata('erro','Esse registro nao poder ser deletado pois esta sendo usado em outra tabela');
            		}
            	}
            }else{
            	$this->session->set_flashdata('sucesso', 'Registro excluido com sucesso');
            }
    		
    		$this->db->db_debug= TRUE;

    	}else{
            return FALSE;
    	}
        
    }

 } 
?>