<?php include '../main/top.php'; ?>
<title>Votre Panier</title>

<main class="adresse-panier">
    <h1>Informations d'adresse</h1>

    <form action="#" method="post">

        <div class="adresse-container">
            <!-- Facturation -->
            <div class="adresse-bloc">
                <h2>Adresse de facturation</h2>
                <label for="fact-nom">Nom complet</label>
                <input type="text" id="fact-nom" name="fact-nom" required>

                <label for="fact-adresse">Adresse</label>
                <input type="text" id="fact-adresse" name="fact-adresse" required>

                <label for="fact-ville">Ville</label>
                <input type="text" id="fact-ville" name="fact-ville" required>

                <label for="fact-code">Code postal</label>
                <input type="text" id="fact-code" name="fact-code" required>

                <label for="fact-pays">Pays</label>
                <input type="text" id="fact-pays" name="fact-pays" required>
            </div>

            <!-- Livraison -->
            <div class="adresse-bloc">
                <h2>Adresse de livraison</h2>
                <label for="livnom">Nom complet</label>
                <input type="text" id="livnom" name="nom" required>

                <label for="livadresse">Adresse</label>
                <input type="text" id="livadresse" name="adresse" required>

                <label for="livville">Ville</label>
                <input type="text" id="livville" name="ville" required>

                <label for="livcode">Code postal</label>
                <input type="text" id="livcode" name="code" required>

                <label for="livpays">Pays</label>
                <input type="text" id="livpays" name="pays" required>
            </div>
        </div>

        <div class="submit-button">
            <button type="submit">Valider</button>
        </div>
    </form>
</main>

<?php include '../main/bot.php'; ?>
