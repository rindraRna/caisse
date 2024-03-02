<?php
// Exemple de données dynamiques en PHP
$labels = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
$data = [0, 19, 3, 5, 2, 3, 1, 15, 7, 9, 11, 4];

// Convertir les tableaux en chaînes JSON
$labelsJSON = json_encode($labels);
$dataJSON = json_encode($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart</title>
    <!-- Inclure la bibliothèque Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <!-- Créer le canvas pour le graphique -->
    <canvas id="myChart"></canvas>

    <script>
        // Récupérer le contexte du canvas
        const ctx = document.getElementById('myChart').getContext('2d');

        // Créer le graphique avec les données dynamiques
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo $labelsJSON; ?>,
                datasets: [{
                    label: 'Nombre de mouvement',
                    data: <?php echo $dataJSON; ?>,
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
