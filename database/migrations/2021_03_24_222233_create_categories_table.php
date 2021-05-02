<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img');
            $table->timestamps();
        });

        $categories = [
            
            ['name'=>'Todos los anuncios','img'=>'/categoriesImages/megafono.png'],
            ['name'=>'Motor','img'=>'/categoriesImages/motor.png'],
            ['name'=>'Moda','img'=>'/categoriesImages/moda.png'],
            ['name'=>'Móviles','img'=>'/categoriesImages/moviles.png'],
            ['name'=>'Informática','img'=>'/categoriesImages/informatica.png'],
            ['name'=>'Videojuegos','img'=>'/categoriesImages/videojuegos.png'],
            ['name'=>'Viviendas','img'=>'/categoriesImages/viviendas.png'],
            ['name'=>'Electrodómesticos','img'=>'/categoriesImages/electrodomesticos.png'],
            ['name'=>'Deportes','img'=>'/categoriesImages/deportes.png'],
            ['name'=>'Mascotas','img'=>'/categoriesImages/mascotas.png'],
            ['name'=>'Servicios','img'=>'/categoriesImages/servicios.png']
        ];

        foreach ($categories as $category) {
            $c = new Category();
            $c->name = $category['name'];
            $c->img = $category['img'];
            $c->save();
        }   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
