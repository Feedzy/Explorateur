<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 04/10/2018
 * Time: 16:11
 */

if(isset($_GET['supprimer']) && isset($_GET['extension']))
{
    $fichier = $_GET['supprimer'];
    $extension = $_GET['extension'];
    $suppression = $fichier.'.'.$extension;
     unlink($suppression);
        echo '<script>
                alert("le fichier a ete supprimer");
              </script>';
        header("Location: index.php");

}