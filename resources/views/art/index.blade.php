<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Artworks</title>
</head>
<body>
    <header>
        <h1>New Releases</h1>
        <div class="artworks">
            @foreach ($artworks as $artwork)
                <div class="art-item">
                    <img src="{{ asset('images/' . $artwork->image) }}" alt="{{ $artwork->name }}">
                    <p>{{ $artwork->name }}</p>
                    <p>by {{ $artwork->artist->name }}</p>
                </div>
            @endforeach
        </div>

        <h1>Artists</h1>
        <div class="artists">
            @foreach ($artists as $artist)
                <div class="artist-item">
                    <p>{{ $artist->name }}</p>
                </div>
            @endforeach
        </div>
    </header>

    <footer>
        <div class="footer-container">
            <p>Use cases</p>
            <p>Explore</p>
            <p>Resources</p>
        </div>
    </footer>
</body>
</html>
