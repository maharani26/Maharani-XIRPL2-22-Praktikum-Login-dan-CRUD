<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kontak extends CI_controller {

  public function index()
  {
    $data['konten']="kontak";
$this->load->view('template', $data);
	}
}
 ?>
