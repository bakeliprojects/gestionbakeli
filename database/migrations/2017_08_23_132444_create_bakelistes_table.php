<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBakelistesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bakelistes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->default('');
            $table->string('nom')->default('');
            $table->string('prenom')->default('');
            $table->string('disponiblite')->default('');
            $table->string('cour')->default('');
            $table->string('education')->default('');
            $table->string('technologie')->default('');
            $table->string('languages')->default('');
            $table->string('motivation')->default('');



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
        Schema::dropIfExists('bakeliste');
    }
}
