<?php include '../main/top.php'; ?>
<h1>Supprimer</h1>
<!-- Form pour supprimer !-->
<form action="delete.php" method="post">
            <input type="text" name="nom" id ="nom" placeholder="Nom" required>
            <input type="text" name="prenom" id="prenom" placeholder="Prénom" required>
            <input type="text" name="adresse" id="adresse" placeholder="Adresse" required>
            <input type="text" name="ville" id="ville" placeholder="Ville" required>
            <input type="text" name="cp" id="cp" placeholder="Code postal" required>
            <button type="submit">Supprimer</button>
        </form>
    </form>
<!-- Form pour modifier et choisir quoi modifier !-->
    <h1>Modifier</h1>
    <form action="modif.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="adresse">Adresse</label>
        <input type="text" id="adresse" name="adresse" required><br><br>

        <label for="ville">Ville</label>
        <input type="text" id="ville" name="ville" required><br><br>

        <label for="adresse">Code postal</label>
        <input type="text" id="cp" name="cp" required><br><br>

        <h2>Choisissez ce que vous voulez modifier :</h2>

        <label for="nouveau_nom">Nouveau Nom </label>
        <input type="text" id="nouveau_nom" name="nouveau_nom"><br><br>

        <label for="nouveau_prenom">Nouveau Prénom</label>
        <input type="text" id="nouveau_prenom" name="nouveau_prenom"><br><br>

        <label for="nouvelle_adresse">Nouvelle Adresse</label>
        <input type="text" id="nouvelle_adresse" name="nouvelle_adresse"><br><br>

        <label for="nouvelle_ville">Nouvelle Ville</label>
        <input type="text" id="nouvelle_ville" name="nouvelle_ville"><br><br>

        <label for="nouveau_cp">Nouveau code postal</label>
        <input type="text" id="nouveau_cp" name="nouveau_cp"><br><br>

        <input type="submit" value="Modifier">
    </form>

    <?php include '../main/bot.php'; ?>