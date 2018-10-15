<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreatedAtIndexToPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photos', function (Blueprint $table) {
            $table->index('created_at', 'my_created_at_index');
			/* Podría hacer un indice basandome en varias columnas
				para hacer eso debería pasar un array con los nombres
				de las columnas involucradas */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photos', function (Blueprint $table) {
            $table->dropIndex('my_created_at_index');
			/* Si al crear el indice no le hubiera pueto nombre, la convencion
			para indicar el indice a borrar es:
			nombreTabla_columnas_involucradas_index, ejemplo:
			photos_created_at_index */
        });
    }
}
