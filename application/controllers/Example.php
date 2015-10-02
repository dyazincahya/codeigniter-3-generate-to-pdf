<?php
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class Example extends CI_Controller {
		
		function __construct() {
			parent::__construct();
		}

		function index(){
			$this->load->view('example');
		}
		
		function generate_to_pdf(){
			$this->pdf->load_view('example_to_pdf');
			$this->pdf->render();
			$this->pdf->stream("name-file.pdf");
		}
	}
