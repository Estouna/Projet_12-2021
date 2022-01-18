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
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon2.png">
    <link rel="stylesheet preload" href="../../portfolio/css/portfolio.css" as="style" onload="this.rel = 'stylesheet'">
    <link rel="stylesheet preload" href="../../portfolio/css/portfolio-all.css" as="style" onload="this.rel = 'stylesheet'">
    <noscript>
        <link rel="stylesheet" href="portfolio.css">
        <link rel="stylesheet" href="portfolio-all.css">
    </noscript>
    <title><?= $title ?? "Portfolio" ?></title>
</head>