<h1>Liste</h1>

<table border="1">
    <caption>Liste des inscrits</caption>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
        </tr>

    </thead>
    <tbody>
    <?php 
    include '../main/access.php'; 
    $req = "SELECT * FROM client"; 
    $reponse = $access->query($req); 
    foreach ($reponse as $r): 
    ?>
    <tr>
        <td><?= $r['nom'] ?></td>
        <td><?= $r['prenom'] ?></td>
        <td><?= $r['adresse'] ?></td>
        <td><?= $r['ville'] ?></td>
        <td><?= $r['cp'] ?></td>
    </tr>
    <?php endforeach; ?>
</tbody>
