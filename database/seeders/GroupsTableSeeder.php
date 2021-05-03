<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [];

        for ($i = 1; $i <= 10; $i++) {
            $groups[] = ['name' => 'group_' . $i];
        }

        \DB::table('groups')->insert($groups);
    }
}
