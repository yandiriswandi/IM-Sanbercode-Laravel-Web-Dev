<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <title>Table Data</title>
</head>
<body>

<div class="container mt-5">
  <h2>List Game</h2>

  <a href="{{ route('game.create') }}" class="btn btn-primary mb-3">Tambah</a>

  @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <table class="table table-bordered">
    <thead class="thead-light">
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Gameplay</th>
        <th>Developer</th>
        <th>Year</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($game as $index =>$item)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{$item->name }}</td>
          <td>{{$item->gameplay }}</td>
          <td>{{$item->developer }}</td>
          <td>{{$item->year }}</td>
          <td>
            <a href="{{ route('game.show',$item->id) }}" class="btn btn-info btn-sm">Detail</a>
            <a href="{{ route('game.edit',$item->id) }}" class="btn btn-warning btn-sm">Edit</a>

            <form action="{{ route('game.destroy',$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin hapus?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="6" class="text-center">Tidak ada data</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
