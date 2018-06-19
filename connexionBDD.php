	<?php
		$user='root';//Login de la base de données
		$password = '';//Mot de passe de la base de données 


		try{
			$bdd = new PDO('mysql:host=localhost;dbname=facebook;charset=utf8', $user,$password);
			$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $er){
		        die('<p> Erreur['.$er->getCode().'] : '.$er->getMessage().'</p>');
		}
	?>
