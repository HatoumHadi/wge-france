<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('products')->delete();

        \DB::table('products')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => '{"fr": "HEIDELBERG", "ar": "هايدلبرغ", "en": "HEIDELBERG"}',
                'description' => '{"fr":"La Heidelberg GTOV signifie GTO (Grande Format Tiegel Offset) + V (Vierfarben), ce qui indique qu\'il s\'agit d\'une presse offset à alimentation feuille avec quatre couleurs. Elle est couramment utilisée pour les travaux d\'impression commerciaux tels que les brochures, l\'emballage, les cartes de visite et les catalogues. La machine prend en charge le format A3, jusqu\'à environ 36 x 52 cm. Le « V » dans GTOV signifie « Vierfarben » en allemand, ce qui veut dire « quatre couleurs ». La machine est équipée de 4 unités d\'impression pour le Cyan, Magenta, Jaune et Noir (CMJN), permettant l\'impression en couleur complète en un seul passage.","en":"The Heidelberg GTOV stands for GTO (Großformat-Tiegel Offset) + V (Vierfarben), meaning it is a 4-color sheet-fed offset printing machine. It is commonly used for commercial printing jobs such as brochures, packaging, business cards, and catalogs. The machine supports A3 format paper sizes, up to approximately 36 x 52 cm. The \\"V\\" in GTOV means \\"Vierfarben\\" in German, which translates to \\"four colors.\\" The machine is equipped with 4 printing units for Cyan, Magenta, Yellow, and Black (CMYK), allowing full-color printing in a single pass","ar":"تعني Heidelberg GTOV: GTO (آلة الطباعة الأوفست الكبيرة) + V (الألوان الأربعة)، مما يعني أنها آلة طباعة أوفست تغذية بالورق مزودة بأربعة ألوان. تُستخدم عادةً في أعمال الطباعة التجارية مثل الكتيبات، التعبئة والتغليف، بطاقات الأعمال، والكتالوجات. تدعم الآلة حجم ورق A3 يصل إلى حوالي 36 × 52 سم.الحرف \\"V\\" في GTOV يعني \\"Vierfarben\\" بالألمانية، والذي يعني \\"الألوان الأربعة\\". تحتوي الآلة على 4 وحدات طباعة لكل من السماوي (السيان)، الأرجواني (المجنطة)، الأصفر، والأسود (CMYK)، مما يسمح بالطباعة بالألوان الكاملة في مرور واحد."}',
                'slug' => 'heidelberg',
                'model' => '{"fr":"GTOV"}',
                'brand' => '{"ar": "هايدلبرغ", "en": "HEIDELBERG", "fr": "HEIDELBERG"}',
                'type' => '{"ar": "سلسلة 690015", "en": "serie 690015", "fr": "serie 690015"}',
                'speed' => '{"ar": "ما يصل إلى 8000 ورقة في الساعة", "en": "Up to 8,000 sheets per hour", "fr": "Jusqu`à 8 000 feuilles par heure"}',
                'resolution' => NULL,
            'max_print_size' => '{"ar": "34 × 50 سم (حوالي 13.39 × 19.69 بوصة)", "en": "34 x 50 cm (approximately 13.39 x 19.69 inches)", "fr": "34 x 50 cm (environ 13,39 x 19,69 pouces)"}',
                'color_capability' => 1,
                'duplex' => 1,
                'connectivity' => '{"ar": "لا يوجد اتصال رقمي أو شبكي", "en": "No digital or network connectivity", "fr": "Aucune connectivité numérique ou réseau"}',
                'power_consumption' => '{"ar": "من 4 إلى 6 كيلو وات أثناء التشغيل", "en": "4 to 6 kW during operation", "fr": "4 à 6 kW en fonctionnement"}',
                'condition' => '{"ar": "مستخدم", "en": "Used", "fr": "Utilisée"}',
                'stock_quantity' => 1,
                'price' => 8500.0,
                'warranty' => NULL,
                'manufacture_year' => '1987',
                'images' => '["products\\/01JVHFFSPJNCVQ09DJQ5ZCW2EA.webp","products\\/01JVHFFSPX6HM03X5SCNPWWHES.webp"]',
                'category_id' => 1,
                'created_at' => '2025-01-11 13:29:02',
                'updated_at' => '2025-05-18 10:36:59',
            ),
            1 =>
            array (
                'id' => 3,
                'name' => '{"fr": "RYOBI", "ar": "ريوبي", "en": "RYOBI"}',
            'description' => '{"fr":"La RYOBI 524 GX est une presse offset feuille à feuille à 4 couleurs avec une unité de vernis. Elle est largement utilisée pour les impressions commerciales de haute qualité telles que les brochures, les catalogues, les cartes de visite et les emballages. Ce modèle de 2007 offre une précision d’impression exceptionnelle, un changement de plaques rapide grâce au système semi-automatique, ainsi qu’un pupitre de commande centralisé pour une gestion simplifiée. L’unité de vernis permet une finition brillante ou mate pour améliorer l’apparence des imprimés.","en":"The RYOBI 524 GX is a 4-color sheet-fed offset printing press with a coating unit. Widely used for high-quality commercial printing like brochures, catalogs, business cards, and packaging. This 2007 model offers exceptional print precision, quick plate changes with a semi-automatic system, and a centralized control panel for easy operation. The coating unit allows for glossy or matte finishes to enhance the final product.","ar":"ريوبي 524 GX هي آلة طباعة أوفست تغذية بالورق مزودة بأربعة ألوان ووحدة تلميع (ورنيش). تُستخدم على نطاق واسع في الطباعة التجارية عالية الجودة مثل الكتيبات والكتالوجات وبطاقات العمل والتغليف. يتميز هذا الطراز لعام 2007 بدقة طباعة استثنائية، وتغيير سريع للألواح عبر نظام شبه أوتوماتيكي، ولوحة تحكم مركزية لتسهيل التشغيل. تسمح وحدة التلميع بالحصول على تشطيبات لامعة أو غير لامعة لتعزيز جودة المنتج النهائي."}',
                'slug' => 'ryobi-524-gx',
                'model' => '{"fr": "524 GX", "ar": "524 GX", "en": "524 GX"}',
                'brand' => '{"ar": "ريوبي", "en": "RYOBI", "fr": "RYOBI"}',
                'type' => '{"ar": "أوفست بأربعة ألوان مع وحدة ورنيش", "en": "4-color offset with coating unit", "fr": "Offset 4 couleurs avec vernis"}',
                'speed' => '{"ar": "حتى 13,000 ورقة في الساعة", "en": "Up to 13,000 sheets per hour", "fr": "Jusqu’à 13 000 feuilles par heure"}',
                'resolution' => '{"en":null}',
                'max_print_size' => '{"ar": "52 × 36 سم", "en": "52 x 36 cm", "fr": "52 x 36 cm"}',
                'color_capability' => 1,
                'duplex' => 0,
                'connectivity' => '{"ar": "لا توجد إمكانية اتصال رقمي", "en": "No digital connectivity", "fr": "Pas de connectivité numérique"}',
                'power_consumption' => '{"ar": "تقريبًا 7 كيلو وات أثناء التشغيل", "en": "Approx. 7 kW during operation", "fr": "Env. 7 kW en fonctionnement"}',
                'condition' => '{"ar": "مستخدم", "en": "Used", "fr": "Utilisée"}',
                'stock_quantity' => 1,
                'price' => 14500.0,
                'warranty' => NULL,
                'manufacture_year' => '2007',
                'images' => '["products\\/01JX3JW88YJW1RQ05HX0YAEXS4.jpg","products\\/01JX3JW8A8HY7DYEBQK2W9590T.jpg"]',
                'category_id' => 1,
                'created_at' => '2025-06-07 12:00:00',
                'updated_at' => '2025-06-06 21:38:15',
            ),
        ));


    }
}
