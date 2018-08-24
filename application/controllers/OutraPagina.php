<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OutraPagina extends CI_Controller {

	public function mostra(){
		var_dump(session_id());echo "< -- sessao id </br>";

			
			if (isset($_SESSION['USER'])): 
				var_dump($_SESSION['USER']); 
			endif;
			echo session_status();echo "< -- status da sessao";

			
	}
}