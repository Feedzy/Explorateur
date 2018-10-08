<?php

if (isset($_GET['ajout']) && isset($_GET['extension']))
{
    $exten=$_GET['extension'];
    $sup=$_GET['ajout'].'.'.$exten;
        fopen($sup,'w');
        header("Loaction: index.php");
}
