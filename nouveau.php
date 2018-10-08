<?php
/**
 * Created by PhpStorm.
 * User: Feedzy
 * Date: 03/10/2018
 * Time: 19:42
 */

if (isset($_GET['dossier']))
{
    $nouveau_doier=$_GET['dossier'];
    
    if (!is_dir($nouveau_doier))
    {
        @mkdir($nouveau_doier);
        echo '<script>
                alert("Votre dossier a ete creer")
            </script>';

            header("Location: index.php");
    }   
    else
    {
        echo '<script>
                alert("un dossier du meme nom existe")
            </script>';
    }      
}

