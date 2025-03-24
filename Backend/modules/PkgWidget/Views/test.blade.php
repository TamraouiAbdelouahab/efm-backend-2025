<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Widget</title>
</head>
<body>

    <h2>Tester un Widget</h2>
    
    <form action="{{ route('widgets.execute') }}" method="POST">
        @csrf
        <label for="method_name">Nom de la méthode :</label>
        <input type="text" id="method_name" name="method_name" required>
        <button type="submit">Exécuter</button>
    </form>

    @if(session('result'))
        <h3>Résultat :</h3>
        @if(session('result')['type'] === 'valeur')
            <p><strong>{{ session('result')['title'] }} :</strong> {{ session('result')['total'] }}</p>
        @elseif(session('result')['type'] === 'liste')
            <p><strong>{{ session('result')['title'] }} :</strong></p>
            <ul>
                @foreach(session('result')['Apprenants'] as $apprenant)
                    <li>{{ $apprenant }}</li>
                @endforeach
            </ul>
            <p>Total : {{ session('result')['NombreApprenants'] }}</p>
        @endif
    @elseif(session('error'))
        <h1>{{ session('error') }}</h1>
    @endif



</body>
</html>
