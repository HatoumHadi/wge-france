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
                'description' => json_encode([
                    "fr" => "La Heidelberg GTOV signifie GTO (Grande Format Tiegel Offset) + V (Vierfarben), ce qui indique qu'il s'agit d'une presse offset à alimentation feuille avec quatre couleurs. Elle est couramment utilisée pour les travaux d'impression commerciaux tels que les brochures, l'emballage, les cartes de visite et les catalogues. La machine prend en charge le format A3, jusqu'à environ 36 x 52 cm. Le « V » dans GTOV signifie « Vierfarben » en allemand, ce qui veut dire « quatre couleurs ». La machine est équipée de 4 unités d'impression pour le Cyan, Magenta, Jaune et Noir (CMJN), permettant l'impression en couleur complète en un seul passage.",
                    "en" => "The Heidelberg GTOV stands for GTO (Großformat-Tiegel Offset) + V (Vierfarben), meaning it is a 4-color sheet-fed offset printing machine. It is commonly used for commercial printing jobs such as brochures, packaging, business cards, and catalogs. The machine supports A3 format paper sizes, up to approximately 36 x 52 cm. The \"V\" in GTOV means \"Vierfarben\" in German, which translates to \"four colors.\" The machine is equipped with 4 printing units for Cyan, Magenta, Yellow, and Black (CMYK), allowing full-color printing in a single pass",
                    "ar" => "تعني Heidelberg GTOV: GTO (آلة الطباعة الأوفست الكبيرة) + V (الألوان الأربعة)، مما يعني أنها آلة طباعة أوفست تغذية بالورق مزودة بأربعة ألوان. تُستخدم عادةً في أعمال الطباعة التجارية مثل الكتيبات، التعبئة والتغليف، بطاقات الأعمال، والكتالوجات. تدعم الآلة حجم ورق A3 يصل إلى حوالي 36 × 52 سم.الحرف \"V\" في GTOV يعني \"Vierfarben\" بالألمانية، والذي يعني \"الألوان الأربعة\". تحتوي الآلة على 4 وحدات طباعة لكل من السماوي (السيان)، الأرجواني (المجنطة)، الأصفر، والأسود (CMYK)، مما يسمح بالطباعة بالألوان الكاملة في مرور واحد."
                ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
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
        ));


    }
}
