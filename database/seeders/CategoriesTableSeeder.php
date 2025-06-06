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

        \DB::table('categories')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => '{"ar": "إزاحة رباعية الألوان", "en": "4-color offset", "fr": "offset 4 couleurs"}',
                    'description' => '{"ar": "آلة تُستخدم لطباعة تصاميم ملونة عالية الجودة على الورق، وتُستخدم غالبًا في الكتب والكتيبات والتغليف", "en": "A machine used to print high-quality color designs on paper, often used for books, brochures, and packaging", "fr": "Une machine utilisée pour imprimer des designs en couleur de haute qualité sur papier, souvent utilisée pour les livres, les brochures et les emballages"}',
                    'parent_id' => NULL,
                    'created_at' => '2025-01-08 12:49:43',
                    'updated_at' => '2025-01-08 12:49:43',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => '{"ar": "طباعة حرفية", "en": "Typo", "fr": "Typo"}',
                    'description' => '{"ar": "آلة تُستخدم للطباعة البارزة مثل النصوص والعناوين، تُعد من أقدم تقنيات الطباعة", "en": "A machine used for letterpress printing such as texts and headings, considered one of the oldest printing techniques", "fr": "Une machine utilisée pour l`impression typographique comme les textes et les titres, considérée comme l`une des plus anciennes techniques d`impression"}',
                    'parent_id' => NULL,
                    'created_at' => '2025-01-08 12:50:00',
                    'updated_at' => '2025-01-08 12:50:00',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => '{"ar": "إزاحة لون واحد", "en": "1-color offset", "fr": "offset 1 couleur"}',
                    'description' => '{"ar": "آلة طباعة تستخدم لونًا واحدًا فقط، مثالية لطباعة النصوص أو التصاميم أحادية اللون مثل الإيصالات أو المستندات الرسمية", "en": "A printing machine that uses only one color, ideal for printing text or monochrome designs like receipts or official documents", "fr": "Une machine d`impression qui utilise une seule couleur, idéale pour l`impression de textes ou de designs monochromes comme les reçus ou les documents officiels"}',
                    'parent_id' => NULL,
                    'created_at' => '2025-01-08 12:50:00',
                    'updated_at' => '2025-01-08 12:50:00',
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => '{"ar": "إزاحة لونين", "en": "2-color offset", "fr": "offset 2 couleurs"}',
                    'description' => '{"ar": "آلة تُستخدم للطباعة بلونين، مناسبة للمطبوعات التي لا تتطلب ألوان كاملة ولكن بجودة جيدة", "en": "A machine used for printing in two colors, suitable for prints that don`t require full color but need good quality", "fr": "Une machine utilisée pour imprimer en deux couleurs, adaptée aux impressions qui ne nécessitent pas de couleurs complètes mais une bonne qualité"}',
                    'parent_id' => NULL,
                    'created_at' => '2025-01-08 12:50:00',
                    'updated_at' => '2025-01-08 12:50:00',
                ),


        ));


    }
}
