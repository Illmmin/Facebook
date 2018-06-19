<?php 

include_once("connexionBDD.php");

if(isset($_POST["email"]) && trim($_POST["email"]) != "" 
	&& isset($_POST["mdp"]) && trim($_POST["mdp"]) != ""
	){
	
	$req = $bdd->prepare('SELECT * from User where mail_numero =:email_numero and mdp =:mdp');//CHERCHE UNE PERSONNE DONT LE LOGIN ET MDP CORRESPOND
		$req->bindValue(':email_numero', $_POST['email'] );
		$req->bindValue(':mdp',$_POST['mdp']);
		$req->execute();
		$res=$req->fetch(PDO::FETCH_ASSOC);
		if($res){
				echo "REUSSIT";

		}else{
		echo "Compte inexistant";
		}
}

if(isset($_POST["prenom"]) && trim($_POST["prenom"]) != "" && isset($_POST["nom"]) && trim($_POST["nom"]) != "" 
	&& isset($_POST["numero"]) && trim($_POST["numero"]) != "" && isset($_POST["password"]) && trim($_POST["password"]) != "" 
	&& isset($_POST["jour"]) && trim($_POST["jour"]) != "" && isset($_POST["mois"]) && trim($_POST["mois"]) != ""  
	&& isset($_POST["annee"]) && trim($_POST["annee"]) != "" && isset($_POST["genre"]) && trim($_POST["genre"]) != "" 
	){

		$dt = $_POST["annee"].'-'.$_POST["mois"].'-'.$_POST["jour"];

		$req = $bdd->prepare("INSERT INTO user(nom,prenom,mail_numero,mail,mdp,dateNaissance,genre) 
		VALUES(:nom,:prenom,:numero,1,:password,:dt,:genre)");
		$req->bindValue(':nom', $_POST['nom'] );
		$req->bindValue(':prenom', $_POST['prenom'] );
		$req->bindValue(':numero', $_POST['numero'] );
		$req->bindValue(':password', $_POST['password'] );
		$req->bindValue(':dt', $dt);
		$req->bindValue(':genre', $_POST['genre'] );
		$req->execute();
		
}


?>