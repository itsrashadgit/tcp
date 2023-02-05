<?php

namespace SalimHosen\Core\Seeders;

use Illuminate\Database\Seeder;
use SalimHosen\Core\Models\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [ "key" => "logo", "value" => null, ],
            [ "key" => "phone", "value"  => "+1 551175960" ],
            [ "key" => "email", "value"  => "info@tcp.com" ],
            [ "key" => "address", "value"  => "New Jersy, USA" ],
            [ "key" => "title", "value"  => "tcp.com" ],
            [ "key" => "description", "value"  => "TCP" ],
            [ "key" => "facebook", "value"  => "http://www.facebook.com" ],
            [ "key" => "twitter", "value"  => "http://www.twitter.com" ],
            [ "key" => "linkedin", "value"  => "http://linkedin.com" ],
            [ "key" => "pinterest", "value"  => "http://pinterest.com" ],
            [ "key" => "android_app_url", "value"  => "http://google.com" ],
            [ "key" => "ios_app_url", "value"  => "http://apple.com" ],
        ];

        Setting::insert($settings);
    }
}
