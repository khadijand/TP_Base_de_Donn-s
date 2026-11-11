 <?php
 // ajouter_traitement_boutique.php
    require "connexion.php";
 
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
	 $telephone = $_POST["telephone"];
	  $adresse = $_POST["adresse"];
	
 
    $sql = "INSERT INTO clients (nom, prenom, email, telephone, adresse)
            VALUES('$nom', '$prenom', '$email', '$telephone', '$adresse')";
 
    if (mysqli_query($connexion, $sql)) {
        echo "client ajouté avec succès (id " . mysqli_insert_id($connexion) . ")";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
?>
