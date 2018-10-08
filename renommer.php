<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 08/10/2018
 * Time: 14:25
 */
if (isset($_GET['nom']) && isset($_GET['extension']) && isset($_GET['new_name']))
{
    $nom = $_GET['nom'];
    $extension = $_GET['extension'];
    $nouveau_nom =$_GET['new_name'].'.'.$extension;

    $nom_actuelle = $nom.'.'.$extension;
    rename($nom_actuelle, $nouveau_nom);
    echo "<script>
        alert('Votre fichier est renommer');
    </script>";
    header('Location: index.php');
}