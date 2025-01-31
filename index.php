<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calcul IMC</title>

    <link rel="icon" type="image/svg+xml" href="/assets/favico.svg">
    <link rel="stylesheet" href="/assets/css/base.css">
</head>

<body>
    <main>
        <section class="flex flex-column">
            <h1 style="text-align: center;">Calculer votre IMC</h1>
            <div class="flex flex-center">
                <a class="btn-link" href="https://github.com/HeyAnto/IMC-PHP" target="_blank">
                    GitHub
                    <img src="/assets/icon/icon-link.svg" alt="Icone">
                </a>
            </div>
        </section>

        <section class="flex flex-column mt-20">
            <form class="flex flex-column gap-20" method="POST" action="">
                <div class="flex flex-column gap-5">
                    <label class="form-label" for="age">Âge</label>
                    <input class="form-input" id="age" type="number" name="age" min="1" max="120" maxlength="3" required>
                </div>
                <div class="flex flex-column gap-5">
                    <label class="form-label" for="poids">Poids (kg)</label>
                    <input class="form-input" id="poids" type="number" name="poids" min="1" max="500" step="0.1" maxlength="3" required>
                </div>
                <div class="flex flex-column gap-5">
                    <label class="form-label" for="taille">Taille (cm)</label>
                    <input class="form-input" id="taille" type="number" name="taille" min="30" max="250" step="0.1" maxlength="3" required>
                </div>
                <button class="btn btn-primary" style="width: 100%;" type="submit">Calculer</button>
            </form>
            <div class="flex flex-column gap-5 mt-20">
                <?php include_once "includes/imc.php" ?>

                <?php if (isset($erreur)): ?>
                    <div class="card-danger flex flex-column flex-center">
                        <?php echo $erreur ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($imc)): ?>
                    <div class="card-success flex flex-column">
                        <p>Votre IMC est de : <b><?php echo number_format($imc, 1) ?></b></p>
                        <p>Catégorie : <b><?php echo $categorie ?></b></p>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <section class="flex flex-column mt-50 gap-20">
            <h2 style="text-align: center;">Catégories IMC</h2>
            <table class="tableau">
                <thead>
                    <tr>
                        <th>Indice de masse corporelle (IMC)</th>
                        <th>Interprétation (d'après l'OMS)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>moins de 18,5</td>
                        <td>Insuffisance pondérale (maigreur)</td>
                    </tr>
                    <tr>
                        <td>18,5 à 25</td>
                        <td>Corpulence normale</td>
                    </tr>
                    <tr>
                        <td>25 à 30</td>
                        <td>Surpoids</td>
                    </tr>
                    <tr>
                        <td>30 à 35</td>
                        <td>Obésité modérée</td>
                    </tr>
                    <tr>
                        <td>35 à 40</td>
                        <td>Obésité sévère</td>
                    </tr>
                    <tr>
                        <td>plus de 40</td>
                        <td>Obésité morbide ou massive</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>

<script src="/assets/js/script.js"></script>

</html>