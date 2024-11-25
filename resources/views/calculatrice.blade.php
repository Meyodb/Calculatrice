<!-- resources/views/calculatrice.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <h1>Calculatrice</h1>
    
    @if(isset($resultat))
        <h2>Résultat : {{ $resultat }}</h2>
    @endif
    
    <form action="/calculator" method="POST">
        @csrf
        <input type="number" name="nombre1" placeholder="Nombre 1" required>
        <input type="number" name="nombre2" placeholder="Nombre 2" required>
        
        <select name="operation">
            <option value="addition">Addition</option>
            <option value="soustraction">Soustraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select>
        
        <button type="submit">Calculer</button>
    </form>
</body>
</html>

