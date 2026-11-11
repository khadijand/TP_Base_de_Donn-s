 <?php
 // ajouter_traitement_categories.php
    require "connexion_categories.php";
 
    $nom_categorie = $_POST["nom_categorie"];
    $description = $_POST["description"];
	  
	
 
    $sql = "INSERT INTO categories (nom_categorie, description)
            VALUES('$nom_categorie', '$description')";
 
    if (mysqli_query($connexion, $sql)) {
        echo "cotegories ajouté avec succès (id " . mysqli_insert_id($connexion) . ")";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
?>
