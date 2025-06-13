@extends("layouts.layout")
@section("title")
    Genres
@endsection
@section("content")
    <a href="/genre/create" class="btn btn-primary btn-sm my-2">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Desciption</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($genres as $genre)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$genre->name}}</td>
                    <td>{{$genre->description}}</td>
                    <td>
                        <form method="POST" action="/genre/{{$genre->id}}">
                            @csrf
                            @method("DELETE")
                            <a href="/genre/{{$genre->id}}" class="btn btn-info btn-sm  me-2">Detail</a>
                            <a href="/genre/{{$genre->id}}/edit" class="btn btn-warning btn-sm me-2">Edit</a>
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <p>No Genres</p>
            @endforelse
        </tbody>
    </table>
@endsection