<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \DB::table('faqs')->delete();

        \DB::table('faqs')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'question' => '{"en":"What is your after-sales service?","ar":"ما هي خدمة ما بعد البيع الخاصة بك؟","fr":"Quel est votre service après-vente ?"}',
                    'answer' => '{"en":"We provide a one-year warranty period for our products, as well as replacement services for various accessories. We will take various ways to guide customers to install and use the machine. Engineers can also be sent to the buyer`s company to install and debug the machine at the request of the customer. Buyers are required to pay the corresponding fees.","ar":"نقدم فترة ضمان لمدة عام واحد لمنتجاتنا، بالإضافة إلى خدمات الاستبدال للملحقات المختلفة. سنتخذ طرقًا مختلفة لتوجيه العملاء لتثبيت الماكينة واستخدامها. يمكن أيضًا إرسال المهندسين إلى شركة المشتري لتثبيت الماكينة وتصحيح أخطائها بناءً على طلب العميل. يتعين على المشترين دفع الرسوم المقابلة.","fr":"Nous offrons une période de garantie d`un an pour nos produits, ainsi que des services de remplacement pour divers accessoires. Nous prendrons différentes mesures pour guider les clients dans l`installation et l`utilisation de la machine. Des ingénieurs peuvent également être envoyés dans l`entreprise de l`acheteur pour installer et déboguer la machine à la demande du client. Les acheteurs sont tenus de payer les frais correspondants."}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            1 =>
                array(
                    'id' => 2,
                    'question' => '{"en":"How does the machine perform quality inspection before delivery?","ar":"كيف تقوم الآلة بإجراء فحص الجودة قبل التسليم؟","fr":"Comment la machine effectue-t-elle le contrôle qualité avant la livraison ?"}',
                    'answer' => '{"en":"After finishing the production, we will conduct a test run on the machine, and when everything is correct, the machine will be wrapped with plastic film to prevent damage during transportation.","ar":"كيف يعملبعد الانتهاء من الإنتاج، سوف نقوم بإجراء اختبار تشغيل على الجهاز، وعندما يكون كل شيء صحيحًا، سيتم تغليف الجهاز بغلاف بلاستيكي لمنع التلف أثناء النقل.","fr":"Une fois la production terminée, nous effectuerons un test sur la machine et, lorsque tout sera correct, la machine sera emballée avec un film plastique pour éviter tout dommage pendant le transport."}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            2 =>
                array(
                    'id' => 3,
                    'question' => '{"en":"How to ship the machine to the buyer`s destination?","ar":"كيفية شحن الجهاز إلى وجهة المشتري؟","fr":"Comment expédier la machine à la destination de l`acheteur ?"}',
                    'answer' => '{"en":"The machine will be transported to the customer`s destination by sea or in the way specified by the customer.","ar":"سيتم نقل الماكينة إلى وجهة العميل عن طريق البحر أو بالطريقة التي يحددها العميل.","fr":"La machine sera transportée jusqu`à la destination du client par voie maritime ou selon le mode spécifié par le client."}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            3 =>
                array(
                    'id' => 4,
                    'question' => '{"en":"What kind of payment terms do you accept?","ar":"ما هي شروط الدفع التي تقبلونها؟","fr":"Quels types de conditions de paiement acceptez-vous ?"}',
                    'answer' => '{"en":"We accept payments through bank transfer or cash.","ar":"نحن نقبل الدفع عن طريق التحويل البنكي أو نقدًا","fr":"Nous acceptons les paiements par virement bancaire ou en espèces"}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            4 =>
                array(
                    'id' => 5,
                    'question' => '{"en":"What materials are your products suitable for printing?","ar":"ما هي المواد التي تصلح منتجاتكم للطباعة؟","fr":"Sur quels matériaux vos produits sont-ils adaptés à l`impression ?"}',
                    'answer' => '{"en":"Our machines are stack flexo printing machines, suitable for printing paper, non-woven fabrics, woven bags, BOPP, PET, PE ,LDPE, HDPE and so on","ar":"آلاتنا هي آلات طباعة فليكسو مكدسة، مناسبة لطباعة الورق والأقمشة غير المنسوجة والحقائب المنسوجة وBOPP وPET وPE وLDPE وHDPE وما إلى ذلك","fr":"Nos machines sont des machines d`impression flexo à pile, adaptées à l`impression de papier, de tissus non tissés, de sacs tissés, de BOPP, de PET, de PE, de LDPE, de HDPE, etc."}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
            5 =>
                array(
                    'id' => 6,
                    'question' => '{"en":"Are you a foreign trade company or a manufacturer？","ar":"هل أنت شركة تجارة خارجية أو شركة مصنعة؟","fr":"Êtes-vous une entreprise de commerce extérieur ou un fabricant ?"}',
                    'answer' => '{"en":"We are a flexo printing machine manufacturer with 18 years experience","ar":"نحن شركة مصنعة لآلات الطباعة الفليكسو بخبرة 18 عامًا","fr":"Nous sommes un fabricant de machines d`impression flexo avec 18 ans d`expérience"}',
                    'created_at' => '2024-12-08 09:03:29',
                    'updated_at' => '2024-12-08 09:03:29',
                ),
        ));
    }
}
