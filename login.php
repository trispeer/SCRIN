 

<?php
//rapport d'erreur
ini_set('display_errors', 1);
error_reporting(E_ALL);

//connexion a la base
$bdd = new PDO('mysql:host=localhost;dbname=base', 'root', 'Zart10tom!');

//check pour pseudo
        if((isset($_POST['pseudo'])) AND (isset($_POST['password'])))
        {
        $req = $bdd->query('SELECT COUNT(*) FROM utilisateur WHERE pseudo = \''. $_POST['pseudo'] .'\' AND password = \''. $_POST['password'] .'\'');
                if ($req->fetchColumn() == 0)
                {
        echo "<script type='text/javascript'>alert('Identifiant Invalide')</script>";
        }
                        else
                        {
                        echo "<script type='text/javascript'>document.location.replace('valide.php')</script>";
                        }
        }

?>

<html>

                <head>
                        <title>Scrin - connexion</title>
                        <meta charset="utf-8" />
                </head>

                <body>
                        <div align="center"><b><font  size="4"> BIENVENUE </font></b>
                                        <br>
                                        <br>
                        <div align="center"><b><font  size="4">Veuillez saisir vos identifiants</font></b>
                                        <br>
                                        <br>
                                <form action="index.php" method="post">

