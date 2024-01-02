<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="menue">
        <ul class="ul1">
        <li><a href="accueil">ACCUEIL</a></li><br><br>
        <li><a href="register">Inscription </a></li><br><br>
        <li><a href="login">Connexion</a></li><br><br>
        </ul>
        <div class="diva">
            <img  class="img11"  src="images/i5.jpg" alt="">
        </div>
        <div class="ii">
            <img class="logo" src="images/ii.jpg" alt="">
        </div>
    </div>
   <marquee behavior="" direction=""> <h1>Vous pouvez s'inscrire pour pouvoir se connecter en remplissant ces champs</h1></marquee>
    <form action="{{ route('inscription') }}"  method="post">

        <h1 class="hi">INSCRIPTION</h1>
        <label for="prenom">PRENOM*</label>
        <input type="text" id="prenom" name="prenom" placeholder="veiller saisir votre prenom" required><br><br>

        <label for="nom">NOM*****</label>
        <input type="text" id="nom" name="nom" placeholder="veiller saisir votre nom" required><br><br>

        <label for="name">EMAIL***</label>
        <input type="email" id="email" name="email" placeholder="veiller saisir votre email" required><br><br>

        <label for="nom">M de passe</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="veiller saisir votre M de passe"
        required><br><br>

        <label for="nom">adress***</label>
        <input type="text" id="adress" name="adress" placeholder="veiller saisir votre adress" required><br>

        <input class="aa"  type="submit" value="se connecter">
        <ul class="ty">

            <li><a class="a2" href="login">se connecter</a></li><br><br>
        </ul>
</form>
</body>
</html>
