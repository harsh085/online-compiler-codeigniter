<?php
/**
 *
 */
class Main_model extends CI_Model
{

  function can_login($username , $password)
  {
    // code...
    $this->db->where('usr',$username);
    $this->db->where('pass',$password);
    $query = $this->db->get('user');
    if($query->num_rows() > 0){
      return true;
    }
    else {
      return false;
    }
  }
}

 ?>
