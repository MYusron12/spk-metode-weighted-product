<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
  public function getRowEmail($email)
  {
    $query = "select * from user where email = '$email'";
    return $this->db->query($query)->result();
  }
}
