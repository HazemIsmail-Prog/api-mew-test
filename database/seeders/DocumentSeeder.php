<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $documents = array(
      array('id' => '12', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 27-05-2024 الساعة 9:00 صباحا مع قطاع الخدمات الفنية', 'ref' => NULL, 'content' => '', 'notes' => 'K23165-0106D/24/0489
      08-07-2024
      ', 'created_at' => '2024-07-08 11:48:06', 'updated_at' => '2024-07-08 13:52:50'),
      array('id' => '13', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 02-05-2024 مع إدارة مشاريع المنشآت المائية', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0108D/24/0492
      08-07-2024', 'created_at' => '2024-07-08 12:18:21', 'updated_at' => '2024-07-09 10:03:02'),
      array('id' => '14', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 07-02-2024 و 20-02-2024 ', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0108D/24/0504', 'created_at' => '2024-07-08 13:03:17', 'updated_at' => '2024-07-09 10:05:20'),
      array('id' => '15', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 27-05-2024 الساعة 10:15 ', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0106D-24-0490
      08-07-2024', 'created_at' => '2024-07-08 13:07:27', 'updated_at' => '2024-07-09 10:06:44'),
      array('id' => '16', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'Interim Submission B1 (I.S.B1) Submission', 'ref' => NULL, 'content' => 'مرفق 2 نسخة ورقية 
      5 نسخة الكترونية CD', 'notes' => 'K23165-0108D-24-0505
      07-07-2024', 'created_at' => '2024-07-08 13:11:28', 'updated_at' => '2024-07-09 10:04:00'),
      array('id' => '17', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '7', 'from_id' => '20', 'to_id' => '1', 'title' => 'Telecommunication Specification 2024', 'ref' => NULL, 'content' => 'قرص مدمج CD بنظام الورد', 'notes' => 'وارد برقم 20240535000336 بتاريخ04-07-2024
      ردا علي كتابنا رقم 20240650000052 بتاريخ 27-06-2024', 'created_at' => '2024-07-08 13:18:58', 'updated_at' => '2024-07-09 10:12:25'),
      array('id' => '18', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '8', 'title' => 'دفعة الاعمال عن شهر يونيو 2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 08:56:36', 'updated_at' => '2024-07-31 11:09:31'),
      array('id' => '19', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '21', 'title' => 'طلب تجديد زيارة متعددة - احمد كمال احمد سعد', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 09:00:15', 'updated_at' => '2024-07-11 10:28:17'),
      array('id' => '20', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '21', 'title' => 'طلب تجديد زيارة متعددة - صموئيل سمعان ويصا حسب الله', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 10:11:31', 'updated_at' => '2024-07-11 10:27:04'),
      array('id' => '21', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '3', 'from_id' => '19', 'to_id' => '1', 'title' => 'مسودة محضر الاجتماع المنعقد بتاريخ 03-07-2024 الساعة 9:00', 'ref' => NULL, 'content' => 'مسودة تقرير الدراسة الهيدروليكية', 'notes' => 'K23165-0102D/24/0507
      08-07-2024
      رقم المحضر
      K23165-0102D-MOM-24-006', 'created_at' => '2024-07-09 10:12:06', 'updated_at' => '2024-07-09 13:18:06'),
      array('id' => '22', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '22', 'title' => 'المخططات التنفيذية لشبكة المياه', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 10:14:28', 'updated_at' => '2024-07-10 12:25:35'),
      array('id' => '23', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'Workshop', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0105D/24/0508', 'created_at' => '2024-07-09 10:14:54', 'updated_at' => '2024-07-09 13:17:54'),
      array('id' => '24', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '19', 'title' => 'الطاقة الكهربائية وكمية المياه المطلوبة لمشاريع المؤسسة العامة للرعاية السكنية للسنوات  2024-2040', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 10:16:01', 'updated_at' => '2024-07-17 14:37:55'),
      array('id' => '25', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '19', 'title' => 'جمع بيانات', 'ref' => NULL, 'content' => NULL, 'notes' => 'مرفق رد الأمانة العامة للمجلس الأعلى للتخطيط والتنمية والوارد برقم 20240269000012 بتاريخ 01-07-2024', 'created_at' => '2024-07-09 10:20:40', 'updated_at' => '2024-07-17 14:33:25'),
      array('id' => '26', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '1', 'from_id' => '1', 'to_id' => '23', 'title' => 'Addendum 2', 'ref' => NULL, 'content' => NULL, 'notes' => 'ردا علي كتاب SMEC
      رقم 5071033-C01-408  بتاريخ 30/06/2024', 'created_at' => '2024-07-09 10:35:12', 'updated_at' => '2024-07-24 09:07:35'),
      array('id' => '27', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '24', 'title' => 'عدادات المياه على مداخل المناطق 
      (رد على الكتاب رقم 202459510000029)', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 10:43:33', 'updated_at' => '2024-07-18 13:14:58'),
      array('id' => '28', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '19', 'title' => 'طلب مخططات As Built-C-0152Z-C-019Z-G-5  لشبكة الصرف الصحي بموقع المشروع', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 10:45:04', 'updated_at' => '2024-07-30 07:36:46'),
      array('id' => '29', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '25', 'title' => 'مشاريع المدن السكانية المدرجة ضمن خطة التنمية - متطلبات المياه', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 10:58:30', 'updated_at' => '2024-07-31 10:53:54'),
      array('id' => '30', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '26', 'title' => 'مشاريع المدن السكانية المدرجة ضمن خطة التنمية - متطلبات المياه', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 11:00:18', 'updated_at' => '2024-07-10 12:27:50'),
      array('id' => '31', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '14', 'from_id' => '1', 'to_id' => '27', 'title' => 'بخصوص كتاب شركة عربي', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 11:10:12', 'updated_at' => '2024-07-22 15:48:09'),
      array('id' => '32', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '19', 'from_id' => '1', 'to_id' => '28', 'title' => 'طلب وزارة الكهرباء تنفيذ خط مياه عذبة قطر 1200 مم ضمن اعمال العقد', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 11:14:06', 'updated_at' => '2024-07-31 11:29:27'),
      array('id' => '33', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '7', 'title' => 'الخطة التشغيلية 2025/2024 لوزارة الكهرباء والماء والطاقة المتجددة', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 11:15:32', 'updated_at' => '2024-07-18 13:23:45'),
      array('id' => '34', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '29', 'title' => 'استعجال الرد علي الاستفسارات', 'ref' => NULL, 'content' => NULL, 'notes' => 'تم رفع الكتاب WORKFLOW  يوم 04-07-2024 في انتظار م. زينب للاعتماد
      2024153636000011', 'created_at' => '2024-07-09 11:17:38', 'updated_at' => '2024-07-21 07:32:04'),
      array('id' => '35', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '30', 'title' => 'Concept Design Report Phase 1', 'ref' => NULL, 'content' => 'مرفق CD', 'notes' => NULL, 'created_at' => '2024-07-09 11:21:24', 'updated_at' => '2024-07-18 08:38:02'),
      array('id' => '36', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '31', 'title' => 'جمع المعلومات', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 11:23:35', 'updated_at' => '2024-07-09 13:25:02'),
      array('id' => '37', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '32', 'title' => 'الموافقة على انشاء مبنى اداري جديد للموظفين', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 11:25:56', 'updated_at' => '2024-07-16 14:14:35'),
      array('id' => '38', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '19', 'title' => 'Master Plan Interim Report', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 11:28:31', 'updated_at' => '2024-07-10 11:03:23'),
      array('id' => '39', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '1', 'from_id' => '1', 'to_id' => '23', 'title' => 'المناقصة 71 - الشويخ - حولي - بخصوص الملحق التعديلي رقم 2', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 11:30:08', 'updated_at' => '2024-07-31 11:37:17'),
      array('id' => '40', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '7', 'title' => 'التحديات الإدارية للخطة الإنمائية', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 11:34:31', 'updated_at' => '2024-07-10 12:18:31'),
      array('id' => '41', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '19', 'title' => 'طلب مخططات As Built لشبكة الصرف الصحي بموقع المشروع', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 11:36:18', 'updated_at' => '2024-07-22 11:17:57'),
      array('id' => '42', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '15', 'from_id' => '1', 'to_id' => '8', 'title' => 'نشر الملحق التعديلي رقم 2 و نشر محضر الاجتماع التمهيدي', 'ref' => NULL, 'content' => NULL, 'notes' => 'تم اصدار الكتاب بتاريخ 27-06-2024
      بتاريخ 20240650000053', 'created_at' => '2024-07-09 12:38:40', 'updated_at' => '2024-07-09 12:39:00'),
      array('id' => '43', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '19', 'title' => 'المواصفات الخاصة بمباني الاعمال الكيماوية', 'ref' => NULL, 'content' => 'مرفق CD', 'notes' => NULL, 'created_at' => '2024-07-09 12:42:22', 'updated_at' => '2024-07-09 12:44:33'),
      array('id' => '44', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '33', 'title' => 'الحاق للكتاب رقم ات 2024-649', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-09 12:46:26', 'updated_at' => '2024-07-09 12:47:44'),
      array('id' => '45', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '31', 'title' => 'جمع المعلومات', 'ref' => NULL, 'content' => NULL, 'notes' => '2024153636000010
      04-07-2024', 'created_at' => '2024-07-09 12:48:39', 'updated_at' => '2024-07-09 13:24:25'),
      array('id' => '46', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '20', 'title' => 'اعتماد محضر الاجتماع المنعقد بتاريخ 05-06-2024', 'ref' => NULL, 'content' => NULL, 'notes' => '20240650000052', 'created_at' => '2024-07-09 12:52:08', 'updated_at' => '2024-07-09 12:54:55'),
      array('id' => '47', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '34', 'title' => 'PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => 'بالطريق الرسمي
      20240650000040', 'created_at' => '2024-07-09 12:58:04', 'updated_at' => '2024-07-16 07:36:20'),
      array('id' => '48', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '35', 'title' => 'PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => 'بالطريق الرسمي
      20240650000047', 'created_at' => '2024-07-09 13:01:47', 'updated_at' => '2024-07-09 13:02:50'),
      array('id' => '49', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '24', 'title' => 'PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => 'بالطريق الرسمي
      20240650000043', 'created_at' => '2024-07-09 13:03:37', 'updated_at' => '2024-07-09 13:04:27'),
      array('id' => '50', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '14', 'title' => 'عدادات المياه', 'ref' => NULL, 'content' => NULL, 'notes' => 'عناية مدير إدارة تشغيل وصيانة الشبكات المائية 
      202459510000029', 'created_at' => '2024-07-09 13:06:02', 'updated_at' => '2024-07-09 13:06:40'),
      array('id' => '51', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '36', 'title' => 'PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => 'بالطريق الرسمي
      20240650000039', 'created_at' => '2024-07-09 13:08:02', 'updated_at' => '2024-07-09 13:08:47'),
      array('id' => '52', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '3', 'title' => 'PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => '20240650000046
      تم استلام ملاحظة من إدارة دراسات وبحوث المياه الجوفية علي نفس الصحيفة علي الكتاب نفسة 30-06-2024
      (ليس بالإمكان تذويدكم بأسماء مهندسين معنيين من الإدارة لمراجعة المستندات والمتابعة في الوقت الحالي وسوف نوافيكم لاحقا بأي مستجدات بهذا الخصوص )', 'created_at' => '2024-07-09 13:14:40', 'updated_at' => '2024-07-09 13:15:12'),
      array('id' => '53', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '37', 'title' => 'PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => 'بالطريق الرسمي
      20240650000041
      تم استلام الرد من لإدارة الاعمال الكيماوية
      بتاريخ 30-06-2024
      20240650000041', 'created_at' => '2024-07-09 13:18:16', 'updated_at' => '2024-07-16 07:33:43'),
      array('id' => '54', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '33', 'title' => 'PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => 'بالطريق الرسمي
      20240650000044
      
      تم استلام رد إدارة تشغيل وصيانة المنشآت
      بتاريخ 30-06-2024
      20240650000044', 'created_at' => '2024-07-09 13:19:27', 'updated_at' => '2024-07-16 07:32:25'),
      array('id' => '55', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '33', 'title' => 'عقد ورش عمل', 'ref' => NULL, 'content' => NULL, 'notes' => '202459510000028
      26-06-2024
      
      وار رد إدارة تشغيل وصيانة المنشآت المائية يوم 27-06-2024
      ملاحظة الجهة : يرجى العلم تعذر الترشيح نظرا ً لضيق الوقت لذا يرجى إبلاغنا بوقت كافي حتى يتسنى لنا القيام بالازم', 'created_at' => '2024-07-09 13:28:11', 'updated_at' => '2024-07-09 13:29:58'),
      array('id' => '56', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '30', 'title' => 'PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => 'بالطريق الرسمي
      20240650000037', 'created_at' => '2024-07-09 13:32:51', 'updated_at' => '2024-07-10 10:33:52'),
      array('id' => '57', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '19', 'title' => 'طلب بيانات بخصوص مشروع 2 و 5 ', 'ref' => NULL, 'content' => 'مرفق جدول يوضح بيانات محطات تحلية المياه بدولة الكويت القائمة والمستقبلية بالإضافة الي بيانات تفصيلية للمحطات القائمة كل على حدا', 'notes' => '
      الحاق بالكتب أرقام 
      أ ت - 2024-706 بتاريخ  16-04-2024 ورقم 20240642000248 بتاريخ 16-04-2024
      ------------------------
      صادر برقم: 20240642000499
      بتاريخ: 26-06-2024', 'created_at' => '2024-07-09 13:57:49', 'updated_at' => '2024-07-09 13:58:59'),
      array('id' => '58', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '38', 'title' => 'PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => 'بالطريق الرسمي
      20240650000038', 'created_at' => '2024-07-09 14:00:34', 'updated_at' => '2024-07-09 14:01:23'),
      array('id' => '59', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '39', 'title' => 'PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => '20240650000042', 'created_at' => '2024-07-09 14:02:35', 'updated_at' => '2024-07-09 14:03:16'),
      array('id' => '60', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '24', 'title' => 'عقد ورش عمل', 'ref' => NULL, 'content' => NULL, 'notes' => '202459510000027
      26-06-2024', 'created_at' => '2024-07-09 14:04:21', 'updated_at' => '2024-07-09 14:05:21'),
      array('id' => '61', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '40', 'title' => 'PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => 'بالطريق الرسمي
      
      20240650000045', 'created_at' => '2024-07-10 07:36:14', 'updated_at' => '2024-07-10 07:36:50'),
      array('id' => '62', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '15', 'from_id' => '1', 'to_id' => '8', 'title' => 'الملحق التعديلي 1 للممارسه رقم 2 2021 2022', 'ref' => NULL, 'content' => NULL, 'notes' => '20240643000483
      25-06-2024', 'created_at' => '2024-07-10 07:38:01', 'updated_at' => '2024-07-10 07:39:06'),
      array('id' => '63', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '41', 'title' => 'PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => '20240650000048', 'created_at' => '2024-07-10 07:41:21', 'updated_at' => '2024-07-10 07:42:03'),
      array('id' => '64', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '5', 'title' => 'PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => '20240650000049', 'created_at' => '2024-07-10 07:43:34', 'updated_at' => '2024-07-10 07:44:29'),
      array('id' => '65', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '2', 'title' => 'PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => '20240650000050', 'created_at' => '2024-07-10 07:46:38', 'updated_at' => '2024-07-10 07:47:13'),
      array('id' => '66', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '4', 'title' => 'PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => '20240650000051', 'created_at' => '2024-07-10 07:48:13', 'updated_at' => '2024-07-10 07:48:47'),
      array('id' => '67', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '21', 'title' => 'تمديد زيارة متعدد 6 أشهر - وائل مجدي عابدين سعدالدين', 'ref' => NULL, 'content' => NULL, 'notes' => 'صادر برقم 20240642000480
      بتاريخ 24-06-2024
      
      صادر أيضا كتاب آخر برقم 20240650000054
      بتاريخ  01-07-2024', 'created_at' => '2024-07-10 07:49:54', 'updated_at' => '2024-07-10 07:50:58'),
      array('id' => '68', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '21', 'title' => 'طلب زيارة متعدد 6 أشهر - محمد صلاح ياسين سيد عناية', 'ref' => NULL, 'content' => NULL, 'notes' => 'صادر برقم 20240642000479
      بتاريخ 24-06-2024
      
      صادر أيضا كتاب آخر برقم 20240650000055
      بتاريخ  01-07-2024', 'created_at' => '2024-07-10 07:51:42', 'updated_at' => '2024-07-10 08:08:42'),
      array('id' => '69', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '7', 'title' => 'مشروع ميزانية وزارة الكهرباء للسنتين الماليتين 2026/2027 - 2027/2028', 'ref' => NULL, 'content' => NULL, 'notes' => 'و م م م - 2024-826
      بتاريخ 12-06-2024', 'created_at' => '2024-07-10 08:10:23', 'updated_at' => '2024-07-10 08:11:20'),
      array('id' => '70', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '19', 'title' => 'ملاحظات على Draft Inception Report Submission', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 08:12:04', 'updated_at' => '2024-07-10 08:12:55'),
      array('id' => '71', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '9', 'title' => 'إعداد الخطة التشغيلية السنوية 2024-2025', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 08:13:41', 'updated_at' => '2024-07-10 08:14:22'),
      array('id' => '72', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '14', 'from_id' => '1', 'to_id' => '8', 'title' => 'الملحق التعديلي رقم 2 للمناقصة رقم 45-2018/2019 - الدوحة', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 08:15:07', 'updated_at' => '2024-07-10 08:16:09'),
      array('id' => '73', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '14', 'from_id' => '1', 'to_id' => '8', 'title' => 'تمديد موعد الاغلاق للمناقصة وك م 45-20219/20218 الى 11-08-2024 بدلا من 30-06-2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 08:17:40', 'updated_at' => '2024-07-10 08:18:35'),
      array('id' => '74', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '7', 'title' => 'التقرير الشهري للمشاريع التابعة للادارة لشهر مايو 2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 08:20:08', 'updated_at' => '2024-07-10 08:26:05'),
      array('id' => '75', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '5', 'title' => 'الحاق بالكتاب رقم 20240643000354', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 08:27:14', 'updated_at' => '2024-07-10 08:49:44'),
      array('id' => '76', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '8', 'title' => 'دفعة الاعمال عن شهر مايو 2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 08:50:25', 'updated_at' => '2024-07-10 08:51:16'),
      array('id' => '77', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '18', 'title' => 'مشروع مدينة جنوب سعد العبدالله', 'ref' => NULL, 'content' => NULL, 'notes' => '20240642000421', 'created_at' => '2024-07-10 08:52:07', 'updated_at' => '2024-07-10 08:53:30'),
      array('id' => '78', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '1', 'from_id' => '1', 'to_id' => '23', 'title' => 'Submittal of final response regarding bidders queries for Hawally', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      ات
      2024-955
      تاريخ
      21-05-2024', 'created_at' => '2024-07-10 09:20:46', 'updated_at' => '2024-07-10 09:21:34'),
      array('id' => '79', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '1', 'from_id' => '1', 'to_id' => '23', 'title' => 'Submittal of final response regarding bidders queries for Shuwaikh', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 09:22:08', 'updated_at' => '2024-07-10 09:23:27'),
      array('id' => '80', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '42', 'title' => 'جمع معلومات - MEW population data projection models for each 5 years periods up to 2040', 'ref' => NULL, 'content' => NULL, 'notes' => '20240642000422', 'created_at' => '2024-07-10 09:24:53', 'updated_at' => '2024-07-10 09:26:10'),
      array('id' => '81', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '17', 'title' => 'Training Course No. 7 GIS Course', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 09:28:50', 'updated_at' => '2024-07-10 09:33:33'),
      array('id' => '82', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '3', 'from_id' => '1', 'to_id' => '19', 'title' => 'Project Initiation', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 09:33:25', 'updated_at' => '2024-07-10 09:34:15'),
      array('id' => '83', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '19', 'title' => 'إعداد التقرير البيئي والاجتماعي', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 09:35:01', 'updated_at' => '2024-07-10 09:36:39'),
      array('id' => '84', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '43', 'title' => 'إعفاء مرافق مريض - ليلى عبد الجليل راشد القلاف', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 09:37:56', 'updated_at' => '2024-07-10 09:38:27'),
      array('id' => '85', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '43', 'title' => 'دخول مستشفى - لجين يوسف محمد رئيس', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 09:39:08', 'updated_at' => '2024-07-10 09:39:51'),
      array('id' => '86', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '7', 'title' => 'توجيهات سمو رئيس مجلس الوزراء لمعالي الوزراء في الاجتماع الأول لمجلس الوزراء', 'ref' => NULL, 'content' => NULL, 'notes' => 'ات
      2024-1026', 'created_at' => '2024-07-10 09:40:51', 'updated_at' => '2024-07-10 09:41:37'),
      array('id' => '87', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '14', 'from_id' => '1', 'to_id' => '33', 'title' => 'تقرير الزيارة الموقعية بصالة ضخ مجمع مياه الدوحة', 'ref' => NULL, 'content' => NULL, 'notes' => 'ات
      2024-1010', 'created_at' => '2024-07-10 09:42:30', 'updated_at' => '2024-07-10 09:44:47'),
      array('id' => '88', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '19', 'title' => 'معدل استهلاك المياه', 'ref' => NULL, 'content' => NULL, 'notes' => 'ات
      2024-1007', 'created_at' => '2024-07-10 09:45:29', 'updated_at' => '2024-07-10 09:47:38'),
      array('id' => '89', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '16', 'from_id' => '1', 'to_id' => '8', 'title' => 'مدة تنفيذ أعمال المشروع', 'ref' => NULL, 'content' => NULL, 'notes' => 'ا ت
      2024-1001
      
      20240642000387', 'created_at' => '2024-07-10 09:50:11', 'updated_at' => '2024-07-10 09:52:05'),
      array('id' => '90', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '13', 'title' => 'بخصوص مشروع 5 و 2 - اجتماع يوم 07/05/2024 - طلب بيانات', 'ref' => NULL, 'content' => 'مرفق CD', 'notes' => 'رقم الكتاب أ ت- 2024-976
      بتاريخ 22-05-2024', 'created_at' => '2024-07-10 09:58:18', 'updated_at' => '2024-07-10 10:02:54'),
      array('id' => '91', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '33', 'title' => 'اعتماد محضري اجتماع 15-01-2024 و 24-01-2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 10:16:40', 'updated_at' => '2024-07-10 10:17:04'),
      array('id' => '92', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '37', 'title' => 'المواصفات الخاصة بمباني الأعمال الكيماوية', 'ref' => NULL, 'content' => NULL, 'notes' => 'ا ت 2024-979
      تاريخ
      22-05-2024
      
      تم استلام الرد من الاعمال الكيماوية برقم
      20240059000314', 'created_at' => '2024-07-10 10:18:01', 'updated_at' => '2024-07-10 10:19:38'),
      array('id' => '93', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '24', 'title' => 'طلب نسخة عن دراسة التحديات التي تواجه الإدارة بقصد تحسين كفاءة الشبكة', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      20240643000388
      تاريخ
      26-05-2024', 'created_at' => '2024-07-10 10:22:57', 'updated_at' => '2024-07-10 10:24:02'),
      array('id' => '94', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '1', 'from_id' => '1', 'to_id' => '23', 'title' => 'Submittal of Final Responses Regarding Bidders Queries for Hawally', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 10:24:39', 'updated_at' => '2024-07-10 10:25:14'),
      array('id' => '95', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '33', 'title' => 'طلب زيارة ميدانية الي مجمع الدوحة يوم الخميس 23-05-2024 الساعة 9 صباحا', 'ref' => NULL, 'content' => NULL, 'notes' => 'ردا علي الكتاب رقم: 20240060000186 الوارد بتاريخ:12/05/2024', 'created_at' => '2024-07-10 10:26:28', 'updated_at' => '2024-07-10 10:27:03'),
      array('id' => '96', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '34', 'title' => 'اسم المستخدم للمسؤول Admin', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 10:28:16', 'updated_at' => '2024-07-10 10:28:53'),
      array('id' => '97', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '13', 'title' => 'بخصوص مشروع 5 و 2 - اجتماع يوم 07/05/2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب: 20240643000364', 'created_at' => '2024-07-10 10:35:49', 'updated_at' => '2024-07-10 10:39:18'),
      array('id' => '98', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '12', 'from_id' => '19', 'to_id' => '1', 'title' => 'طلب تجديد زيارة متعددة - صموئيل سمعان ويصا حسب الله', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0499
      04-07-2024', 'created_at' => '2024-07-10 10:55:18', 'updated_at' => '2024-07-10 13:51:12'),
      array('id' => '99', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '12', 'from_id' => '19', 'to_id' => '1', 'title' => 'طلب تجديد زيارة متعددة - صموئيل سمعان ويصا حسب الله', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0500
      04-07-2024', 'created_at' => '2024-07-10 10:58:54', 'updated_at' => '2024-07-10 13:50:56'),
      array('id' => '100', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '24', 'title' => 'عدادات المياه', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 11:08:04', 'updated_at' => '2024-07-10 11:09:27'),
      array('id' => '101', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '24', 'title' => 'عقد اجتماع بتاريخ 13-05-2024 - بخصوص RFC-003', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      20240643000345
      
      
      تاريخ الكتاب
      12-05-2024', 'created_at' => '2024-07-10 11:11:19', 'updated_at' => '2024-07-10 11:13:02'),
      array('id' => '102', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '24', 'title' => 'Draft Inception Report Submission', 'ref' => NULL, 'content' => 'مرفق CD', 'notes' => 'رقم الكتاب
      20240643000334
      ا ت 2024-876', 'created_at' => '2024-07-10 11:16:58', 'updated_at' => '2024-07-10 11:20:50'),
      array('id' => '103', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '5', 'title' => 'الاجتماع المنعقد بتاريخ 02/05/2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      20240643000354', 'created_at' => '2024-07-10 11:22:27', 'updated_at' => '2024-07-10 11:23:26'),
      array('id' => '104', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '19', 'title' => 'بخصوص اجتماع 29/04/2024', 'ref' => NULL, 'content' => NULL, 'notes' => '2', 'created_at' => '2024-07-10 11:26:01', 'updated_at' => '2024-07-10 11:32:46'),
      array('id' => '105', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '8', 'title' => 'دفعة الاعمال عن شهر ابريل 2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'ا ت 2024-895', 'created_at' => '2024-07-10 11:33:43', 'updated_at' => '2024-07-10 11:38:52'),
      array('id' => '106', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '19', 'title' => ' مشكلة في ملفات مخططات Hydraulic Models', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 11:40:25', 'updated_at' => '2024-07-10 11:41:21'),
      array('id' => '107', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '19', 'title' => 'البرنامج الزمني للمشروع', 'ref' => NULL, 'content' => NULL, 'notes' => 'و ك م 15-1594', 'created_at' => '2024-07-10 11:42:07', 'updated_at' => '2024-07-10 11:43:38'),
      array('id' => '108', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '7', 'title' => 'التقرير الشهري لشهر ابريل 2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم تلكتاب
      20240643000315', 'created_at' => '2024-07-10 11:44:18', 'updated_at' => '2024-07-10 11:45:23'),
      array('id' => '109', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '19', 'title' => 'Project Collaboration Website PCW', 'ref' => NULL, 'content' => 'مرفق نسخة من سياسة تنظيم حماية خصوصية البيانات CITRA', 'notes' => 'رقم الكتاب
      و ك م 15-1609', 'created_at' => '2024-07-10 11:47:01', 'updated_at' => '2024-07-10 11:48:40'),
      array('id' => '110', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '19', 'title' => 'مسؤولية الاستشاري مراجعة الجهات المعنية والحصول على المعلومات والموافقات والتراخيص اللازمة', 'ref' => NULL, 'content' => NULL, 'notes' => '881-2024
      20240648000384', 'created_at' => '2024-07-10 11:49:38', 'updated_at' => '2024-07-10 11:51:36'),
      array('id' => '111', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '37', 'title' => 'Draft Inception Report Submission', 'ref' => NULL, 'content' => 'مرفق CD', 'notes' => 'رقم الكتاب
      20240643000337
      
      ا ت 2024-877', 'created_at' => '2024-07-10 11:52:42', 'updated_at' => '2024-07-10 11:54:22'),
      array('id' => '112', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '33', 'title' => 'Draft Inception Report Submission', 'ref' => NULL, 'content' => 'مرفق CD', 'notes' => 'رقم الكتاب
      20240643000333
      ا ت 2024-882', 'created_at' => '2024-07-10 11:56:04', 'updated_at' => '2024-07-10 11:57:26'),
      array('id' => '113', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '44', 'title' => 'طلب المؤسسة العامة للرعاية السكنية توفير الخدمات الرئيسية لمشروع الخدمات الرئيسية لمشروع شرق مدينة صباح الأحمد السكنية', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 12:03:37', 'updated_at' => '2024-07-10 12:04:38'),
      array('id' => '114', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '14', 'title' => 'طلب بيانات', 'ref' => NULL, 'content' => NULL, 'notes' => 'عناية مدير إدارة تشغيل وصيانة الشبكات المائية 
      
      تم اصدار الكتاب برقم
      20240643000305
      بتاريخ
      06-05-2024', 'created_at' => '2024-07-10 12:07:47', 'updated_at' => '2024-07-10 12:10:17'),
      array('id' => '115', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '37', 'title' => 'محضر الاجتماع المنعقد بتاريخ 29/04/2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'ردا على الكتاب رقم
      20240650000029
      تم اصدار الكتاب برقم 
      20240643000308
      بتاريخ
      06-05-2024', 'created_at' => '2024-07-10 12:13:52', 'updated_at' => '2024-07-10 12:15:15'),
      array('id' => '116', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '1', 'from_id' => '1', 'to_id' => '8', 'title' => 'تمديد المناقصة 76-2018/2019
      ', 'ref' => NULL, 'content' => NULL, 'notes' => 'بخصوص طلب تمديد موعد إغلاق المناقصة المذكورة ليصبح 14/07/2024 بدلا من 12/05/2024. فإننا نود الإفادة بأن طلب تمديد المناقصة آنفة الذكر يرجع الى إعداد الملحق التعديلي رقم (2).
      
      تم اصدار الكتاب برقم 
      20240643000304
      بتاريخ
      06-05-2024', 'created_at' => '2024-07-10 12:16:51', 'updated_at' => '2024-07-10 12:18:22'),
      array('id' => '117', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '18', 'title' => 'طلب عقد اجتماع بخصوص مشاريع أرقام 5 و 2', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      20240643000290
      تاريخ الكتاب
      02-05-2024', 'created_at' => '2024-07-10 12:20:46', 'updated_at' => '2024-07-10 12:23:45'),
      array('id' => '118', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '5', 'title' => 'Request for Clarification RFC-004', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      2024-774
      تاريخ الكتاب
      25-04-2024', 'created_at' => '2024-07-10 12:51:33', 'updated_at' => '2024-07-10 12:53:19'),
      array('id' => '119', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '45', 'title' => 'نموذج طلب غربلة للمشروع', 'ref' => NULL, 'content' => 'مرفق CD مع الكتاب
      ', 'notes' => 'مرفق CD مع الكتاب
      
      رقم الكتاب
      و ك م
      1476-15', 'created_at' => '2024-07-10 13:02:30', 'updated_at' => '2024-07-10 13:14:54'),
      array('id' => '120', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '37', 'title' => 'الاطلاع علي محضر الاجتماع المنعقد بتاريخ 29-04-2024 بعد التعديل', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 13:16:32', 'updated_at' => '2024-07-15 09:56:11'),
      array('id' => '121', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '34', 'title' => 'استفسارات حول التراسل الالكتروني ', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 13:20:00', 'updated_at' => '2024-07-18 13:12:40'),
      array('id' => '122', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '34', 'title' => 'تمديد نقاط انترنت', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 13:21:46', 'updated_at' => '2024-07-18 13:11:00'),
      array('id' => '123', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '19', 'title' => 'الرد على الاستفسارات المقدمة من قبل المستشار - مشروع رقم 5 و مشروع رقم 8', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-10 13:36:42', 'updated_at' => '2024-07-10 13:38:15'),
      array('id' => '124', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '19', 'title' => 'المرشحين لحضور الدورات التدريبية رقم 5 و 7', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      2024-790
      تاريخ الكتاب
      01-05-2024', 'created_at' => '2024-07-10 13:39:00', 'updated_at' => '2024-07-10 13:41:47'),
      array('id' => '125', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '19', 'title' => 'انهاء خدمات Jacob', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      2024-794
      تاريخ
      29-04-2024', 'created_at' => '2024-07-10 13:44:11', 'updated_at' => '2024-07-10 13:45:24'),
      array('id' => '126', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '7', 'title' => 'عقد اجتماع مع شركة انسيابي بالتعاون مع شركة هواوي', 'ref' => NULL, 'content' => NULL, 'notes' => '2024063000282
      01-05-2024
      2024-789', 'created_at' => '2024-07-10 13:46:26', 'updated_at' => '2024-07-10 13:47:29'),
      array('id' => '127', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '37', 'title' => 'مسودة التقرير الأولي للمشروع Master Plan Interim Report', 'ref' => NULL, 'content' => 'مرفق CD', 'notes' => '20240650000033
      01-05-2024
      2024-784', 'created_at' => '2024-07-10 13:48:10', 'updated_at' => '2024-07-10 13:51:21'),
      array('id' => '128', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '24', 'title' => 'مسودة التقرير الأولي للمشروع Master Plan Interim Report', 'ref' => NULL, 'content' => 'مرفق CD', 'notes' => '20240650000032
      01-05-2024
      2024-786', 'created_at' => '2024-07-10 13:51:05', 'updated_at' => '2024-07-10 13:53:08'),
      array('id' => '129', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '33', 'title' => 'مسودة التقرير الأولي للمشروع Master Plan Interim Report', 'ref' => NULL, 'content' => 'مرفق CD', 'notes' => '20240650000036
      01-05-2024
      2024-785', 'created_at' => '2024-07-11 07:36:07', 'updated_at' => '2024-07-11 07:38:01'),
      array('id' => '130', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '2', 'title' => 'مسودة التقرير الأولي للمشروع Master Plan Interim Report', 'ref' => NULL, 'content' => 'مرفق CD', 'notes' => '
      ا ت - 2024-783
      20240650000034
      01-05-2024', 'created_at' => '2024-07-11 07:39:20', 'updated_at' => '2024-07-11 07:43:41'),
      array('id' => '131', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '9', 'title' => 'المرشحين بحضور ورشة تعريفية بخطة التنمية السنوية (2025/2026)', 'ref' => NULL, 'content' => NULL, 'notes' => 'DC-24-0070
      
      20240643000281
      01-05-2024', 'created_at' => '2024-07-11 07:44:44', 'updated_at' => '2024-07-11 07:45:58'),
      array('id' => '132', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '3', 'from_id' => '1', 'to_id' => '19', 'title' => 'بداية مشروع 2 NEW WAFRA WDC 
      Project Initiation On 01/05/2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-11 07:59:50', 'updated_at' => '2024-07-11 08:00:33'),
      array('id' => '133', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '37', 'title' => 'حضور الاجتماع المزمع عقدة يوم الاثنين الموافق 29-04-2024 الساعة 9 صباحا', 'ref' => NULL, 'content' => NULL, 'notes' => 'الاجتماع بخصوص 
      Request for Clarification
      
      رقم الكتاب
      20240650000031
      تاريخ الكتاب
      25-04-2024', 'created_at' => '2024-07-11 08:02:14', 'updated_at' => '2024-07-11 08:03:30'),
      array('id' => '134', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '46', 'title' => 'طلب كتاب المؤسسة العامة للرعاية السكنية رقم (1/9-203018) المؤرخ 16-11-2023 حتى نتمكن من الرد على تفسير بعض المواد القانونية في قوانين الرعاية السكنية بخصوص النية التحتية والبنية الأساسية والخدمات الرئيسية', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-11 08:05:53', 'updated_at' => '2024-07-11 08:08:42'),
      array('id' => '135', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '5', 'title' => 'الدورة التدريبية رقم 5 و 7', 'ref' => NULL, 'content' => NULL, 'notes' => 'تم اصدار الكتاب
      رقم الكتاب
      20240650000030
      تاريخ
      18-04-2024', 'created_at' => '2024-07-11 08:10:21', 'updated_at' => '2024-07-11 08:11:26'),
      array('id' => '136', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '19', 'title' => 'Project Collaboration Website PCW', 'ref' => NULL, 'content' => NULL, 'notes' => 'https://workflow.mew.gov.kw/Show.aspx?ID=%2bvgxUPAV9Z0%3d&DepID=G8LIsOmaKi8%3d&Cur=d%2bAxcdGg7vE%3d&Pageindex=z86FdVhj8Dg%3d
      رقم داخلي
      2024-449-و م م م', 'created_at' => '2024-07-11 08:12:50', 'updated_at' => '2024-07-11 08:14:55'),
      array('id' => '137', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '37', 'title' => 'الاجتماع المنعقد بتاريخ 28-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'تم اصدار الكتاب
      رقم الكتاب
      20240650000029
      تاريخ
      18-04-2024', 'created_at' => '2024-07-11 08:33:05', 'updated_at' => '2024-07-11 08:34:21'),
      array('id' => '138', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '41', 'title' => 'الدورة التدريبية رقم 5 و 7', 'ref' => NULL, 'content' => NULL, 'notes' => 'تم اصدار الكتاب
      رقم الكتاب
      20240650000028
      تاريخ
      18-04-2024', 'created_at' => '2024-07-11 08:39:13', 'updated_at' => '2024-07-11 08:40:05'),
      array('id' => '139', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '8', 'title' => 'دفعة الاعمال عن شهر مارس 2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      و.م.م.م. 439-2024
      تاريخ الكتاب
      21-04-2024', 'created_at' => '2024-07-11 08:40:45', 'updated_at' => '2024-07-11 08:42:06'),
      array('id' => '140', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '19', 'title' => 'الاجتماع المنعقد بتاريخ 28-03-2024 و مصفوفة المراسلات', 'ref' => NULL, 'content' => NULL, 'notes' => 'اعتماد محضر الاجتماع المنعقد بتاريخ 28-03-2024 
      و اعتماد مصفوفة المراسلات
      Correspondence Matrix', 'created_at' => '2024-07-11 08:43:00', 'updated_at' => '2024-07-11 08:43:56'),
      array('id' => '141', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '33', 'title' => 'الاجتماع المنعقد بتاريخ 26-03-2024 للمراجعة وابداء الرأي - مشروع رقم 5', 'ref' => NULL, 'content' => NULL, 'notes' => '20240650000027', 'created_at' => '2024-07-11 08:44:55', 'updated_at' => '2024-07-11 08:46:00'),
      array('id' => '142', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '8', 'title' => 'كتاب اقفال السنة المالية 2023/2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-11 08:46:50', 'updated_at' => '2024-07-11 08:47:45'),
      array('id' => '143', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '19', 'title' => 'اعتماد البرنامج الزمني', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-11 08:48:28', 'updated_at' => '2024-07-11 08:49:06'),
      array('id' => '144', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '19', 'title' => 'نسخة من كتاب قطاع محطات القوى الكهربائية وتقطير المياه والذي تضمن البيانات المطلوبة لمحطات تحلية المياه من حيث مواصفات المياه المنتجة ومعدل التدفق والضغط', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      20240642000248
      تاريخ الكتاب
      16-04-2024', 'created_at' => '2024-07-11 08:50:38', 'updated_at' => '2024-07-11 08:51:23'),
      array('id' => '145', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '7', 'title' => 'الرد على كتاب الية الحوكمة لوزراة الكهرباء والماء والطاقة المتجددة - تابع لمراقبة تصميم شبكات المياه واعداد المناقصات', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-11 08:52:38', 'updated_at' => '2024-07-11 08:52:53'),
      array('id' => '146', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '7', 'title' => 'مناقصة رقم 5975 بخصوص مخطط الموقع العام ومكاتب الوزارة بالموقع - تابع لمراقبة تصميم شبكات المياه واعداد المناقصات', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-11 08:54:21', 'updated_at' => '2024-07-11 08:54:35'),
      array('id' => '147', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '14', 'from_id' => '1', 'to_id' => '27', 'title' => 'بخصوص كتاب شركة المقاولون العرب', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-11 09:36:11', 'updated_at' => '2024-07-18 13:08:55'),
      array('id' => '148', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '14', 'from_id' => '1', 'to_id' => '27', 'title' => 'بخصوص كتاب شركة المجموعة المشتركة للمقاولات', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-11 09:39:12', 'updated_at' => '2024-07-18 13:16:07'),
      array('id' => '149', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '24', 'title' => 'بخصوص ورش العمل المنعقدة بالتواريخ التالية 30/06/2024 , 01/07/2024 , 02/07/2024 , 03/07/2024 ,04/07/2024 ', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-11 09:49:59', 'updated_at' => '2024-07-15 10:00:09'),
      array('id' => '150', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '2', 'title' => 'Interim Submission B1 (I.S.B1) Submission	', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-11 09:56:17', 'updated_at' => '2024-07-23 07:14:52'),
      array('id' => '151', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '39', 'title' => 'Interim Submission B1 (I.S.B1) Submission	', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-11 09:57:07', 'updated_at' => '2024-07-29 12:05:32'),
      array('id' => '152', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '24', 'title' => 'Interim Submission B1 (I.S.B1) Submission', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-11 09:57:34', 'updated_at' => '2024-07-30 11:12:41'),
      array('id' => '153', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '33', 'title' => 'Interim Submission B1 (I.S.B1) Submission', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-11 09:58:02', 'updated_at' => '2024-07-30 11:12:27'),
      array('id' => '154', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '37', 'title' => 'Interim Submission B1 (I.S.B1) Submission', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-11 09:58:32', 'updated_at' => '2024-07-15 10:00:01'),
      array('id' => '155', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '7', 'title' => 'كتاب الرد على الاستفسارات المقدمة من قبل المستشار ', 'ref' => NULL, 'content' => NULL, 'notes' => 'تم اصدار الكتاب عن طريق هشام برقم Workflow
      20240643000241
      بتاريخ
      07-04-2024', 'created_at' => '2024-07-11 10:03:55', 'updated_at' => '2024-07-11 10:11:13'),
      array('id' => '156', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '7', 'title' => 'مشروع الاحتياجات الفنية في مجال نظم وتقنية المعلومات', 'ref' => NULL, 'content' => NULL, 'notes' => 'تم اصدار الكتاب عن طريق هشام برقم Workflow
      20240643000240
      تاريخ
      07-04-2024', 'created_at' => '2024-07-11 10:11:37', 'updated_at' => '2024-07-11 10:13:02'),
      array('id' => '157', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '19', 'title' => 'اعتماد البرنامج الزمني المحدث', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-11 12:01:53', 'updated_at' => '2024-07-28 14:06:31'),
      array('id' => '158', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '1', 'to_id' => '21', 'title' => 'طلب تمديد زيارة تجارية لمدة 6 أشهر - لمهندس محمد علي محمود الكردي', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-15 08:06:32', 'updated_at' => '2024-07-17 11:50:24'),
      array('id' => '159', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '19', 'title' => 'اعتماد البرنامج الزمنى المحدث', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-15 12:48:47', 'updated_at' => '2024-07-28 14:04:50'),
      array('id' => '160', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '19', 'title' => 'ملاحظات على Monthly Progress Report No. 5', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-15 12:52:09', 'updated_at' => '2024-07-29 12:11:44'),
      array('id' => '161', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '17', 'from_id' => '47', 'to_id' => '1', 'title' => 'طلب ايصال المياه العذبة للقسيمة رقم 127', 'ref' => NULL, 'content' => NULL, 'notes' => 'م خ 07-2024/10937/02', 'created_at' => '2024-07-16 09:59:11', 'updated_at' => '2024-07-18 10:06:04'),
      array('id' => '162', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '17', 'from_id' => '47', 'to_id' => '1', 'title' => 'طلب ايصال المياه العذبة للقسيمة رقم 126', 'ref' => NULL, 'content' => NULL, 'notes' => '07-2024/10937/01/ م خ', 'created_at' => '2024-07-16 10:05:24', 'updated_at' => '2024-07-18 10:05:44'),
      array('id' => '163', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 29-01-2024 مع إدارة الأعمال الكيماوية', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0108D/24/0511
      11-07-2024
      
      لم يتم استلام الأصل ', 'created_at' => '2024-07-16 10:07:54', 'updated_at' => '2024-07-21 08:31:45'),
      array('id' => '164', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '12', 'from_id' => '19', 'to_id' => '1', 'title' => 'طلب تجديد زيارة متعددة - محمد علي محمود الكردي', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0517
      11-07-2024', 'created_at' => '2024-07-16 10:31:57', 'updated_at' => '2024-07-21 08:31:39'),
      array('id' => '165', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '38', 'title' => 'الحاق PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => '20240650000038', 'created_at' => '2024-07-16 11:09:17', 'updated_at' => '2024-07-17 14:25:37'),
      array('id' => '166', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '36', 'title' => 'الحاق PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => '20240650000039', 'created_at' => '2024-07-16 11:10:10', 'updated_at' => '2024-07-17 14:24:19'),
      array('id' => '167', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '39', 'title' => 'الحاق PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => '20240650000042', 'created_at' => '2024-07-16 11:10:52', 'updated_at' => '2024-07-29 11:43:18'),
      array('id' => '168', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '40', 'title' => 'الحاق PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => '20240650000045', 'created_at' => '2024-07-16 11:11:34', 'updated_at' => '2024-07-29 10:38:33'),
      array('id' => '169', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '30', 'title' => 'الحاق PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => 'الحاقا بالكتاب رقم:
      20240650000037', 'created_at' => '2024-07-16 11:12:13', 'updated_at' => '2024-07-22 07:15:58'),
      array('id' => '170', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '4', 'title' => 'الحاق PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => '20240650000051', 'created_at' => '2024-07-16 11:12:48', 'updated_at' => '2024-07-17 14:18:15'),
      array('id' => '171', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '5', 'title' => 'الحاق PCW - List of users', 'ref' => NULL, 'content' => NULL, 'notes' => '20240650000049', 'created_at' => '2024-07-16 11:13:26', 'updated_at' => '2024-07-28 13:58:41'),
      array('id' => '173', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتارخ 10-01-2024 مع إدارة تشغيل وصيانة مشاريع الشبكات المائية', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0108D/24/0509
      11-07-2024', 'created_at' => '2024-07-16 11:36:08', 'updated_at' => '2024-07-21 08:31:33'),
      array('id' => '174', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد في تمام الساعة 9:00 صباحا  بتاريخ 04-06-2024 بخصوص (PCW Presentation Workshop)', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0513
      11-07-2024', 'created_at' => '2024-07-16 11:40:01', 'updated_at' => '2024-07-21 08:31:27'),
      array('id' => '175', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 31-01-2024 مع إدارة انتاج المياه الجوفية', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0108D/24/0510
      11-07-2024', 'created_at' => '2024-07-16 11:42:09', 'updated_at' => '2024-07-21 08:31:19'),
      array('id' => '176', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'البرنامج الزمنى للمشروع (للاعتماد)', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0515
      11-07-2024', 'created_at' => '2024-07-16 11:45:34', 'updated_at' => '2024-07-21 08:31:13'),
      array('id' => '177', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'Concept Design Report Presentation (3 Alternatives) to MEWRE -- Phase 1', 'ref' => NULL, 'content' => 'مجلد + مخطط', 'notes' => 'K23165-0106D/24/0525
      15-07-2024', 'created_at' => '2024-07-18 08:21:48', 'updated_at' => '2024-07-21 08:31:08'),
      array('id' => '178', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 09-06-2024 الساعة 9:00 صباحا', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0518
      14-07-2024', 'created_at' => '2024-07-18 08:25:04', 'updated_at' => '2024-07-21 08:31:02'),
      array('id' => '179', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '19', 'title' => 'جمع بيانات ', 'ref' => NULL, 'content' => NULL, 'notes' => 'مرفق رد الهيئة العامة لشئون الزراعة والثروة السمكية', 'created_at' => '2024-07-21 12:49:51', 'updated_at' => '2024-07-31 11:16:32'),
      array('id' => '180', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'Concept Design Cost Estimate Report (3 Alternatives)', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0106D/24/0502', 'created_at' => '2024-07-22 07:27:28', 'updated_at' => '2024-07-22 07:27:59'),
      array('id' => '181', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'Projects - Training Course No.1 (Structural Design)', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0501', 'created_at' => '2024-07-22 07:28:58', 'updated_at' => '2024-07-22 07:29:24'),
      array('id' => '182', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'Course 8: New Construction Technology (BIM)', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0494', 'created_at' => '2024-07-22 07:35:16', 'updated_at' => '2024-07-22 07:35:45'),
      array('id' => '183', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '19', 'to_id' => '1', 'title' => 'Reimbursable Package Invoice No. 7 - June 2024 - فاتورة يونيو 2024 - فاتورة رقم 7', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0200D/24/0493
      02-07-2024', 'created_at' => '2024-07-22 07:42:34', 'updated_at' => '2024-07-22 07:43:20'),
      array('id' => '184', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '1', 'from_id' => '23', 'to_id' => '1', 'title' => ' إعادة  تسليم الردود النهائية بخصوص استفسارات المناقصين', 'ref' => NULL, 'content' => 'مرفق عدد 2 CD
      cd حولي لايعمل', 'notes' => NULL, 'created_at' => '2024-07-22 07:44:21', 'updated_at' => '2024-07-22 07:44:48'),
      array('id' => '185', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '15', 'from_id' => '8', 'to_id' => '1', 'title' => 'بخصوص الممارسة رقم: و ك م/2-2021-2022', 'ref' => NULL, 'content' => 'مرفق CD', 'notes' => 'و.م.ش.م/366
      ', 'created_at' => '2024-07-22 07:45:43', 'updated_at' => '2024-07-22 07:46:20'),
      array('id' => '186', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'Final Inception Report Submission', 'ref' => NULL, 'content' => 'مرفق 2 نسخة ورقية و 5 نسخ الكترونية', 'notes' => 'K23165-0108d/24/0487
      ', 'created_at' => '2024-07-22 07:47:04', 'updated_at' => '2024-08-01 09:36:13'),
      array('id' => '187', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'Revised Schedule', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-22 07:48:08', 'updated_at' => '2024-07-22 07:49:22'),
      array('id' => '188', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '19', 'to_id' => '1', 'title' => 'تمديد زيارة متعددة - وائل مجدي عابدين سعد الدين', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0452
      20-06-2024', 'created_at' => '2024-07-22 07:50:26', 'updated_at' => '2024-07-22 07:51:00'),
      array('id' => '189', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '19', 'to_id' => '1', 'title' => 'طلب زيارة متعددة - محمد صلاح ياسين سيد عناية', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0454
      20-06-2024', 'created_at' => '2024-07-22 07:51:48', 'updated_at' => '2024-07-22 07:52:16'),
      array('id' => '190', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'Tie-in Points - Irrigation Network', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0482
      26-06-2024', 'created_at' => '2024-07-22 07:53:23', 'updated_at' => '2024-07-22 07:53:58'),
      array('id' => '191', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'Revised Schedule', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0483
      26-06-2024', 'created_at' => '2024-07-22 07:54:52', 'updated_at' => '2024-07-22 07:55:18'),
      array('id' => '192', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'Submission of Concept Design (3 Alternatives) Report Phase 1', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165/0106D/24/0484', 'created_at' => '2024-07-22 07:56:05', 'updated_at' => '2024-07-22 07:56:49'),
      array('id' => '193', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة اصلية من محضر اجتماع 27-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0105D-0105D/24/0480
      27-06-2024', 'created_at' => '2024-07-22 07:57:43', 'updated_at' => '2024-07-22 07:58:33'),
      array('id' => '194', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة اصلية من محضر اجتماع 30-01-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0105D-0105D/24/0481
      27-06-2024', 'created_at' => '2024-07-22 07:59:42', 'updated_at' => '2024-07-22 08:01:41'),
      array('id' => '195', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة اصلية من محضر اجتماع 13-05-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0105D-0105D/24/0479
      27-06-2024', 'created_at' => '2024-07-22 08:02:36', 'updated_at' => '2024-07-22 08:03:10'),
      array('id' => '196', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة اصلية من محضر اجتماع 04-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-22 08:03:52', 'updated_at' => '2024-07-22 08:04:25'),
      array('id' => '197', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدم توفر شبكة صرف صحي بالقرب من موقع المشروع', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165/106D/24/0460
      23/06/2024', 'created_at' => '2024-07-22 08:09:43', 'updated_at' => '2024-07-22 08:15:20'),
      array('id' => '198', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '1', 'from_id' => '23', 'to_id' => '1', 'title' => 'تسليم العرض الفني والمالي', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-22 08:43:18', 'updated_at' => '2024-07-22 08:43:47'),
      array('id' => '199', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '3', 'from_id' => '19', 'to_id' => '1', 'title' => ' 2 نسخة اصلية من محضر اجتماع 07-05-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0102D/24/0447
      19-06-2024
      
      رقم المحضر
      K23165-0102D-24-004', 'created_at' => '2024-07-22 08:48:13', 'updated_at' => '2024-07-22 08:51:21'),
      array('id' => '200', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '15', 'from_id' => '1', 'to_id' => '27', 'title' => 'تمدبد تاريخ اغلاق الممارسة', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-22 10:30:15', 'updated_at' => '2024-07-31 08:53:16'),
      array('id' => '201', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '34', 'title' => 'استفسارات حول التراسل الالكتروني ', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-22 11:16:30', 'updated_at' => '2024-07-31 08:55:28'),
      array('id' => '202', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '34', 'title' => 'المناقصات التي تتضمن نظام المعلومات الجغرافية GIS', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-22 11:18:58', 'updated_at' => '2024-07-31 08:54:27'),
      array('id' => '204', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '49', 'title' => 'نظام شؤون الموظفين HR', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-23 07:47:55', 'updated_at' => '2024-07-24 11:19:02'),
      array('id' => '205', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد يوم 05-06-2024 الساعة 9:30', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد برقم K23165-0106D/24/0526
      بتاريخ 16-07-2024
      
      الحاقا بالكتاب رقم K23165-0106D/24/0432
      بتاريخ 10-06-2024', 'created_at' => '2024-07-23 08:50:34', 'updated_at' => '2024-07-24 09:21:13'),
      array('id' => '206', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'Monthly Progress Report No. 6', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0527
      18-07-2024', 'created_at' => '2024-07-23 08:54:15', 'updated_at' => '2024-07-24 09:19:48'),
      array('id' => '207', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '3', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخ 03-07-2024 الساعة 9:00', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0102D/24/0523
      15-07-2024', 'created_at' => '2024-07-23 09:08:17', 'updated_at' => '2024-07-24 09:21:55'),
      array('id' => '208', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'نسخة من محضر الاجتماع المنعقد بتاريخ 17-07-2024 الساعة 11:00بخصوص 
      Storm Water and  Sewage Tie-in', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0106D/24/0532
      18-07-2024', 'created_at' => '2024-07-23 09:17:12', 'updated_at' => '2024-07-24 09:22:22'),
      array('id' => '209', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'PACI Population Data', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0105D/24/0524
      15-07-2024', 'created_at' => '2024-07-23 09:27:03', 'updated_at' => '2024-07-24 09:22:51'),
      array('id' => '210', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'Concept Design Cost Estimate Report for the 3 Design Alternative', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-23 09:47:44', 'updated_at' => '2024-07-28 11:58:15'),
      array('id' => '211', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '19', 'title' => 'Concept Design Alternative 3 Approval', 'ref' => NULL, 'content' => 'اختيار البديل الثالث', 'notes' => NULL, 'created_at' => '2024-07-23 10:37:36', 'updated_at' => '2024-07-31 10:50:46'),
      array('id' => '212', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'Monthly Progress Report No. 5', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0100D/24/0450
      19-06-2024', 'created_at' => '2024-07-24 09:09:30', 'updated_at' => '2024-07-24 09:10:04'),
      array('id' => '213', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'طلب مخططات As-Built Drawings', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0105D/24/0445
      19-06-2024', 'created_at' => '2024-07-24 09:10:49', 'updated_at' => '2024-07-24 09:11:58'),
      array('id' => '214', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '24', 'title' => 'الحاق - بخصوص عدادات المياه على مداخل المناطق السكنية', 'ref' => NULL, 'content' => NULL, 'notes' => 'الحاق بالكتاب رقم 20240643000497 بتاريخ 09-07-2024', 'created_at' => '2024-07-24 09:14:33', 'updated_at' => '2024-07-29 07:30:11'),
      array('id' => '215', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'ربط صرف فائض مياه الخزانات الرئيسية العلوية وصرف مياه الامطار للمبنى بخط صرف المطر القائم', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0106D-24-0535
      21-07-2024', 'created_at' => '2024-07-24 09:41:57', 'updated_at' => '2024-07-24 10:32:55'),
      array('id' => '216', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '1', 'from_id' => '23', 'to_id' => '1', 'title' => 'اعادة تسليم الردود النهائية بخصوص استفسارات المناقصين', 'ref' => NULL, 'content' => NULL, 'notes' => '5071033-C01-409
      21-07-2024
      
      مرفق عدد 2 CD
      cd حولي فارغ', 'created_at' => '2024-07-24 09:47:47', 'updated_at' => '2024-07-24 10:32:44'),
      array('id' => '217', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'مسودة محضر اجتماع 09-06-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0100D/24/0441
      19-06-2024
      
      رقم المحضر
      K23165-0100D-MOM-24-008', 'created_at' => '2024-07-24 10:21:01', 'updated_at' => '2024-07-24 10:22:11'),
      array('id' => '218', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'العرض المرئي Presentation مع كتاب محضر الاجتماع 05-06-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0106D/24/0436
      12-06-2024', 'created_at' => '2024-07-24 10:25:02', 'updated_at' => '2024-07-24 10:25:33'),
      array('id' => '219', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'مسودة محضر اجتماع 05-06-2024 - من الساعة 9:30 الى 11:00', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0106D/24/0432
      10-06-2024
      
      رقم المحضر
      K23165-0106D-24-016', 'created_at' => '2024-07-24 10:40:26', 'updated_at' => '2024-07-24 10:41:05'),
      array('id' => '220', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'مسودة محضر اجتماع 05-06-2024 - من الساعة 9:00 الى 09:30', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0106D/24/0431
      10-06-2024
      
      رقم المحضر
      K23165-0106D-24-015', 'created_at' => '2024-07-24 10:41:56', 'updated_at' => '2024-07-24 10:42:27'),
      array('id' => '221', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '5', 'to_id' => '1', 'title' => 'رد على الكتاب رقم 2024-1091', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب 612-WPD-24
      بتاريخ 10-06-2024', 'created_at' => '2024-07-24 10:43:51', 'updated_at' => '2024-07-24 10:44:41'),
      array('id' => '222', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'مسودة محضر اجتماع 27-05-2024 - الساعة 10:15 صباحا', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-24 10:45:59', 'updated_at' => '2024-07-24 10:47:28'),
      array('id' => '223', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة اصلية من محضر اجتماع 16-01-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0108D/24/0419
      06-06-2024
      
      رقم المحضر
      K23165-0108D-2023-0004', 'created_at' => '2024-07-24 10:49:08', 'updated_at' => '2024-07-24 10:53:06'),
      array('id' => '224', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'مسودة محضر اجتماع 04-06-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0100D/24/0428
      06-06-2024
      
      رقم المحضر
      K23165-0100D-MOM-24-007', 'created_at' => '2024-07-24 10:54:40', 'updated_at' => '2024-07-24 10:55:20'),
      array('id' => '225', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '19', 'to_id' => '1', 'title' => 'دفعة شهر مايو 2024 - Reimbursable Package - Invoice No. 6 - May 2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0200D/24/0416
      04-06-2024', 'created_at' => '2024-07-24 10:57:05', 'updated_at' => '2024-07-24 10:57:33'),
      array('id' => '226', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '19', 'to_id' => '1', 'title' => 'Training Course No.7 GIS Course', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-24 10:58:18', 'updated_at' => '2024-07-24 11:01:32'),
      array('id' => '227', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'اشعار الهيئة العامة للبيئة بوجود خطأ مطبعي في رقم العقد للمشروع', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-24 11:02:20', 'updated_at' => '2024-07-24 11:03:20'),
      array('id' => '228', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'طلب مخططات As Built - لشبكة الصرف الصحي بموقع المشروع', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-24 11:32:47', 'updated_at' => '2024-07-24 11:39:58'),
      array('id' => '229', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'جمع معلومات - MEW population data projection models for each 5 years period up to 2040', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0105D/24/0395
      تاريخ
      28-05-2024', 'created_at' => '2024-07-24 11:48:49', 'updated_at' => '2024-07-24 11:49:42'),
      array('id' => '230', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'طلب مخططات ال As Built  لشبكة صرف مياه الامطار', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0106D/24/0396
      تاريخ
      28-05-2024', 'created_at' => '2024-07-24 11:55:21', 'updated_at' => '2024-07-24 11:55:52'),
      array('id' => '231', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '7', 'title' => 'الأمن السيبرانى للتكنولوجيا التشغيلية OT', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-24 12:26:11', 'updated_at' => '2024-07-24 12:37:26'),
      array('id' => '232', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'مسودة محضر اجتماع 27-05-2024 - الساعة 9 صباحا', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0106D/24/0406
      29-05-2024', 'created_at' => '2024-07-24 12:53:55', 'updated_at' => '2024-07-24 12:55:03'),
      array('id' => '233', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'List of Users PCW', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0405
      29-05-2024', 'created_at' => '2024-07-24 12:55:33', 'updated_at' => '2024-07-24 12:56:09'),
      array('id' => '234', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '8', 'to_id' => '1', 'title' => 'اقفال السنة المالية 2023/2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-24 12:56:57', 'updated_at' => '2024-07-24 12:57:21'),
      array('id' => '235', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة اصلية من محضر اجتماع 22-01-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0401
      29-05-2024', 'created_at' => '2024-07-24 13:01:06', 'updated_at' => '2024-07-24 13:02:01'),
      array('id' => '236', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة اصلية من محضر اجتماع 06-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'k23165-0106D/24/0402
      29-05-2024', 'created_at' => '2024-07-24 13:04:38', 'updated_at' => '2024-07-24 13:07:02'),
      array('id' => '237', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '50', 'to_id' => '1', 'title' => 'التصميم النهائي واعداد مستندات المناقصة لاعمال شبكات التغذية بالمياه العذبة للطريق الدائري الرابع - تذكير 2', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-24 13:08:37', 'updated_at' => '2024-07-24 13:09:00'),
      array('id' => '238', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'Training Course No. 5 (Electrical Works Design)', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0394
      26-05-2024', 'created_at' => '2024-07-24 13:11:24', 'updated_at' => '2024-07-24 13:12:09'),
      array('id' => '239', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'Phase 1 Interim Report Submission - Rev 1', 'ref' => NULL, 'content' => 'مرفق 5 CD
      3 مجلدات
      ورق - A3', 'notes' => 'K23165-0105D-24-0541
      22-07-2024
      مرفق عدد 5 CD', 'created_at' => '2024-07-24 13:15:48', 'updated_at' => '2024-07-28 09:37:06'),
      array('id' => '240', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'مشروع 5 و 2 - عدد 2 نسخة اصلية من محضر اجتماع 07-05-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب 
      K23165-0105D-0102D/24/0385
      
      تاريخ الكتاب
      23-05-2024', 'created_at' => '2024-07-24 13:16:01', 'updated_at' => '2024-07-24 13:17:22'),
      array('id' => '241', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'الاجتماع المنعقد بتاريخ 13-05-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0105D/24/0388
      
      تاريخ الكتاب
      22-05-2024', 'created_at' => '2024-07-24 13:48:54', 'updated_at' => '2024-07-24 13:49:51'),
      array('id' => '242', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'طلب مخططات As Built لشبكة الصرف الصحي بموقع المشروع', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0106D/24/0389
      22-05-2024', 'created_at' => '2024-07-24 13:50:56', 'updated_at' => '2024-07-24 13:53:54'),
      array('id' => '243', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'نسخة اصلية من محضر اجتماع 25-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0106D/24/0378
      
      تاريخ الكتاب
      22-05-2024', 'created_at' => '2024-07-25 07:52:04', 'updated_at' => '2024-07-25 07:52:38'),
      array('id' => '244', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'MOM of Document Distribution Matrix DDM Projects Nos 2,3,6,8', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0100D/24/0380
      
      تاريخ الكتاب
      22-05-2024', 'created_at' => '2024-07-25 07:53:54', 'updated_at' => '2024-07-25 07:54:19'),
      array('id' => '245', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'البرنامج التدريبي', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0100D/24/0381
      تاريخ الكتاب
      22-05-2024', 'created_at' => '2024-07-25 07:57:38', 'updated_at' => '2024-07-25 07:58:29'),
      array('id' => '246', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'PCW Compliance with CITRA requirements', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0100D/24/0386
      
      تاريخ الكتاب
      22-05-2024', 'created_at' => '2024-07-25 07:59:22', 'updated_at' => '2024-07-25 08:02:09'),
      array('id' => '247', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'نسخة من محضر اجتماع 13-05-2024 و 15-05-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0106D/24/0369
      
      رقم المحضر
      
      K23165-0106D- 24 - 
      10 & 11', 'created_at' => '2024-07-25 08:04:34', 'updated_at' => '2024-07-25 08:05:40'),
      array('id' => '248', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة اصلية من محضر اجتماع 28-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-25 08:06:38', 'updated_at' => '2024-07-25 08:07:14'),
      array('id' => '249', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '7', 'from_id' => '7', 'to_id' => '14', 'title' => 'طلب بيانات عن أقرب خط تخديمي لكل من المياه العذبة وقليلة الملوحة', 'ref' => NULL, 'content' => 'مرفق نسخة من المخططين رقمي 
      W.P.D-Project-06/(01-02)', 'notes' => NULL, 'created_at' => '2024-07-25 08:20:16', 'updated_at' => '2024-07-31 11:14:46'),
      array('id' => '250', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'نسخة من محضر اجتماع 27-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0105D/24/0271
      
      تاريخ الكتاب
      31-03-2024
      
      رقم المحضر
      K23165-0105D-2024-0004', 'created_at' => '2024-07-25 08:27:45', 'updated_at' => '2024-07-25 08:28:17'),
      array('id' => '251', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'نسخة من محضر اجتماع 25-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0106D/24/0270
      
      تاريخ الكتاب
      31-03-2024
      
      رقم المحضر
      K23165-0106D-24-008', 'created_at' => '2024-07-25 08:28:56', 'updated_at' => '2024-07-25 08:29:39'),
      array('id' => '252', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'نسخة اصلية من محضر اجتماع  26-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0106D/24/0359', 'created_at' => '2024-07-25 08:30:42', 'updated_at' => '2024-07-25 08:31:29'),
      array('id' => '253', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'نسخة اصلية من محضر اجتماع  28-01-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0106D/24/0360', 'created_at' => '2024-07-25 08:32:09', 'updated_at' => '2024-07-25 08:33:07'),
      array('id' => '254', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'مشروع رقم 5 - مشروع رقم 2', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-D0105D-0102D/24/0351', 'created_at' => '2024-07-25 08:34:20', 'updated_at' => '2024-07-25 08:34:44'),
      array('id' => '255', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '1', 'from_id' => '23', 'to_id' => '1', 'title' => 'تسليم الردود النهائية بخصوص استفسارات المناقصين', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      5071033-C01-402
      تاريخ 05-05-2024', 'created_at' => '2024-07-25 08:36:39', 'updated_at' => '2024-07-25 08:37:05'),
      array('id' => '256', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'متوسط استهلاك المياه العذبة على أساس سنوي', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0105D/24/0353', 'created_at' => '2024-07-25 08:37:40', 'updated_at' => '2024-07-25 08:38:01'),
      array('id' => '257', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '3', 'from_id' => '19', 'to_id' => '1', 'title' => 'نسخة من محضر اجتماع 07-05-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب 
      K23165-0102D/24/0354', 'created_at' => '2024-07-25 08:38:38', 'updated_at' => '2024-07-25 08:39:00'),
      array('id' => '258', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'محضر اجتماع 02-05-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0108D/24/0345', 'created_at' => '2024-07-25 08:39:51', 'updated_at' => '2024-07-25 08:46:11'),
      array('id' => '259', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'نسخة اصلية من محضر اجتماع 11-01-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0108D/24/0356', 'created_at' => '2024-07-25 09:01:37', 'updated_at' => '2024-07-25 09:02:08'),
      array('id' => '260', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'نسخة اصلية من محضر اجتماع 21-01-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0106D/24/0344', 'created_at' => '2024-07-25 09:02:54', 'updated_at' => '2024-07-25 09:03:32'),
      array('id' => '261', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'التقرير الشهري رقم 4 - Monthly Progress Report No. 4', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0100D/24/0335', 'created_at' => '2024-07-25 09:04:19', 'updated_at' => '2024-07-25 09:05:20'),
      array('id' => '262', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'محضر اجتماع المنعقد بتاريخ 29-04-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0108D/24/0334
      تاريخ الكتاب
      02-05-2024
      
      رقم المحضر
      K23165-0108D-2024-0013', 'created_at' => '2024-07-25 09:05:58', 'updated_at' => '2024-07-25 09:06:37'),
      array('id' => '263', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '19', 'to_id' => '1', 'title' => 'فاتورة شهر ابريل 2024 - Invoice No. 5 April 2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-25 09:07:11', 'updated_at' => '2024-07-25 09:07:37'),
      array('id' => '264', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '37', 'to_id' => '1', 'title' => 'طلب نسخة من محضر الاجتماع المنعقد يوم 29/04/2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد برقم: 20240650000029
      أ ع ك/489
      بتاريخ: 05/05/2024', 'created_at' => '2024-07-25 09:08:28', 'updated_at' => '2024-07-25 09:08:39'),
      array('id' => '265', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '37', 'to_id' => '1', 'title' => 'المباني التي سيتم ازالتها داخل مجمعات توزيع المياه (الشويخ - حولي - الدوحة)', 'ref' => NULL, 'content' => NULL, 'notes' => 'بخصوص المباني التي سيتم ازالتها داخل مجمعات توزيع المياه (الشويخ - حولي - الدوحة)
      
      وارد بتاريخ 17-04-2024
      برقم 20240059000219', 'created_at' => '2024-07-25 09:11:36', 'updated_at' => '2024-07-25 09:11:53'),
      array('id' => '266', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '1', 'from_id' => '24', 'to_id' => '1', 'title' => 'بخصوص مناقصة  رقم و ك م 76-2018/2019', 'ref' => NULL, 'content' => 'مرفق كشف يوضح احداثيات أجهزة قياس التدفق القائمة علي الشبكة العامة', 'notes' => 'وارد برقم 20240543000201 
      بتاريخ 04/05/2024
      
      ردا علي كتابنا رقم  أ ت/534 بتاريخ  14/03/2024', 'created_at' => '2024-07-25 09:13:01', 'updated_at' => '2024-07-25 09:19:00'),
      array('id' => '267', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '9', 'to_id' => '1', 'title' => 'ترشيح ضابط اتصال عن إدارات كل إدارة من إدارات القطاعات', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد - من الوكيل المساعد للتخطيط والتدريب ونظم المعلومات - بخصوص ترشيح ضابط اتصال عن إدارات كل إدارة من إدارات القطاعات
      للتنسيق مع إدارة الإحصاء عند تعبئة بطاقات الأهداف الاستراتيجية و مؤشرات الأداء الخاصة بإدارة قطاعكم
      
      وارد بتاريخ 18-04-2024
      برقم 20240702000019', 'created_at' => '2024-07-25 09:19:52', 'updated_at' => '2024-07-25 09:20:20'),
      array('id' => '268', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '1', 'from_id' => '8', 'to_id' => '1', 'title' => 'طلب تمديد موعد إغلاق المناقصة 2019/2018-76', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد برقم 20242949000041
      بتاريخ 02/05/2024
      
      ردا علي كتابنا رقم 20240643000285
      بتاريخ 01/05/2024
      
      بخصوص تمديد موعد الاغلاق ليصبح 14/07/2024 بدلا من 12/05/2024
      
      الرجاء ذكر أسباب ومبررات تمديد موعد الاغلاق لمخاطبة الجهاز المركزي للموافقة علي التمديد', 'created_at' => '2024-07-25 09:21:25', 'updated_at' => '2024-07-25 09:21:48'),
      array('id' => '269', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '5', 'to_id' => '1', 'title' => ' الإجتماع المنعقد بتاريخ 16/01/2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد برقم 2024066000019 
      بتاريخ 29/04/2024
      
      بخصوص مشروع 8 - الخاص بالاجتماع المنعقد بتاريخ 16/01/2024  بخصوص RFC-004
      غير واضحة لذا يردي تحديد موعد اجتماع لمناقشة تلك الاستفسارات', 'created_at' => '2024-07-25 09:22:47', 'updated_at' => '2024-07-25 09:23:05'),
      array('id' => '270', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '19', 'to_id' => '1', 'title' => 'طلب زيارة متعددة - للمهندس محمد صلاح ياسين سيد عناية', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-25 09:23:47', 'updated_at' => '2024-07-25 09:24:12'),
      array('id' => '271', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'Data Collection Report & Interim Concept Design Report', 'ref' => NULL, 'content' => 'مرفق عدد 5 CD', 'notes' => '
      رقم الكتاب
      K23165-0106D/24/0331
      تاريخ الكتاب
      29-04-2024', 'created_at' => '2024-07-25 09:25:06', 'updated_at' => '2024-07-25 09:25:43'),
      array('id' => '272', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'محضر اجتماع تاريخ 26-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0105D/24/0323
      تاريخ الكتاب
      28-04-2024', 'created_at' => '2024-07-25 09:31:40', 'updated_at' => '2024-07-25 09:32:03'),
      array('id' => '273', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '37', 'to_id' => '1', 'title' => 'إنشاء مكاتب في مبنى إدارة الأعمال الكيماوية بالشويخ', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد برقم 20240059000219
      بتاريخ 29/04/2024', 'created_at' => '2024-07-25 09:32:50', 'updated_at' => '2024-07-25 09:34:28'),
      array('id' => '274', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '51', 'to_id' => '1', 'title' => 'اسم المستخدم للمسؤول Admin', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      20230643000537
      تاريخ الكتاب
      29-04-2024', 'created_at' => '2024-07-25 09:35:49', 'updated_at' => '2024-07-25 09:41:07'),
      array('id' => '275', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '9', 'to_id' => '1', 'title' => 'بخصوص Project Collaboration Website (PCW)', 'ref' => NULL, 'content' => NULL, 'notes' => 'رد على كتابنا الصادر رقم و م م م - 449 - 2024 
      
      رقم الكتاب
      20240642000267
      تاريخ الكتاب
      29-04-2024
      
      ', 'created_at' => '2024-07-25 09:47:17', 'updated_at' => '2024-07-25 09:47:35'),
      array('id' => '276', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '1', 'from_id' => '23', 'to_id' => '1', 'title' => ' رد على كتاب الوزارة المؤرخ 04-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      5071033-C01-401
      تاريخ الكتاب
      22-04-2024', 'created_at' => '2024-07-25 09:48:17', 'updated_at' => '2024-07-25 09:48:41'),
      array('id' => '277', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'General Layout for Site Coordinates - Subhan WDC = Water Project Sector Building', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0106D/24/0309
      تاريخ الكتاب
      22-04-2024', 'created_at' => '2024-07-25 09:49:18', 'updated_at' => '2024-07-25 09:49:40'),
      array('id' => '278', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'Project Schedule & Upcoming Submissions', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0106D/24/0310
      تاريخ الكتاب
      22-04-2024', 'created_at' => '2024-07-25 09:50:12', 'updated_at' => '2024-07-25 09:50:36'),
      array('id' => '279', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'التقرير الابتدائي للمخطط العام - المخطط العام القائم لشبكة المياه العذبة وقليلة الملوحة', 'ref' => NULL, 'content' => 'مرفق مع الكتاب عدد 5 CD من التقرير', 'notes' => 'رقم الكتاب
      K23165-0105D/24/0312
      تاريخ الكتاب
      22-04-2024
      ', 'created_at' => '2024-07-25 09:51:17', 'updated_at' => '2024-07-25 09:51:47'),
      array('id' => '280', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '13', 'to_id' => '1', 'title' => 'طلب بيانات', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد بخصوص طلب بيانات من قطاع محطات القوي وتقطير المياه بخصوص طلب بيانات عن المشاكل التي أدت الي تجنب استخدام أنابيب المصنعة من مادة البولي إيثيلين عالي الكثافة HDPE
      
      وارد برقم:  20240643000103
      بتاريخ:  24/04/2024
      
      
      ردا علي الكتاب رقم 20240643000103
      المؤرخ 25/01/2024', 'created_at' => '2024-07-25 09:54:38', 'updated_at' => '2024-07-25 09:55:54'),
      array('id' => '281', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '8', 'to_id' => '1', 'title' => 'تعميم وزارة المالية رقم 10 لسنة 2016', 'ref' => NULL, 'content' => NULL, 'notes' => 'بخصوص عدم استلام أي مواد الا بمراجعة المخزن المختص 
      
      وارد برقم 202409480000666
      بتاريخ  23-04-2024', 'created_at' => '2024-07-25 09:56:47', 'updated_at' => '2024-07-25 09:57:08'),
      array('id' => '282', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '44', 'to_id' => '1', 'title' => 'طلب المؤسسة العامة للرعاية السكنية توفير الخدمات الرئيسية لمشروع شرق مدينة صباح الاحمد السكنية', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب: 20240272000010
      بتاريخ: 24/04/2024', 'created_at' => '2024-07-25 10:10:34', 'updated_at' => '2024-07-25 10:10:53'),
      array('id' => '283', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '19', 'to_id' => '1', 'title' => 'Reimbursable Package', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0200D/24/0330
      
      بتاريخ
      29/04/2024', 'created_at' => '2024-07-25 10:11:37', 'updated_at' => '2024-07-25 10:12:22'),
      array('id' => '284', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '19', 'title' => 'مسودة التقرير الابتدائي', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0108D/24/0315
      تاريخ الكتاب
      22-04-2024', 'created_at' => '2024-07-25 10:13:12', 'updated_at' => '2024-07-25 10:13:42'),
      array('id' => '285', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'Level 3 Schedule - الجدول الزمني المعدل', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب 
      K23165-010D/24/0322
      التاريخ
      28/04/2024', 'created_at' => '2024-07-25 10:14:30', 'updated_at' => '2024-07-25 10:14:45'),
      array('id' => '286', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'Topographic / Utility Survey Site Works and Report Submittal', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0106D/24/0328
      تاريخ الكتاب
      28-04-2024', 'created_at' => '2024-07-25 10:15:24', 'updated_at' => '2024-07-25 10:15:43'),
      array('id' => '287', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'Topographic / Utility Survey Site Works and Report Submittal', 'ref' => NULL, 'content' => 'مرفق CD نسخة واحدة', 'notes' => 'رقم الكتاب
      K23165-0106D/24/0328
      تاريخ
      28-04-2024', 'created_at' => '2024-07-25 10:18:33', 'updated_at' => '2024-07-25 10:18:54'),
      array('id' => '288', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'نسخة اصلية من محضر اجتماع تاريخ 27-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0106D/24/0324
      تاريخ الكتاب
      28-04-2024', 'created_at' => '2024-07-25 10:20:29', 'updated_at' => '2024-07-25 10:21:02'),
      array('id' => '289', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '52', 'to_id' => '1', 'title' => 'تقدير احتياج الحكومة من المركبات وأنواع بنود المصروفات المتعلقة بها لتقدير اعتماد الميزانية للسنة المالية 2025/2026', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-25 10:22:17', 'updated_at' => '2024-07-25 10:22:35'),
      array('id' => '290', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '10', 'to_id' => '1', 'title' => 'طلب المؤسسة العامة للرعاية السكنية توفير الخدمات الرئيسية لمشروع الخدمات الرئيسية لمشروع شرق مدينة صباح الأحمد السكنية', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد برقم: 20240272000010
      بتاريخ: 30/04/2024', 'created_at' => '2024-07-25 10:23:21', 'updated_at' => '2024-07-25 10:23:38'),
      array('id' => '291', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '53', 'to_id' => '1', 'title' => 'دعوة الي مؤتمر سيمنس للتكنولوجيا والتطور الرقمي - يوم 21-05-2024 بفندق راديسون بلو', 'ref' => NULL, 'content' => NULL, 'notes' => 'بشأن ترشيح 30 ضيف من وزارة الكهرباء والماء
      
      20240643000283
      01-05-2024
      
      2024-787', 'created_at' => '2024-07-25 10:25:56', 'updated_at' => '2024-07-25 10:28:15'),
      array('id' => '292', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '7', 'to_id' => '1', 'title' => 'اعتماد نظام الاقتراحات والشكاوى لجميع المعاملات الالكترونية بالبوابة الالكترونية لكافة البرامج الخاصة بالتواصل مع العملاء', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-25 10:32:13', 'updated_at' => '2024-07-25 10:33:14'),
      array('id' => '293', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '9', 'to_id' => '1', 'title' => 'عقد اجتماع مع شركة انسيابي بالتعاون مع شركة هواوي - مطلوب مرشحين لحضور الاجتماع بتاريخ 02-05-2024 الساعة 10 صباحا بقاعة جميلة الشطي بمبنى الوزارة', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      20240203000058
      تاريخ الكتاب
      29-04-2024', 'created_at' => '2024-07-25 10:33:56', 'updated_at' => '2024-07-25 10:34:22'),
      array('id' => '294', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '18', 'to_id' => '1', 'title' => 'قرار انهاء خدمة رقم 466/2024 زينب مهدي عبدالله القلاف علي ان يكون في يوم 31-08-2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-25 10:36:47', 'updated_at' => '2024-07-25 10:36:58'),
      array('id' => '295', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '5', 'to_id' => '1', 'title' => 'Training Courses No. 5 and No.7', 'ref' => NULL, 'content' => NULL, 'notes' => 'ترشيح المهندس/ عبدالرحمن وليد الساعي
      
      وارد برقم: 20242073000025
      بتاريخ 23/04/2024', 'created_at' => '2024-07-25 10:39:09', 'updated_at' => '2024-07-25 10:39:30'),
      array('id' => '296', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '9', 'to_id' => '1', 'title' => 'ترشيح المختصين للحضور يوم الاثنين 06-05-2024 الساعة 9 صباحا', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد - من الوكيل المساعد للتخطيط والتدريب ونظم المعلومات - بخصوص ترشيح المختصين للحضور يوم الاثنين 06-05-2024 الساعة 9 صباحا بقاعة أحمد الدعيج بمقر الأمانة العامة للمجلس الأعلى للتخطيط والتنمية
      وارد برقم: 20240319000010
      بتاريخ: 22-04-2024', 'created_at' => '2024-07-25 10:40:24', 'updated_at' => '2024-07-25 10:41:14'),
      array('id' => '297', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '3', 'from_id' => '1', 'to_id' => '1', 'title' => 'نسخة للحفظ - بخصوص نموذج الغربلة الخاص بمشروع 2 العقد رقم  5942', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد من مدير إدارة تصميم مشاريع الشبكات والمنشآت المائية للحفظ 
      
      كتاب صادر لدار الهندسة للتصميم والاستشارات الفنية
      بخصوص مشروع رقم 2 - العقد 5942 - نموذج الغربلة
      مرفق كتاب الهيئة العامة للبيئة رقم ه ع ب / م ع / 2467 بخصوص متطلباتها للدارسة البيئية
      
      الكتاب صادر برقم 20240642000268
      بتاريخ 22-04-2024', 'created_at' => '2024-07-25 10:48:52', 'updated_at' => '2024-07-25 10:49:15'),
      array('id' => '298', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'نموذج الغربلة', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0106D/24/0305
      تاريخ الكتاب
      18-04-2024', 'created_at' => '2024-07-25 10:50:01', 'updated_at' => '2024-07-25 10:50:22'),
      array('id' => '299', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '9', 'to_id' => '1', 'title' => 'اعداد خطة التنمية السنوية 2025/2026', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد - من الوكيل المساعد للتخطيط والتدريب ونظم المعلومات - بخصوص اعداد خطة التنمية السنوية 2025/2026
      بخصوص موافاتهم بالمشروعات الجديدة المقترحة المراد ادراجها في خطة التنمية السنوية 2025/2024
      
      وارد برقم 20243019000012
      وارد بتاريخ 22-04-2024', 'created_at' => '2024-07-25 10:51:01', 'updated_at' => '2024-07-25 10:51:24'),
      array('id' => '300', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'نسخة اصلية من محضر اجتماع المنعقد بتاريخ 04-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0100D/24/0302
      تاريخ الكتاب
      18-04-2024', 'created_at' => '2024-07-25 10:54:15', 'updated_at' => '2024-07-25 10:54:46'),
      array('id' => '301', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'محضر الاجتماع المنعقد بتاريخ 27-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب 
      K23165-0106D/24/0274
      تاريخ الكتاب
      31-03-2024', 'created_at' => '2024-07-25 10:55:18', 'updated_at' => '2024-07-25 10:55:57'),
      array('id' => '302', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'Monthly Progress Report No. 3', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0100D/24/0307
      
      تاريخ الكتاب
      16-04-2024', 'created_at' => '2024-07-25 10:56:34', 'updated_at' => '2024-07-25 10:58:02'),
      array('id' => '303', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'محضر اجتماع  بتاريخ 24-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد بتاريخ 17-04-2024 بالسجل
      وارد من الوكيل 18-04-2024
      برقم
      K23165-0105D-/24/0303
      المؤرخ 16-04-2024', 'created_at' => '2024-07-25 10:59:41', 'updated_at' => '2024-07-25 11:00:07'),
      array('id' => '304', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '33', 'to_id' => '1', 'title' => 'الاجتماع المنعقد بتاريخ 26-03-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد: بتاريخ 16-04-2024
      برقم: 20240650000027', 'created_at' => '2024-07-25 11:01:17', 'updated_at' => '2024-07-25 11:01:32'),
      array('id' => '305', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'Training Courses No. 5 and No.7', 'ref' => NULL, 'content' => NULL, 'notes' => 'Training Courses No. 5 and No.7 من دار الهندسة للتصميم والاستشارات الفنية (شاعر ومشاركوه) الي إدارة تصميم مشاريع الشبكات والمنشآت المائية
      
      K23165-0100D/24/0277', 'created_at' => '2024-07-25 11:02:16', 'updated_at' => '2024-07-25 11:02:36'),
      array('id' => '306', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '20', 'from_id' => '8', 'to_id' => '1', 'title' => 'بخصوص موافاة الشؤون المالية في حال وجود أي مطالبات تجاه السادة شركة مجموعة مرام الهندسية للتجارة العامة والمقاولات', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد من الوكيل المساعد للشؤون المالية بخصوص موافاه الشؤون المالية في حال وجود أي مطالبات تجاه السادة شركة مجموعة مرام الهندسية للتجارة العامة والمقاولات العقد رقم ب ك / أ.أ / 10-2014/2015  انشاء وإنجاز وصيانة مبني موظفي ردم النفايات جنوب الدائري السابع
      وارد بتاريخ 
      08-04-2024
      2024231000074
      
      تم تصدير الكتاب برقم
      أ ت / 2024/691', 'created_at' => '2024-07-25 11:03:18', 'updated_at' => '2024-07-31 09:19:35'),
      array('id' => '307', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '18', 'from_id' => '8', 'to_id' => '1', 'title' => 'بخصوص موافاة الشؤون المالية  في حال وجود أي مطالبات تجاه السادة شركة الفايد لبناء المعامل والمقاولات', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد من الوكيل المساعد للشؤون المالية بخصوص موافاه الوزارة في حال وجود أي مطالبات تجاه السادة شركة الفايد لبناء المعامل والمقاولات
      بتاريخ
      08-04-2024
      202457561000111
      
      تم تصدير الكتاب برقم
      أ ت / 2024/692', 'created_at' => '2024-07-25 11:04:55', 'updated_at' => '2024-07-31 09:17:04'),
      array('id' => '308', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '15', 'to_id' => '1', 'title' => 'كروت البنزين المستلمة للمركبات المستأجرة', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد من الوكيل المساعد للخدمات الفنية والمشاغل الرئيسية بشأن كروت البنزين المستلمة للمركبات المستأجرة ضمن أعمال العقد 2023/2022-5885 (استئجار عدد 940 سيارة بدون سائق)
      
      وارد بتاريخ 16-04-2024
      رقم
      20240701000041', 'created_at' => '2024-07-25 11:06:13', 'updated_at' => '2024-07-25 11:06:31'),
      array('id' => '309', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'محضر اجتماع رقم K23165-0100D-MOM-24-006 المنعقد بتاريخ 28-03-2024 ', 'ref' => NULL, 'content' => NULL, 'notes' => 'محضر اجتماع رقم
      K23165-0100D-MOM-24-006
      المنعقد بتاريخ
      28-03-2024
      
      K23165-0100D/24/0292', 'created_at' => '2024-07-25 11:07:12', 'updated_at' => '2024-07-25 11:07:36'),
      array('id' => '310', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'محضر اجتماع رقم K23165-0108D-2024-0012 المنعقد بتاريخ 28-03-2024  ', 'ref' => NULL, 'content' => NULL, 'notes' => 'محضر اجتماع رقم
      K23165-0108D-2024-0012
      المنعقد بتاريخ
      28-03-2024
      
      لمناقشة ردود قسم الاعمال الكيماوية على RFC007', 'created_at' => '2024-07-25 11:08:09', 'updated_at' => '2024-07-25 11:08:24'),
      array('id' => '311', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'البرنامج الزمني للمشروع', 'ref' => NULL, 'content' => NULL, 'notes' => 'رقم الكتاب
      K23165-0100D/24/0280
      تاريخ الكتاب
      07-04-2024', 'created_at' => '2024-07-25 11:08:58', 'updated_at' => '2024-07-25 11:09:29'),
      array('id' => '312', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '12', 'from_id' => '19', 'to_id' => '1', 'title' => 'فاتورة رقم 4 شهر مارس', 'ref' => NULL, 'content' => NULL, 'notes' => 'فاتورة رقم 4 - شهر مارس من دار الهندسة للتصميم والاستشارات الفنية (شاعر ومشاركوه) الي إدارة تصميم مشاريع الشبكات والمنشآت المائية
      
      
      K23165-0200D/24/0285', 'created_at' => '2024-07-25 11:10:06', 'updated_at' => '2024-07-25 11:10:31'),
      array('id' => '313', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'محضر اجتماع رقم K23165-0108D-2023-006 المنعقد بتاريخ 07-01-2024 ', 'ref' => NULL, 'content' => NULL, 'notes' => 'محضر اجتماع رقم
      K23165-0108D-2023-006
      المنعقد بتاريخ
      07-01-2024
      
      k23165-0108d/24/0283', 'created_at' => '2024-07-25 11:11:15', 'updated_at' => '2024-07-25 11:11:35'),
      array('id' => '314', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '3', 'from_id' => '19', 'to_id' => '1', 'title' => 'محضر اجتماع رقم K23165-0102D-MOM-24-003 المنعقد بتاريخ 22-01-2024  ', 'ref' => NULL, 'content' => NULL, 'notes' => 'محضر اجتماع رقم
      K23165-0102D-MOM-24-003
      المنعقد بتاريخ
      
      تسليم نسخة اصلية من المحضر
      22-01-2024
      K231650100D/24/0282', 'created_at' => '2024-07-25 11:13:07', 'updated_at' => '2024-07-25 11:13:26'),
      array('id' => '315', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'محضر اجتماع رقم K23165-0100D-MOM-24-003 المنعقد بتاريخ 05-02-2024  ', 'ref' => NULL, 'content' => NULL, 'notes' => 'محضر اجتماع رقم
      K23165-0100D-MOM-24-003
      المنعقد بتاريخ
      05-02-2024
      
      K23165-0100D/24/0284', 'created_at' => '2024-07-25 11:14:14', 'updated_at' => '2024-07-25 11:14:41'),
      array('id' => '316', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '3', 'from_id' => '45', 'to_id' => '1', 'title' => 'للرد علي كتاب طلب الدراسة والإفادة بخصوص مشروع رقم 2 مجمع توزيع مياه الوفرة', 'ref' => NULL, 'content' => NULL, 'notes' => 'وارد من الهيئة العامة للبيئة للرد علي الكتاب رقم
      و ك م / 2 / 732
      بتاريخ
      22/2/2024
      طلب الدراسة والإفادة بخصوص مشروع رقم 2 مجمع توزيع مياه الوفرة
      
      وارد بتاريخ 
      08-04-2024
      رقم
      20240293000019', 'created_at' => '2024-07-25 11:15:23', 'updated_at' => '2024-07-25 11:15:44'),
      array('id' => '317', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '19', 'to_id' => '1', 'title' => 'محضر اجتماع المنعقد بتاريخ 26/3/2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-25 11:16:40', 'updated_at' => '2024-07-25 11:16:56'),
      array('id' => '318', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'محضر اجتماع بتاريخ 27/3/2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-25 11:17:36', 'updated_at' => '2024-07-25 11:17:58'),
      array('id' => '319', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخه 29-04-2024 الساعة 9:00 ص', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0108D/24/0538
      22-07-2024', 'created_at' => '2024-07-28 08:34:16', 'updated_at' => '2024-07-28 10:16:46'),
      array('id' => '320', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخه 24-01-2024 ', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-108D/24/0539
      22-07-2024', 'created_at' => '2024-07-28 08:36:34', 'updated_at' => '2024-07-28 10:17:36'),
      array('id' => '321', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة أصلية من محضر الاجتماع المنعقد بتاريخه 15-01-2024', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-108D/24/0540
      22-07-2024', 'created_at' => '2024-07-28 08:37:22', 'updated_at' => '2024-07-28 10:17:08'),
      array('id' => '322', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '3', 'from_id' => '19', 'to_id' => '1', 'title' => 'تعديات علي موقع المشروع', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-102D/24/0545
      24-07-2024', 'created_at' => '2024-07-28 08:59:20', 'updated_at' => '2024-07-28 10:18:28'),
      array('id' => '323', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'Overall Projects Letters
      كتاب اعتماد تسليم الكتب المرسلة يدويا', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D/24/0544
      24-07-2024', 'created_at' => '2024-07-28 09:01:51', 'updated_at' => '2024-07-28 10:19:09'),
      array('id' => '324', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '4', 'title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026', 'ref' => NULL, 'content' => NULL, 'notes' => 'بالطريق الرسمي', 'created_at' => '2024-07-29 09:53:11', 'updated_at' => '2024-07-30 09:15:52'),
      array('id' => '325', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '2', 'title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026	', 'ref' => NULL, 'content' => NULL, 'notes' => 'بالطريق الرسمي', 'created_at' => '2024-07-29 09:55:10', 'updated_at' => '2024-08-04 08:06:45'),
      array('id' => '326', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '5', 'title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026	', 'ref' => NULL, 'content' => NULL, 'notes' => 'بالطريق الرسمي', 'created_at' => '2024-07-29 09:57:02', 'updated_at' => '2024-07-29 11:38:15'),
      array('id' => '327', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '41', 'title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026	', 'ref' => NULL, 'content' => NULL, 'notes' => 'بالطريق الرسمي', 'created_at' => '2024-07-29 09:58:27', 'updated_at' => '2024-07-30 09:16:15'),
      array('id' => '328', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '15', 'title' => 'مخاطبات البلدية بشأن المباني الإدارية', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-29 10:54:19', 'updated_at' => '2024-08-04 08:31:02'),
      array('id' => '329', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '19', 'title' => 'Training Course No. 1 (Structural Design)', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-29 10:57:04', 'updated_at' => '2024-07-29 12:45:13'),
      array('id' => '330', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '14', 'title' => 'Phase 1 Interim Report - Rev 1', 'ref' => NULL, 'content' => 'مرفق CD', 'notes' => NULL, 'created_at' => '2024-07-29 13:49:07', 'updated_at' => '2024-07-31 07:31:37'),
      array('id' => '331', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'Submission of Concept Design (Best Alternative)', 'ref' => NULL, 'content' => '1 نسخه ورقيه
      5 CD', 'notes' => 'K23165-0106D/24/0560
      29-07-2024', 'created_at' => '2024-07-30 08:52:56', 'updated_at' => '2024-07-30 12:55:18'),
      array('id' => '332', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'Revised Data Collection Report - Rev.1', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0106D-24-0561
      29-07-2024
      مرفق نسختين CD تم ارسالهم مع المندوب قبل استلام الكتاب رسمي
      ', 'created_at' => '2024-07-30 09:15:04', 'updated_at' => '2024-07-30 11:10:13'),
      array('id' => '333', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '19', 'title' => 'ربط صرف فائض مياه الخزانات الرئيسية العلوية وصرف مياه الامطار للمبنى بخط صرف المطر القائم', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-30 11:29:25', 'updated_at' => '2024-07-31 07:26:01'),
      array('id' => '334', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '32', 'title' => 'إزالة التعديات والمعوقات في موقع مجمع توزيع مياه الوفرة (2)', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-31 09:36:15', 'updated_at' => '2024-07-31 11:31:01'),
      array('id' => '335', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '7', 'title' => 'فريق العمل الخاص لإبراز الجهود والإنجازات وعرض الخدمات والتعريف بها من قبل وزارات الدولة', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-31 10:08:16', 'updated_at' => '2024-07-31 10:12:19'),
      array('id' => '336', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '7', 'title' => 'تقديم الاحتياجات التدريبية (داخلية / خارجية) للوزارة للعام التدريبي 2024/2025 عن طريق الموقع الالكتروني', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-31 10:12:11', 'updated_at' => '2024-08-05 07:58:18'),
      array('id' => '337', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '21', 'from_id' => '1', 'to_id' => '8', 'title' => 'و ك م 71 - تمديد موقع اغلاق المناقصة ليصبح 10-10-2024 بدلا من 11-08-2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-31 10:17:08', 'updated_at' => '2024-07-31 13:32:06'),
      array('id' => '338', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '22', 'from_id' => '1', 'to_id' => '8', 'title' => 'و ك م 76 - تمديد موقع اغلاق المناقصة ليصبح 10-10-2024 بدلا من 11-08-2024	', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-31 10:21:18', 'updated_at' => '2024-07-31 13:32:18'),
      array('id' => '339', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '41', 'title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026', 'ref' => NULL, 'content' => NULL, 'notes' => 'بالطريق الرسمي', 'created_at' => '2024-07-31 10:47:05', 'updated_at' => '2024-07-31 11:34:12'),
      array('id' => '340', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '55', 'title' => 'طلب شراء رقم 21428', 'ref' => NULL, 'content' => 'مخاطبة الشركات المقدمة للطلب لتقديم اسعار رخص البرامج لمدة 3 سنوات', 'notes' => NULL, 'created_at' => '2024-07-31 11:08:54', 'updated_at' => '2024-08-04 08:29:57'),
      array('id' => '341', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '1', 'to_id' => '19', 'title' => 'البرنامج التدريبي - Course 8 - New Construction Technology (BIM)', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-31 12:38:27', 'updated_at' => '2024-08-04 07:39:05'),
      array('id' => '342', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'عدد 2 نسخة اصلية من محضر الاجتماع المنعقد بتاريخ 13-05-2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-07-31 12:47:37', 'updated_at' => '2024-08-01 10:55:16'),
      array('id' => '343', 'type' => 'incoming', 'is_completed' => '0', 'created_by' => '1', 'contract_id' => '7', 'from_id' => '19', 'to_id' => '1', 'title' => 'Submission of Geotechnical Investigation Report', 'ref' => NULL, 'content' => 'K23165-0106D-24-0559
      28-07-2024
      مرفق مجلد', 'notes' => NULL, 'created_at' => '2024-07-31 13:03:01', 'updated_at' => '2024-08-04 12:27:40'),
      array('id' => '344', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '19', 'title' => 'عدادات المياه على مداخل المناطق', 'ref' => NULL, 'content' => NULL, 'notes' => 'قراءات أجهزة التدفق المتوفرة للعدادات المغذية للمناطق ومحطات تعبئة المياه لعام 2010 قبل توقفها', 'created_at' => '2024-07-31 13:11:29', 'updated_at' => '2024-08-04 07:33:47'),
      array('id' => '345', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '19', 'to_id' => '1', 'title' => 'ملاحظات على Interim Submission B1 Report (I.S.B1)', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-08-01 09:43:15', 'updated_at' => '2024-08-04 07:42:54'),
      array('id' => '346', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '55', 'title' => 'طلب رقم 21276 (ترسية على شركة وايت أوفيس للأثاث والمفروشات)', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-08-01 10:20:11', 'updated_at' => '2024-08-04 09:16:00'),
      array('id' => '347', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '20', 'title' => 'الحاق بالكتاب رقم 20240650000052  بخصوص اعتماد محضر الاجتماع المنعقد بتاريخ 05-06-2024', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-08-01 10:48:12', 'updated_at' => '2024-08-04 07:37:07'),
      array('id' => '348', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '2', 'title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026 - الحاقا بالكتاب رقم 20240650000063', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-08-01 11:02:19', 'updated_at' => '2024-08-04 07:23:12'),
      array('id' => '349', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '5', 'title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026	- الحاقا بالكتاب رقم 20240650000064 ', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-08-01 11:03:05', 'updated_at' => '2024-08-04 07:27:11'),
      array('id' => '350', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '4', 'title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026	- الحاقا بالكتاب رقم 20240650000062', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-08-01 11:03:32', 'updated_at' => '2024-08-04 07:30:48'),
      array('id' => '351', 'type' => 'outgoing', 'is_completed' => '1', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '41', 'title' => 'إعداد تقديرات ميزانية الوزارة للسنة المالية 2025/2026 - الحاقا بالكتاب رقم 20240650000065', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-08-01 11:04:27', 'updated_at' => '2024-08-04 07:29:55'),
      array('id' => '352', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '1', 'contract_id' => '15', 'from_id' => '1', 'to_id' => '8', 'title' => 'الملحق التعديلي رقم 1', 'ref' => NULL, 'content' => 'تعديل خطأ الملحق التعديلي رقم 1 بدلا من 2 في الكتاب المرسل من قبل', 'notes' => NULL, 'created_at' => '2024-08-01 12:12:18', 'updated_at' => '2024-08-01 12:12:18'),
      array('id' => '353', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '3', 'from_id' => '1', 'to_id' => '54', 'title' => 'طلب بيانات - اسعار الكيلووات لانتاج الكهرباء الحالية والمستقبلية', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-08-01 13:46:36', 'updated_at' => '2024-08-04 11:47:59'),
      array('id' => '354', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '38', 'title' => 'Revised Data Collection Report - Rev.1', 'ref' => NULL, 'content' => 'مرفق ورقية من Revised Data Collection Report متضمنة Codes and Standards', 'notes' => 'الرد خلال 3 أيام عمل', 'created_at' => '2024-08-04 08:15:38', 'updated_at' => '2024-08-05 13:20:22'),
      array('id' => '355', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '40', 'title' => 'Revised Data Collection Report - Rev.1', 'ref' => NULL, 'content' => 'مرفق ورقية من Revised Data Collection Report متضمنة Codes and Standards', 'notes' => 'الرد خلال 3 أيام عمل', 'created_at' => '2024-08-04 08:20:01', 'updated_at' => '2024-08-05 07:51:03'),
      array('id' => '356', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '13', 'from_id' => '1', 'to_id' => '55', 'title' => 'طلب شراء رقم 21428', 'ref' => NULL, 'content' => NULL, 'notes' => 'تم الترسية علي شركة العالمية الكبري للتجارة والمقاولات (16080 د.ك)', 'created_at' => '2024-08-04 08:54:47', 'updated_at' => '2024-08-04 08:54:47'),
      array('id' => '357', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '40', 'title' => 'Concept Design Report Best Alternative - Volume 2 -July 2024', 'ref' => NULL, 'content' => 'مرفق نسخة من ال Concept Design Report Best Alternative - Volume 2 -July 2024', 'notes' => NULL, 'created_at' => '2024-08-04 09:54:15', 'updated_at' => '2024-08-05 13:21:04'),
      array('id' => '358', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '38', 'title' => 'Concept Design Report Best Alternative - Volume 2 -July 2024	', 'ref' => NULL, 'content' => 'مرفق نسخة من Concept Design Report Best Alternative - Volume 2 -July 2024	', 'notes' => NULL, 'created_at' => '2024-08-04 09:56:26', 'updated_at' => '2024-08-04 13:42:46'),
      array('id' => '359', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '30', 'title' => 'Concept Design Report Best Alternative - Volume 2 -July 2024	', 'ref' => NULL, 'content' => 'مرفق نسخة من Concept Design Report Best Alternative - Volume 2 -July 2024	', 'notes' => NULL, 'created_at' => '2024-08-04 09:58:16', 'updated_at' => '2024-08-04 09:58:16'),
      array('id' => '360', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '30', 'title' => 'Revised Data Collection Report - Rev.1', 'ref' => NULL, 'content' => 'مرفق ورقية من Revised Data Collection Report متضمنة Codes and Standards', 'notes' => NULL, 'created_at' => '2024-08-04 10:37:34', 'updated_at' => '2024-08-04 10:56:34'),
      array('id' => '361', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '38', 'title' => 'Submission of Geotechnical Investigation Report', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-08-04 12:29:37', 'updated_at' => '2024-08-04 12:30:27'),
      array('id' => '362', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '40', 'title' => 'Submission of Geotechnical Investigation Report', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-08-04 12:31:42', 'updated_at' => '2024-08-04 12:34:13'),
      array('id' => '363', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '7', 'from_id' => '1', 'to_id' => '30', 'title' => 'Submission of Geotechnical Investigation Report', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-08-04 12:34:59', 'updated_at' => '2024-08-04 12:36:21'),
      array('id' => '364', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '3', 'from_id' => '19', 'to_id' => '1', 'title' => 'محضر اجتماع المنعقد بتاريخ 29-07-2024 الساعة 10:00', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0102D-24-0569
      31-07-2024', 'created_at' => '2024-08-04 12:49:30', 'updated_at' => '2024-08-04 13:52:39'),
      array('id' => '365', 'type' => 'incoming', 'is_completed' => '1', 'created_by' => '1', 'contract_id' => '2', 'from_id' => '19', 'to_id' => '1', 'title' => 'Initiation of Lump-Sum Project 1 (Sabhan Pump Station) and Project 3 (Naayem WDC)', 'ref' => NULL, 'content' => NULL, 'notes' => 'K23165-0100D-24-0570
      31-07-2024', 'created_at' => '2024-08-04 12:54:04', 'updated_at' => '2024-08-04 13:51:28'),
      array('id' => '366', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '9', 'from_id' => '1', 'to_id' => '19', 'title' => 'اعتماد Final Inception Report', 'ref' => NULL, 'content' => 'مرفق نسخة من الملاحظات التي تمت مناقشتها في الاجتماع Online Meeting  المنعقد بتاريخ 30-07-2024 ', 'notes' => NULL, 'created_at' => '2024-08-04 13:11:40', 'updated_at' => '2024-08-04 13:12:49'),
      array('id' => '367', 'type' => 'outgoing', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '6', 'from_id' => '1', 'to_id' => '33', 'title' => 'دعوة لعقد اجتماع خلال الفترة من (11-08-2024 الي 15-08-2024)', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-08-05 07:30:22', 'updated_at' => '2024-08-05 07:30:22'),
      array('id' => '368', 'type' => 'incoming', 'is_completed' => '0', 'created_by' => '2', 'contract_id' => '10', 'from_id' => '19', 'to_id' => '1', 'title' => 'Reimbursable Package Invoice No. 8 - July 2024 - فاتورة يوليو 2024 - فاتورة رقم 8', 'ref' => NULL, 'content' => NULL, 'notes' => NULL, 'created_at' => '2024-08-05 13:52:31', 'updated_at' => '2024-08-05 13:52:31')
    );

    Document::insert($documents);
  }
}
