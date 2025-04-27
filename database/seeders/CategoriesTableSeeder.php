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
                'name' => '{"ar": "الطابعات الرقمية", "en": "Digital Printers", "fr": "Imprimantes numériques"}',
                'description' => '{"ar": "المطابع الرقمية: تستخدم المطابع الرقمية نظامًا متطورًا من الأرقام والصيغ لتجميع الصور الجاهزة للطباعة.", "en": "Digital Presses. Digital press uses a sophisticated system of numbers and formulas to put together the images that are ready for printing.", "fr": "Presses numériques. Les presses numériques utilisent un système sophistiqué de chiffres et de formules pour assembler les images prêtes à être imprimées."}',
                'parent_id' => NULL,
                'created_at' => '2025-01-08 12:49:43',
                'updated_at' => '2025-01-08 12:49:43',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => '{"ar": "تجاري", "en": "Commercial", "fr": "Commerciale"}',
                'description' => '{"ar": "آلة الطباعة البارزة. على الرغم من قلة شيوعها اليوم، لا تزال آلات الطباعة البارزة تستخدم في مهام الطباعة المتخصصة.", "en": "Letterpress Printing Machine. Although less common today, letterpress printing machines are still used for specialty printing tasks.", "fr": "Machine d`impression typographique. Bien que moins courantes aujourd`hui, les machines d`impression typographique sont toujours utilisées pour des tâches d`impression spécialisées."}',
                'parent_id' => 1,
                'created_at' => '2025-01-08 12:49:43',
                'updated_at' => '2025-01-08 12:49:43',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => '{"ar": "الطابعات النافثة للحبر", "en": "Ink-jet Printers", "fr": "Imprimantes à jet d`encre"}',
                'description' => '{"ar": "الماء هو المكون الرئيسي للحبر في الطباعة النافثة للحبر المائية، كما يشير اسمه. ورغم مرونته في الاستخدام، فإنه لن ينتج منتجًا دائمًا إلا عند إقرانه بالتصفيح.", "en": "Water is the main component of the ink in aqueous inkjet printing, as its name indicates. Though flexible in usage, they’ll turn out a permanent product only when paired along with lamination.", "fr": "L`eau est le composant principal de l`encre utilisée dans l`impression jet d`encre aqueuse, comme son nom l`indique. Bien que leur utilisation soit flexible, elles ne produiront un produit permanent que si elles sont associées à un laminage."}',
                'parent_id' => NULL,
                'created_at' => '2025-01-08 12:49:43',
                'updated_at' => '2025-01-08 12:49:43',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => '{"ar": "طابعات الشاشة", "en": "Screen Printers", "fr": "Sérigraphes"}',
                'description' => '{"ar": "هذه هي التقنية الأكثر فعالية بين الأشكال المختلفة للطباعة كبيرة الحجم. طريقة عملها مختلفة. يستخدم نظام التجفيف الأشعة فوق البنفسجية بالتوازي مع عملية الطباعة. بفضل هذا، لا يلزم وقت تجفيف بعد اكتمال الطباعة.", "en": "This is the most effective technique among the various forms of large format printing. The way it works is different. The drying system utilizes ultra-violet rays parallel to the printing process. Thanks to this, no drying time is required after the printing is complete.", "fr": "Il s`agit de la technique la plus efficace parmi les différentes formes d`impression grand format. Son fonctionnement est différent. Le système de séchage utilise des rayons ultraviolets parallèlement au processus d`impression. Grâce à cela, aucun temps de séchage n`est nécessaire une fois l`impression terminée."}',
                'parent_id' => NULL,
                'created_at' => '2025-01-08 12:49:43',
                'updated_at' => '2025-01-08 12:49:43',
            ),
        ));


    }
}
