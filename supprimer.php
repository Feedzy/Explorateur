<?php 

if (isset($_GET['supprimerr']))
{
    $deleteee=$_GET['supprimerr'];

    if (is_dir($deleteee)==true) 
    {
        @rmdir($deleteee);
        header("Location: index.php");
    }
   
}

