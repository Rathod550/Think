<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FrontSetting;
use Carbon\Carbon;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Slider Title',
                'slug' => 'slider-title',
                'value_english' => getLanguage('INTERACTIVE OFFICE ENVIRONMENT', 'en'),
                'value_hindi' => getLanguage('INTERACTIVE OFFICE ENVIRONMENT', 'hi'),
                'value_gujrati' => getLanguage('INTERACTIVE OFFICE ENVIRONMENT', 'gu'),
                'page_name' => 'AboutUs'
            ],
            [
                'name' => 'Slider Description',
                'slug' => 'slider-description',
                'value_english' => getLanguage('We value Work Ethics & Environment as it helps in creating a Creative Thinktank', 'en'),
                'value_hindi' => getLanguage('We value Work Ethics & Environment as it helps in creating a Creative Thinktank', 'hi'),
                'value_gujrati' => getLanguage('We value Work Ethics & Environment as it helps in creating a Creative Thinktank', 'gu'),
                'page_name' => 'AboutUs'
            ],
            [
                'name' => 'Counter Number One',
                'slug' => 'counter-number-one',
                'value_english' => 8465,
                'value_hindi' => 8465,
                'value_gujrati' => 8465,
                'page_name' => 'AboutUs'
            ],
            [
                'name' => 'Counter Number One Title',
                'slug' => 'counter-number-one-title',
                'value_english' => getLanguage('NO. OF CLIENTS', 'en'),
                'value_hindi' => getLanguage('NO. OF CLIENTS', 'hi'),
                'value_gujrati' => getLanguage('NO. OF CLIENTS', 'gu'),
                'page_name' => 'AboutUs'
            ],
            [
                'name' => 'Counter Number Two',
                'slug' => 'counter-number-two',
                'value_english' => 56841,
                'value_hindi' => 56841,
                'value_gujrati' => 56841,
                'page_name' => 'AboutUs'
            ],
            [
                'name' => 'Counter Number Two Title',
                'slug' => 'counter-number-two-title',
                'value_english' => getLanguage('NO. OF CATEGORYES', 'en'),
                'value_hindi' => getLanguage('NO. OF CATEGORYES', 'hi'),
                'value_gujrati' => getLanguage('NO. OF CATEGORYES', 'gu'),
                'page_name' => 'AboutUs'
            ],
            [
                'name' => 'Counter Number Three',
                'slug' => 'counter-number-three',
                'value_english' => 2154,
                'value_hindi' => 2154,
                'value_gujrati' => 2154,
                'page_name' => 'AboutUs'
            ],
            [
                'name' => 'Counter Number Three Title',
                'slug' => 'counter-number-three-title',
                'value_english' => getLanguage('NO. OF BLOGS', 'en'),
                'value_hindi' => getLanguage('NO. OF BLOGS', 'hi'),
                'value_gujrati' => getLanguage('NO. OF BLOGS', 'gu'),
                'page_name' => 'AboutUs'
            ],
            [
                'name' => 'Counter Number Four',
                'slug' => 'counter-number-four',
                'value_english' => 874,
                'value_hindi' => 874,
                'value_gujrati' => 874,
                'page_name' => 'AboutUs'
            ],
            [
                'name' => 'Counter Number Four Title',
                'slug' => 'counter-number-four-title',
                'value_english' => getLanguage('NO. OF MEETING', 'en'),
                'value_hindi' => getLanguage('NO. OF MEETING', 'hi'),
                'value_gujrati' => getLanguage('NO. OF MEETING', 'gu'),
                'page_name' => 'AboutUs'
            ],
            [
                'name' => 'Go to blogs title',
                'slug' => 'go-to-blogs-title-about',
                'value_english' => getLanguage("Try Premium Free for 30 Days and you'll never regret it!", 'en'),
                'value_hindi' => getLanguage("Try Premium Free for 30 Days and you'll never regret it!", 'hi'),
                'value_gujrati' => getLanguage("Try Premium Free for 30 Days and you'll never regret it!", 'gu'),
                'page_name' => 'AboutUs'
            ],
            [
                'name' => 'Go to blogs description',
                'slug' => 'go-to-blogs-title-about-description',
                'value_english' => getLanguage('Starts at just $9.99/month afterwards. No Ads, No Gimmicks and No SPAM. Just Real Content.', 'en'),
                'value_hindi' => getLanguage('Starts at just $9.99/month afterwards. No Ads, No Gimmicks and No SPAM. Just Real Content.', 'hi'),
                'value_gujrati' => getLanguage('Starts at just $9.99/month afterwards. No Ads, No Gimmicks and No SPAM. Just Real Content.', 'gu'),
                'page_name' => 'AboutUs'
            ],
            [
                'name' => 'Go to blogs button text',
                'slug' => 'go-to-blogs-title-about-button-text',
                'value_english' => getLanguage('CHECK OUR SERVICES', 'en'),
                'value_hindi' => getLanguage('CHECK OUR SERVICES', 'hi'),
                'value_gujrati' => getLanguage('CHECK OUR SERVICES', 'gu'),
                'page_name' => 'AboutUs'
            ],
            [
                'name' => 'Our Team Title',
                'slug' => 'our-team-title',
                'value_english' => getLanguage('CANVAS THINKTANK', 'en'),
                'value_hindi' => getLanguage('CANVAS THINKTANK', 'hi'),
                'value_gujrati' => getLanguage('CANVAS THINKTANK', 'gu'),
                'page_name' => 'AboutUs'
            ],
            [
                'name' => 'Our Team Description',
                'slug' => 'our-team-description',
                'value_english' => getLanguage('Our Team Members who have contributed immensely to our Growth', 'en'),
                'value_hindi' => getLanguage('Our Team Members who have contributed immensely to our Growth', 'hi'),
                'value_gujrati' => getLanguage('Our Team Members who have contributed immensely to our Growth', 'gu'),
                'page_name' => 'AboutUs'
            ],
            [
                'name' => "What Clients Say",
                'slug' => 'what-clients-say',
                'value_english' => getLanguage("WHAT CLIENTS SAY?", 'en'),
                'value_hindi' => getLanguage("WHAT CLIENTS SAY?", 'hi'),
                'value_gujrati' => getLanguage("WHAT CLIENTS SAY?", 'gu'),
                'page_name' => 'Home'
            ],
        ];

        foreach ($data as $key => $value) {

            $find = FrontSetting::where('slug', $value['slug'])->first();

            if (is_null($find)) {
                FrontSetting::create($value);
            } else {
                $find->update($value);
            }
        }
    }
}
