<?php
if (isset($_POST['message'])) {
    $position_arobase = strpos($_POST['email'], '@');
    if ($position_arobase === false)
        $erreur = "Votre email doit comporter un arobase.";
    else {
        $retour = mail('cyril.depont@yahoo.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
        if ($retour) {
            $valide = "Votre message a été envoyé.";
            header("Refresh: 5; URL=index.php#contact");
        } else
            $erreur = "Erreur";
    }
}
?>