<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ContohTest extends CI_Controller {
        public function __construct()
        {
            parent::__construct(); 
			$this->load->library("unit_test");	
			$this->load->model("user_model");
        }
		

		private function division($a,$b){
			return $a/$b;
		}
		
		public function index(){
			echo "Using Unit Test Library";	
			$test = $this->user_model->have_email("asdf",FALSE);
			$expected_result = 2;
			$test_name = "Division test function";
			echo $this->unit->run($test,$expected_result,$test_name);

		}

}		