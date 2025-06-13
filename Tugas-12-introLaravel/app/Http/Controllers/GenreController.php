<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GenreController extends Controller
{
    public function create()
    {
        return view("genres.create");
    }

    public function store(Request $request)
    {
        //validation
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
        ]);
        //insert
        DB::table('genres')->insert([
            'name' => $request->input('name'),
            'description' => $request->input(key: 'description'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // The blog post is valid...
        return redirect('/genre');
    }

    public function index()
    {
        $genres = DB::table('genres')->get();

        return view('genres.index', ['genres' => $genres]);
    }

    public function show($id)
    {
        $genre = DB::table('genres')->find($id);

        return view('genres.detail', ['genre' => $genre]);
    }

    public function edit($id)
    {
        $genre = DB::table('genres')->find($id);

        return view('genres.edit', ['genre' => $genre]);
    }

    public function update($id, Request $request)
    {
        //validation
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
        ]);
        //insert
        DB::table('genres')->where('id', $id)->update([
            'name' => $request->input('name'),
            'description' => $request->input(key: 'description'),
            'updated_at' => Carbon::now(),
        ]);

        // The blog post is valid...
        return redirect('/genre');
    }

    public function destroy($id)
    {
        DB::table('genres')->where('id', $id)->delete();
        return redirect('/genre');
    }
}
