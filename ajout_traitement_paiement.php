 <?php
 // ajouter_traitement_paiement.php
    require "connexion_paiement.php";
 
    $date_paiement= $_POST["date_paiement"];
    $montant = $_POST["montant"];
    $mode_paiement = $_POST["mode_paiement"];
	 $statut_paiement= $_POST["statut_paiement"];
	 $id_commande = $_POST["id_commande"];
	  
	
 
    $sql = "INSERT INTO paiement (date_paiement, montant, mode_paiement, statut_paiement, id_commande)
            VALUES('$date_paiement', '$montant', '$mode_paiement', '$statut_paiement', '$id_commande')";
 
    if (mysqli_query($connexion, $sql)) {
        echo "paiement fait avec succès (id " . mysqli_insert_id($connexion) . ")";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
?>
