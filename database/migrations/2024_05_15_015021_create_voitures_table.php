<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_vehicule'); // Corresponds to "Type de Vehicule"
            $table->string('modele'); // Corresponds to "Modele"
            $table->string('matricule'); // Corresponds to "Matricule"
            $table->string('gamme'); // Corresponds to "Gamme du Vehicule"
            $table->string('etat_vehicule'); // Corresponds to "Etat du vehicule"
            $table->string('marque'); // Corresponds to "Marque du véhicule"
            $table->date('annee_acquisition'); // Corresponds to "Date d'acquisition"
            $table->decimal('valeur_net_comptable', 10, 2); // Corresponds to "Valeur Net Comptable"
            $table->date('annee_affectation'); // Corresponds to "Date d'affectation du vehicule"
            $table->string('lieu_affectation'); // Corresponds to "Lieu d'affectation du vehicule"
            $table->string('nature_vehicule'); // Corresponds to "Nature du vehicule"
            $table->decimal('kilometrage', 10, 2)->nullable(); // Corresponds to "Consommation Litres au 100km mixte"
            $table->integer('capacite_reservoir')->nullable(); // Corresponds to "Capacité de réservoir"
            $table->string('sources_energie')->nullable(); // Corresponds to "Source d'énergie"
            $table->string('name_assureur')->nullable(); // Corresponds to "Nom assureur"
            $table->date('date_expiration_assurance')->nullable(); // Corresponds to "Date expiration de l'assurance"
            $table->date('expiration_visite_technique')->nullable(); // Corresponds to "Date expiration visite technique"
            $table->date('date_expiration_carte_rose')->nullable(); // Corresponds to "Date d’expiration de la carte rose"
            $table->string('photos')->nullable(); // Corresponds to "Image"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voitures');
    }
};
