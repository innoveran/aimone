<?php
    session_start();


    include_once('../classcontrollers/contactclass.php');

    $contact = new ContactController();
    $formvalid = $contact->validate($_POST);
    $see = $contact->sendMail($formvalid);


?>