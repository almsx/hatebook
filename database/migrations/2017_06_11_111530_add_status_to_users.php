<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Esta funcion agregara un campo llamado 
        //baneado para revisar el status en las
        //usuarios y tiene un status por default
        //de 0 el cual dice que no esta baneado
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('banned')
            ->default(0)
            ->after('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('banned');
        });
    }
}
