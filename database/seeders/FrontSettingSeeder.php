<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FrontSetting;
use Carbon\Carbon;

class FrontSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // home page setting

            // Go to blogs title
            [
                'name' => 'Go to blogs title',
                'slug' => 'go-to-blogs-title',
                'value_english' => getLanguage('WE SPECIALIZE IN ROBUST SOFTWARE SOLUTIONS', 'en'),
                'value_hindi' => getLanguage('WE SPECIALIZE IN ROBUST SOFTWARE SOLUTIONS', 'hi'),
                'value_gujrati' => getLanguage('WE SPECIALIZE IN ROBUST SOFTWARE SOLUTIONS', 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => 'Go to blogs description',
                'slug' => 'go-to-blogs-description',
                'value_english' => getLanguage('Lasting change, stakeholders development Angelina Jolie world problem solving progressive. Courageous; social entrepreneurship change; accelerate resolve pursue these aspirations asylum.', 'en'),
                'value_hindi' => getLanguage('Lasting change, stakeholders development Angelina Jolie world problem solving progressive. Courageous; social entrepreneurship change; accelerate resolve pursue these aspirations asylum.', 'hi'),
                'value_gujrati' => getLanguage('Lasting change, stakeholders development Angelina Jolie world problem solving progressive. Courageous; social entrepreneurship change; accelerate resolve pursue these aspirations asylum.', 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => 'Go to blogs button text',
                'slug' => 'go-to-blogs-button-text',
                'value_english' => getLanguage('Check our Services', 'en'),
                'value_hindi' => getLanguage('Check our Services', 'hi'),
                'value_gujrati' => getLanguage('Check our Services', 'gu'),
                'page_name' => 'Home'
            ],

            // why choose us section
            [
                'name' => 'Why choose us title',
                'slug' => 'why-choose-us-title',
                'value_english' => getLanguage('WHY CHOOSE US', 'en'),
                'value_hindi' => getLanguage('WHY CHOOSE US', 'hi'),
                'value_gujrati' => getLanguage('WHY CHOOSE US', 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => 'Why choose us description',
                'slug' => 'why-choose-us-description',
                'value_english' => getLanguage('Transform, agency working families thinkers who make change happen communities. Developing nations legal aid public sector our ambitions future aid The Elders economic security Rosa.', 'en'),
                'value_hindi' => getLanguage('Transform, agency working families thinkers who make change happen communities. Developing nations legal aid public sector our ambitions future aid The Elders economic security Rosa.', 'hi'),
                'value_gujrati' => getLanguage('Transform, agency working families thinkers who make change happen communities. Developing nations legal aid public sector our ambitions future aid The Elders economic security Rosa.', 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => 'Why choose us button text',
                'slug' => 'why-choose-us-button-text',
                'value_english' => getLanguage('READ MORE', 'en'),
                'value_hindi' => getLanguage('READ MORE', 'hi'),
                'value_gujrati' => getLanguage('READ MORE', 'gu'),
                'page_name' => 'Home'
            ],

            // OUR MISSION section
            [
                'name' => 'Our mission title',
                'slug' => 'our-mission-title',
                'value_english' => getLanguage('OUR MISSION', 'en'),
                'value_hindi' => getLanguage('OUR MISSION', 'hi'),
                'value_gujrati' => getLanguage('OUR MISSION', 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => 'Our mission description',
                'slug' => 'our-mission-description',
                'value_english' => getLanguage('Frontline respond, visionary collaborative cities advancement overcome injustice, UNHCR public-private partnerships cause. Giving, country educate rights-based approach; leverage disrupt solution.', 'en'),
                'value_hindi' => getLanguage('Frontline respond, visionary collaborative cities advancement overcome injustice, UNHCR public-private partnerships cause. Giving, country educate rights-based approach; leverage disrupt solution.', 'hi'),
                'value_gujrati' => getLanguage('Frontline respond, visionary collaborative cities advancement overcome injustice, UNHCR public-private partnerships cause. Giving, country educate rights-based approach; leverage disrupt solution.', 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => 'Our mission button text',
                'slug' => 'our-mission-button-text',
                'value_english' => getLanguage('READ MORE', 'en'),
                'value_hindi' => getLanguage('READ MORE', 'hi'),
                'value_gujrati' => getLanguage('READ MORE', 'gu'),
                'page_name' => 'Home'
            ],

            // OUR MISSION section
            [
                'name' => 'What you get title',
                'slug' => 'what-you-get-title',
                'value_english' => getLanguage('WHAT YOU GET', 'en'),
                'value_hindi' => getLanguage('WHAT YOU GET', 'hi'),
                'value_gujrati' => getLanguage('WHAT YOU GET', 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => 'What you get description',
                'slug' => 'what-you-get-description',
                'value_english' => getLanguage('Sustainability involvement fundraising campaign connect carbon rights, collaborative cities convener truth. Synthesize change lives treatment fluctuation participatory monitoring underprivileged equal.', 'en'),
                'value_hindi' => getLanguage('Sustainability involvement fundraising campaign connect carbon rights, collaborative cities convener truth. Synthesize change lives treatment fluctuation participatory monitoring underprivileged equal.', 'hi'),
                'value_gujrati' => getLanguage('Sustainability involvement fundraising campaign connect carbon rights, collaborative cities convener truth. Synthesize change lives treatment fluctuation participatory monitoring underprivileged equal.', 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => 'What you get button text',
                'slug' => 'what-you-get-button-text',
                'value_english' => getLanguage('READ MORE', 'en'),
                'value_hindi' => getLanguage('READ MORE', 'hi'),
                'value_gujrati' => getLanguage('READ MORE', 'gu'),
                'page_name' => 'Home'
            ],

            // slogan section
            [
                'name' => 'Slogan text',
                'slug' => 'slogan-text',
                'value_english' => getLanguage('EVERYTHING IS DESIGNED, BUT SOME THINGS ARE DESIGNED WELL.', 'en'),
                'value_hindi' => getLanguage('EVERYTHING IS DESIGNED, BUT SOME THINGS ARE DESIGNED WELL.', 'hi'),
                'value_gujrati' => getLanguage('EVERYTHING IS DESIGNED, BUT SOME THINGS ARE DESIGNED WELL.', 'gu'),
                'page_name' => 'Home'
            ],

            // information section
            [
                'name' => "Information section 1 title",
                'slug' => 'information-section-1-title',
                'value_english' => getLanguage("Our Company's Values", 'en'),
                'value_hindi' => getLanguage("Our Company's Values", 'hi'),
                'value_gujrati' => getLanguage("Our Company's Values", 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => "Information section 1 description",
                'slug' => 'information-section-1-description',
                'value_english' => getLanguage("Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.", 'en'),
                'value_hindi' => getLanguage("Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.", 'hi'),
                'value_gujrati' => getLanguage("Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.", 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => "Information section 2 title",
                'slug' => 'information-section-2-title',
                'value_english' => getLanguage("How to get Support ?", 'en'),
                'value_hindi' => getLanguage("How to get Support ?", 'hi'),
                'value_gujrati' => getLanguage("How to get Support ?", 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => "Information section 2 description",
                'slug' => 'information-section-2-description',
                'value_english' => getLanguage("Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.", 'en'),
                'value_hindi' => getLanguage("Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.", 'hi'),
                'value_gujrati' => getLanguage("Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.", 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => "Information section 3 title",
                'slug' => 'information-section-3-title',
                'value_english' => getLanguage("Where can you find us?", 'en'),
                'value_hindi' => getLanguage("Where can you find us?", 'hi'),
                'value_gujrati' => getLanguage("Where can you find us?", 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => "Information section 3 description",
                'slug' => 'information-section-3-description',
                'value_english' => getLanguage("Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.", 'en'),
                'value_hindi' => getLanguage("Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.", 'hi'),
                'value_gujrati' => getLanguage("Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.", 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => "Information section 4 title",
                'slug' => 'information-section-4-title',
                'value_english' => getLanguage("Why you choose our Company?", 'en'),
                'value_hindi' => getLanguage("Why you choose our Company?", 'hi'),
                'value_gujrati' => getLanguage("Why you choose our Company?", 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => "Information section 4 description",
                'slug' => 'information-section-4-description',
                'value_english' => getLanguage("Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.", 'en'),
                'value_hindi' => getLanguage("Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.", 'hi'),
                'value_gujrati' => getLanguage("Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.", 'gu'),
                'page_name' => 'Home'
            ],

            // our skill section
            [
                'name' => "Progress bar section title",
                'slug' => 'progress-bar-section-title',
                'value_english' => getLanguage("Our Skills", 'en'),
                'value_hindi' => getLanguage("Our Skills", 'hi'),
                'value_gujrati' => getLanguage("Our Skills", 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => "Progress bar 1 title",
                'slug' => 'progress-bar-1-title',
                'value_english' => getLanguage("WORDPRESS", 'en'),
                'value_hindi' => getLanguage("WORDPRESS", 'hi'),
                'value_gujrati' => getLanguage("WORDPRESS", 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => "Progress bar 1 percentage",
                'slug' => 'progress-bar-1-percentage',
                'value_english' => 80,
                'value_hindi' => 80,
                'value_gujrati' => 80,
                'page_name' => 'Home'
            ],
            [
                'name' => "Progress bar 2 title",
                'slug' => 'progress-bar-2-title',
                'value_english' => getLanguage("CSS3", 'en'),
                'value_hindi' => getLanguage("CSS3", 'hi'),
                'value_gujrati' => getLanguage("CSS3", 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => "Progress bar 2 percentage",
                'slug' => 'progress-bar-2-percentage',
                'value_english' => 60,
                'value_hindi' => 60,
                'value_gujrati' => 60,
                'page_name' => 'Home'
            ],
            [
                'name' => "Progress bar 3 title",
                'slug' => 'progress-bar-3-title',
                'value_english' => getLanguage("HTML5", 'en'),
                'value_hindi' => getLanguage("HTML5", 'hi'),
                'value_gujrati' => getLanguage("HTML5", 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => "Progress bar 3 percentage",
                'slug' => 'progress-bar-3-percentage',
                'value_english' => 90,
                'value_hindi' => 90,
                'value_gujrati' => 90,
                'page_name' => 'Home'
            ],
            [
                'name' => "Progress bar 4 title",
                'slug' => 'progress-bar-4-title',
                'value_english' => getLanguage("PHP", 'en'),
                'value_hindi' => getLanguage("PHP", 'hi'),
                'value_gujrati' => getLanguage("PHP", 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => "Progress bar 4 percentage",
                'slug' => 'progress-bar-4-percentage',
                'value_english' => 85,
                'value_hindi' => 85,
                'value_gujrati' => 85,
                'page_name' => 'Home'
            ],
            [
                'name' => "Progress bar 5 title",
                'slug' => 'progress-bar-5-title',
                'value_english' => getLanguage("JQUERY", 'en'),
                'value_hindi' => getLanguage("JQUERY", 'hi'),
                'value_gujrati' => getLanguage("JQUERY", 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => "Progress bar 5 percentage",
                'slug' => 'progress-bar-5-percentage',
                'value_english' => 70,
                'value_hindi' => 70,
                'value_gujrati' => 70,
                'page_name' => 'Home'
            ],

            // Blog Categorys section
            [
                'name' => "Our Blog Categorys title",
                'slug' => 'our-blog-categorys-title',
                'value_english' => getLanguage("Our Blog Categorys", 'en'),
                'value_hindi' => getLanguage("Our Blog Categorys", 'hi'),
                'value_gujrati' => getLanguage("Our Blog Categorys", 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => "Our Blog Categorys Button",
                'slug' => 'our-blog-categorys-button',
                'value_english' => getLanguage("View Details", 'en'),
                'value_hindi' => getLanguage("View Details", 'hi'),
                'value_gujrati' => getLanguage("View Details", 'gu'),
                'page_name' => 'Home'
            ],
            [
                'name' => "Meet Our Team",
                'slug' => 'meet-our-team',
                'value_english' => getLanguage("Our Team", 'en'),
                'value_hindi' => getLanguage("Our Team", 'hi'),
                'value_gujrati' => getLanguage("Our Team", 'gu'),
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
