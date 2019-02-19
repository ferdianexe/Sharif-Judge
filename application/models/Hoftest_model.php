<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// php index.php ContohTest
class Hoftest_model extends Test_model {

    // var $shj_submissionsdummy = array(
    //     array(
    //         'submit_id' => '1',
    //         'username'=>'naofal',
    //         'assignment'=>'1',
    //         'problem'=>'1',
    //         'is_final'=>'1',
    //         'time'=>'2018-02-14 09:04:03',
    //         'status'=>'SCORE',
    //         'pre_score'=>90,
    //         'coefficient'=>'100',
    //         'file_name'=>'Fibonacci-1',
    //         'main_file_name'=>'Fibonacci',
    //         'file_type'=>'java'),
    //     array(
    //         'submit_id' => '2',
    //         'username'=>'naofal',
    //         'assignment'=>'2',
    //         'problem'=>'1',
    //         'is_final'=>'1',
    //         'time'=>'2018-02-14 09:04:03',
    //         'status'=>'SCORE',
    //         'pre_score'=>0,
    //         'coefficient'=>'100',
    //         'file_name'=>'Fibonacci-1',
    //         'main_file_name'=>'Fibonacci',
    //         'file_type'=>'java')
    //     );

    public function __construct(){
        parent::__construct(); 
        $this->load->library("unit_test");
        $this->load->model('Hof_model');
    }

    private function emptyDB($tableName){
        $this->db->truncate($tableName);   
    }

    private function testget_all_final_submission(){
        $test = $this->Hof_model->get_all_final_submission();
        $expected_result = null;
        $test_name = "Test get_all_final_submission";
        $this->unit->run($test,$expected_result,$test_name); 
    }

    private function testget_all_user_assignments(){
        $test = $this->Hof_model->get_all_user_assignments('naofal');
        $expected_result = null;
        $test_name = "Test get_all_user_assigments";
        $this->unit->run($test,$expected_result,$test_name); 
    }

    public function test(){
        $this->testget_all_final_submission();
        $this->testget_all_user_assignments();
    }
}