<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        crossorigin="anonymous">
    <title>Detail Data</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Detail Data Game</h2>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $game->name }}</h4>
                <p class="card-text"><strong>Gameplay:</strong> {{ $game->gameplay }}</p>
                <p class="card-text"><strong>Developer:</strong> {{ $game->developer }}</p>
                <p class="card-text"><strong>Year:</strong> {{ $game->year }}</p>
                <a href="{{ route('game.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>

</html>
