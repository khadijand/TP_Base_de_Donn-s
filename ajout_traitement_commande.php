 <?php
 // ajouter_traitement_commande.php
    require "connexion.php";
 
    $date_commande = $_POST["date_commande"];
    $montant_total = $_POST["montant_total"];
    $statut = $_POST["statut"];
	 $id_client = $_POST["id_client"];
	  
	
 
    $sql = "INSERT INTO commande (date_commande, montant_total, statut, id_client)
            VALUES('$date_commande', '$montant_total', '$statut', '$id_client')";
 
    if (mysqli_query($connexion, $sql)) {
        echo "commande ajouté avec succès (id " . mysqli_insert_id($connexion) . ")";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
?>
