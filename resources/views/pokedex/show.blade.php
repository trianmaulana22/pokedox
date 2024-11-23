<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pokemon['name'] }}</title>
    <style>
        body { font-family: Arial, sans-serif; background: black; color: green; }
        .container { max-width: 600px; margin: 0 auto; padding: 16px; background: white; border-radius: 8px; }
        .stats { display: flex; justify-content: space-between; margin: 8px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $pokemon['name'] }}</h1>
        <img src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}">
        <p>Type: {{ implode(', ', array_column($pokemon['types'], 'type.name')) }}</p>
        <div class="stats">
            <p>HP: {{ $pokemon['stats'][0]['base_stat'] }}</p>
            <p>Attack: {{ $pokemon['stats'][1]['base_stat'] }}</p>
            <p>Defense: {{ $pokemon['stats'][2]['base_stat'] }}</p>
        </div>
        <a href="/">Back</a>
    </div>
</body>
</html>
    