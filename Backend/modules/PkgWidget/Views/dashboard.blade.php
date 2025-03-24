<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Styles de la carte */
        .card {
            width: 250px;
            padding: 20px;
            border-radius: 10px;
            background: #f8f9fa;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .card-number {
            font-size: 30px;
            font-weight: bold;
            color: #007bff;
        }

        .card-icon {
            font-size: 40px;
            color: #007bff;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="card-icon">📚</div>
        <div class="card-title">{{ $total['title'] }}</div>
        <div class="card-number">{{ $total['total'] }}</div>
    </div>

</body>
</html>