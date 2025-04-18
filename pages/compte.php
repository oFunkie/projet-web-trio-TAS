<?php include '../main/top.php'; ?>

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

<?php include '../main/bot.php'; ?>