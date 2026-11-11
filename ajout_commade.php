<!-- insertion.php -->
<form action="ajout_traitement_commande.php" method="post">
    <input type="text" name="date_commande" placeholder="date_commande" required>
    <input type="text" name="montant_total" placeholder="montant_total" required>
    <input type="text" name="statut" placeholder="statut">
	 <input type="number" name="id_client" placeholder="id_client" required>
    <button type="submit">Ajouter</button>
</form>
