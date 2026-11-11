<!-- insertion.php -->
<form action="ajout_traitement_paiement.php" method="post">
    <input type="text" name="date_paiement" placeholder="date_paiement" required>
    <input type="text" name="montant" placeholder="montant" required>
    <input type="text" name="mode_paiement" placeholder="mode_paiement">
	 <input type="text" name="statut_paiement" placeholder="statut_paiement" required>
	 <input type="number" name="id_commande" placeholder="id_commande" required>
    <button type="submit">Ajouter</button>
</form>
