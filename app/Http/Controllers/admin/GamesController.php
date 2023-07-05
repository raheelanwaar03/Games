<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {
        return view('admin.games.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'commission' => 'required',
            'image' => 'required',
        ]);

        $image = $validated['image'];
        $image_name = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $image_name);

        $game = new Games();
        $game->title = $validated['title'];
        $game->price = $validated['price'];
        $game->description = $validated['description'];
        $game->commission = $validated['commission'];
        $game->image = $image_name;
        $game->save();
        return redirect()->route('Admin.All.Games')->with('success', 'New Game Added successfully');
    }

    public function all()
    {
        $games = Games::get();
        return view('admin.games.all', compact('games'));
    }

    public function delete($id)
    {
        $game = Games::find($id);
        $game->delete();
        return redirect()->back()->with('success','Game deleted successfully!');
    }

}
