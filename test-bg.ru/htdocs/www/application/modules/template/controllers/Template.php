<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Template extends MX_Controller
{

function __construct() {
parent::__construct();
}

public function public_one_col($data){
    
    $this->load->view('public_one_col', $data);
}


public function admin($data){
    
    $this->load->view('admin', $data);
}
}
