<?php defined('BASEPATH') or exit('Ação não permitida');

class Core_model extends CI_Model
{
    public function insert($table, $data)
    {        
        $this->db->insert($table, $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {            
            return FALSE;
        }        
    }
    

    public function update($table, $data, $campo, $id)
    {        
        $this->db->where($campo, $id);
        $this->db->update($table, $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {            
            return FALSE;
        }                
    }

    public function delete($table, $campo, $id)
    {        
        $this->db->where($campo, $id);
        $this->db->delete($table);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {            
            return FALSE;
        }        
    }

        
    public function get_all($table)
    {        
        $query = $this->db->get($table);                
        return $query->result();
    }  
}
