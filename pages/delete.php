    <?php 

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$cp = $_POST['cp'];

include '../main/access.php';

// Requête SQL pour supprimer
$sql = "DELETE FROM client WHERE nom='$nom' AND prenom='$prenom' AND adresse='$adresse' AND ville='$ville' AND cp='$cp'";

$access->query($sql);

if ($access->query($sql) == TRUE) {
    echo "Entrée supprimée avec succès";
} else {
    echo "Erreur lors de la suppression : ";
}

    ?>

