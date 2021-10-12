<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stylepage.css" media="screen" type="text/css"/>
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Page d'inscription</title>
    
</head>
<body>
<?php
include('header.php');

?>

    <h1>Page d'inscription</h1>

    <p>Bienvenue sur la page d'inscription</p>

    <hr>

    <form method="POST" id="id_form" action="">
        <fieldset form="id_form">
            <legend>Inscription</legend>

            <p><label for="prenom">Prénom</label> : <input id="prenom" name="userFirstName" type="text" placeholder="Entrez votre prénom"></p>
            <p><label for="nom">Nom</label> : <input id="nom" name="userSecondName" type="text" placeholder="Entrez votre nom"></p>
            <p><label for="motDePasse">Mot de passe</label> : <input id="motDePasse" name="userPassWord" type="password" placeholder="Entrez votre mot de passe"></p>
            <p><label for="motDePasseCon">Confirmation de votre mot de passe</label> : <input id="motDePasseCon" name="userPassWordCon" type="password" placeholder="Confirmez votre mot de passe"></p>
            <p><label for="mail">Votre email</label> : <input id="mail" name="userMail" type="email" placeholder="malickkeke83@gmail.com"></p>
            
            <p><input name="userValidation" type="submit" value="S'inscrire"></p>

        </fieldset>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>