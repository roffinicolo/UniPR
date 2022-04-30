<?php

///Mail form message
$headers = 'Da: roffinicolo@gmail.com' . "\n";
$headers .= 'Rispondi: roffinicolo@gmail.com' . "\n";
$headers .= 'Content-Type: text/plain' . "\n";


$name = (isset($_GET['name'])) ? $_GET['name'] : '';
$email = (isset($_GET['email'])) ? $_GET['email'] : '';
$subject = (isset($_GET['subject'])) ? $_GET['subject'] : '';
$message = (isset($_GET['message'])) ? $_GET['message'] : '';


$content = "Da: $name \n Email: $email \n Oggetto: $subject \n Messaggio: $message";
$recipient = "roffinicolo@gmail.com";


if (mail($recipient, $subject, $content, $headers)){
    echo "Email inviata correttamente!";
    }
    else{
        echo "Errore nell'invio della mail!";
    }


?>    