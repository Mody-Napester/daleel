<?php

namespace Database\Seeders;

use App\Models\SiteImage;
use Illuminate\Database\Seeder;

class SiteImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $files = [
            ['home_video', 'Video', ''],
            ['home_section_1', 'Image', ''],
            ['home_section_2', 'Image', ''],
            ['call_to_action', 'Image', ''],
            ['about_page_banner', 'Image', ''],
            ['about_page_image_1', 'Image', ''],
            ['about_page_image_2', 'Image', ''],
            ['about_page_image_3', 'Image', ''],
            ['solution_page_banner', 'Image', ''],
            ['resources_page_banner', 'Image', ''],
            ['clients_page_banner', 'Image', ''],
            ['request_consult_page_banner', 'Image', ''],
            ['careers_page_banner', 'Image', ''],
            ['contact_page_banner', 'Image', ''],
        ];

        foreach ($files as $file){
            $resource = SiteImage::create([
                'name' => $file[0],
                'title' => $file[1],
                'file' => $file[2],
            ]);
        }
    }
}
