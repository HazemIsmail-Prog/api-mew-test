<?php

namespace Database\Seeders;

use App\Models\Contract;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contracts = array(
            array('id' => '1','created_by' => 1, 'name' => 'MEW/C/4901-2014/2015', 'contract_id' => NULL, 'is_active' => '1', 'created_at' => '2024-04-15 10:49:56', 'updated_at' => '2024-07-08 11:46:42'),
            array('id' => '11','created_by' => 1, 'name' => 'MEW/C/5942-2023/2024', 'contract_id' => NULL, 'is_active' => '1', 'created_at' => '2024-07-08 11:37:39', 'updated_at' => '2024-07-08 11:37:39'),
            array('id' => '13','created_by' => 1, 'name' => 'مواضيع عامة', 'contract_id' => NULL, 'is_active' => '1', 'created_at' => '2024-07-09 10:55:51', 'updated_at' => '2024-07-09 10:55:51'),
            array('id' => '14','created_by' => 1, 'name' => 'MEW/C/45-2018/2019', 'contract_id' => NULL, 'is_active' => '1', 'created_at' => '2024-07-09 11:09:32', 'updated_at' => '2024-07-09 11:09:32'),
            array('id' => '15','created_by' => 1, 'name' => 'MEW/2022/2021/2', 'contract_id' => NULL, 'is_active' => '1', 'created_at' => '2024-07-09 12:36:17', 'updated_at' => '2024-07-09 12:36:17'),
            array('id' => '16','created_by' => 1, 'name' => 'MEW/C/5021-2015/2016', 'contract_id' => NULL, 'is_active' => '1', 'created_at' => '2024-07-10 09:49:35', 'updated_at' => '2024-07-10 09:49:35'),
            array('id' => '19','created_by' => 1, 'name' => 'هـ ط 257 - انشاء وإنجاز وتطوير وصيانة طرق وجسور وخدمات أخرى', 'contract_id' => NULL, 'is_active' => '1', 'created_at' => '2024-07-31 09:17:41', 'updated_at' => '2024-07-31 09:17:41'),
            array('id' => '18','created_by' => 1, 'name' => 'ق ص / ط / 351 صيانة عامة للطرق والساحات في محافظة حولي', 'contract_id' => NULL, 'is_active' => '1', 'created_at' => '2024-07-31 09:12:23', 'updated_at' => '2024-07-31 09:12:23'),
            array('id' => '2','created_by' => 1, 'name' => 'مشروع 1', 'contract_id' => '11', 'is_active' => '1', 'created_at' => '2024-04-15 10:50:45', 'updated_at' => '2024-07-08 11:38:34'),
            array('id' => '3','created_by' => 1, 'name' => 'مشروع 2', 'contract_id' => '11', 'is_active' => '1', 'created_at' => '2024-04-15 10:51:51', 'updated_at' => '2024-07-08 11:45:31'),
            array('id' => '4','created_by' => 1, 'name' => 'مشروع 3', 'contract_id' => '11', 'is_active' => '1', 'created_at' => '2024-04-15 10:53:20', 'updated_at' => '2024-07-08 11:45:38'),
            array('id' => '5','created_by' => 1, 'name' => 'مشروع 4', 'contract_id' => '11', 'is_active' => '1', 'created_at' => '2024-04-15 10:55:59', 'updated_at' => '2024-07-08 11:45:43'),
            array('id' => '6','created_by' => 1, 'name' => 'مشروع 5', 'contract_id' => '11', 'is_active' => '1', 'created_at' => '2024-04-15 10:57:38', 'updated_at' => '2024-07-08 11:45:49'),
            array('id' => '7','created_by' => 1, 'name' => 'مشروع 6', 'contract_id' => '11', 'is_active' => '1', 'created_at' => '2024-04-15 11:00:01', 'updated_at' => '2024-07-08 11:45:55'),
            array('id' => '8','created_by' => 1, 'name' => 'مشروع 7', 'contract_id' => '11', 'is_active' => '1', 'created_at' => '2024-04-15 11:00:48', 'updated_at' => '2024-07-08 11:46:01'),
            array('id' => '9','created_by' => 1, 'name' => 'مشروع 8', 'contract_id' => '11', 'is_active' => '1', 'created_at' => '2024-04-15 11:02:19', 'updated_at' => '2024-07-08 11:46:06'),
            array('id' => '10','created_by' => 1, 'name' => 'Overall - Projects', 'contract_id' => '11', 'is_active' => '1', 'created_at' => '2024-04-15 11:57:18', 'updated_at' => '2024-07-08 11:46:12'),
            array('id' => '12','created_by' => 1, 'name' => 'General', 'contract_id' => '11', 'is_active' => '1', 'created_at' => '2024-07-09 08:55:52', 'updated_at' => '2024-07-09 08:55:52'),
            array('id' => '17','created_by' => 1, 'name' => 'عقد الخدمات الاستشارية لأعمال التصميم - مشروع تصميم مجمع الراي التجاري بمنطقة الشويخ الصناعية الأولي', 'contract_id' => NULL, 'is_active' => '1', 'created_at' => '2024-07-16 09:50:46', 'updated_at' => '2024-07-16 09:50:46'),
            array('id' => '20','created_by' => 1, 'name' => 'ب ك / أ.أ / 10-2014/2015 انشاء وإنجاز وصيانة مبني موظفي ردم النفايات جنوب الدائري السابع', 'contract_id' => NULL, 'is_active' => '1', 'created_at' => '2024-07-31 09:19:02', 'updated_at' => '2024-07-31 09:19:02'),
            array('id' => '21','created_by' => 1, 'name' => 'و ك م / 71 / 2018-2019', 'contract_id' => '1', 'is_active' => '1', 'created_at' => '2024-07-31 12:41:01', 'updated_at' => '2024-07-31 12:41:01'),
            array('id' => '22','created_by' => 1, 'name' => 'و ك م / 76 / 2018-2019', 'contract_id' => '1', 'is_active' => '1', 'created_at' => '2024-07-31 12:41:25', 'updated_at' => '2024-07-31 12:41:25')
        );

        Contract::insert($contracts);
    }
}
