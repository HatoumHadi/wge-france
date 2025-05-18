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

        \DB::table('landing_settings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'key' => 'header_primary_title',
                'value' => '{"en":"Welcome to Unit360: Your Complete Property Management Solution","ar":"قم بإدارة ممتلكاتك بسهولة مع Unit 360","fr":"Bienvenue sur Unit360 : votre solution complète de gestion immobilière"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2024-12-08 09:03:29',
            ),
            1 =>
            array (
                'id' => 2,
                'key' => 'home_section_one_title',
                'value' => '{"en":"How it Works","ar":"كيف يعمل","fr":"Comment ça fonctionne"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2024-12-08 09:03:29',
            ),
            2 =>
            array (
                'id' => 3,
                'key' => 'home_section_one_title_one',
                'value' => '{"en":"Superior Printing Quality","ar":"جودة طباعة فائقة","fr":"Qualité d\'impression supérieure"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2025-04-27 11:26:48',
            ),
            3 =>
            array (
                'id' => 4,
                'key' => 'home_section_one_description_one',
                'value' => '{"en":"Achieve exceptional and consistent results with our machines, delivering high repeatability and unparalleled accuracy in every operation","ar":"حقق نتائج استثنائية ومتسقة مع آلاتنا، مما يوفر إمكانية تكرار عالية ودقة لا مثيل لها في كل عملية","fr":"Obtenez des résultats exceptionnels et cohérents avec nos machines, offrant une répétabilité élevée et une précision inégalée à chaque opération"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2025-04-27 11:26:48',
            ),
            4 =>
            array (
                'id' => 5,
                'key' => 'home_section_one_icon_one',
                'value' => '{"en":"heroicon-o-user-group","ar":"heroicon-o-user-group","fr":"heroicon-o-user-group"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2024-12-08 09:03:29',
            ),
            5 =>
            array (
                'id' => 6,
                'key' => 'home_section_one_title_two',
                'value' => '{"en":"Industry Expertise","ar":"الخبرة الصناعية","fr":"Expertise sectorielle"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2025-04-27 11:26:48',
            ),
            6 =>
            array (
                'id' => 7,
                'key' => 'home_section_one_description_two',
                'value' => '{"en":"Benefit from our deep understanding of industry-specific regulations. We provide comprehensive validation packages tailored to meet your sector\'s requirements","ar":"استفد من فهمنا العميق للوائح الخاصة بكل قطاع. نقدم باقات تحقق شاملة مصممة خصيصًا لتلبية متطلبات قطاعك","fr":"Bénéficiez de notre connaissance approfondie des réglementations sectorielles. Nous proposons des packages de validation complets et adaptés aux exigences de votre secteur."}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2025-04-27 11:26:48',
            ),
            7 =>
            array (
                'id' => 8,
                'key' => 'home_section_one_icon_two',
                'value' => '{"en":"heroicon-o-user-group","ar":"heroicon-o-user-group","fr":"heroicon-o-user-group"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2024-12-08 09:03:29',
            ),
            8 =>
            array (
                'id' => 9,
                'key' => 'home_section_one_title_three',
                'value' => '{"en":"Customized Solutions","ar":"حلول مخصصة","fr":"Solutions personnalisées"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2025-04-27 11:26:48',
            ),
            9 =>
            array (
                'id' => 10,
                'key' => 'home_section_one_description_three',
                'value' => '{"en":"Our experienced engineers specialize in designing machines precisely adapted to your unique needs and specifications, ensuring optimal performance for your applications","ar":"يتخصص مهندسونا ذوو الخبرة في تصميم الآلات الملائمة بدقة لاحتياجاتك ومواصفاتك الفريدة، مما يضمن الأداء الأمثل لتطبيقاتك","fr":"Nos ingénieurs expérimentés se spécialisent dans la conception de machines précisément adaptées à vos besoins et spécifications uniques, garantissant des performances optimales pour vos applications"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2025-04-27 11:26:48',
            ),
            10 =>
            array (
                'id' => 11,
                'key' => 'home_section_one_icon_three',
                'value' => '{"en":"heroicon-o-user-group","ar":"heroicon-o-user-group","fr":"heroicon-o-user-group"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2024-12-08 09:03:29',
            ),
            11 =>
            array (
                'id' => 12,
                'key' => 'home_section_one_title_four',
                'value' => '{"en":"Reliability and Durability","ar":"الموثوقية والمتانة","fr":"Fiabilité et durabilité"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2025-04-27 11:26:48',
            ),
            12 =>
            array (
                'id' => 13,
                'key' => 'home_section_one_description_four',
                'value' => '{"en":"Count on our machines for long-term performance. We utilize reliable components and incorporate robust design principles, including FMEA, alongside proactive remote and on-site support","ar":"اعتمد على أجهزتنا لتحقيق أداء طويل الأمد. نستخدم مكونات موثوقة وندمج مبادئ تصميم متينة، بما في ذلك تحليل FMEA، إلى جانب الدعم الاستباقي عن بُعد وفي الموقع","fr":"Comptez sur nos machines pour des performances durables. Nous utilisons des composants fiables et appliquons des principes de conception rigoureux, notamment l\'AMDEC, ainsi qu\'une assistance proactive à distance et sur site."}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2025-04-27 11:26:48',
            ),
            13 =>
            array (
                'id' => 14,
                'key' => 'home_section_one_icon_four',
                'value' => '{"en":"heroicon-o-user-group","ar":"heroicon-o-user-group","fr":"heroicon-o-user-group"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2024-12-08 09:03:29',
            ),
            14 =>
            array (
                'id' => 15,
                'key' => 'header_images',
                'value' => '{"fr":"[\\"01JSVFRZ4MAMV254EH3E7ZTWCX.jpg\\",\\"01JSVFRZ4YNQY00GBC10GKB6TQ.jpg\\",\\"01JSVFRZ568DCB9JZ2QNTNX82Y.jpg\\",\\"01JSVFRZ5FNRVPRWVJCZCECSEZ.jpg\\"]","ar":"[\\"01JSVFRZ4MAMV254EH3E7ZTWCX.jpg\\",\\"01JSVFRZ4YNQY00GBC10GKB6TQ.jpg\\",\\"01JSVFRZ568DCB9JZ2QNTNX82Y.jpg\\",\\"01JSVFRZ5FNRVPRWVJCZCECSEZ.jpg\\"]","en":"[\\"01JSVFRZ4MAMV254EH3E7ZTWCX.jpg\\",\\"01JSVFRZ4YNQY00GBC10GKB6TQ.jpg\\",\\"01JSVFRZ568DCB9JZ2QNTNX82Y.jpg\\",\\"01JSVFRZ5FNRVPRWVJCZCECSEZ.jpg\\"]"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2025-04-27 17:37:57',
            ),
            15 =>
            array (
                'id' => 16,
                'key' => 'about_primary_title',
                'value' => '{"en":"About Us","ar":"معلومات عنا","fr":"À propos de nous"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            16 =>
            array (
                'id' => 17,
                'key' => 'about_description',
                'value' => '{"en":"<p>At <strong>WGE France</strong>, we specialize in the sale, purchase, and maintenance of high-quality printing machines. With years of industry experience, our mission is to provide reliable and cost-effective solutions for businesses seeking efficient printing technologies.<br><br>Whether you\'re looking to invest in a new machine, sell your existing equipment, or ensure optimal performance through expert maintenance, our dedicated team is here to support you every step of the way. We take pride in delivering personalized service, technical expertise, and trusted machinery that meets the evolving needs of the printing industry.<br><br>Partner with WGE France—your trusted source for professional printing equipment and support.</p>","ar":"<p dir=\\"rtl\\">في WGE فرنسا، نتخصص في بيع وشراء وصيانة آلات الطباعة عالية الجودة. بخبرة تمتد لسنوات في هذا المجال، نهدف إلى توفير حلول موثوقة واقتصادية للشركات التي تبحث عن تقنيات طباعة فعّالة.<br><br>سواء كنت ترغب في الاستثمار في آلة جديدة، أو بيع معداتك الحالية، أو ضمان الأداء الأمثل من خلال صيانة احترافية، فإن فريقنا المتفاني جاهز لدعمك في كل خطوة. نفخر بتقديم خدمة شخصية، وخبرة فنية، وآلات موثوقة تلبي الاحتياجات المتطورة لصناعة الطباعة.<br><br>تعاون مع WGE فرنسا - مصدرك الموثوق لمعدات الطباعة الاحترافية والدعم الفني.</p>","fr":"<p>Chez <strong>WGE France</strong>, nous sommes spécialisés dans la vente, l\'achat et la maintenance de machines d\'impression de haute qualité. Forts de nombreuses années d\'expérience dans le secteur, notre mission est de fournir des solutions fiables et économiques aux entreprises en quête de technologies d\'impression performantes.<br><br>Que vous souhaitiez investir dans une nouvelle machine, vendre votre équipement existant ou garantir des performances optimales grâce à une maintenance experte, notre équipe dédiée est là pour vous accompagner à chaque étape. Nous sommes fiers de vous offrir un service personnalisé, une expertise technique et des machines fiables qui répondent aux besoins changeants du secteur de l\'impression.<br><br>Faites équipe avec WGE France&nbsp;: votre fournisseur de confiance pour vos équipements d\'impression professionnels et votre assistance.</p>"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2025-05-01 11:26:04',
            ),
            17 =>
            array (
                'id' => 18,
                'key' => 'about_video',
                'value' => '{"fr":"about-us/vid-1.mp4","ar":"video1.mp4","en":"video1.mp4"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2025-04-28 20:02:03',
            ),
            18 =>
            array (
                'id' => 19,
                'key' => 'about_work_shop_images',
                'value' => '{"fr":"[\\"01JSW518BVVDA99SETMF6P7MV6.jpg\\",\\"01JSW518C2V7QRAKCDG24N29ZC.jpg\\",\\"01JSW518CA439P3FFZQNB055C2.jpg\\",\\"01JSW518CHWFP909QBJYMY047N.jpg\\",\\"01JSW518CS1Q2HZ3CMK8NXPHHA.jpg\\"]","ar":"[\\"01JSW518BVVDA99SETMF6P7MV6.jpg\\",\\"01JSW518C2V7QRAKCDG24N29ZC.jpg\\",\\"01JSW518CA439P3FFZQNB055C2.jpg\\",\\"01JSW518CHWFP909QBJYMY047N.jpg\\",\\"01JSW518CS1Q2HZ3CMK8NXPHHA.jpg\\"]","en":"[\\"01JSW518BVVDA99SETMF6P7MV6.jpg\\",\\"01JSW518C2V7QRAKCDG24N29ZC.jpg\\",\\"01JSW518CA439P3FFZQNB055C2.jpg\\",\\"01JSW518CHWFP909QBJYMY047N.jpg\\",\\"01JSW518CS1Q2HZ3CMK8NXPHHA.jpg\\"]"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2025-04-27 17:37:57',
            ),
            19 =>
            array (
                'id' => 20,
                'key' => 'about_work_shop_title',
                'value' => '{"en":"Workshop","ar":"ورشة عمل","fr":"Atelier"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            20 =>
            array (
                'id' => 21,
                'key' => 'our_vision_section_title',
                'value' => '{"en":"Our Vision","ar":"رؤيتنا","fr":"Notre Vision"}',
                'created_at' => '2024-06-20 15:31:48',
                'updated_at' => '2024-06-24 15:30:07',
            ),
            21 =>
            array (
                'id' => 22,
                'key' => 'our_vision_description',
                'value' => '{"en":"<p>At our core, we strive to be a trusted leader in the printing industry by delivering top-quality WGE France machines and reliable maintenance services. Our vision is to empower businesses with cutting-edge printing technology, backed by expert support, to ensure lasting performance and efficiency. We are committed to innovation, customer satisfaction, and long-term partnerships that drive success for our clients.</p>","ar":"<p dir=\\"rtl\\">نسعى جاهدين لنكون روادًا موثوقين في صناعة الطباعة، من خلال توفير آلات WGE France عالية الجودة وخدمات صيانة موثوقة. رؤيتنا هي تمكين الشركات من خلال تقنيات طباعة متطورة، بدعم من خبراء متخصصين، لضمان أداء وكفاءة مستدامين. نحن ملتزمون بالابتكار، ورضا العملاء، وبناء شراكات طويلة الأمد تضمن نجاح عملائنا.</p>","fr":"<p>Notre objectif principal est d\'être un leader de confiance dans le secteur de l\'impression en fournissant des machines WGE France de qualité supérieure et des services de maintenance fiables. Notre vision est de fournir aux entreprises des technologies d\'impression de pointe, soutenues par un accompagnement expert, pour garantir des performances et une efficacité durables. Nous nous engageons à innover, à satisfaire nos clients et à établir des partenariats durables pour assurer leur réussite.</p>"}',
                'created_at' => '2024-06-20 15:31:48',
                'updated_at' => '2025-05-01 11:22:11',
            ),
            22 =>
            array (
                'id' => 23,
                'key' => 'our_vision_primary_image',
                'value' => '{"fr":"01JT5RKP8GWPZY9ZNMKJWJ0VW7.webp","ar":"i1.jpg","en":"i1.jpg"}',
                'created_at' => '2024-06-20 15:31:48',
                'updated_at' => '2025-05-01 11:09:49',
            ),
            23 =>
            array (
                'id' => 24,
                'key' => 'our_vision_second_image',
                'value' => '{"fr":"01JT5RKP8WZVR2YZKRJT2M3E44.jpg","ar":"i2.jpg","en":"i2.jpg"}',
                'created_at' => '2024-06-20 15:31:48',
                'updated_at' => '2025-05-01 11:09:49',
            ),
            24 =>
            array (
                'id' => 25,
                'key' => 'our_vision_third_image',
                'value' => '{"fr":"01JT5RKP97HSMAQGYZW0TF99QE.webp","ar":"i3.jpg","en":"i3.jpg"}',
                'created_at' => '2024-06-20 15:31:48',
                'updated_at' => '2025-05-01 11:09:49',
            ),
            25 =>
            array (
                'id' => 26,
                'key' => 'our_mission_section_title',
                'value' => '{"en":"Our Mission","ar":"مهمتنا","fr":"Notre mission"}',
                'created_at' => '2024-06-20 15:31:48',
                'updated_at' => '2024-06-24 15:30:07',
            ),
            26 =>
            array (
                'id' => 27,
                'key' => 'our_mission_description',
                'value' => '{"en":"<p>At <strong>WGE France</strong>, our mission is to deliver trusted, high-performance printing machines to businesses around the world, while providing exceptional maintenance and customer support. We are committed to connecting buyers and sellers of quality printing equipment, ensuring that each transaction is seamless, transparent, and beneficial for all parties.<br><br>Through continuous innovation and dedication to service excellence, we aim to be a reliable partner in the printing industry—helping our clients maximize productivity, reduce downtime, and extend the lifespan of their machines.</p>","ar":"<p dir=\\"rtl\\">في WGE فرنسا، مهمتنا هي توفير آلات طباعة موثوقة وعالية الأداء للشركات حول العالم، مع توفير صيانة ودعم عملاء استثنائيين. نلتزم بربط المشترين والبائعين لمعدات الطباعة عالية الجودة، وضمان سلاسة وشفافية كل معاملة وتحقيق الفائدة لجميع الأطراف.<br><br>من خلال الابتكار المستمر والتفاني في تقديم خدمة متميزة، نهدف إلى أن نكون شريكًا موثوقًا به في قطاع الطباعة، ونساعد عملاءنا على زيادة إنتاجيتهم وتقليل فترات التوقف عن العمل وإطالة عمر آلاتهم.</p>","fr":"<p>Chez <strong>WGE France</strong>, notre mission est de fournir des machines d\'impression fiables et performantes aux entreprises du monde entier, tout en assurant une maintenance et un support client exceptionnels. Nous nous engageons à mettre en relation acheteurs et vendeurs de matériel d\'impression de qualité, garantissant ainsi une transaction fluide, transparente et avantageuse pour toutes les parties.<br><br>Grâce à une innovation continue et à notre engagement envers l\'excellence du service, nous aspirons à être un partenaire fiable dans le secteur de l\'impression, aidant nos clients à optimiser leur productivité, à réduire les temps d\'arrêt et à prolonger la durée de vie de leurs machines.</p>"}',
                'created_at' => '2024-06-20 15:31:48',
                'updated_at' => '2025-05-01 11:28:51',
            ),
            27 =>
            array (
                'id' => 28,
                'key' => 'our_mission_primary_image',
                'value' => '{"fr":"01JT5T5E48B13FTZ8PZ50AW3ZJ.jpg","ar":"i5.jpg","en":"i5.jpg"}',
                'created_at' => '2024-06-20 15:31:48',
                'updated_at' => '2025-05-01 11:36:59',
            ),
            28 =>
            array (
                'id' => 29,
                'key' => 'our_mission_second_image',
                'value' => '{"fr":"01JT5T5E4E0W0XGYXJC9RVTTX3.jpg","ar":"i6.jpg","en":"i6.jpg"}',
                'created_at' => '2024-06-20 15:31:48',
                'updated_at' => '2025-05-01 11:36:59',
            ),
            29 =>
            array (
                'id' => 30,
                'key' => 'about_secondary_title',
                'value' => '{"en":"WGE France","ar":"WGE فرنسا","fr":"WGE France"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            30 =>
            array (
                'id' => 31,
                'key' => 'about_header_image',
                'value' => '{"fr":"IMG-20250107-WA0198.jpg","ar":"IMG-20250107-WA0198.jpg","en":"IMG-20250107-WA0198.jpg"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2025-04-27 17:37:57',
            ),
            31 =>
            array (
                'id' => 32,
                'key' => 'our_vision_header_image',
                'value' => '{"fr":"01JT5QMZMWH38QZPWK5C0QQJF3.jpg","ar":"i8.jpg","en":"i8.jpg"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2025-05-01 10:53:03',
            ),
            32 =>
            array (
                'id' => 33,
                'key' => 'our_vision_section_second_title',
                'value' => '{"en":"WGE France","ar":"WGE فرنسا","fr":"WGE France"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            33 =>
            array (
                'id' => 34,
                'key' => 'our_mission_header_image',
                'value' => '{"fr":"01JT5T5E40FD16W0E49TCMBX8B.jpg","ar":"i8.jpg","en":"i8.jpg"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2025-05-01 11:36:59',
            ),
            34 =>
            array (
                'id' => 35,
                'key' => 'our_mission_section_secondary_title',
                'value' => '{"en":"WGE France","ar":"WGE فرنسا","fr":"WGE France"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            35 =>
            array (
                'id' => 36,
                'key' => 'faq_section_title',
                'value' => '{"en":"Frequently Asked Questions","ar":"الأسئلة الشائعة","fr":"Questions fréquemment posées"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            36 =>
            array (
                'id' => 37,
                'key' => 'faq_section_secondary_title',
                'value' => '{"en":"WGE France","ar":"WGE فرنسا","fr":"WGE France"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            37 =>
            array (
                'id' => 38,
                'key' => 'faq_header_image',
                'value' => '{"fr":"i8.jpg","ar":"i8.jpg","en":"i8.jpg"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2025-04-27 17:37:57',
            ),
            38 =>
            array (
                'id' => 39,
                'key' => 'contact_section_title',
                'value' => '{"en":"Contact Us","ar":"اتصل بنا","fr":"Contactez-nous"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            39 =>
            array (
                'id' => 40,
                'key' => 'contact_section_secondary_title',
                'value' => '{"en":"WGE France","ar":"WGE فرنسا","fr":"WGE France"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            40 =>
            array (
                'id' => 41,
                'key' => 'contact_header_image',
                'value' => '{"fr":"i8.jpg","ar":"i8.jpg","en":"i8.jpg"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2025-04-27 17:37:57',
            ),
            41 =>
            array (
                'id' => 42,
                'key' => 'contact_section_address',
                'value' => '{"en":"Address","ar":"عنوان","fr":"Adresse"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            42 =>
            array (
                'id' => 43,
                'key' => 'contact_section_address_content',
                'value' => '{"en":"4 Rue de la Chaise, 95300 Livilliers, France","ar":"4 شارع دي لا شيز، 95300 ليفيلييه، فرنسا","fr":"4 Rue de la Chaise, 95300 Livilliers, France"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            43 =>
            array (
                'id' => 44,
                'key' => 'contact_section_whatsapp',
                'value' => '{"en":"Whatsapp","ar":"واتساب","fr":"Whatsapp"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            44 =>
            array (
                'id' => 45,
                'key' => 'contact_section_whatsapp_content',
                'value' => '{"en":"+33 6 80630049","ar":"+33 6 80630049","fr":"+33 6 80630049"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            45 =>
            array (
                'id' => 46,
                'key' => 'contact_telephone',
                'value' => '{"en":"Telephone","ar":"الهاتف","fr":"Téléphone"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            46 =>
            array (
                'id' => 47,
                'key' => 'contact_telephone_content',
                'value' => '{"fr":"+33 6 80630049"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            47 =>
            array (
                'id' => 48,
                'key' => 'contact_email_title',
                'value' => '{"en":"Email","ar":"بريد إلكتروني","fr":"E-mail"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            48 =>
            array (
                'id' => 49,
                'key' => 'contact_email_content',
                'value' => '{"fr":"wge@orange.fr"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2025-05-01 11:28:51',
            ),
            49 =>
            array (
                'id' => 50,
                'key' => 'home_content_over_slider_header',
                'value' => '{"en":"Your trusted partner for high-quality Pad Printing Machines", "ar":"شريكك الموثوق به لآلات الطباعة بالوسادة عالية الجودة", "fr":"Votre partenaire confiable pour des machines de imprimerie de haute qualité"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2024-12-08 09:05:31',
            ),
            50 =>
            array (
                'id' => 51,
                'key' => 'home_content_over_slider_description',
                'value' => '{"en":"<p>Discover over 20 years of experience and innovation with <strong>WGE France</strong>.&nbsp;</p><p>The world leader in advanced pad printing technology. Trust us for precision, reliability, and top-quality machines customised for your printing needs. Find all the necessary consumables with us.</p>","ar":"<p dir=\\"rtl\\">اكتشف أكثر من 20 عامًا من الخبرة والابتكار مع <strong>WGE France</strong></p><p dir=\\"rtl\\">. الشركة الرائدة عالميًا في تكنولوجيا الطباعة المتقدمة. ثق بنا للحصول على الدقة والموثوقية والآلات عالية الجودة المخصصة لاحتياجات الطباعة الخاصة بك. ابحث عن جميع المواد الاستهلاكية الضرورية لدينا.</p>","fr":"<p>Découvrez plus de 20 ans d`expérience et d`innovation avec <strong>WGE France</strong>.&nbsp;</p><p>Leader mondial des technologies avancées de tampographie. Faites-nous confiance pour des machines de précision, de fiabilité et de qualité supérieure adaptées à vos besoins d`impression. Retrouvez chez nous tous les consommables nécessaires.</p>"}',
                'created_at' => '2024-12-08 09:05:31',
                'updated_at' => '2025-04-27 17:38:23',
            ),
            51 =>
            array (
                'id' => 52,
                'key' => 'product_header_image',
                'value' => '{"fr":"i8.jpg","ar":"i8.jpg","en":"i8.jpg"}',
                'created_at' => '2024-06-20 15:31:48',
                'updated_at' => '2025-04-27 17:37:57',
            ),
            52 =>
            array (
                'id' => 53,
                'key' => 'logo',
                'value' => '{"fr":"/logo/WGE-France.jpg","ar":"/logo/WGE-France.jpg","en":"/logo/WGE-France.jpg"}',
                'created_at' => '2024-06-20 15:31:48',
                'updated_at' => '2025-04-27 17:37:57',
            ),
        ));


    }
}
