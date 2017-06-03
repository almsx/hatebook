<?php

//NameSpaces
//Clases en Laravel para utilizarlo en toda
//la clase
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Crearemos una tabla con un capo incrementable llamado id
        //donde tendremos un campo string de tipo nombre
        // y un campo de tipo email donde ademas debe ser de tipo unico
        // para que no se repita en toda la plataforma
        // timestamps todos los registros tendran fecha de creación y fecha de actualizacion
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    //cuando ejecutemos el archivo de migrates
    //quiero deshacer cambios en la tabla / base de datos
    // esta funcion (down) hara una función tipo rollback
    // deshace nuestra utlima accion

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
