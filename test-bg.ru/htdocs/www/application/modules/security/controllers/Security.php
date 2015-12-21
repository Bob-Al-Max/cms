<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Security extends MX_Controller
{

function __construct() {
parent::__construct();
}


public function make_hash($password){
    $$password = "password";
    $safe_pass = $this->awesome_unbreakable_super_mega_hash($password);
    return $safe_pass;
}

public function awesome_unbreakable_super_mega_hash($password){
    
    $new_pass = $password.="bla";
    return $new_pass;
}




}
