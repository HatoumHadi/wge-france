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

        \DB::table('products')->insert(array(
            0 => array(
                'id' => 1,
                'name' => '{"ar": "كاثلين بوير", "en": "Kathlyn Boyer", "fr": "Kathlyn Boyer"}',
                'slug' => 'kathlyn-boyer',
                'model' => '{"ar": "النموذج tkn", "en": "Model tkn", "fr": "Modèle tkn"}',
                'brand' => '{"ar": "شينر-ووترز", "en": "Schinner-Waters", "fr": "Schinner-Waters"}',
                'type' => '{"ar": "الليزر", "en": "Laser", "fr": "Laser"}',
                'speed' => 41,
                'resolution' => '{"ar": "1200 نقطة في البوصة", "en": "1200 DPI", "fr": "1200 DPI"}',
                'max_print_size' => '{"ar": "رسالة", "en": "Letter", "fr": "Lettre"}',
                'color_capability' => 1,
                'duplex' => 1,
                'connectivity' => '{"ar": "يو اس بي", "en": "USB", "fr": "USB"}',
                'power_consumption' => 297,
                'condition' => '{"ar": "مُعاد تصنيعه", "en": "Refurbished", "fr": "Reconditionné"}',
                'stock_quantity' => 43,
                'price' => 1968.04,
                'description' => '{"ar": "نص عربي للوصف.", "en": "Quasi aperiam quo atque quo.", "fr": "Quasi aperiam quo atque quo."}',
                'warranty' => 2,
                'manufacture_year' => '1973',
                'images' => '["i1.jpg", "i2.jpg", "i3.jpg"]',
                'category_id' => 1,
                'created_at' => '2025-01-11 13:29:02',
                'updated_at' => '2025-01-11 13:29:02',
            ),
            1 => array(
                'id' => 2,
                'name' => '{"ar": "لو ديكو", "en": "Lou Deckow", "fr": "Lou Deckow"}',
                'slug' => 'lou-deckow',
                'model' => '{"ar": "النموذج egi", "en": "Model egi", "fr": "Modèle egi"}',
                'brand' => '{"ar": "جيردي-سكيلز", "en": "Jerde-Skiles", "fr": "Jerde-Skiles"}',
                'type' => '{"ar": "الحراري", "en": "Thermal", "fr": "Thermique"}',
                'speed' => 47,
                'resolution' => '{"ar": "300 نقطة في البوصة", "en": "300 DPI", "fr": "300 DPI"}',
                'max_print_size' => '{"ar": "A4", "en": "A4", "fr": "A4"}',
                'color_capability' => 1,
                'duplex' => 0,
                'connectivity' => '{"ar": "يو اس بي", "en": "USB", "fr": "USB"}',
                'power_consumption' => 93,
                'condition' => '{"ar": "مستعمل", "en": "Used", "fr": "Utilisé"}',
                'stock_quantity' => 2,
                'price' => 3931.68,
                'description' => '{"ar": "نص عربي للوصف.", "en": "Odio aliquid voluptatem id.", "fr": "Odio aliquid voluptatem id."}',
                'warranty' => 2,
                'manufacture_year' => '1975',
                'images' => '["i1.jpg", "i2.jpg", "i3.jpg"]',
                'category_id' => 2,
                'created_at' => '2025-01-11 13:29:02',
                'updated_at' => '2025-01-11 13:29:02',
            ),
            2 => array(
                'id' => 3,
                'name' => '{"ar": "كاثلين جيبسون", "en": "Kathleen Gibson", "fr": "Kathleen Gibson"}',
                'slug' => 'kathleen-gibson',
                'model' => '{"ar": "النموذج wsn", "en": "Model wsn", "fr": "Modèle wsn"}',
                'brand' => '{"ar": "جولدز, تورفي و كيرلوك", "en": "Goldner, Torphy and Kerluke", "fr": "Goldner, Torphy and Kerluke"}',
                'type' => '{"ar": "الليزر", "en": "Laser", "fr": "Laser"}',
                'speed' => 36,
                'resolution' => '{"ar": "600 نقطة في البوصة", "en": "600 DPI", "fr": "600 DPI"}',
                'max_print_size' => '{"ar": "A3", "en": "A3", "fr": "A3"}',
                'color_capability' => 1,
                'duplex' => 0,
                'connectivity' => '{"ar": "إيثرنت", "en": "Ethernet", "fr": "Ethernet"}',
                'power_consumption' => 134,
                'condition' => '{"ar": "جديد", "en": "New", "fr": "Nouveau"}',
                'stock_quantity' => 47,
                'price' => 3046.57,
                'description' => '{"ar": "نص عربي للوصف.", "en": "Illo voluptatem ut delectus illum labore.", "fr": "Illo voluptatem ut delectus illum labore."}',
                'warranty' => 2,
                'manufacture_year' => '2012',
                'images' => '["i1.jpg", "i2.jpg", "i3.jpg"]',
                'category_id' => 3,
                'created_at' => '2025-01-11 13:29:02',
                'updated_at' => '2025-01-11 13:29:02',
            ),
            3 => array(
                'id' => 4,
                'name' => '{"ar": "أبيغيل بفيفر", "en": "Abigail Pfeffer", "fr": "Abigail Pfeffer"}',
                'slug' => 'abigail-pfeffer',
                'model' => '{"ar": "النموذج qod", "en": "Model qod", "fr": "Modèle qod"}',
                'brand' => '{"ar": "روزينباوم-شيلدز", "en": "Rosenbaum-Shields", "fr": "Rosenbaum-Shields"}',
                'type' => '{"ar": "دوت ماتريكس", "en": "Dot Matrix", "fr": "Dot Matrix"}',
                'speed' => 100,
                'resolution' => '{"ar": "600 نقطة في البوصة", "en": "600 DPI", "fr": "600 DPI"}',
                'max_print_size' => '{"ar": "رسالة", "en": "Letter", "fr": "Lettre"}',
                'color_capability' => 1,
                'duplex' => 0,
                'connectivity' => '{"ar": "يو اس بي", "en": "USB", "fr": "USB"}',
                'power_consumption' => 364,
                'condition' => '{"ar": "جديد", "en": "New", "fr": "Nouveau"}',
                'stock_quantity' => 41,
                'price' => 3279.58,
                'description' => '{"ar": "نص عربي للوصف.", "en": "Id fugiat excepturi nihil animi.", "fr": "Id fugiat excepturi nihil animi."}',
                'warranty' => 3,
                'manufacture_year' => '2007',
                'images' => '["i1.jpg", "i2.jpg", "i3.jpg"]',
                'category_id' => 4,
                'created_at' => '2025-01-11 13:29:02',
                'updated_at' => '2025-01-11 13:29:02',
            ),
        ));
    }
}
