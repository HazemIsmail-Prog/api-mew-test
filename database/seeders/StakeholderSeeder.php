<?php

namespace Database\Seeders;

use App\Models\Stakeholder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StakeholderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stakeholders = array(
            array('id' => '1','created_by' => '1','name' => 'إدارة تصميم مشاريع الشبكات والمنشآت المائية','is_active' => '1','created_at' => '2024-04-15 10:31:30','updated_at' => '2024-04-16 08:57:13'),
            array('id' => '2','created_by' => '1','name' => 'إدارة مشاريع المياه الجوفية','is_active' => '1','created_at' => '2024-04-15 10:32:00','updated_at' => '2024-04-15 10:32:00'),
            array('id' => '3','created_by' => '1','name' => 'إدارة الدراسات وبحوث المياه الجوفية','is_active' => '1','created_at' => '2024-04-15 10:32:26','updated_at' => '2024-04-15 10:32:26'),
            array('id' => '4','created_by' => '1','name' => 'إدارة مشاريع شبكات الوقود','is_active' => '1','created_at' => '2024-04-15 10:32:48','updated_at' => '2024-04-15 10:32:48'),
            array('id' => '5','created_by' => '1','name' => 'إدارة مشاريع المنشآت المائية','is_active' => '1','created_at' => '2024-04-15 10:33:29','updated_at' => '2024-04-15 10:33:29'),
            array('id' => '6','created_by' => '1','name' => 'إدارة مشاريع شبكات المياه','is_active' => '1','created_at' => '2024-04-15 10:35:13','updated_at' => '2024-04-15 10:35:13'),
            array('id' => '7','created_by' => '1','name' => 'الوكيل المساعد لمشاريع المياه','is_active' => '1','created_at' => '2024-04-15 10:37:09','updated_at' => '2024-04-15 10:37:09'),
            array('id' => '8','created_by' => '1','name' => 'الوكيل المساعد للشؤون المالية','is_active' => '1','created_at' => '2024-04-15 10:37:43','updated_at' => '2024-04-15 10:37:43'),
            array('id' => '9','created_by' => '1','name' => 'الوكيل المساعد للتخطيط والتدريب ونظم المعلومات','is_active' => '1','created_at' => '2024-04-15 10:38:13','updated_at' => '2024-04-15 10:38:13'),
            array('id' => '10','created_by' => '1','name' => 'الوكيل المساعد لشبكات التوزيع الكهربائية','is_active' => '1','created_at' => '2024-04-15 10:38:34','updated_at' => '2024-04-15 10:38:34'),
            array('id' => '11','created_by' => '1','name' => 'الوكيل المساعد لشبكات النقل الكهربائية','is_active' => '1','created_at' => '2024-04-15 10:38:56','updated_at' => '2024-04-15 10:38:56'),
            array('id' => '12','created_by' => '1','name' => 'الوكيل المساعد لخدمات العملاء','is_active' => '1','created_at' => '2024-04-15 10:39:11','updated_at' => '2024-04-15 10:39:11'),
            array('id' => '13','created_by' => '1','name' => 'الوكيل المساعد لمحطات القوي الكهربائية وتقطير المياه','is_active' => '1','created_at' => '2024-04-15 10:39:37','updated_at' => '2024-04-15 10:39:37'),
            array('id' => '14','created_by' => '1','name' => 'الوكيل المساعد لتشغيل وصيانة المياه','is_active' => '1','created_at' => '2024-04-15 10:39:57','updated_at' => '2024-04-15 10:39:57'),
            array('id' => '15','created_by' => '1','name' => 'الوكيل المساعد للخدمات الفنية والمشاغل الرئيسية','is_active' => '1','created_at' => '2024-04-15 10:40:25','updated_at' => '2024-04-15 10:40:25'),
            array('id' => '16','created_by' => '1','name' => 'الوكيل المساعد لمراكز المراقبة والتحكم والرقابة','is_active' => '1','created_at' => '2024-04-15 10:41:06','updated_at' => '2024-04-15 10:41:06'),
            array('id' => '17','created_by' => '1','name' => 'الوكيل المساعد للشؤون الادارية','is_active' => '1','created_at' => '2024-04-15 10:41:24','updated_at' => '2024-04-15 10:41:24'),
            array('id' => '18','created_by' => '1','name' => 'وكيل وزارة الكهرباء والماء والطاقة المتجددة','is_active' => '1','created_at' => '2024-04-15 10:43:26','updated_at' => '2024-04-15 10:43:26'),
            array('id' => '19','created_by' => '1','name' => 'دار الهندسة للتصميم والاستشارات الفنية (شاعر ومشاركوه) ','is_active' => '1','created_at' => '2024-04-15 10:45:20','updated_at' => '2024-04-15 10:45:20'),
            array('id' => '20','created_by' => '1','name' => 'إدارة الاتصالات','is_active' => '1','created_at' => '2024-07-08 13:14:55','updated_at' => '2024-07-08 13:14:55'),
            array('id' => '21','created_by' => '1','name' => 'وكيل وزارة الداخلية','is_active' => '1','created_at' => '2024-07-09 09:03:31','updated_at' => '2024-07-09 09:03:31'),
            array('id' => '22','created_by' => '1','name' => 'وكيل وزارة الاشغال العامة','is_active' => '1','created_at' => '2024-07-09 10:13:12','updated_at' => '2024-07-09 10:13:12'),
            array('id' => '23','created_by' => '1','name' => 'SMEC','is_active' => '1','created_at' => '2024-07-09 10:34:10','updated_at' => '2024-07-09 10:34:10'),
            array('id' => '24','created_by' => '1','name' => 'إدارة تشغيل وصيانة الشبكات المائية','is_active' => '1','created_at' => '2024-07-09 10:42:37','updated_at' => '2024-07-09 10:42:37'),
            array('id' => '25','created_by' => '1','name' => 'رئيس الفريق المشكل بالقرار الوزاري رقم 2023/233','is_active' => '1','created_at' => '2024-07-09 10:53:45','updated_at' => '2024-07-09 10:53:45'),
            array('id' => '26','created_by' => '1','name' => 'مدير عام المؤسسة العامة للرعاية السكنية','is_active' => '1','created_at' => '2024-07-09 10:59:43','updated_at' => '2024-07-09 10:59:43'),
            array('id' => '27','created_by' => '1','name' => 'الأمين العام للجهاز المركزي للمناقصات العامة','is_active' => '1','created_at' => '2024-07-09 11:06:24','updated_at' => '2024-07-09 11:06:24'),
            array('id' => '28','created_by' => '1','name' => 'مدير عام الهيئة العامة للطرق والنقل البري','is_active' => '1','created_at' => '2024-07-09 11:13:22','updated_at' => '2024-07-09 11:13:22'),
            array('id' => '29','created_by' => '1','name' => 'الهيئة العامة لشئون الزراعة والثروة السمكية','is_active' => '1','created_at' => '2024-07-09 11:16:55','updated_at' => '2024-07-09 11:16:55'),
            array('id' => '30','created_by' => '1','name' => ' إدارة التصميم والاشراف','is_active' => '1','created_at' => '2024-07-09 11:18:56','updated_at' => '2024-07-09 11:18:56'),
            array('id' => '31','created_by' => '1','name' => 'الهيئة العامة للمعلومات المدنية','is_active' => '1','created_at' => '2024-07-09 11:22:57','updated_at' => '2024-07-09 11:22:57'),
            array('id' => '32','created_by' => '1','name' => 'مدير عام بلدية الكويت','is_active' => '1','created_at' => '2024-07-09 11:24:54','updated_at' => '2024-07-09 11:24:54'),
            array('id' => '33','created_by' => '1','name' => 'إدارة تشغيل وصيانة المنشآت المائية','is_active' => '1','created_at' => '2024-07-09 12:45:44','updated_at' => '2024-07-09 12:45:44'),
            array('id' => '34','created_by' => '1','name' => 'إدارة نظم المعلومات','is_active' => '1','created_at' => '2024-07-09 12:57:09','updated_at' => '2024-07-09 12:57:09'),
            array('id' => '35','created_by' => '1','name' => 'إدارة طوارئ الديزل','is_active' => '1','created_at' => '2024-07-09 13:00:34','updated_at' => '2024-07-09 13:00:34'),
            array('id' => '36','created_by' => '1','name' => 'إدارة شبكات التوزيع الكهربائية','is_active' => '1','created_at' => '2024-07-09 13:07:23','updated_at' => '2024-07-09 13:07:23'),
            array('id' => '37','created_by' => '1','name' => ' إدارة الأعمال الكيماوية','is_active' => '1','created_at' => '2024-07-09 13:17:23','updated_at' => '2024-07-09 13:17:23'),
            array('id' => '38','created_by' => '1','name' => 'إدارة إنارة الشوارع','is_active' => '1','created_at' => '2024-07-09 13:59:57','updated_at' => '2024-07-09 13:59:57'),
            array('id' => '39','created_by' => '1','name' => 'إدارة إنتاج المياه الجوفية','is_active' => '1','created_at' => '2024-07-09 14:02:01','updated_at' => '2024-07-09 14:02:01'),
            array('id' => '40','created_by' => '1','name' => 'إدارة تصميم شبكات النقل الكهربائية','is_active' => '1','created_at' => '2024-07-10 07:35:29','updated_at' => '2024-07-10 07:35:29'),
            array('id' => '41','created_by' => '1','name' => 'إدارة مشاريع الشبكات المائية','is_active' => '1','created_at' => '2024-07-10 07:40:41','updated_at' => '2024-07-10 07:40:41'),
            array('id' => '42','created_by' => '1','name' => 'الأمانة العامة للمجلس الأعلى للتخطيط والتنمية','is_active' => '1','created_at' => '2024-07-10 09:24:14','updated_at' => '2024-07-10 09:24:14'),
            array('id' => '43','created_by' => '1','name' => 'إدارة شؤون العاملين','is_active' => '1','created_at' => '2024-07-10 09:37:19','updated_at' => '2024-07-10 09:37:19'),
            array('id' => '44','created_by' => '1','name' => 'الأمين العام لمجلس الوزراء','is_active' => '1','created_at' => '2024-07-10 12:03:05','updated_at' => '2024-07-10 12:03:05'),
            array('id' => '45','created_by' => '1','name' => 'مدير عام الهيئة العامة للبيئة','is_active' => '1','created_at' => '2024-07-10 12:55:17','updated_at' => '2024-07-10 12:55:17'),
            array('id' => '46','created_by' => '1','name' => 'الفتوى والتشريع','is_active' => '1','created_at' => '2024-07-11 08:05:13','updated_at' => '2024-07-11 08:05:13'),
            array('id' => '47','created_by' => '1','name' => 'دار مستشارو الخليج للاستشارات الهندسية','is_active' => '1','created_at' => '2024-07-16 09:49:07','updated_at' => '2024-07-16 09:49:07'),
            array('id' => '49','created_by' => '1','name' => 'إدارة المركز الآلي لخدمات العملاء','is_active' => '1','created_at' => '2024-07-23 07:47:11','updated_at' => '2024-07-23 07:47:11'),
            array('id' => '50','created_by' => '1','name' => 'دار الدويلة','is_active' => '1','created_at' => '2024-07-24 13:07:55','updated_at' => '2024-07-24 13:07:55'),
            array('id' => '51','created_by' => '1','name' => 'إدارة مركز نظم المعلومات','is_active' => '1','created_at' => '2024-07-25 09:35:10','updated_at' => '2024-07-25 09:35:10'),
            array('id' => '52','created_by' => '1','name' => 'رئيس لجنة تخصيص المركبات','is_active' => '1','created_at' => '2024-07-25 10:21:43','updated_at' => '2024-07-25 10:21:43'),
            array('id' => '53','created_by' => '1','name' => 'SIEMENS','is_active' => '1','created_at' => '2024-07-25 10:24:02','updated_at' => '2024-07-25 10:24:02'),
            array('id' => '54','created_by' => '1','name' => 'ادارة البرامج الهندسية','is_active' => '1','created_at' => '2024-07-31 09:08:18','updated_at' => '2024-08-01 13:44:51'),
            array('id' => '55','created_by' => '1','name' => 'إدارة المشتريات','is_active' => '1','created_at' => '2024-07-31 11:07:18','updated_at' => '2024-07-31 11:07:18'),
            array('id' => '56','created_by' => '1','name' => 'إدارة شبكات النقل الكهربائية','is_active' => '1','created_at' => '2024-08-04 08:19:03','updated_at' => '2024-08-04 08:19:03')
          );

        Stakeholder::insert($stakeholders);
    }
}
