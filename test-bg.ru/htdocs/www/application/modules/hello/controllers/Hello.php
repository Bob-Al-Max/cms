<?php

class Hello extends MX_Controller{
	
   
	
	public function index(){
		
		echo 'This is the new netbeans installation.';
	}
        
        
        
        
        public function sayhello($firstname, $lastname)
        {
            echo "Hello! How do you do $firstname $lastname?";
        }
}








?>