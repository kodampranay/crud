<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
public function get_user()
{
    return $this->db->get('crud')->result();
}
}
?>