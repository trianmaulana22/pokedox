<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <style>
        body { font-family: Arial, sans-serif; background: black; color: green; }
        .container { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
        .card { background: white; border: 1px solid green; border-radius: 8px; padding: 16px; text-align: center; }
    </style>
</head>
<body>
    <h1>PokeDex</h1>
    <div class="container">
        @foreach ($pokemons as $key => $pokemon)
            <div class="card">
                <a href="/pokemon/{{ $key + 1 }}">
                    <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{ $key + 1 }}.png" alt="{{ $pokemon['name'] }}">
                    <h3>{{ $pokemon['name'] }}</h3>
                </a>
            </div>
        @endforeach
    </div>
</body>
</html>
