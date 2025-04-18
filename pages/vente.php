<?php include '../main/top.php'; ?>

<main class="galerie">
    <h2>Nos Fleurs</h2>
    <div class="grid-galerie">
        <?php for ($i = 1; $i <= 20; $i++): ?>
            <div class="fleur">
                <img src="<?= base ?>images/fleur<?= $i % 6 + 1 ?>.jpg" alt="Fleur <?= $i ?>">
                <p>Fleur n°<?= $i ?></p>
                <button>Ajouter au panier</button>
            </div>
        <?php endfor; ?>
    </div>
</main>

<?php include '../main/bot.php'; ?>
