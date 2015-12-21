<!doctyple html>
<html>
    <head>
        <title>public_one_col</title>
    </head>
    <body style="background-color: yellow">
       
     <?php 
     
     
     
     if (!isset($view_file)) {
         $view_file="";
     }
     
     
     
     if (!isset($module)) {
         $module=$this->uri->segment(1);
     }
     
     
     if(($view_file!="") && ($module!="")){
         
     $path = $module."/".$view_file;
     $this->load->view($path);
     }
     
     
     
     
     ?>
        
    </body>
</html>
