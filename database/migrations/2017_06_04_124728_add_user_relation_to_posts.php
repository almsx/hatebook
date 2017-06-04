<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserRelationToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //$table->unsignedInteger('user_id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //Tabla1, Tabla2, Campo el que recibe la relacion, tipo de relacion
            //Primero borramos la relacion
            $table->dropForeign('posts_user_id_foreign');
            //Luego borramos la columna :)
            $table->dropColumn('user_id');
        });
    }
}
