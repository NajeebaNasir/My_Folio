<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $subject=$_REQUEST['subject'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        mail("najeebavns2019@gmail.com", $subject, $message, $from);
        echo "Email sent!";
        }
    }  
?>