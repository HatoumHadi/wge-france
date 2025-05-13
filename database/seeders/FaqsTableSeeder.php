<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question' => '{"en":"What types of printing machines do you offer?","ar":"ما هي أنواع آلات الطباعة التي تقدمها؟","fr":"Quels types de machines d\'impression proposez-vous ?"}',
                'answer' => '{"en":"<p>&nbsp;We specialize in a wide range of printing machines including offset printers, digital printers, flexographic presses, and screen printing equipment. Whether you\'re looking for new or pre-owned machines, we have options to fit your business needs.&nbsp;</p>","ar":"<p dir=\\"rtl\\">نحن متخصصون في مجموعة واسعة من آلات الطباعة، بما في ذلك طابعات الأوفست، والطابعات الرقمية، وآلات الفليكسوجرافية، ومعدات طباعة الشاشة. سواء كنت تبحث عن آلات جديدة أو مستعملة، لدينا خيارات تناسب احتياجات عملك.</p>","fr":"<p>Nous proposons une large gamme de machines d\'impression, notamment des imprimantes offset, des imprimantes numériques, des presses flexographiques et des équipements de sérigraphie. Que vous recherchiez des machines neuves ou d\'occasion, nous avons des options adaptées à vos besoins.</p>"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2025-05-13 19:56:52',
            ),
            1 => 
            array (
                'id' => 2,
                'question' => '{"en":"Do you buy used printing machines?","ar":"هل تشتري آلات الطباعة المستعملة؟","fr":"Achetez-vous des machines d\'impression d\'occasion ?"}',
                'answer' => '{"en":"<p>&nbsp;Yes, we buy used printing machines in good working condition. Contact us with details about your equipment and we’ll provide an evaluation and offer.&nbsp;</p>","ar":"<p dir=\\"rtl\\">نعم، نشتري آلات الطباعة المستعملة بحالة جيدة. تواصل معنا لتزويدنا بتفاصيل معداتك وسنقدم لك تقييمًا وعرضًا.</p>","fr":"<p>Oui, nous achetons des machines d\'impression d\'occasion en bon état de fonctionnement. Contactez-nous avec des informations sur votre équipement ; nous vous ferons une évaluation et une offre.</p>"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2025-05-13 20:00:50',
            ),
            2 => 
            array (
                'id' => 3,
                'question' => '{"en":"Can I trade in my old machine when purchasing a new one?","ar":"هل يمكنني استبدال جهازي القديم عند شراء جهاز جديد؟","fr":"Puis-je reprendre mon ancien appareil lors de l\'achat d\'un nouveau ?"}',
                'answer' => '{"en":"<p>&nbsp;Absolutely. We offer trade-in options where the value of your current machine can be applied toward the purchase of another.&nbsp;</p>","ar":"<p dir=\\"rtl\\">بالتأكيد. نوفر خيارات استبدال حيث يمكنك استخدام قيمة جهازك الحالي لشراء جهاز جديد.</p>","fr":"<p>Tout à fait. Nous proposons des options de reprise où la valeur de votre appareil actuel peut être déduite de l\'achat d\'un nouveau.</p>"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2025-05-13 20:02:46',
            ),
            3 => 
            array (
                'id' => 4,
                'question' => '{"en":"Do you provide machine installation and setup?","ar":"هل توفرون خدمة تركيب وتجهيز الآلات؟","fr":"Proposez-vous l\'installation et la configuration des machines ?"}',
                'answer' => '{"en":"<p>&nbsp;Yes, our technicians handle delivery, installation, and setup of the machines to ensure they are fully operational at your location.&nbsp;</p>","ar":"<p dir=\\"rtl\\">نعم، يتولى فنيونا تسليم وتركيب وتجهيز الآلات لضمان عملها بكامل طاقتها في موقعكم.</p>","fr":"<p>Oui, nos techniciens prennent en charge la livraison, l\'installation et la configuration des machines afin de garantir leur parfait fonctionnement sur votre site.</p>"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2025-05-13 20:04:34',
            ),
            4 => 
            array (
                'id' => 5,
                'question' => '{"en":"Is there a warranty on the machines you sell?","ar":"هل يوجد ضمان على الأجهزة التي تبيعونها؟","fr":"Les machines que vous vendez sont-elles garanties ?"}',
                'answer' => '{"en":"<p>Yes, all of our machines come with a limited warranty. The duration and coverage may vary depending on whether the machine is new or used.</p>","ar":"<p dir=\\"rtl\\">نعم، جميع أجهزتنا تأتي بضمان محدود. قد تختلف مدة الضمان ونطاق التغطية حسب نوع الجهاز، سواءً كان جديدًا أو مستعملًا.</p>","fr":"<p>Oui, toutes nos machines bénéficient d\'une garantie limitée. La durée et la couverture peuvent varier selon que la machine est neuve ou d\'occasion.</p>"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2025-05-13 20:06:13',
            ),
            5 => 
            array (
                'id' => 6,
                'question' => '{"en":"Do you ship machines outside of France?","ar":"هل تشحنون الآلات خارج فرنسا؟","fr":"Expédiez-vous des machines hors de France ?"}',
                'answer' => '{"en":"<p>Yes, we provide international shipping services. Please contact us to discuss delivery options and costs for your location.</p>","ar":"<p dir=\\"rtl\\">نعم، نوفر خدمات شحن دولية. تواصلوا معنا لمناقشة خيارات التوصيل وتكاليفها في منطقتكم.</p>","fr":"<p>Oui, nous proposons des services d\'expédition internationale. Veuillez nous contacter pour discuter des options et des tarifs de livraison selon votre région.</p>"}',
                'created_at' => '2024-12-08 09:03:29',
                'updated_at' => '2025-05-13 20:07:47',
            ),
            6 => 
            array (
                'id' => 7,
                'question' => '{"en":"Can I get training on how to use the machine?\\n","fr":"Puis-je bénéficier d\'une formation sur l\'utilisation de la machine ?","ar":"هل يمكنني الحصول على تدريب على كيفية استخدام الآلة؟"}',
                'answer' => '{"en":"<p>Yes, we offer training sessions to help your staff operate the printing equipment safely and efficiently.</p>","fr":"<p>Oui, nous proposons des formations pour aider votre personnel à utiliser l\'équipement d\'impression de manière sûre et efficace.</p>","ar":"<p dir=\\"rtl\\">نعم، نقدم دورات تدريبية لمساعدة موظفيكم على تشغيل معدات الطباعة بأمان وكفاءة.</p>"}',
                'created_at' => '2025-05-13 20:08:30',
                'updated_at' => '2025-05-13 20:09:14',
            ),
        ));
        
        
    }
}