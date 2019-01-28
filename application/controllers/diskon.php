<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class diskon extends CI_controller {

  public function index()
  {
    $data['konten']="diskon";
$this->load->view('template', $data);
	}
}
 ?>
