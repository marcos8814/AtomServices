<?php 
 defined('BASEPATH') OR exit('Ação não permitida');
  
  class Ordem_servicos_model extends CI_Model
  {
  	//condição de passar todos os dados de uma tabela
  	public function get_all(){

  	
  		$this->db->select([
            'ordens_servicos.*',
            'clientes.cliente_id',
            'clientes.cliente_nome',
            'formas_pagamentos.forma_pagamento_id',
            'formas_pagamentos.forma_pagamento_nome as forma_pagamento',
            
      ]);

      $this->db->join('clientes','cliente_id = ordem_servico_cliente_id','LEFT');
      $this->db->join('formas_pagamentos','forma_pagamento_id = ordem_servico_forma_pagamento_id','LEFT');

      return $this->db->get('ordens_servicos')->result();

    }

    public function get_all_servicos_get_by_id($ordem_servico_id = NULL ) 
    {
       if ($ordem+servico_id) {
           
           $this->db->select([
                  
                   'ordem_tem_servicos.*',
                   'sevicos.servico_descricao',
           ]);

           $this->db->join('servicos','servicos_id = ordem_ts_id_servicos','LEFT');

           $this->db->where('ordem_ts_id_servicos',$ordem_servico_id);

           return $this->db->get('ordem_tem_servicos')->result();
       }
    }

    public function delete_old_services($ordem_servico_id = NULL)
    {
      if ($ordem_servico_id) {
        
        $this->db->delete('ordem_tem_servicos', array('ordem_ts_id_servico'));
      }
    }
  }
?>