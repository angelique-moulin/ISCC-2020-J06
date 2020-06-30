<html>

<?php

$nom_produit= "t-shirt femme";
$couleur= "rouge";
$prix= 15.50;
$disponible= "true";
$quantité= 0;
include 'affichage.php';





afficher_produit ($nom_produit) ;
afficher_description ($couleur, $prix);
afficher_produit ($nom_produit, $couleur, $prix, $disponible);
update_dispo ($quantite);
restockage ($quantite, $nbajout);
achat ($quantite, $nbachat);
echo "Le nom du produit est $nom_produit";
echo "la couleur du produit est $couleur";
?>
</html>
