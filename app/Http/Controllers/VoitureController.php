<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Voiture;


use Illuminate\Http\UploadedFile;
use App\Http\Requests\voitureRequest;


class VoitureController extends Controller
{
    public function index()
    {
        $listvoitures = Voiture::all();
        return view('voitures.index',['voitures'=> $listvoitures]);
    }

    public function create()
    {
    
          return view("voitures.create");
    }

    public function store(voitureRequest $request)
{
    $voiture = new Voiture();

    // Matching the form inputs to the database columns
    $voiture->type_vehicule = $request->input('type_vehicule');
    $voiture->marque = $request->input('marque');
    $voiture->modele = $request->input('modele');
    $voiture->matricule = $request->input('matricule');
    $voiture->gamme = $request->input('gamme');
    $voiture->etat_vehicule = $request->input('etat_vehicule');
    $voiture->annee_acquisition = $request->input('annee_acquisition');
    $voiture->valeur_net_comptable = $request->input('valeur_net_comptable');
    $voiture->annee_affectation = $request->input('annee_affectation');
    $voiture->lieu_affectation = $request->input('lieu_affectation');
    $voiture->nature_vehicule = $request->input('nature_vehicule');
    $voiture->kilometrage = $request->input('kilometrage');
    $voiture->capacite_reservoir = $request->input('capacite_reservoir');
    $voiture->sources_energie = $request->input('sources_energie');
    $voiture->name_assureur = $request->input('name_assureur');
    $voiture->date_expiration_assurance = $request->input('date_expiration_assurance');
    $voiture->expiration_visite_technique = $request->input('expiration_visite_technique');
    $voiture->date_expiration_carte_rose = $request->input('date_expiration_carte_rose');

    // Handling file upload for 'photos'
    if ($request->hasFile('photos')) {
        $voiture->photos = $request->photos->store('images', 'public');
    }

    // Saving the vehicle
    try {
        $voiture->save();
    } catch (\Exception $e) {
        dd($e); // For debugging
    }

    // Flash success message and redirect
    session()->flash('success', 'La voiture a été ajoutée avec succès!');
    return redirect('/voiture_liste');
}

    public function show($id)
     {
        $listvoitures = Voiture::all();
        return view('voitures.detail',['voitures'=> $listvoitures]);
    }

    public function edit($id)
    {
 
        $voitures=Voiture::find($id);

         return view('voitures.edit',['voitures'=>$voitures]);

    }

    public function update(voitureRequest $request, $id)
    {
        $voitures=Voiture::find($id);
        $voitures->marque=$request->input('marque');
        /**$voitures->couleur=$request->input('#e66465');*/
        $voitures->matricule=$request->input('matricule');
        $voitures->modele=$request->input('modele');
        $voitures->carburant=$request->input('carburant');
        $voitures->type=$request->input('type');
        /**$voitures->type=$request->input('debutassurance');
        $voitures->type=$request->input('finassurance');*/
       
        


        $voitures->nombreplaces=$request->input('nombreplaces');
        $voitures->kilometrage=$request->input('kilometrage');
        $voitures->puissance=$request->input('puissance');

        if($request->hasFile('photos')){
          $voitures->photos= $request->photos->store('image');
        }
        try{
            $voitures->save();
        }catch(\Exception $e) {
            dd($e);
        }
        session()->flash('success', 'La voiture est modifié!!');
        return redirect ('/voiture_liste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $voitures=Voiture::find($id);
        $voitures->delete();
        return redirect('/voiture_liste');
    }
}
