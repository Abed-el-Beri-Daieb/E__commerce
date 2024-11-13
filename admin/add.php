<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "../connexion.php";
        $sql = "insert into produit values (NULL,'cableRj',1.5,2000,'sfesjfioe','https://picsum.photos/',1)";
        //envoi de la req
        $connexion = new Connexion();
        $pdo = $connexion->getConnexion();
        $res = $pdo->exec($sql);
        if ($res) {
            echo "insertion reussite";
        }else{
            echo "probleme d insertion";
        }
    ?>
</body>
</html>