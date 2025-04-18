<?php include '../main/top.php'; ?>
<div class="container">
<tbody>

    <?php 
    include '../main/access.php'; 
    $req = "SELECT * FROM client where id "; 
    $reponse = $access->query($req); 
    ?>
    <tr>
        <td><?= $r['nom'] ?></td>
        <td><?= $r['prenom'] ?></td>
        <td><?= $r['adresse'] ?></td>
        <td><?= $r['ville'] ?></td>
        <td><?= $r['cp'] ?></td>
    </tr>
</tbody>
    </div>
<?php include '../main/bot.php'; ?>