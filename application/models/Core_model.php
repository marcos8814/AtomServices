<?php 
 defined('BASEPATH') OR exit('Ação não permitida');
  /**
   * 
   */
  class Core_model extends CI_Model
  {
  	
  	public function get_all($tabela = Null, $condicao = Null)
  	{
  		if ($tabela) {
  			if (is_array($condicao)) {

  				$this->db->where($condicao);  			}
  		}
  		return $this->db->get($tabela)->result();
      } else{
      	return FALSE;
      }
  	
  	}

  	public function get_by_id($tabela = Null, $condicao = Null){
  		if ($tabela && is_array($condicao)) {

  			$this->db->where($condicao);
  			$this->db->limit(1);

  			return $this->db->get($tabela)->row();
  		}else{
  			return FALSE;
  		}
  	}

  	public function insert($tabela =Null, $data = Null, $get_last_id = null){
  		if ($tabela && is_array($data)) {
  			$this->db->insert($tabela, $data);

  			if($get_last_id){
  				$this->sess
  			}
  		}
  	}
  }
?>