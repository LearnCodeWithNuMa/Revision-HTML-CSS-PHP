<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        $nom = $_POST['lastname'];
        $nom = strtolower($nom); //permet de mettre tous le texte en minuscule.
        $nom = ucfirst($nom); //permet de mettre la première lettre d'un texte en majuscule.

        $prenom = $_POST['firstname'];
        $prenom = strtolower($prenom); //permet de mettre tous le texte en minuscule.
        $prenom = ucfirst($prenom); //permet de mettre la première lettre d'un texte en majuscule.

        $email = $_POST['mail'];
        $email = strtolower($email); //permet de mettre tous le texte en minuscule.

        $motdepasse = $_POST['mdp'];
        $motdepassemd5 = md5($motdepasse); //permet de crypter $motdepasse en md5.

        echo "<span class='text2'>Nom :</span> ".$nom."<br/><br/><span class='text2'>Prénom :</span> ".$prenom."<br/><br/><span class='text2'>Email :</span> ".$email."<br/><br/><span class='text2'>Mot de Passe :</span> ".$motdepasse." → ".$motdepassemd5;
    ?>
<br/>
<br/>
    <a href="index.html">Formulaire d'inscription</a>
</body>
</html>