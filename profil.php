
<html>
    <head>
        <title>Profil</title>
        <meta sharset="utf-8">
        <link rel="stylesheet" href= "livreor.css">
        <link href="https://fonts.googleapis.com/css?family=Pattaya&display=swap" rel="stylesheet">

    </head>
    <body class="bgprofil">

<?php
session_start();
$connexion = mysqli_connect("localhost","root","","livreor");
$requete = "SELECT * FROM utilisateurs WHERE login='".$_SESSION['login']."'";
$req = mysqli_query($connexion, $requete);
$data = mysqli_fetch_assoc($req);
?>
<header>

  <style type="text/css">
a:link
{
text-decoration:none;
}
</style>

      <nav class="nav2">

<a href="profil.php">Modification</a>
<a href="livre-or.php">Livre d’or</a>
<img src="logomouvement.gif">
<a href="commentaire.php">Commentaire</a>
<a href="index.php?deconnexion=true">Déconnexion</a>

</nav>
</header>



                <div id="profilform">
                    <h1>Modifiez votre profil</h1><br>

                    <form method="get" action="index.php">


                        <label>Nouveaux login:</label>
                        <input type="text" value="<?php echo $data['login']?>" placeholder="Nouvel identifiant" name="login"></input><br><br/>

                        <label>Nouveau mot de passe:</label>
                        <input type="password" value="<?php echo $data['password']?>" placeholder="nouveau mot de passe" name="mdp"></input><br><br/>

                        <input type="submit" name="Modifier" value ="Valider">


                    </form><br>

                </div>


  </body>
</html>
