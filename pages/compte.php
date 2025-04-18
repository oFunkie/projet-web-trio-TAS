<?php include '../main/top.php'; ?>

<tbody>
    <?php 
    include '../main/access.php'; 
    $req = "SELECT * FROM client where id "; 
    $reponse = $access->query($req); 
    ?>
    <tr>
        <td><?= $reponse['nom'] ?></td>
        <td><?= $reponse['prenom'] ?></td>
        <td><?= $reponse['adresse'] ?></td>
        <td><?= $reponse['ville'] ?></td>
        <td><?= $reponse['cp'] ?></td>
    </tr>
</tbody>

<?php include '../main/bot.php'; ?>