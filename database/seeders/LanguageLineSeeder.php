<?php

namespace Database\Seeders;

use App\Models\LanguageLine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LanguageLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lines = [
            'name' => [
                'en' => 'Name',
                'ar' => 'اسم',
                'fr' => 'Nom',
            ],
            'model' => [
                'en' => 'Model',
                'ar' => 'نموذج',
                'fr' => 'Modèle',
            ],
            'type' => [
                'en' => 'Type',
                'ar' => 'نوع',
                'fr' => 'Taper',
            ],
            'about us' => [
                'en' => 'About Us',
                'ar' => 'معلومات عنا',
                'fr' => 'À propos de nous',
            ],
            'home' => [
                'en' => 'Home',
                'ar' => 'بيت',
                'fr' => 'Maison',
            ],
            'our vision' => [
                'en' => 'Our Vision',
                'ar' => 'رؤيتنا',
                'fr' => 'Notre vision',
            ],
            'our mission' => [
                'en' => 'Our Mission',
                'ar' => 'مهمتنا',
                'fr' => 'Notre mission',
            ],
            'faq' => [
                'en' => 'FAQ',
                'ar' => 'التعليمات',
                'fr' => 'FAQ',
            ],
            'contact us' => [
                'en' => 'Contact Us',
                'ar' => 'اتصل بنا',
                'fr' => 'Contactez-nous',
            ],
            'english' => [
                'en' => 'English',
                'ar' => 'إنجليزي',
                'fr' => 'Anglaise',
            ],
            'france' => [
                'en' => 'France',
                'ar' => 'فرنسا',
                'fr' => 'France',
            ],
            'arabic' => [
                'en' => 'Arabic',
                'ar' => 'عربي',
                'fr' => 'Arabe',
            ],
            'year of establishment' => [
                'en' => '2025',
                'ar' => '2025',
                'fr' => '2025',
            ],
            'All Rights Reserved' => [
                'en' => 'All Rights Reserved',
                'ar' => 'جميع الحقوق محفوظة',
                'fr' => 'Tous droits réservés',
            ],
            'privacy policy' => [
                'en' => 'Privacy Policy',
                'ar' => 'سياسة الخصوصية',
                'fr' => 'Politique de confidentialité',
            ],
            'images' => [
                'en' => 'Images',
                'ar' => 'الصور',
                'fr' => 'Images',
            ],

            'home service title' => [
                'en' => 'Service title',
                'ar' => 'عنوان الخدمة',
                'fr' => 'Titre du service',
            ],
            'title one' => [
                'en' => 'Title one',
                'ar' => 'العنوان الأول',
                'fr' => 'Titre un',
            ],
            'description one' => [
                'en' => 'Description one',
                'ar' => 'وصف واحد',
                'fr' => 'Description un',
            ],

            'title two' => [
                'en' => 'Title two',
                'ar' => 'العنوان الثاني',
                'fr' => 'Titre deux',
            ],
            'description two' => [
                'en' => 'Description two',
                'ar' => 'وصف اثنين',
                'fr' => 'Description deux',
            ],

            'title three' => [
                'en' => 'Title three',
                'ar' => 'العنوان الثالث',
                'fr' => 'Titre trois',
            ],
            'description three' => [
                'en' => 'Description three',
                'ar' => 'الوصف ثلاثة',
                'fr' => 'Description trois',
            ],

            'title four' => [
                'en' => 'Title four',
                'ar' => 'العنوان الرابع',
                'fr' => 'Titre quatre',
            ],
            'description four' => [
                'en' => 'Description four',
                'ar' => 'الوصف الرابع',
                'fr' => 'Description quatre',
            ],

            'section one' => [
                'en' => 'Section one',
                'ar' => 'القسم الأول',
                'fr' => 'Première section',
            ],

            'settings' => [
                'en' => 'Settings',
                'ar' => 'إعدادات',
                'fr' => 'Paramètres',
            ],
            'submit' => [
                'en' => 'Submit',
                'ar' => 'يُقدِّم',
                'fr' => 'Soumettre',
            ],
            'primary title' => [
                'en' => 'Primary Title',
                'ar' => 'العنوان الأساسي',
                'fr' => 'Titre principal',
            ],
            'description' => [
                'en' => 'Description',
                'ar' => 'وصف',
                'fr' => 'Description',
            ],
            'video' => [
                'en' => 'Video',
                'ar' => 'فيديو',
                'fr' => 'Vidéo',
            ],
            'work shop images' => [
                'en' => 'Workshop images',
                'ar' => 'صور الورشة',
                'fr' => 'Images de l`atelier',
            ],
            'work shop title' => [
                'en' => 'Workshop title',
                'ar' => 'عنوان الورشة',
                'fr' => 'Titre de l`atelier',
            ],
            'Primary Image' => [
                'en' => 'Primary Image',
                'ar' => 'الصورة الرئيسية',
                'fr' => 'Image principale',
            ],
            'Second Image' => [
                'en' => 'Second Image',
                'ar' => 'الصورة الثانية',
                'fr' => 'Deuxième image',
            ],
            'Third Image' => [
                'en' => 'Third Image',
                'ar' => 'الصورة الثالثة',
                'fr' => 'Troisième image',
            ],
            'Title' => [
                'en' => 'Title',
                'ar' => 'العنوان',
                'fr' => 'Titre',
            ],
            'about secondary title' => [
                'en' => 'About secondary title',
                'ar' => 'حول العنوان الثانوي',
                'fr' => 'À propos du titre secondaire',
            ],
            'about header image' => [
                'en' => 'About header image',
                'ar' => 'حول صورة الرأس',
                'fr' => 'About header image',
            ],
            'our vision header image' => [
                'en' => 'Header image',
                'ar' => 'صورة الرأس',
                'fr' => 'Image d`en-tête',
            ],
            'section second title' => [
                'en' => 'Second Title',
                'ar' => 'العنوان الثاني',
                'fr' => 'Second Title',
            ],
            'our mission header image' => [
                'en' => 'Header image',
                'ar' => 'صورة الرأس',
                'fr' => 'Image d`en-tête',
            ],
            'our mission section secondary title' => [
                'en' => 'Second Title',
                'ar' => 'العنوان الثاني',
                'fr' => 'Second Title',
            ],
            'faqs' => [
                'en' => 'FAQs',
                'ar' => 'الأسئلة الشائعة',
                'fr' => 'FAQ',
            ],
            'faq section title' => [
                'en' => 'Primary Title',
                'ar' => 'العنوان الأساسي',
                'fr' => 'Titre principal',
            ],
            'faq section secondary title' => [
                'en' => 'Secondary Title',
                'ar' => 'العنوان الثانوي',
                'fr' => 'Titre secondaire',
            ],
            'faq header image' => [
                'en' => 'Header image',
                'ar' => 'صورة الرأس',
                'fr' => 'Image d`en-tête',
            ],
            'contact section title' => [
                'en' => 'Header Title',
                'ar' => 'اتصل بنا عنوان الرأس',
                'fr' => 'Titre de l`en-tête',
            ],
            'contact section secondary title' => [
                'en' => 'Header Second Title',
                'ar' => 'العنوان الثاني',
                'fr' => 'En-tête Deuxième titre',
            ],
            'contact header image' => [
                'en' => 'Header Image',
                'ar' => 'صورة الرأس',
                'fr' => 'Image d`en-tête',
            ],
            'section contact us items' => [
                'en' => 'Contact Us Items',
                'ar' => 'اتصل بنا العناصر',
                'fr' => 'Contactez-nous Articles',
            ],
            'contact address title' => [
                'en' => 'Address',
                'ar' => 'عنوان',
                'fr' => 'Adresse',
            ],
            'contact section address content' => [
                'en' => 'Address Content',
                'ar' => 'محتوى العنوان',
                'fr' => 'Contenu de l`adresse',
            ],
            'contact section whatsapp title' => [
                'en' => 'Whatsapp Title',
                'ar' => 'عنوان الواتس اب',
                'fr' => 'Titre de WhatsApp',
            ],
            'contact section whatsapp content' => [
                'en' => 'Content',
                'ar' => 'محتوى',
                'fr' => 'Contenu',
            ],
            'contact telephone title' => [
                'en' => 'Telephone Title',
                'ar' => 'عنوان الهاتف',
                'fr' => 'Téléphone Titre',
            ],
            'contact telephone content' => [
                'en' => 'Telephone Content',
                'ar' => 'محتوى الهاتف',
                'fr' => 'Contenu du téléphone',
            ],
            'contact email title' => [
                'en' => 'Email Title',
                'ar' => 'عنوان البريد الإلكتروني',
                'fr' => 'Titre de l`e-mail',
            ],
            'contact email content' => [
                'en' => 'Email Content',
                'ar' => 'محتوى البريد الإلكتروني',
                'fr' => 'Contenu du courrier électronique',
            ],
            'Get In Touch' => [
                'en' => 'Get In Touch',
                'ar' => 'تواصل معنا',
                'fr' => 'Jet en contact',
            ],
            'contact name' => [
                'en' => 'Name',
                'ar' => 'اسم',
                'fr' => 'Nom',
            ],
            'contact name placeholder' => [
                'en' => 'Adam Gelius',
                'ar' => 'آدم جيليوس',
                'fr' => 'Adam Gélius',
            ],
            'contact telephone' => [
                'en' => 'Telephone',
                'ar' => 'الهاتف',
                'fr' => 'Téléphone',
            ],
            'contact telephone placeholder' => [
                'en' => '+1 234 567 89',
                'ar' => '+1 234 567 89',
                'fr' => '+1 234 567 89',
            ],
            'contact email' => [
                'en' => 'Email',
                'ar' => 'بريد إلكتروني',
                'fr' => 'Email',
            ],
            'contact email placeholder' => [
                'en' => 'example@yourEmail.com',
                'ar' => 'example@yourEmail.com',
                'fr' => 'example@yourEmail.com'
            ],
            'contact button submit' => [
                'en' => 'Send Message',
                'ar' => 'إرسال رسالة',
                'fr' => 'Envoyer un message'
            ],
            'contact message' => [
                'en' => 'Message',
                'ar' => 'رسالة',
                'fr' => 'message'
            ],
            'contact message placeholder' => [
                'en' => 'Type your message here',
                'ar' => 'اكتب رسالتك هنا',
                'fr' => 'Tapez votre message ici'
            ],
            'success' => [
                'en' => 'Success',
                'ar' => 'نجاح',
                'fr' => 'Succès'
            ],
            'your message was sent successfully' => [
                'en' => 'Your message was sent successfully',
                'ar' => 'لقد تم ارسال رسالتك بنجاح',
                'fr' => 'Votre message a été envoyé avec succès'
            ],
            'products' => [
                'en' => 'Products',
                'ar' => 'منتجات',
                'fr' => 'Produits'
            ],
            'wge france' => [
                'en' => 'WGE France',
                'ar' => 'WGE فرنسا',
                'fr' => 'WGE France'
            ],
            'Product Category' => [
                'en' => 'Product Category',
                'ar' => 'فئة المنتج',
                'fr' => 'Catégorie de produit'
            ],
            'product model' => [
                'en' => 'Model',
                'ar' => 'نموذج',
                'fr' => 'Modèle'
            ],
            'product brand' => [
                'en' => 'Brand',
                'ar' => 'ماركة',
                'fr' => 'Marque'
            ],
            'product type' => [
                'en' => 'Type',
                'ar' => 'نوع',
                'fr' => 'Taper'
            ],
            'product speed' => [
                'en' => 'Speed',
                'ar' => 'سرعة',
                'fr' => 'Vitesse'
            ],
            'product resolution' => [
                'en' => 'Resolution',
                'ar' => 'دقة',
                'fr' => 'Résolution'
            ],
            'Product Max Print Size' => [
                'en' => 'Max Print Size',
                'ar' => 'الحد الأقصى لحجم الطباعة',
                'fr' => 'Taille d`impression maximale'
            ],
            'Product color capability' => [
                'en' => 'Color Capability',
                'ar' => 'القدرة على الألوان',
                'fr' => 'Color Capability'
            ],
            'Product duplex' => [
                'en' => 'Duplex',
                'ar' => 'دوبلكس',
                'fr' => 'Duplex'
            ],
            'Product connectivity' => [
                'en' => 'Connectivity',
                'ar' => 'الاتصال',
                'fr' => 'Connectivité'
            ],
            'Product Condition' => [
                'en' => 'Condition',
                'ar' => 'حالة',
                'fr' => 'Condition'
            ],
            'Product power consumption' => [
                'en' => 'Power consumption',
                'ar' => 'استهلاك الطاقة',
                'fr' => 'Consommation d`énergie'
            ],
            'Product stock quantity' => [
                'en' => 'Quantity',
                'ar' => 'كمية',
                'fr' => 'Quantité'
            ],
            'Product Warranty' => [
                'en' => 'Warranty',
                'ar' => 'ضمان',
                'fr' => 'Garantie'
            ],
            'Product Manufacture Year' => [
                'en' => 'Manufacture Year',
                'ar' => 'سنة الصنع',
                'fr' => 'Année de fabrication'
            ],
            'Product Price' => [
                'en' => 'Price',
                'ar' => 'سعر',
                'fr' => 'Prix'
            ],
            'about' => [
                'en' => 'About',
                'ar' => 'عن',
                'fr' => 'À propos',
            ],
            'read more' => [
                'en' => 'Read More',
                'ar' => 'اقرأ المزيد',
                'fr' => 'En savoir plus',
            ],
            'product information' => [
                'en' => 'Product Information',
                'ar' => 'معلومات المنتج',
                'fr' => 'Informations sur le produit',
            ],
            'related products' => [
                'en' => 'Related Products',
                'ar' => 'المنتجات ذات الصلة',
                'fr' => 'Produits connexes',
            ],
            'no related products' => [
                'en' => 'No Related Products',
                'ar' => 'لا يوجد منتجات ذات صلة',
                'fr' => 'Aucun produit associé',
            ],
            'discover machines' => [
                'en' => 'Discover Machines',
                'ar' => 'اكتشف الآلات',
                'fr' => 'Découvrir les machines',
            ],
            'home title' => [
                'en' => 'Home Title',
                'ar' => 'عنوان المنزل',
                'fr' => 'Titre de la maison',
            ],
            'home description' => [
                'en' => 'Home Description',
                'ar' => 'وصف الصفحة الرئيسية',
                'fr' => 'Description de la maison',
            ],
            'view details' => [
                'en' => 'View Details',
                'ar' => 'عرض التفاصيل',
                'fr' => 'Voir les détails',
            ],
            'clear all' => [
                'en' => 'CLEAR ALL',
                'ar' => 'مسح الكل',
                'fr' => 'EFFACER TOUT',
            ],
            'product search placeholder' => [
                'en' => 'Search machines by name, attributes...',
                'ar' => 'البحث عن الأجهزة حسب الاسم والسمات...',
                'fr' => 'Rechercher des machines par nom, attributs...',
            ],
            'currency' => [
                'en' => 'Currency',
                'ar' => 'عملة',
                'fr' => 'Devise',
            ],
            'Total Products' => [
                'en' => 'Total Products',
                'ar' => 'إجمالي المنتجات',
                'fr' => 'Total des produits',
            ],
            'Total Categories' => [
                'en' => 'Total Categories',
                'ar' => 'مجموع الفئات',
                'fr' => 'Total des catégories',
            ],
            'primary color' => [
                'en' => 'Primary Color',
                'ar' => 'اللون الأساسي',
                'fr' => 'Couleur primaire',
            ],
            'configuration' => [
                'en' => 'Configuration',
                'ar' => 'إعدادات',
                'fr' => 'Configuration',
            ],
            'general' => [
                'en' => 'General',
                'ar' => 'عام',
                'fr' => 'Générale',
            ],
            'Content Management' => [
                'en' => 'Content Management',
                'ar' => 'إدارة المحتوى',
                'fr' => 'Gestion de contenu',
            ],
            'Parent' => [
                'en' => 'Parent',
                'ar' => 'الوالد',
                'fr' => 'Parente',
            ],
            'slug' => [
                'en' => 'Slug',
                'ar' => 'سبيكة',
                'fr' => 'limace',
            ],
            'product header image' => [
                'en' => 'Header Image',
                'ar' => 'صورة الرأس',
                'fr' => 'Image d`en-tête',
            ],
            'logo image' => [
                'en' => 'Logo image',
                'ar' => 'صورة الشعار',
                'fr' => 'Image du logo',
            ],
            'Apply Filter' => [
                'en' => 'Apply Filter',
                'ar' => 'تطبيق الفلتر',
                'fr' => 'Appliquer le filtre',
            ],
            'Reset Filter' => [
                'en' => 'Reset Filter',
                'ar' => 'إعادة تعيين الفلتر',
                'fr' => 'Réinitialiser le filtre',
            ],
            'FILTER' => [
                'en' => 'FILTER',
                'ar' => 'فلتر',
                'fr' => 'FILTRE',
            ],
            'Back' => [
                'en' => 'Back',
                'ar' => 'العودة',
                'fr' => 'Retourner',
            ],
            'Printing Machine' => [
                'en' => 'Printing Machine.',
                'ar' => 'آلة الطباعة.',
                'fr' => 'Machine d`impression.',
            ],
            'Your Email' => [
                'en' => 'Your Email',
                'ar' => 'بريدك الإلكتروني',
                'fr' => 'Votre e-mail',
            ],
            'Total Contacts' => [
                'en' => 'Total Contacts',
                'ar' => 'إجمالي جهات الاتصال',
                'fr' => 'Nombre total de contacts',
            ],
        ];

        foreach ($lines as $english => $translations) {
            LanguageLine::query()->updateOrCreate([
                'group' => 'trans',
                'key' => Str::snake($english)
            ], [
                'text' => array_merge(['en' => $english], $translations)
            ]);
        }
    }
}
