<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <title>Bonaparte solidaire de nos héros du quotidien !</title>

	<link href="../Css/style1.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap core CSS -->
<link href="../dist/css/bootstrap.min.css" rel="stylesheet" >
<link rel="icon" href="../favicon.ico">

    
  </head>
   <header class="headerr">
  <h2 class="logoo">Bonaparte</h2>
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
      <i class="fas fa-ellipsis-h"></i>
    </label>

    <ul class="menu">
       <a href="../index.php">Accueil</a>
      <a href="index1.html">Productions</a>
      <a href="index2.php">Contact</a>
      <label for="chk" class="hide-menu-btn">
        <i class="fas fa-times"></i>
      </label>
    </ul>
  </header>
  <body>
   

<main role="main" class="container-fluid" style="margin-top: 40px;">

  <div class="contact-form">
		  <h1>Contact</h1>
		  <p class="leadd">Veuillez remplir ce formulaire afin de nous contacter !</p>
		  <img src="../Images/nous-contacter.jpg"  id="imgcontact" alt="...">
		  <div class="formulaire">
		<form name="contact_form" method="post" action="index2.php">
		<div class="form-group" id="who">
    <label for="status">Vous êtes ?</label>
    <select class="form-control" id="status" value="">
      <option>Élève</option>
	  <option>Étudiant</option>
      <option>Professeur</option>
      <option>Autre</option>
    </select>
  </div>
  <div class="form-group">
    <label for="nom">Nom</label>
    <input name="nom" type="text" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Entrer votre nom" value="">
  </div>
  <div class="form-group">
    <label for="mail">Email</label>
    <input name="msg_email" type="email" class="form-control" id="mail" placeholder="Entrer votre email" value="">
  </div>
   <div class="form-group">
    <label for="message">Message</label>
    <textarea name="message" class="form-control" id="message" rows="3"></textarea>
  </div>
  <div class="form-group form-check">
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<?php



	if(isset($_POST)&& !empty($_POST['nom']) && !empty($_POST['message'])){
		extract($_POST);
		$email ='msg_email';
		$destinataire = 'robin.bijaudy@gmail.com';
		$expediteur =$nom.' <'.$email.'>';
		$mail=mail($destinataire,$message,$expediteur .' :De Contact Bonaparte Solidaire','From: $email');
		if($mail)echo'Email envoyé avec succès';else echo"Echec de l'envoi du mail !";
	}else echo"Formulaire non soumis ou des champs sont vides";
	
	
?>

</div>

</div>
</main><!-- /.container -->
</body>
<footer> <p>&copy;2020 Projet Solidarité BTS SIO - Orsini Manon, Bijaudy Robin<p> </footer>
</html>
