<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function showAddForm()
    {
        return view('add_agent');
    }

    public function saveAgent(Request $request)
    {
        $agent = new Agent();
        $agent->name = $request->input('name');
        // Enregistrez les autres informations de l'agent
        $agent->save();

        return redirect()->back()->with('success', 'Agent ajouté avec succès.');
    }
}
