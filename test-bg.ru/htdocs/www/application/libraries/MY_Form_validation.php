<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MY_form_validation extends CI_Form_validation{
    
    public function run($module = '', $group = ''){
     (is_object($module)) AND $this->CI = &$module;
     return parent::run($group);
        
    }
    
    
}