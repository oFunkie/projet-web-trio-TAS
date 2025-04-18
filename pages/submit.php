<?php
if (isset($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['prenom'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $ville = htmlspecialchars($_POST['ville']);
    $cp = htmlspecialchars($_POST['cp']);

    include '../main/access.php';
    $sql = "INSERT INTO client (nom, prenom, adresse, ville, cp) VALUES ('$nom', '$prenom', '$adresse', '$ville', '$cp')";
    
    if ($access->query($sql)) {
        header('Location: index.php');
    } else {
        header('Location: erreur.php');
    }
} else {
    header('Location: index.php');
}
?>
