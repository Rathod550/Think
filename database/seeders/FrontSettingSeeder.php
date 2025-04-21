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

            // section 1
            [
                'name' => 'Section 1 Image',
                'slug' => 'section-1-image',
                'value' => 'home-1.jpg',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 1 Titel',
                'slug' => 'section-1-titel',
                'value' => 'Prepare For New Future',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 1 Sub Titel',
                'slug' => 'section-1-sub-titel',
                'value' => 'Our work is presentation of our capabilities.',
                'page_name' => 'Home'
            ],

            // section 2
            [
                'name' => 'Section 2 Titel',
                'slug' => 'section-2-titel',
                'value' => 'We are creative & expert people',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 2 Sub Titel',
                'slug' => 'section-2-sub-titel',
                'value' => 'We work with business & provide solution to client with their business problem.',
                'page_name' => 'Home'
            ],

            // section 3
            [
                'name' => 'Section 3 First Titel',
                'slug' => 'section-3-first-titel',
                'value' => 'Modern & Responsive design',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 3 First Description',
                'slug' => 'section-3-first-description',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 3 Second Titel',
                'slug' => 'section-3-second-titel',
                'value' => 'Awarded licensed company',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 3 Second Description',
                'slug' => 'section-3-second-description',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 3 Third Titel',
                'slug' => 'section-3-third-titel',
                'value' => 'Build your website Professionally',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 3 Third Description',
                'slug' => 'section-3-third-description',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, ducimus.',
                'page_name' => 'Home'
            ],

            // section 4
            [
                'name' => 'Section 4 Image',
                'slug' => 'section-4-image',
                'value' => 'home-8.jpg',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 4 Titel',
                'slug' => 'section-4-titel',
                'value' => 'What we are',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 4 Sub Titel',
                'slug' => 'section-4-sub-titel',
                'value' => 'We are dynamic team of creative people',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 4 Sub Titel Two',
                'slug' => 'section-4-sub-titel-two',
                'value' => 'We are Perfect Solution',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 4 Description',
                'slug' => 'section-4-description',
                'value' => 'We provide consulting services in the area of IFRS and management reporting, helping companies to reach their highest level. We optimize business processes, making them easier.',
                'page_name' => 'Home'
            ],

            // Section 5
            [
                'name' => 'Section 5 Completed Projects',
                'slug' => 'section-5-completed-projects',
                'value' => '1730',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 5 Happy Clients',
                'slug' => 'section-5-happy-clients',
                'value' => '125',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 5 Employees',
                'slug' => 'section-5-employees',
                'value' => '39',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 5 Years',
                'slug' => 'section-5-years',
                'value' => '14',
                'page_name' => 'Home'
            ],

            // Section 6
            [
                'name' => 'Section 6 Titel',
                'slug' => 'section-6-titel',
                'value' => 'Our Services',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 6 Sub Titel',
                'slug' => 'section-6-sub-titel',
                'value' => 'We provide a wide range of creative services',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 6 Part One Title',
                'slug' => 'section-6-part-one-title',
                'value' => 'Web development.',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 6 Part One Description',
                'slug' => 'section-6-part-one-description',
                'value' => "A digital agency isn't here to replace your internal team, we're here to partner",
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 6 Part Two Title',
                'slug' => 'section-6-part-two-title',
                'value' => 'Interface Design.',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 6 Part Two Description',
                'slug' => 'section-6-part-two-description',
                'value' => "A digital agency isn't here to replace your internal team, we're here to partner",
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 6 Part Third Title',
                'slug' => 'section-6-part-third-title',
                'value' => 'Business Consulting.',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 6 Part Third Description',
                'slug' => 'section-6-part-third-description',
                'value' => "A digital agency isn't here to replace your internal team, we're here to partner",
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 6 Part Forth Title',
                'slug' => 'section-6-part-forth-title',
                'value' => 'Branding.',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 6 Part Forth Description',
                'slug' => 'section-6-part-forth-description',
                'value' => "A digital agency isn't here to replace your internal team, we're here to partner",
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 6 Part Fifth Title',
                'slug' => 'section-6-part-fifth-title',
                'value' => 'App development.',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 6 Part Fifth Description',
                'slug' => 'section-6-part-fifth-description',
                'value' => "A digital agency isn't here to replace your internal team, we're here to partner",
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 6 Part Sixth Title',
                'slug' => 'section-6-part-sixth-title',
                'value' => 'Content creation.',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 6 Part Sixth Description',
                'slug' => 'section-6-part-sixth-description',
                'value' => "A digital agency isn't here to replace your internal team, we're here to partner",
                'page_name' => 'Home'
            ],

            // Section 7
            [
                'name' => 'Section 7 Image',
                'slug' => 'section-7-image',
                'value' => 'home-3.jpg',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 7 Titel',
                'slug' => 'section-7-titel',
                'value' => 'We create for you',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 7 Sub Titel',
                'slug' => 'section-7-sub-titel',
                'value' => 'Entrust Your Project to Our Best Team of Professionals',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 7 Description',
                'slug' => 'section-7-description',
                'value' => 'Have any project on mind? For immidiate support :',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 7 Mobile Number',
                'slug' => 'section-7-mobile-number',
                'value' => '23 876 65 455',
                'page_name' => 'Home'
            ],

            // Section 8
            [
                'name' => 'Section 8 Titel',
                'slug' => 'section-8-titel',
                'value' => 'Clients testimonial',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 8 Sub Titel',
                'slug' => 'section-8-sub-titel',
                'value' => "Check what's our clients say about us",
                'page_name' => 'Home'
            ],

            // Section 9
            [
                'name' => 'Section 9 Titel',
                'slug' => 'section-9-titel',
                'value' => 'For Every type business',
                'page_name' => 'Home'
            ],
            [
                'name' => 'Section 9 Description',
                'slug' => 'section-9-description',
                'value' => "Entrust Your Project to Our Best Team of Professionals",
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
