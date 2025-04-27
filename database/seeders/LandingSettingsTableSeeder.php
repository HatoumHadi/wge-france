<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LandingSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('landing_settings')->delete();

        \DB::table('landing_settings')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'key' => 'header_primary_title',
                    'value' => '{"en":"Welcome to Unit360: Your Complete Property Management Solution","ar":"قم بإدارة ممتلكاتك بسهولة مع Unit 360","fr":"Bienvenue sur Unit360 : votre solution complète de gestion immobilière"}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            1 =>
                array(
                    'id' => 2,
                    'key' => 'home_section_one_title',
                    'value' => '{"en":"How it Works","ar":"كيف يعمل","fr":"Comment ça fonctionne"}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            2 =>
                array(
                    'id' => 3,
                    'key' => 'home_section_one_title_one',
                    'value' => '{"en":"Apply for Partnership","ar":"تقدم لشراكة","fr":"Postulez pour un partenariat"}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            3 =>
                array(
                    'id' => 4,
                    'key' => 'home_section_one_description_one',
                    'value' => '{"en":"Submit your reseller application through the Unit360 website. Once approved, you’ll receive access to our reseller portal, complete with training, marketing resources, and product materials.","ar":"قدّم طلبك لتكون موزعًا من خلال موقع Unit360 الإلكتروني. بمجرد الموافقة، ستتمكن من الوصول إلى بوابة الموزعين لدينا، التي تتضمن التدريب، والموارد التسويقية، ومواد المنتجات.","fr":"Soumettez votre demande de revendeur via le site web de Unit360. Une fois approuvé, vous recevrez un accès à notre portail revendeur, avec des formations, des ressources marketing et des documents produits."}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            4 =>
                array(
                    'id' => 5,
                    'key' => 'home_section_one_icon_one',
                    'value' => '{"en":"heroicon-o-user-group","ar":"heroicon-o-user-group","fr":"heroicon-o-user-group"}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            5 =>
                array(
                    'id' => 6,
                    'key' => 'home_section_one_title_two',
                    'value' => '{"en":"Apply for Partnership","ar":"تقدم لشراكة","fr":"Postulez pour un partenariat"}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            6 =>
                array(
                    'id' => 7,
                    'key' => 'home_section_one_description_two',
                    'value' => '{"en":"Submit your reseller application through the Unit360 website. Once approved, you’ll receive access to our reseller portal, complete with training, marketing resources, and product materials.","ar":"قدّم طلبك لتكون موزعًا من خلال موقع Unit360 الإلكتروني. بمجرد الموافقة، ستتمكن من الوصول إلى بوابة الموزعين لدينا، التي تتضمن التدريب، والموارد التسويقية، ومواد المنتجات.","fr":"Soumettez votre demande de revendeur via le site web de Unit360. Une fois approuvé, vous recevrez un accès à notre portail revendeur, avec des formations, des ressources marketing et des documents produits."}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            7 =>
                array(
                    'id' => 8,
                    'key' => 'home_section_one_icon_two',
                    'value' => '{"en":"heroicon-o-user-group","ar":"heroicon-o-user-group","fr":"heroicon-o-user-group"}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            8 =>
                array(
                    'id' => 9,
                    'key' => 'home_section_one_title_three',
                    'value' => '{"en":"Apply for Partnership","ar":"تقدم لشراكة","fr":"Postulez pour un partenariat"}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            9 =>
                array(
                    'id' => 10,
                    'key' => 'home_section_one_description_three',
                    'value' => '{"en":"Submit your reseller application through the Unit360 website. Once approved, you’ll receive access to our reseller portal, complete with training, marketing resources, and product materials.","ar":"قدّم طلبك لتكون موزعًا من خلال موقع Unit360 الإلكتروني. بمجرد الموافقة، ستتمكن من الوصول إلى بوابة الموزعين لدينا، التي تتضمن التدريب، والموارد التسويقية، ومواد المنتجات.","fr":"Soumettez votre demande de revendeur via le site web de Unit360. Une fois approuvé, vous recevrez un accès à notre portail revendeur, avec des formations, des ressources marketing et des documents produits."}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            10 =>
                array(
                    'id' => 11,
                    'key' => 'home_section_one_icon_three',
                    'value' => '{"en":"heroicon-o-user-group","ar":"heroicon-o-user-group","fr":"heroicon-o-user-group"}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            11 =>
                array(
                    'id' => 12,
                    'key' => 'home_section_one_title_four',
                    'value' => '{"en":"Apply for Partnership","ar":"تقدم لشراكة","fr":"Postulez pour un partenariat"}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            12 =>
                array(
                    'id' => 13,
                    'key' => 'home_section_one_description_four',
                    'value' => '{"en":"Submit your reseller application through the Unit360 website. Once approved, you’ll receive access to our reseller portal, complete with training, marketing resources, and product materials.","ar":"قدّم طلبك لتكون موزعًا من خلال موقع Unit360 الإلكتروني. بمجرد الموافقة، ستتمكن من الوصول إلى بوابة الموزعين لدينا، التي تتضمن التدريب، والموارد التسويقية، ومواد المنتجات.","fr":"Soumettez votre demande de revendeur via le site web de Unit360. Une fois approuvé, vous recevrez un accès à notre portail revendeur, avec des formations, des ressources marketing et des documents produits."}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            13 =>
                array(
                    'id' => 14,
                    'key' => 'home_section_one_icon_four',
                    'value' => '{"en":"heroicon-o-user-group","ar":"heroicon-o-user-group","fr":"heroicon-o-user-group"}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            14 =>
                array(
                    'id' => 15,
                    'key' => 'header_images',
                    'value' => json_encode([
                        'en' => ['machine_1.jpg', 'machine_2.jpg', 'machine_3.jpg'],
                    ]),
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            15 =>
                array(
                    'id' => 16,
                    'key' => 'about_primary_title',
                    'value' => '{"en":"About Us","ar":"معلومات عنا","fr":"À propos de nous"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            16 =>
                array(
                    'id' => 17,
                    'key' => 'about_description',
                    'value' => '{"en":"Any machine used in printing ink on the substrate (printing medium) which can be cloth, paper or plastic, is referred to as the printing machinery. By applying pressure to the substrate, the printing machinery transfers the ink on the printing medium resting on an inked platform composed of movable type.","ar":"أي آلة تستخدم في طباعة الحبر على الركيزة (وسيلة الطباعة) والتي يمكن أن تكون قماشًا أو ورقًا أو بلاستيكًا، يشار إليها باسم آلات الطباعة. من خلال تطبيق الضغط على الركيزة، تنقل آلات الطباعة الحبر على وسيط الطباعة المستقر على منصة حبر مكونة من نوع متحرك.","fr":"On appelle machine d`impression toute machine utilisée pour imprimer de l`encre sur un support (support d`impression) qui peut être du tissu, du papier ou du plastique. En appliquant une pression sur le support, la machine d`impression transfère l`encre sur le support d`impression reposant sur une plate-forme encrée composée de caractères mobiles."}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            17 =>
                array(
                    'id' => 18,
                    'key' => 'about_video',
                    'value' => '{"en":"video1.mp4"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            18 =>
                array(
                    'id' => 19,
                    'key' => 'about_work_shop_images',
                    'value' => json_encode([
                        'en' => ['machine_1.jpg', 'img.png', 'machine_3.jpg', 'machine_3.jpg'],
                    ]),
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            19 =>
                array(
                    'id' => 20,
                    'key' => 'about_work_shop_title',
                    'value' => '{"en":"Workshop","ar":"ورشة عمل","fr":"Atelier"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            20 =>
                array(
                    'id' => 21,
                    'key' => 'our_vision_section_title',
                    'value' => '{"en":"Our Vision","ar":"رؤيتنا","fr":"Notre Vision"}',
                    'created_at' => '2024-06-20 15:31:48',
                    'updated_at' => '2024-06-24 15:30:07',
                ),
            21 =>
                array(
                    'id' => 22,
                    'key' => 'our_vision_description',
                    'value' => '{"en": "Any machine used in printing ink on the substrate (printing medium) which can be cloth, paper or plastic, is referred to as the printing machinery. By applying pressure to the substrate, the printing machinery transfers the ink on the printing medium resting on an inked platform composed of movable type.","ar": "أي آلة تستخدم في طباعة الحبر على الركيزة (وسيلة الطباعة) والتي يمكن أن تكون قماشًا أو ورقًا أو بلاستيكًا، يشار إليها باسم آلات الطباعة. من خلال تطبيق الضغط على الركيزة، تنقل آلات الطباعة الحبر على وسيط الطباعة المستقر على منصة حبر مكونة من نوع متحرك.","fr": "On appelle machine d`impression toute machine utilisée pour imprimer de l`encre sur un support (support d`impression) qui peut être du tissu, du papier ou du plastique. En appliquant une pression sur le support, la machine d`impression transfère l`encre sur le support d`impression reposant sur une plate-forme encrée composée de caractères mobiles."}',
                    'created_at' => '2024-06-20 15:31:48',
                    'updated_at' => '2024-12-09 22:38:34',
                ),
            22 =>
                array(
                    'id' => 23,
                    'key' => 'our_vision_primary_image',
                    'value' => '{"en":"i1.jpg"}',
                    'created_at' => '2024-06-20 15:31:48',
                    'updated_at' => '2024-10-11 23:06:36',
                ),
            23 =>
                array(
                    'id' => 24,
                    'key' => 'our_vision_second_image',
                    'value' => '{"en":"i2.jpg"}',
                    'created_at' => '2024-06-20 15:31:48',
                    'updated_at' => '2024-10-11 23:06:36',
                ),
            24 =>
                array(
                    'id' => 25,
                    'key' => 'our_vision_third_image',
                    'value' => '{"en":"i3.jpg"}',
                    'created_at' => '2024-06-20 15:31:48',
                    'updated_at' => '2024-11-28 19:48:42',
                ),
            25 =>
                array(
                    'id' => 26,
                    'key' => 'our_mission_section_title',
                    'value' => '{"en":"Our Mission","ar":"مهمتنا","fr":"Notre mission"}',
                    'created_at' => '2024-06-20 15:31:48',
                    'updated_at' => '2024-06-24 15:30:07',
                ),
            26 =>
                array(
                    'id' => 27,
                    'key' => 'our_mission_description',
                    'value' => '{"en": "Any machine used in printing ink on the substrate (printing medium) which can be cloth, paper or plastic, is referred to as the printing machinery. By applying pressure to the substrate, the printing machinery transfers the ink on the printing medium resting on an inked platform composed of movable type.","ar": "أي آلة تستخدم في طباعة الحبر على الركيزة (وسيلة الطباعة) والتي يمكن أن تكون قماشًا أو ورقًا أو بلاستيكًا، يشار إليها باسم آلات الطباعة. من خلال تطبيق الضغط على الركيزة، تنقل آلات الطباعة الحبر على وسيط الطباعة المستقر على منصة حبر مكونة من نوع متحرك.","fr": "On appelle machine d`impression toute machine utilisée pour imprimer de l`encre sur un support (support d`impression) qui peut être du tissu, du papier ou du plastique. En appliquant une pression sur le support, la machine d`impression transfère l`encre sur le support d`impression reposant sur une plate-forme encrée composée de caractères mobiles."}',
                    'created_at' => '2024-06-20 15:31:48',
                    'updated_at' => '2024-12-09 22:38:34',
                ),
            27 =>
                array(
                    'id' => 28,
                    'key' => 'our_mission_primary_image',
                    'value' => '{"en":"i5.jpg"}',
                    'created_at' => '2024-06-20 15:31:48',
                    'updated_at' => '2024-10-11 23:06:36',
                ),
            28 =>
                array(
                    'id' => 29,
                    'key' => 'our_mission_second_image',
                    'value' => '{"en":"i6.jpg"}',
                    'created_at' => '2024-06-20 15:31:48',
                    'updated_at' => '2024-10-11 23:06:36',
                ),
            29 =>
                array(
                    'id' => 30,
                    'key' => 'about_secondary_title',
                    'value' => '{"en":"WGE France","ar":"WGE فرنسا","fr":"WGE France"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            30 =>
                array(
                    'id' => 31,
                    'key' => 'about_header_image',
                    'value' => '{"en":"i8.jpg"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            31 =>
                array(
                    'id' => 32,
                    'key' => 'our_vision_header_image',
                    'value' => '{"en":"i8.jpg"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            32 =>
                array(
                    'id' => 33,
                    'key' => 'our_vision_section_second_title',
                    'value' => '{"en":"WGE France","ar":"WGE فرنسا","fr":"WGE France"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            33 =>
                array(
                    'id' => 34,
                    'key' => 'our_mission_header_image',
                    'value' => '{"en":"i8.jpg"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            34 =>
                array(
                    'id' => 35,
                    'key' => 'our_mission_section_secondary_title',
                    'value' => '{"en":"WGE France","ar":"WGE فرنسا","fr":"WGE France"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            35 =>
                array(
                    'id' => 36,
                    'key' => 'faq_section_title',
                    'value' => '{"en":"Frequently Asked Questions","ar":"الأسئلة الشائعة","fr":"Questions fréquemment posées"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            36 =>
                array(
                    'id' => 37,
                    'key' => 'faq_section_secondary_title',
                    'value' => '{"en":"WGE France","ar":"WGE فرنسا","fr":"WGE France"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            37 =>
                array(
                    'id' => 38,
                    'key' => 'faq_header_image',
                    'value' => '{"en":"i8.jpg"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            38 =>
                array(
                    'id' => 39,
                    'key' => 'contact_section_title',
                    'value' => '{"en":"Contact Us","ar":"اتصل بنا","fr":"Contactez-nous"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            39 =>
                array(
                    'id' => 40,
                    'key' => 'contact_section_secondary_title',
                    'value' => '{"en":"WGE France","ar":"WGE فرنسا","fr":"WGE France"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            40 =>
                array(
                    'id' => 41,
                    'key' => 'contact_header_image',
                    'value' => '{"en":"i8.jpg"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            41 =>
                array(
                    'id' => 42,
                    'key' => 'contact_section_address',
                    'value' => '{"en":"Address","ar":"عنوان","fr":"Adresse"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            42 =>
                array(
                    'id' => 43,
                    'key' => 'contact_section_address_content',
                    'value' => '{"en":"4 Rue de la Chaise, 95300 Livilliers, France","ar":"4 شارع دي لا شيز، 95300 ليفيلييه، فرنسا","fr":"4 Rue de la Chaise, 95300 Livilliers, France"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            43 =>
                array(
                    'id' => 44,
                    'key' => 'contact_section_whatsapp',
                    'value' => '{"en":"Whatsapp","ar":"واتساب","fr":"Whatsapp"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            44 =>
                array(
                    'id' => 45,
                    'key' => 'contact_section_whatsapp_content',
                    'value' => '{"en":"+33 6 8030049","ar":"+33 6 8030049","fr":"+33 6 8030049"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            45 =>
                array(
                    'id' => 46,
                    'key' => 'contact_telephone',
                    'value' => '{"en":"Telephone","ar":"الهاتف","fr":"Téléphone"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            46 =>
                array(
                    'id' => 47,
                    'key' => 'contact_telephone_content',
                    'value' => '{"en":"+33 6 8030049","ar":"+33 6 8030049","fr":"+33 6 8030049"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            47 =>
                array(
                    'id' => 48,
                    'key' => 'contact_email_title',
                    'value' => '{"en":"Email","ar":"بريد إلكتروني","fr":"E-mail"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            48 =>
                array(
                    'id' => 49,
                    'key' => 'contact_email_content',
                    'value' => '{"en":"Admin@email.com"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            49 =>
                array(
                    'id' => 50,
                    'key' => 'home_content_over_slider_header',
                    'value' => '{"en":"Your trusted partner for high-quality Pad Printing Machines", "ar":"شريكك الموثوق به لآلات الطباعة بالوسادة عالية الجودة", "fr":"Votre partenaire confiable pour des machines de imprimerie de haute qualité"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            50 =>
                array(
                    'id' => 51,
                    'key' => 'home_content_over_slider_description',
                    'value' => '{"en":"<p>Discover over 20 years of experience and innovation with <strong>WGE France</strong>.&nbsp;</p><p>The world leader in advanced pad printing technology. Trust us for precision, reliability, and top-quality machines customised for your printing needs. Find all the necessary consumables with us.</p>","ar":"<p dir=\"rtl\">اكتشف أكثر من 20 عامًا من الخبرة والابتكار مع <strong>WGE France</strong></p><p dir=\"rtl\">. الشركة الرائدة عالميًا في تكنولوجيا الطباعة المتقدمة. ثق بنا للحصول على الدقة والموثوقية والآلات عالية الجودة المخصصة لاحتياجات الطباعة الخاصة بك. ابحث عن جميع المواد الاستهلاكية الضرورية لدينا.</p>","fr":"<p>Découvrez plus de 20 ans d`expérience et d`innovation avec <strong>WGE France</strong>.&nbsp;</p><p>Leader mondial des technologies avancées de tampographie. Faites-nous confiance pour des machines de précision, de fiabilité et de qualité supérieure adaptées à vos besoins d`impression. Retrouvez chez nous tous les consommables nécessaires.</p>"}',
                    'created_at' => '2024-12-08 09:05:31',
                    'updated_at' => '2024-12-08 09:05:31',
                ),
            51 =>
                array(
                    'id' => 52,
                    'key' => 'product_header_image',
                    'value' => '{"en":"i8.jpg"}',
                    'created_at' => '2024-06-20 15:31:48',
                    'updated_at' => '2024-10-11 23:06:36',
                ),
            52 =>
                array(
                    'id' => 53,
                    'key' => 'logo',
                    'value' => '{"en":"/logo/WGE-France.jpg"}',
                    'created_at' => '2024-06-20 15:31:48',
                    'updated_at' => '2024-10-11 23:06:36',
                ),
        ));
    }
}
