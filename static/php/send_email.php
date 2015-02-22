<?php
    if(isset( $_POST['params']) ) {
        
        //$params = filter_input(INPUT_POST, 'params');
        $params = $_POST["params"];

        $fname = $params[0];        
        $lname = $params[1];
        $email = $params[2];
        $subject = $params[3];
        $msg = $params[4];

        //if needed do server side validation
        
        $message = "<!DOCTYPE html><body>";
        $message .= "<table>";
        $message .=   "<tr><td style='font-weight: bold;padding-right: 12px;'>Ime:</td><td>".$fname."</td></tr>";
        $message .=   "<tr><td style='font-weight: bold;padding-right: 12px;'>Prezime:</td><td>".$lname."</td></tr>";
        $message .=   "<tr><td style='font-weight: bold;padding-right: 12px;'>Email:</td><td>".$email."</td></tr>";
        $message .=   "<tr><td style='font-weight: bold;padding-right: 12px;'>Naslov:</td><td>".$subject."</td></tr>";
        $message .=   "<tr><td style='font-weight: bold;padding-right: 12px;'>Sadržaj:</td><td></td></tr>";
        $message .= "</table>";
        $message .= "<pre style='font-size: 1.3em;; padding-left: 10px;'>".$msg."</pre></body></html>";
        
        $headers = "From: ".$email."\r\n"; 
        $headers.= "MIME-Version: 1.0\r\n"; 
        $headers.= "Content-Type: text/html; charset=utf-8\r\n";

        $to = 'villa.sol.adriatic@gmail.com';
        $prefix_subj = 'VS - ' . $subject;
        
        if(@mail($to, $prefix_subj, $message, $headers)){
            echo true;
        } else {
            echo false;
        }
        
    } else {
        echo false;
    }
?>