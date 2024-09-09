<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Voiture;
class AffectationController extends Controller
{
    public function index()
    {
        $listvoitures = Voiture::all();
        return view('voitures.affectation',['voitures'=> $listvoitures]);
    }
}
