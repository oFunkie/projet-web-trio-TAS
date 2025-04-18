<?php include '../main/top.php'; ?>
<main>
    <h2>Inscription clients<h2>
        <form action="submit.php" method="post">
            <input type="text" name="nom" id ="nom" placeholder="Nom" required>
            <input type="text" name="prenom" id="prenom" placeholder="Prénom" required>
            <input type="text" name="adresse" id="adresse" placeholder="Adresse">
            <input type="text" name="ville" id="ville" placeholder="Ville">
            <input type="text" name="cp" id="cp" placeholder="Code postal">
            <button type="submit">Inscription</button>
        </form>
</main>
<?php include '../main/bot.php'; ?>