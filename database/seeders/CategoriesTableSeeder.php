<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $category1 = new Category;
         $category1->nombrecategoria = "Herramienta";
         $category1->save();

         $category2 = new Category;
         $category2->nombrecategoria = "Utilitarios";
         $category2->save();

         $category3 = new Category;
         $category3->nombrecategoria = "Comprimidos";
         $category3->save();


         $category4 = new Category;
         $category4->nombrecategoria = "Complementos";
         $category4->save();
        }
}
