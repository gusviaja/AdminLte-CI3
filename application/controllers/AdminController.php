<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

public function painel(){
	$this->load->templateAdmin("Admin/painel");

}


}