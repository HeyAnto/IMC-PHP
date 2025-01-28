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
            <form class="flex flex-column mt-20" method="POST" action="">
                <div class="flex flex-column gap-5 mt-20">
                    <label class="form-label" id="age" for="age" class="form-label">Âge</label>
                    <input class="form-input" type="number" name="age" step="1" required>
                </div>
                <div class="flex flex-column gap-5 mt-20">
                    <label class="form-label" id="poids" for="poids" class="form-label">Poids (kg)</label>
                    <input class="form-input" type="number" name="poids" step="1" required>
                </div>
                <div class="flex flex-column gap-5 mt-20">
                    <label class="form-label" id="taille" for="taille" class="form-label">Taille (cm)</label>
                    <input class="form-input" type="number" name="taille" step="1" required>
                </div>
                <button class="btn btn-primary mt-20" style="width: 100%;" type="submit">Calculer</button>
            </form>
            <div class="flex flex-column gap-5 mt-20">
                <?php include_once "includes/imc.php" ?>
            </div>
        </section>
        <section class="mt-50">
            <h2 style="text-align: center;">Tableau des catégories d'IMC</h2>
            <table class="tableau mt-20">
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