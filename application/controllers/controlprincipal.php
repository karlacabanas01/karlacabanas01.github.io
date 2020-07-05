<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controlprincipal extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('principal');
	}
//  fijate en los nombres, repseta las mayusculas y minusculas
}
?>