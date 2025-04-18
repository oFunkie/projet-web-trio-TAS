<?php include '../main/top.php'; ?>
<title>Votre Panier</title>
<div class="container">
    <h1>Informations d'adresse</h1>

    <form action="#" method="post">

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

      <h2>Adresse de livraison</h2>

      <label for="nom">Nom complet</label>
      <input type="text" id="livnom" name="nom" required>

      <label for="adresse">Adresse</label>
      <input type="text" id="livadresse" name="adresse" required>

      <label for="ville">Ville</label>
      <input type="text" id="livville" name="ville" required>

      <label for="code">Code postal</label>
      <input type="text" id="livcode" name="code" required>

      <label for="pays">Pays</label>
      <input type="text" id="livpays" name="pays" required>

      <div class="submit-button">
        <button type="submit">Valider</button>
      </div>
    </form>
  </div>

<?php include '../main/bot.php'; ?>