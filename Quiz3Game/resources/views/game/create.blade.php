<!doctype html>
<html lang="en">

<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        crossorigin="anonymous">
    <title>Create Data</title>
</head>

<body>

    <div class="container mt-5">
        <h2>Create Data Game</h2>

        <form action="{{ route('game.store') }}" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="name">Game Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter game name"
                    value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="gameplay">Gameplay</label>
                <input type="text" name="gameplay" id="gameplay" class="form-control" placeholder="Enter gameplay type"
                    value="{{ old('gameplay') }}">
            </div>

            <div class="form-group">
                <label for="developer">Developer</label>
                <input type="text" name="developer" id="developer" class="form-control"
                    placeholder="Enter developer name" value="{{ old('developer') }}">
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" name="year" id="year" class="form-control" placeholder="Enter release year"
                    value="{{ old('year') }}">
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('game.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

</body>

</html>