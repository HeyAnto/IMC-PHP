<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calcul IMC</title>

    <link rel="icon" type="image/svg+xml" href="/assets/favico.svg">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <main>
        <h1 style="text-align: center;">Calculer votre IMC</h1>
        <form class="flex flex-column mgt-50" method="POST" action="">
            <div class="flex flex-column gap-5 mgt-20">
                <label id="age" for="age" class="form-label">Âge</label>
                <input type="number" name="age" step="1" required>
            </div>
            <div class="flex flex-column gap-5 mgt-20">
                <label id="poids" for="poids" class="form-label">Poids (kg)</label>
                <input type="number" name="poids" step="0.1" required>
            </div>
            <div class="flex flex-column gap-5 mgt-20">
                <label id="taille" for="taille" class="form-label">Taille (cm)</label>
                <input type="number" name="taille" step="1" required>
            </div>
            <button class="btn primary-btn mgt-20" style="width: 100%;" type="submit">Calculer</button>
        </form>
        <div class="flex flex-column gap-5 mgt-20">
            <?php include_once "includes/imc.php" ?>
        </div>
    </main>
</body>

<script src="/assets/js/script.js"></script>

</html>