<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Chauffeur;
use App\Http\Requests\chauffeurRequest;
class ChauffeurController extends Controller
{
    public function index()
    {
        $chauffeurs = Chauffeur::all();
        return view('chauffeur.index', compact('chauffeurs'));
    }

    public function create()
    {
        // Récupérer le dernier ID de chauffeur
        $lastChauffeur = Chauffeur::latest('id')->first();
        $newChauffeurId = $lastChauffeur ? $lastChauffeur->id + 1 : 1;

        // Générer la nouvelle matricule
        $newMatricule = 'MG00' . $newChauffeurId;

        

        // Passer les données à la vue
        return view('chauffeur.create', compact('newMatricule'));
    }

    public function store(chauffeurRequest $request)
    {
        // Create a new Chauffeur instance
    $chauffeurs = new Chauffeur();

    // Fill the fields from the form inputs
    $chauffeurs->matricule_chauf = $request->input('matricule_chauf');
    $chauffeurs->name_chauf = $request->input('name_chauf');
    $chauffeurs->tel_chauf = $request->input('tel_chauf');
    $chauffeurs->date_chauf = $request->input('date_chauf');
    $chauffeurs->cni_chauf = $request->input('cni_chauf');
    // Add the new fields
    $chauffeurs->type_permis = $request->input('type_permis');
    $chauffeurs->status_chauf = $request->input('status_chauf');

    // Handle conditional field for external drivers
    if ($request->input('status_chauf') === 'externe') {
        $chauffeurs->nom_societe = $request->input('nom_societe'); // Only for external drivers
    } else {
        $chauffeurs->nom_societe = null; // Set to null if internal driver
    }

    // Save the chauffeur record in the database
    $chauffeurs->save();

    // Flash success message and redirect
    session()->flash('success', 'Le chauffeur a été enregistré avec succès!');
    return redirect('/chauffeur_liste');
    }

    public function edit($id)
    {
 
        $chauffeurs=Chauffeur::find($id);

         return view('chauffeur.edit',['chauffeurs'=>$chauffeurs]);

    }

    public function update(chauffeurRequest $request, $id)
    {
        $chauffeurs=Chauffeur::find($id);
        $chauffeurs->matricule_chauf=$request->input('matricule_chauf');
        $chauffeurs->name_chauf=$request->input('name_chauf');
        $chauffeurs->tel_chauf=$request->input('tel_chauf');
        $chauffeurs->date_chauf=$request->input('date_chauf');
        $chauffeurs->cni_chauf=$request->input('cni_chauf');
        $chauffeurs->adresse_chauf=$request->input('adresse_chauf');
        $chauffeurs->justif_chauf=$request->input('justif_chauf');
        $chauffeurs->save();
        session()->flash('success', 'Les infos du chauffeuront été modifiées avec succes!!');
        return redirect ('/chauffeur_liste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $chauffeurs=Chauffeur::find($id);
        $chauffeurs->delete();
        return redirect('/chauffeur_liste');
    }
}
