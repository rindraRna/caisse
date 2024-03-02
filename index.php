 <?php
    include("./traitement/fonction.php");
    connexion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php include("./layout/navbar.php") ?>
    <div class="home">
        <div class="chart">
            <h4>Mouvements</h4>
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="assets/js/cdn.js"></script>
    <script type="text/javascript">
            const ctx = document.getElementById('myChart');
            <?php 
                $mois = [getMonth(1)["month"], getMonth(2)["month"], getMonth(3)["month"], getMonth(4)["month"], getMonth(5)["month"], getMonth(6)["month"], getMonth(7)["month"], getMonth(8)["month"], getMonth(9)["month"], getMonth(10)["month"], getMonth(11)["month"], getMonth(12)["month"]];
            ?>
            let month = [<?= $mois[0] ?>, <?= $mois[1] ?>, <?= $mois[2] ?>, <?= $mois[3] ?>, <?= $mois[4] ?>, <?= $mois[5] ?>, <?= $mois[6] ?>, <?= $mois[7] ?>, <?= $mois[8] ?>, <?= $mois[9] ?>, <?= $mois[10] ?>, <?= $mois[11] ?>];

            new Chart(ctx, {
                type: 'bar',
                data: {
                labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre' ,'Décembre'],
                datasets: [{
                    label: 'Mouvements mensuels',
                    data: month,
                    borderWidth: 1
                }]
                },
                options: {
                scales: {
                    y: {
                    beginAtZero: true
                    }
                }
                }
            });
        </script>
</body>
</html>