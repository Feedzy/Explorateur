<?php
/**
 * Created by PhpStorm.
 * User: Feedzy
 * Date: 03/10/2018
 * Time: 16:18

 */
require 'vendor/autoload.php';

$template = new Twig_Loader_Filesystem(__DIR__ . '/nos-vue');
$twig = new Twig_Environment($template, array(
    'cache' => false
));

$url = '/';
if(isset($_GET['/']))
{
    $url=$_GET['/'];
}

switch ($url)
{
    case '/':

       function lecture_rep()
       {
           $repertoire = getcwd();
           $ouverture_du_repertoire=opendir($repertoire);
           while($lecture_du_repertoire=readdir($ouverture_du_repertoire))
           {
                        $repp='<a href='.$lecture_du_repertoire.'>'. $lecture_du_repertoire.'</a> <br>';
                        echo $repp;
           }
       }


       function add_folder()
       {
            echo' <form action="nouveau.php" method="get">
            <label for="dossier">Ajout</label>
            <input type="text" name="dossier">
            <input type="submit">
            </form>';
       }

       function supprimer()
       {
            echo' <form action="supprimer.php" method="get">
            <label for="dossier">Supprimer</label>
            <input type="text" name="supprimerr">
            <input type="submit">
            </form>';
       }

       
       function add_file()
       {
            echo' <form action="Ajout_fichier.php" method="get">
            <label for="dossier">Ajoutn fichier</label>
            <input type="text" name="ajout">
            <input type="text" name="extension">
            <input type="submit">
            </form>';
       }
       
       function supprimer_file()
       {
           echo '<form action="supprimer_fichier.php" method="get">
                <label for="supprimer">Supprimer un fichier</label>
                <input type="text" name="supprimer" placeholder="nom_fichier">
                <input type="text" name="extension" placeholder="extension">
                <input type="submit">
                </form>';
       }
       
       function copy_fichier()
       {
           echo '<form action="copie.php" method="get">
                <label for="supprimer">Copier fichier</label>
                <input type="text" name="copier">
                <input type="text" name="extension">
                <input type="submit" value="copier">
                </form>';
       }

        function renommer_fichier()
        {
            echo '<form action="renommer.php" method="get">
                <label for="supprimer">Renommer</label>
                <input type="text" name="nom" placeholder="nom du fichier">
                <input type="text" name="extension" placeholder="extension" >
                <input type="text" name="new_name" placeholder="nouveau_nom" >
                <input type="submit" value="valider">
                </form>';
        }
        echo $twig->render('index.twig',[
                'lecture_rep'=>lecture_rep(),
                'formulaire'=>add_folder(),
                'delete'=>supprimer(),
                'sup'=>add_file(),
            'deletee'=>supprimer_file(),
            'copiee'=>copy_fichier(),
            'renommer'=>renommer_fichier(),
            ]);
    break;



    default :
        header('HTTP/1.0 404 Not Found');
        echo $twig->render('404.twig');
    break;
}