<?php
session_start();
date_default_timezone_set('europe/paris');
if (isset($_POST['submit']))
{
	if(!empty($_POST['message']))
	{
      $connexion = mysqli_connect("localhost","root","","livreor-projetpro");
       if ( isset ($_POST['submit']))
       {
	    $requete3="SELECT * FROM `utilisateurs` WHERE login='".$_SESSION['login']."'";
 	    $query3 = mysqli_query( $connexion,$requete3);
  	    $resultat3= mysqli_fetch_all($query3);

  	    $requete2="INSERT INTO commentaires (commentaire, id_utilisateur, date) VALUES ('".$_POST['message']."','".$resultat3[0][0]."','".date("Y-m-d H:i:s")."')";
  	     $query2 = mysqli_query( $connexion,$requete2);
        header('Location: livre-or.php');
  	    }

	   }
	else{
		echo "le champ commentaire est vide<br>";
	}
}

?>

<html>
<head>
	<meta sharset="utf-8">
	<link rel="stylesheet" href= "livreor.css">
	<link href="https://fonts.googleapis.com/css?family=Pattaya&display=swap" rel="stylesheet">

</head>
<body id="bgcommentaire">
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
<img src="logomouvement.gif" alt="">
<a href="commentaire.php">Commentaire</a>
<a href="index.php?deconnexion=true">Déconnexion</a>

</nav>
</header>

  <article>
        <div id="comment">
                    <?php
               if (isset($_SESSION['login'])==true){
                    ?>
                    <form method="POST" action="commentaire.php">
                        <label>Laisser un commentaire:</label>
                        <br/><br/>
                        <textarea name="message" rows="6" maxlength="255" cols="50"></textarea><br/><br/>

                        <input type="submit" name="submit" value ="Poster">

                    </form>

                    <?php
                     }
                  ?>
        </div>

    </article>

</body>

</html>
