<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../styles/connexion.css" />
        <title>Les coulisses :D</title>
    </head>
<?php 


/* Pour vérifier ce qui a été envoyé dans le formulaire de connexion :
var_dump($_POST); */

/* Date et heure du jour : */
$today = date("j/m/Y");
$heure = date("H:i:s"); 

/* Condition pour vérifier si le pseudo et le mot de passe ont été saisis, si oui on affiche le texte écrit dans le echo, si non, on affiche rien */
if ( !isset($_POST['pseudo']) || !isset($POST['pass']) )
{
    $tableauConnexion["identifiant"]=strip_tags($_POST['pseudo']);
    $tableauConnexion["pass"]=strip_tags($_POST['pass']);
    echo "<pre>";
    echo "coucou" . " " . $tableauConnexion["identifiant"] . " et bienvenue dans les coulisses :D";
    echo "<br />";
    echo "Nous sommes actuellement le " . $today . " et il est " . $heure  . " et tout va bien :p";
    echo "</pre>";
}
?>



<div class="rappelInfo">
    <p>Rappel de tes informations :</p>
    <ul>
        <li> Identifiant : <?php echo $tableauConnexion["identifiant"]; ?> </li>
        <li> Mot de passe : <?php echo $tableauConnexion["pass"]; ?> </li>
    </ul>
</div>

<div class="infoServeur">
    <p>Informations du serveur :</p>
    <?php
        include "./includes/phpinfo.php";
    ?>
</div>

</html>