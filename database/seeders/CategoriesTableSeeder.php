<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('categories')->delete();

        \DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => '{"ar": "إزاحة رباعية الألوان", "en": "4-color offset", "fr": "offset 4 couleurs"}',
                'description' => '{"ar": "آلة تُستخدم لطباعة تصاميم ملونة عالية الجودة على الورق، وتُستخدم غالبًا في الكتب والكتيبات والتغليف", "en": "A machine used to print high-quality color designs on paper, often used for books, brochures, and packaging", "fr": "Une machine utilisée pour imprimer des designs en couleur de haute qualité sur papier, souvent utilisée pour les livres, les brochures et les emballages"}',
                'parent_id' => NULL,
                'created_at' => '2025-01-08 12:49:43',
                'updated_at' => '2025-01-08 12:49:43',
            ),
        ));


    }
}
