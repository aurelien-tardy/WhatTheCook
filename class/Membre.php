<?php

class Membre
{
    public $id;
    public $mail;
    public $pseudo;
    public $mdp;
    public $moderation;

    function __construct($mail, $pseudo, $mdp, $moderation){
        $mysqli = connect_BD();
        $mysqli->query("INSERT INTO `membre`(`mail`, `pseudo`, `mdp`, `moderation`) VALUES ('$mail', '$pseudo', '$mdp', $moderation);");
        $mysqli->close();
        //send_mail($mail);
    }

    /**
     * @param $mail
     */
    public function send_mail($mail){
        $to      = $mail;
        $subject = 'Inscription WTC';
        $message = 'Bonjour !';
        $message .= 'Bienvenue sur WTC! Vous pouvez maintenant vous connecter';
        $headers = 'From: WhatTheCook.fr' . "\r\n" .
            'Reply-To: contact@whatthecook.fr' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
    }


}