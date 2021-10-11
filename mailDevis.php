<?php

$cc = $_POST['NDEmail'];
$send_to = 'yangzi-erp@kutiwa.com';

$subejct_mail = 'Demande de devis';
$message_mail = '<html>';
$message_mail .= '<body>';

if ($_POST['NDemandeur'] == "") {
    header("location:DemandeDevis.php");
} else {
    $message_mail .= '<p>' . "Bonjour" . '<br/>' . " Vous avez reçu un message de " .
        '<span style=" text-decoration: underline; font-weight: bold;">' . $_POST['NDemandeur'] .
        " de l'entreprise : " . $_POST['NEntreprise'] . '</span>' . '</p>';
}
$message_mail .= '<p>' . '<strong style=" color: red;">' . '<br>' . "Objet du message :" . '</strong>' .
    '<span style=" font-weight: bold; font-size: 22px;">' . $subejct_mail . '</span>' . '</p>';
$message_mail .= '<p>' . '<strong style="color: red; ">' . "CONTENU DU MESSAGE" . '</strong>' . '</p>';

$message_mail .= '<p>' . " Pays où se trouve la direction générale:" .
    '<span style=" font-weight: bold; font-size: 22px;">' . $_POST['DGPays'] . '</span>' . '</p>';
$message_mail .= '<p>' . "Votre téléphone :" .
    '<span style=" font-weight: bold; font-size: 22px;">' . $_POST['NDTelephone'] . '</span>' . '</p>';
$message_mail .= '<p>' . " Nombres de contrôleur de gestion :" .
    '<span style=" font-weight: bold; font-size: 22px;">' . $_POST['CCG'] . '</span>' . '</p>';
$message_mail .= '<p>' . " Nombres de personnels comptables:" .
    '<span style=" font-weight: bold; font-size: 22px;">' . $_POST['CPC'] . '</span>' . '</p>';
$message_mail .= '<p>' . " Nombres de Directeurs des Affaires Administratives et Financières :" .
    '<span style=" font-weight: bold; font-size: 22px;">' . $_POST['CDAAF'] . '</span>' . '</p>';
$message_mail .= '<p>' . " Nombres d'agences:" .
    '<span style=" font-weight: bold; font-size: 22px;">' . $_POST['CA'] . '</span>' . '</p>';
$message_mail .= '<p>' . " Nombres de vendeurs au guichet ( vendeur direct ):" .
    '<span style=" font-weight: bold; font-size: 22px;">' . $_POST['CVG'] . '</span>' . '</p>';
$message_mail .= '</body>';
$message_mail .= '</html>';

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'From : '.$_POST['NEntreprise'].' '. $cc."\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
// En-têtes additionnels
$headers .= "Reply-to : " . $cc . "\n";
//$headers .= "Cc : cbdo@kutiwa.com\n";
// priorité urgente
$headers .= "X-Priority : 1\n";

mail($send_to, $subejct_mail, $message_mail, $headers);

header("location:index.php");