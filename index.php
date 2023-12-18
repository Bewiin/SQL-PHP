<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nom">Saisir le nom </label>
        <input type="text" name="nom">
        <label for="prenom">Saisir le prenom </label>
        <input type="text" name="prenom">
        <label for="email">Saisir un e-mail</label>
        <input type="mail" name="email">
        <label for="password">Saisir un mot de passe </label>
        <input type="password" name="password">
        <input type="submit" value="envoyer" name="submit">
    
    </form>
    
</body>
</html>
<?php
if (isset ($_POST["submit"])){
    if(!empty($_POST["nom"]) AND !empty($_POST["prenom"]) AND !empty($_POST["email"]) AND !empty($_POST["password"])){
        if(isset($_FILES["image"]["tmp_name"])){
            $ext = getFileExtension($_FILES["image"]["name"]);
            if(($ext === "png" OR $ext === "PNG" OR $ext === "jpg" OR $ext === "JPG" OR $ext === "jpeg" OR $ext === "JPEG") AND ($_FILES["image"]["size"] <= 10241024)){
                echo var_dump($_FILES);
                move_uploaded_file($_FILES["image"]["tmp_name"], "./image/".$_FILES["image"]["name"]);
            }else{
                echo "Veuillez insérer le bon fichier et vérifier sa taille < ou = à 1Mo.";
            }
            
        }else {
            echo "Il n'y a pas de fichier";
        }

    }else{
        echo "Veuillez remplir tous les champs du formulaire";
    }
    //move_uploaded_file($_FILES["image"]["tmp_name"], "./image/".$_FILES["image"]["name"]);
}

?>