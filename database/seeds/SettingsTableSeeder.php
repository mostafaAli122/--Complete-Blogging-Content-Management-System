<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => 'Laravel\'s Blog',
            'address' =>'Egypt ,Cairo',
            'contact_number'=>'01111656014',
            'contact_email'=>'info@laravel_blog.com'
        ]);
    }
}
