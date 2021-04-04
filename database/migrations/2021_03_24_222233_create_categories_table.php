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
            ['name'=>'Motor','img'=>'/categoriesImages/motor.jpg'],
            ['name'=>'Moda','img'=>'/categoriesImages/moda.jpg'],
            ['name'=>'Móviles','img'=>'/categoriesImages/moviles.jpg'],
            ['name'=>'Informática','img'=>'/categoriesImages/informatica.jpg'],
            ['name'=>'Videojuegos','img'=>'/categoriesImages/videojuegos.jpg'],
            ['name'=>'Viviendas','img'=>'/categoriesImages/viviendas.jpg'],
            ['name'=>'Electrodómesticos','img'=>'/categoriesImages/electrodomesticos.jpg'],
            ['name'=>'Deportes','img'=>'/categoriesImages/deportes.jpg'],
            ['name'=>'Mascotas','img'=>'/categoriesImages/mascotas.jpg'],
            ['name'=>'Servicios','img'=>'/categoriesImages/servicios.jpg']
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
