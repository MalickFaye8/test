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
        Schema::create('chauffeurs', function (Blueprint $table) {
            $table->id();
            $table->string('matricule_chauf')->unique();
            $table->string('name_chauf');
            $table->string('tel_chauf');
            $table->date('date_chauf');
            $table->string('cni_chauf');
            $table->string('type_permis');
            $table->string('status_chauf');
            $table->string('nom_societe')->nullable(); // Nullable since it's only required for external drivers
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
        Schema::dropIfExists('chauffeurs');
    }
};
