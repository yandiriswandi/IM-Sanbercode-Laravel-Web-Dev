@extends("layouts.layout")
@section("title")
    Edit Genre
@endsection
@section("content")
    <form method="POST" action="/genre/{{$genre->id}}">
        @csrf
        @method("PUT")
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Genre Name</label>
            <input type="text" class="form-control" name="name" value="{{$genre->name}}">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Genre Description</label>
            <textarea name="description" id="" class="form-control">{{$genre->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection