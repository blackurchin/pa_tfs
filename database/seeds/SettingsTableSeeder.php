<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            [
                'key'   => 'title',
                'value' => 'COOPERATION AMONG INDO-ASIAN PACIFIC LAND FORCES IN HUMANITARIAN ASSISTANCE/DISASTER RESPONSE'
            ],
            [
                'key'   => 'subtitle',
                'value' => '10-12 December, HPA, FORT ANDRES BONIFACIO, METRO MANILA'
            ],
            [
                'key'   => 'youtube_link',
                'value' => 'https://www.youtube.com/embed/5jmbS6RKnh0'
            ],
            [
                'key'   => 'about_description',
                'value' => ''
            ],
            [
                'key'   => 'about_where',
                'value' => 'HPA, FORT ANDRES BONIFACIO, METRO MANILA'
            ],
            [
                'key'   => 'about_when',
                'value' => 'Monday to Wednesday<br>10-12 December'
            ],
            [
                'key'   => 'contact_address',
                'value' => 'NETB, FORT ANDRES BONIFACIO, METRO MANILA'
            ],
            [
                'key'   => 'contact_phone',
                'value' => '+(63)9899-7382-991'
            ],
            [
                'key'   => 'contact_email',
                'value' => 'netbn@army.mil.ph'
            ],
            [
                'key'   => 'footer_description',
                'value' => 'In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.'
            ],
            [
                'key'   => 'footer_address',
                'value' => 'A108 Adam Street <br> New York, NY 535022<br> United States '
            ],
            [
                'key'   => 'footer_twitter',
                'value' => '#'
            ],
            [
                'key'   => 'footer_facebook',
                'value' => '#'
            ],
            [
                'key'   => 'footer_instagram',
                'value' => '#'
            ],
            [
                'key'   => 'footer_googleplus',
                'value' => '#'
            ],
            [
                'key'   => 'footer_linkedin',
                'value' => '#'
            ],
        ];

        foreach($settings as $setting)
        {
            Setting::create($setting);
        }
    }
}