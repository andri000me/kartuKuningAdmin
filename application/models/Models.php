<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models extends CI_Model{

  public function insert($table, $data)
  {
    $this->db->insert($table, $data);
    return $this->db->affected_rows();
  }

  public function delete($table, $where)
  {
    $this->db->where($where);
    $this->db->delete($table);
    return $this->db->affected_rows();
  }

  public function FunctionName($table, $data, $where)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
    return $this->db->affected_rows();
  }

}
