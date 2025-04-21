
<?php
include '../main/access.php';
// recup des données
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$cp = $_POST['cp'];


$nouveau_nom = $_POST['nouveau_nom'];
$nouveau_prenom = $_POST['nouveau_prenom'];
$nouvelle_adresse = $_POST['nouvelle_adresse'];
$nouvelle_ville = $_POST['nouvelle_ville'];
$nouveau_cp = $_POST['nouveau_cp'];


// Commande sql pour modif en fonction de ce qu'on veux modif
$sql = "UPDATE client SET ";
$conditions = [];

if (!empty($nouveau_nom)) {
    $conditions[] = "nom='$nouveau_nom'";
}
if (!empty($nouveau_prenom)) {
    $conditions[] = "prenom='$nouveau_prenom'";
}
if (!empty($nouvelle_adresse)) {
    $conditions[] = "adresse='$nouvelle_adresse'";
}
if (!empty($nouvelle_ville)) {
    $conditions[] = "ville='$nouvelle_ville'";
}
if (!empty($nouveau_cp)) {
    $conditions[] = "cp='$nouveau_cp'";
}


$sql .= implode(", ", $conditions);
$sql .= " WHERE nom='$nom' AND prenom='$prenom' AND adresse='$adresse' AND ville='$ville' AND cp='$cp' ";

if ($access->query($sql) == TRUE) {
    echo "Entrée modifiée avec succès";
} else {
    echo "Erreur lors de la modification : ";
}


