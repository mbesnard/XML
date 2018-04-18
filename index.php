<!DOCTYPE html>
<?php
include 'xml.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>TD SLAM3</title>
    </head>
    <body>
        <form action="telecharger.php">
            Choisir la pièce que vous souhaitez obtenir
            <?php
            require_once 'OuvertureXML.php';
            $fichier = new OuvertureXML("xml.xml");
            echo $fichier->liste_deroulante("xml.xml");
            ?>
            <br />Puis cliquez sur [télécharger]
            <input type="submit" value="Télécharger"/> <br /><br />
        </form>
    </body>
</html>
