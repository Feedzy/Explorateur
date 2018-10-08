<?php 

if (isset($_GET['copier']) && isset($_GET['extension'])) 
{
    $dpl = 'C:\wamp64\lo.txt';

    $fichier = $_GET['copier'];
    $extension = $_GET['extension'];
    $copier=(copy($fichier.'.'.$extension, $dpl));

    echo $copier;
}