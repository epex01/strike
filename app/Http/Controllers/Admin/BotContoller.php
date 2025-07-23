<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bot;
use Illuminate\Http\Request;

class BotContoller extends Controller
{
    public function index()
    {
        $bots = Bot::all();

        return view('Admin.Bot.index', ['bots' => $bots]);
    }

    public function savebot(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:4|max:20|unique:bots,name',
            'amount' => 'required',
            'profit' => 'required',
            'duration' => 'required',
        ]);

        $bots = Bot::create([
            'name' => $request->name,
            'amount' => $request->amount,
            'profit' => $request->profit,
            'duration' => $request->duration,
            'status' => 'active',
        ]);

        return redirect()->back()->with('success', 'Trading bot successfully added');
    }

    public function editbot(Request $request, $id)
    {
        $bot = Bot::find(decrypt($id));

        return view('Admin.Bot.edit', ['bot' => $bot]);
    }

    public function updatebot(Request $request, $id)
    {
        $bot = Bot::find(decrypt($id));

        $bot->name = $request->name;
        $bot->amount = $request->amount;
        $bot->duration = $request->duration;
        $bot->profit = $request->profit;
        $bot->status = $request->status;
        $bot->update();

        return redirect()->route('admin.bots.index')->with('success', 'Bot Updated');
    }

    public function deletebot($id)
    {
        $bot = Bot::find(decrypt($id));
        $bot->delete();

        return redirect()->route('admin.bots.index')->with('success', 'Bot Deleted');
    }
}
