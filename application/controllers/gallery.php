<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_controller {

  public function index()
  {
    $data['konten']="galleryy";
$this->load->view('template', $data);
	}
}
 ?>
