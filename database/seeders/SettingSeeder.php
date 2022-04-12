<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = Setting::create([
            'site_title' => 'Assigment',
            'job_title' => 'PHP-JAVASCRIPT-CSS',
            'location' => 'Soudia , Gadha',
            'twitter_url' => 'https://twitter.com/',
            'linkdin_url' => 'https://twitter.com/',
            'facebook_url' => 'https://twitter.com/',
            'about' => 'lurem ipsum',

        ]);
    }
}
