<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonstersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monsters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("index")->nullable();
            $table->string("name")->nullable();
            $table->string("type")->nullable();
            $table->string("alignment")->nullable();
            $table->string("size")->nullable();
            $table->string("hit_dice")->nullable();
            $table->string("languages")->nullable();
            $table->integer("armor_class")->nullable();
            $table->integer("hit_points")->nullable();
            $table->integer("strength")->nullable();
            $table->integer("dexterity")->nullable();
            $table->integer("constitution")->nullable();
            $table->integer("intelligence")->nullable();
            $table->integer("wisdom")->nullable();
            $table->integer("charisma")->nullable();
            $table->integer("xp")->nullable();
            $table->integer("challenge_rating")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monsters');
    }
}
