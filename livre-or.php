
<html>
<head>
	<meta sharset="utf-8">
	<link rel="stylesheet" href= "livreor.css">
	<link href="https://fonts.googleapis.com/css?family=Pattaya&display=swap" rel="stylesheet">

</head>
  <body>
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

  	<section id="message">
<?php
$connexion = mysqli_connect("localhost","root","","livreor-projetpro");


$requete = "SELECT login, commentaire,date FROM utilisateurs LEFT JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ORDER BY commentaires.id DESC";

$req = mysqli_query($connexion, $requete);

while($row = mysqli_fetch_assoc($req))
{
 ?>
	<div class="poster">
		<div id="user">
		   <p><b><?php echo $row['date']?></b></p>
		   <hr>
		   <h3><b><?php echo $row['login']?></b></h3>



	    </div>
	    <div id="messag">

		   <p><?php echo $row['commentaire']?></p>
	   </div>
	</div>
<?php
}
?>
</section>
</body>
