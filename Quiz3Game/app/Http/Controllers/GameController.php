<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;


class GameController extends Controller
{
    public function index()
    {
        $game = DB::table('game')->get();
        return view('game.index', ['game' => $game]);
    }

    public function create()
    {
        return view('game.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gameplay' => 'required|string',
            'developer' => 'required|string',
            'year' => 'required|digits:4|integer|min:1980|max:' . date('Y'),
        ]);

        DB::table('game')->insert([
            'name' => $request->name,
            'gameplay' => $request->gameplay,
            'developer' => $request->developer,
            'year' => $request->year,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->route('game.index')->with('success', 'Game berhasil ditambahkan.');
    }

    public function show($id)
    {
        $game = DB::table('game')->find($id);
        return view('game.show', ['game' => $game]);
    }

    public function edit($id)
    {
        $game = DB::table('game')->find($id);
       
        return view('game.edit', compact('game'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'gameplay' => 'required|string',
            'developer' => 'required|string',
            'year' => 'required|digits:4|integer|min:1980|max:' . date('Y'),
        ]);

        DB::table('game')->where('id', $id)->update([
            'name' => $request->name,
            'gameplay' => $request->gameplay,
            'developer' => $request->developer,
            'year' => $request->year,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->route('game.index')->with('success', 'Game berhasil diperbarui.');
    }

    public function destroy($id)
    {
        DB::table('game')->where('id', $id)->delete();
        return redirect()->route('game.index')->with('success', 'Game berhasil dihapus.');
    }
}
