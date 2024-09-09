<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Entretien;
use App\models\Voiture;
use App\models\Chauffeur;

class EntretienController extends Controller
{
    public function index()
    {
        $listentretiens = Entretien::all();
        return view('entretiens.indexentretiens',['entretiens'=> $listentretiens]);
    }
    public function create()
    {
        $voitures = Voiture::all();
        $chauffeurs = Chauffeur::all();
        return view("entretiens.creerentretiens",['voitures'=> $voitures, 'chauffeurs'=>$chauffeurs]);
    }
}
