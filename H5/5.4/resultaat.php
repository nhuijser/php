<?php
    $emailreceived = $_GET["email"];
    $wachtwoordreceived = $_GET["wachtwoord"];

    $users = array(
        "piet@worldonline.nl" => "doetje123",
        "klaas@carpets.nl" => "snoepje777",
        "truushendriks@wegweg.nl" => "arkiearkie201",
    );

    $login = false;

    foreach($users as $email => $wachtwoord) {
        if($emailreceived == $email && $wachtwoordreceived == $wachtwoord) {
            $login = true;
            break;
        }
    }

    if ($login) {
        echo "Welkom!";
    } else {
        echo "Sorry, geen toegang!";
    }
?>