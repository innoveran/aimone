<?php

class ContactController
{

    public function validate($form)
    {
        foreach($form as $key=>$value)
        {
            $value = trim($value);
            $value = strip_tags($value);
            $formvalid[$key] = $value;
        }

        return $formvalid;
    }

    public function sendMail($form)
    {
        $to = $form['email'];
        $subject = $form['solution'];
        $msg = "<p>{$form['message']}</p>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: innoveran@gmail.com". "\r\n";

        $mailSent = mail($to,$subject,$msg,$headers);
        
        if($mailSent){
            $_SESSION['state'] = 'yes';
            header("Location:../contact.php");
        }else{
            $_SESSION['state'] = 'no';
            header("Location:../contact.php");
        }

    }

}

?>