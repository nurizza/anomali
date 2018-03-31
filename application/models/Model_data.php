<?php
/**
* 
*/
class Model_data extends CI_Model
{

	public function insert($table,$data)
	{
		$query = $this->db->insert($table,$data);
		return $query;
	}
	
	public function select($table)
    {
        $query = $this->db->select('*')
                        ->from($table)
                        ->get();
        return $query->result_array();
    }

    public function selects($table)
    {
        $query = $this->db->select('*')
                        ->from($table)
                        ->get();
        return $query->result();
    }
    public function selectnama($table)
    {
        $query = $this->db->select('nama')
                        ->from($table)
                        ->get();
        return $query->result();
    }
    public function select_where($table,$where)
    {
    	$query = $this->db->select('*')
    					->from($table)
    					->where($where)
    					->get();
    	return $query->result_array();
    }

    public function select_wheres($table,$where)
    {
        $query = $this->db->select('*')
                        ->from($table)
                        ->where($where)
                        ->get();
        return $query->result();
    }

    public function select_join($table,$table_join,$join,$table_join2, $join2, $table_join3, $join3,$table_join4,$join4)
    {
    	$query = $this->db->select('*')
                    ->from($table)
                    ->join($table_join, $join, 'inner')
                    ->join($table_join2, $join2, 'inner')
                    ->join($table_join3, $join3, 'inner')
                    ->join($table_join4, $join4, 'inner')
                    ->get();
        return $query->result_array();
    }
    public function select_join_home($table,$table_join,$join,$table_join2, $join2)
    {
        $query = $this->db->select('*')
                    ->from($table)
                    ->join($table_join, $join, 'inner')
                    ->join($table_join2, $join2, 'inner')
                    ->get();
        return $query->result_array();
    }
    public function select_join_where($table,$table_join,$join,$table_join2, $join2, $table_join3, $join3,$table_join4,$join4,$table_join5,$join5, $where)
    {
    	$query = $this->db->select('*')
    					->from($table)
    					->join($table_join, $join, 'inner')
                        ->join($table_join2, $join2, 'inner')
                        ->join($table_join3, $join3, 'inner')
                        ->join($table_join4, $join4, 'inner')
                        ->join($table_join5, $join5, 'inner')
    					->where($where)
    					->get();
    	return $query->result_array();
    }
     public function select_join_where_rapat($table,$table_join,$join,$table_join2, $join2, $table_join3, $join3,$table_join4,$join4,$table_join5,$join5, $table_join6, $join6, $where)
    {
        $query = $this->db->select('*')
                        ->from($table)
                        ->join($table_join, $join, 'inner')
                        ->join($table_join2, $join2, 'inner')
                        ->join($table_join3, $join3, 'inner')
                        ->join($table_join4, $join4, 'inner')
                        ->join($table_join5, $join5, 'inner')
                        ->join($table_join6, $join6, 'inner')
                        ->where($where)
                        ->get();
        return $query->result_array();
    }
    public function select_join_where_SUTT($table,$table_join,$join,$table_join2, $join2, $table_join3, $join3,$table_join4,$join4, $where)
    {
        $query = $this->db->select('*')
                        ->from($table)
                        ->join($table_join, $join, 'inner')
                        ->join($table_join2, $join2, 'inner')
                        ->join($table_join3, $join3, 'inner')
                        ->join($table_join4, $join4, 'inner')
                        ->where($where)
                        ->get();
        return $query->result_array();
    }

    public function update($table,$data)
    {
    	$query = $this->db->set($data)
    					->update($table);
    	return $query;
    }

    public function update_where($table,$data,$where)
    {
    	$query = $this->db->set($data)
    					->where($where)
    					->update($table);
    	return $query;
    }

    public function delete($table)
    {
		$query = $this->db->empty_table($table);
		return $query;
    }

    public function delete_where($table,$where) 
    {
    	$query = $this->db->where($where)
                      ->delete($table);
    	return $query;
    }
    public function getuser($id)
    {
        $query = $this->db->query("SELECT * FROM pegawai WHERE id = '$id'");
        return $query->row();
    }
    public function hapususer($id)
    {
        $query = $this->db->query("DELETE FROM pegawai WHERE id = '$id'");
        return $query;
    }
    public function aktivasiuser($a, $i)
    {
        $query = $this->db->query("UPDATE pegawai SET aktivasi = '$a' WHERE id = '$i'");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
     public function getanomali($id)
    {
        $query = $this->db->join('basecamp', 'basecamp.id = anomali.basecamp')
                          ->join('gardu_induk', 'gardu_induk.id = anomali.gardu_induk')
                          ->join('bay', 'bay.id = anomali.tempat')
                          ->join('peralatan_ano_bay', 'peralatan_ano_bay.id_alat = anomali.peralatan')
                          ->join('ano', 'ano.id = anomali.jenis_anomali')
                          ->where('id_anomali', $id)
                          ->get('anomali')
                          ->row();
        return $query;
    }
    public function getanomali_sutt($id)
    {
         $query = $this->db->join('basecamp', 'basecamp.id = anomali.basecamp')
                          ->join('gardu_induk', 'gardu_induk.id = anomali.gardu_induk')
                          ->join('sutet', 'sutet.id = anomali.tempat')
                          ->join('ano_sutet', 'ano_sutet.id = anomali.jenis_anomali')
                          ->where('id_anomali', $id)
                          ->get('anomali')
                          ->row();
        return $query;
    }
    public function hapusanomali($id)
    {
        $query = $this->db->query("DELETE FROM anomali WHERE id_anomali = '$id'");
        return $query;
    }
}
?>