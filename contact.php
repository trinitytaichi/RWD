<?php
$email = $_POST['email']; 
$name = $_POST['name']; 
$subject = $_POST['subject']; 
$phone = $_POST['phone']; 
$msg = $_POST['msg']; 

$from = 'no-reply@themes-coder.com'; 
$fromName = 'Katora'; 
 
$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to Kotara</title> 
    </head> 
    <body> 
        <h1>New Contact Page Inquiry!</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <td>Name: '.$name.'</td>
            </tr>
            <tr> 
                <td>Phone: '.$phone.'</td>                
            </tr>
            <tr> 
                <td>Message: '.$msg.'</td>                
            </tr> 
            
        </table> 
    </body> 
    </html>'; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
 
// Send email 
if(mail($email, $subject, $htmlContent, $headers)){ 
    echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}
?>