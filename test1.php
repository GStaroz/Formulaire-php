<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>tests</title>
    </head>
    <body>
       <?php
            if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['age']))
            { if($_POST['nom']==null || $_POST['prenom']==null ){
                    echo 'Les inconnus ne sont pas les bienvenus, partez !';
            } else {
                echo "Bievenue dans le temple, ".$_POST["nom"].' '.$_POST['prenom'].'<br>';
                If ($_POST['age']<20){
                    echo 'Vous êtes trop jeune pour affronter les épreuves de notre dieu,<br> revenez dans quelques années';
                } else {
                    echo 'Notre dieu vous observe...';
                }
                if ($_POST["genre"] == "choix 1"){
                    echo "<br> salut poto, comment va";
                    echo '<img src="images/banane.png" >';
                } else {
                    echo '<br> bonjour madame, comment allez vous en cette chaude journée';
                    echo '<img src="images/Bdance.gif" >';
            }
            }
            }
            echo '<br> <a href="index.php"> Changé d\'avis ? </a>';
       ?>   
    </body>
</html>
