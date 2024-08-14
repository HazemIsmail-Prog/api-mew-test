<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = array(
            array('id' => '1', 'name' => 'حازم محمد اسماعيل', 'username' => 'Hazem', 'password' => '$2y$12$QujnXPl4sJQ/5KZlScNvT.BJX.TzGIWO.pvwxGr6pZuckZ9bbcuxm', 'is_active' => '1', 'remember_token' => 'jx5s05wdnzGVjycBVUmE9cvNkrsilbWwdxlo0i1Zhkmv7ApZZ7auDRig7nV1', 'created_at' => '2024-04-15 10:13:43', 'updated_at' => '2024-04-15 10:13:43'),
            array('id' => '2', 'name' => 'محمود يسري', 'username' => '294011007079', 'password' => '$2y$12$JIMO.AAmw.32De.z8Xq0xuycimgmILJTu6kSL5QuIwB2KgxTSWuuq', 'is_active' => '1', 'remember_token' => 'MypdFHsUbTd8qQYcAit68XPrB7qgtgx3RduN7dvL1M76WM187mx5RTQ7UCAq', 'created_at' => '2024-04-15 10:15:23', 'updated_at' => '2024-04-15 10:15:23'),
            array('id' => '24', 'name' => 'دعاء احمد ابو العنين', 'username' => '0000000000', 'password' => '$2y$12$5hTJzxFbnuoh93Qg2Od1Ce2ybiQzbvjARFuui/9LwzbM23vhp1c9e', 'is_active' => '1', 'remember_token' => NULL, 'created_at' => '2024-04-16 08:14:59', 'updated_at' => '2024-04-16 08:14:59')
        );

        User::insert($users);
    }
}
