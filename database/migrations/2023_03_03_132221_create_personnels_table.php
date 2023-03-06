<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     *  @return void 
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->foreignId('tache_id')->constrained("taches");
            $table->timestamps();
        });
         schema::enableForeignkeyConstraints();
    }

    /**
     * Reverse the migrations.
     * 
     * @return void 
     *
     */
    public function down()
    {
        schema::table("taches", function(Blueprint $table){
            $table->dropForeign("tache_id");   
        });
        Schema::dropIfExists('taches');
    }
};
