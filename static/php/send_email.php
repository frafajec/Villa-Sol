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
        
        $message = "<!DOCTYPE html><body><style>table tr td:first-child {font-weight: bold;padding-right: 12px;}</style>";
        $message .= "<table>";
        $message .=   "<tr><td>Ime:</td><td>".$fname."</td></tr>";
        $message .=   "<tr><td>Prezime:</td><td>".$lname."</td></tr>";
        $message .=   "<tr><td>Email:</td><td>".$email."</td></tr>";
        $message .=   "<tr><td>Naslov:</td><td>".$subject."</td></tr>";
        $message .=   "<tr><td>Sadržaj:</td><td></td></tr>";
        $message .= "</table>";
        $message .= "<pre> ".$msg." </pre></body></html>";
        
        $headers = "From: ".$email."\r\n"; 
        $headers.= "MIME-Version: 1.0\r\n"; 
        $headers.= "Content-Type: text/plain; charset=utf-8\r\n";

        $to = 'filip.rafajec@gmail.com';
        
        if(@mail($to, $subject, $message, $headers)){
            echo true;
        } else {
            echo false;
        }
        
    } else {
        echo false;
    }
?>