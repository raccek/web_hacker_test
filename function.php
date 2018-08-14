<?php

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $msg = "";
        $user = strtoupper($_POST['username']);
        $pass = $_POST['password'];
        
        if(!empty($user) && !empty($pass)){
            if(!is_numeric($user)){
             $msg .= "Welcome {$user}, you have logged in!";   
            }else{ $msg .= "Username cannot be numeric [{$user}]";}
            
        }else{
            $msg .= "Username and Password are required";
        }
        
    }

?>