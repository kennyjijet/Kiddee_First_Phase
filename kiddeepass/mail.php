<?php

if(trim($_POST['text1']) != ""){
    $to      = 'jittarin.j@integra8t.com';
    $message = $_POST['text1']; 
    //$message = "Test"; 
   	$subject = "Subscibe Kiddeepass";
    
    /*
    $headers = "From: ".$_POST['sender_nam‌​e​']." <".$_POST['sender_em‌​ail‌​'].">\r\n"; $headers = "Reply-To: ".$_POST['sender_ema‌​il‌​']."\r\n"; 
    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
    'X-Mailer: PHP/' . phpversion();
    */

    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";

    if(mail($to, $subject, $message, $headers)) 
    	echo "true";
    	//echo json_encode(['success'=>true]); 
    else //echo json_encode(['success'=>false]);
    	echo "false";
    exit;
 }else{
 	//echo json_encode(['success'=>false]);
 	echo "false";
 }
?>