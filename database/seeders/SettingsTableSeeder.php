<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('settings')->delete();

        \DB::table('settings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'key' => 'currency',
                'name' => 'USD',
                'value' => '$',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'key' => 'instagram_link',
                'name' => 'x',
                'value' => 'x',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'key' => 'facebook_link',
                'name' => 'Facebook link',
                'value' => 'x',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'key' => 'x_link',
                'name' => 'X link',
                'value' => 'x',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'key' => 'linkedIn_link',
                'name' => 'LinkedIn link',
                'value' => 'x',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
