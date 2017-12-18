<?php
class Prescritions_model extends CI_Model{

    public function adicionarPrescricao($data){
        
    $this->db->insert('Prescricoes', $data);
    return ($this->db->affected_rows() == 1 || $this->db->affected_rows() == 0) ? $this->db->insert_id() : false;

    }


}