<?php
require 'bdd.php';

if (isset($_POST['submit_Zchercheur'])) {



// Insertion  requête préparée
$req = $bdd->prepare('INSERT INTO ZChercheur(Nom, Debut, Fin) VALUES(?, ?, ?)');

// je bind les parametre aux :  ?
$req->execute(array($_POST['nom_chercheur'], $_POST['debut'], $_POST['fin']));
$req->closeCursor();
print_r($_POST);

}
if (isset($_POST['submit_ZPResponsable'])) {

$req = $bdd->prepare('INSERT INTO ZPResponsable(ID_CHER, ID_PROJ, Debut, Fin) VALUES(?, ?, ?)');

// je bind les parametre aux :  ?
$req->execute(array($_POST['nom_chercheur'], $_POST['debut'], $_POST['fin']));
$req->closeCursor();


}
if (isset($_POST['submit_ZProjet'])) {

$req = $bdd->prepare('INSERT INTO Zprojet(Nom, Debut, Fin) VALUES(?, ?, ?)');

// je bind les parametre aux :  ?
$req->execute(array($_POST['nom_projet'], $_POST['debut'], $_POST['fin']));
$req->closeCursor();


}
if (isset($_POST['submit_ZUcompos'])) {

$req = $bdd->prepare('INSERT INTO ZUcompos(ID_CHER, ID_UNIT, responsable, debut, fin) VALUES(?, ?, ?, ?, ?)');

// je bind les parametre aux :  ?
$req->execute(array($_POST['id_chercheur'], $_POST['id_unité'], $_POST['responsable'], $_POST['debut'], $_POST['fin']));
$req->closeCursor();


}
if (isset($_POST['submit_ZUnité'])) {

$req = $bdd->prepare('INSERT INTO ZUnité(Nom, Tel, Email, Debut, Fin) VALUES(?, ?, ?, ?, ?)');

// je bind les parametre aux :  ?
$req->execute(array($_POST['nom_unite'], $_POST['tel_unite'], $_POST['email_unite'], $_POST['debut'], $_POST['fin']));
$req->closeCursor();


}
// if (isset($_POST['submit_ZUprojet'])) {

// $req = $bdd->prepare('INSERT INTO ZUprojet(unité_idunité, id_projet, debut, fin) VALUES(?, ?, ?, ?)');

// // je bind les parametre aux :  ?
// $req->execute(array($_POST['id_unité'], $_POST['id_projet'], $_POST['debut'], $_POST['fin']));
// $req->closeCursor();


// }





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Intranet</title>
</head>
<body>
	<h3>Zchercheur</h3>
	<form action="" method="post">
		<label for="nom_chercheur">Nom du chercheur</label>
		<input type="text" name="nom_chercheur">
		<label for="debut">Debut</label>
		<input type="text" name="debut">
		<label for="fin">Fin</label>
		<input type="text" name="fin">
		<br>
		<input type="submit" name="submit_Zchercheur">

	</form>
	<h3>ZPResponsable</h3>
	<form action="" method="post">
		<label for="id_chercheur">ID du chercheur</label>
		<input type="text" name="id_chercheur">
		<label for="id_projet">ID du projet</label>
		<input type="text" name="id_projet">
		<label for="debut">Debut</label>
		<input type="text" name="debut">
		<label for="fin">Fin</label>
		<input type="text" name="fin">
		<br>
		<input type="submit" name="submit_ZPResponsable">


	</form>
	<h3>Zprojet</h3>
	<form action="" method="post">
		<label for="nom_projet">Nom du Projet</label>
		<input type="text" name="nom_projet">
		<label for="debut">Debut</label>
		<input type="text" name="debut">
		<label for="fin">Fin</label>
		<input type="text" name="fin">
		<br>
		<input type="submit" name="submit_Zprojet">

	</form>
	<h3>ZUcompos</h3>
	<form action="" method="post">
		<label for="id_chercheur">ID du chercheur</label>
		<input type="text" name="id_chercheur">
		<label for="id_unité">id de l'unité</label>
		<input type="text" name="id_unité">
		<h4>Responsable?</h4>
		<input type="radio" id="responsable_true" name="responsable_true" value="true">

		<label for="responsable_true">Oui</label>
		<input type="radio" id="responsable_false" name="responsable_false" value="false">
		<label for="responsable_false">Non</label>
		<br>
		<label for="debut">Debut</label>
		<input type="text" name="debut">
		<label for="fin">Fin</label>
		<input type="text" name="fin">
		<br>
		<input type="submit" name="submit_ZUcompos">

	</form>
	<h3>Zunité</h3>
	<form action="" method="post">
		<label for="nom_unite">Nom de l'unité</label>
		<input type="text" name="nom_unite">
		<label for="tel_unite">Numero de tel</label>
		<input type="text" name="tel_unite">
		<label for="email_unite">email</label>
		<input type="text" name="email_unite">
		<label for="debut">Debut</label>
		<input type="text" name="debut">
		<label for="fin">Fin</label>
		<input type="text" name="fin">
		<br>
		<input type="submit" name="submit_Zunité">

	</form>
	<!-- <h3>ZUprojet</h3>
	<form action="" method="post">
		<label for="id_unité">id de l'unité</label>
		<input type="text" name="id_unité">
		<label for="id_projet">ID du projet</label>
		<input type="text" name="id_projet">

		<label for="debut">Debut</label>
		<input type="text" name="debut">
		<label for="fin">Fin</label>
		<input type="text" name="fin">

	</form> -->

</body>
</html>
