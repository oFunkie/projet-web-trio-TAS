<?php include '../main/top.php'; ?>
<div class="container">

<tbody>

    <?php 
    include '../main/access.php'; 
    $req = "SELECT * FROM client"; 
    $reponse = $access->query($req); 
    foreach ($reponse as $r): 
    ?>
        <p><?= $r['nom'] ?>
        <?= $r['prenom'] ?>
        <?= $r['adresse'] ?>
        <?= $r['ville'] ?>
        <?= $r['cp'] ?></p>
    <?php endforeach; ?>
</tbody>
    </div>

<?php include '../main/bot.php'; ?>