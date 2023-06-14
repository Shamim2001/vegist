<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'title' => 'Fresh fruits<br>&vegetable',
            'subtitle' => 'Summer vage sale',
            'btn_text' => 'Shop now',
            'btn_link' => '#',
            'alignment' => 'left',
            'background' => '1686503209-slider1.jpg',
        ]);
        Slider::create([
            'title' => 'Prod of indian<br>100% packaging',
            'subtitle' => 'Organic indian masala',
            'btn_text' => 'Shop now',
            'btn_link' => '#',
            'alignment' => 'right',
            'background' => '1686503264-slider2.jpg',
        ]);
        Slider::create([
            'title' => 'Fresh for your health',
            'subtitle' => 'Top selling!',
            'btn_text' => 'Shop now',
            'btn_link' => '#',
            'alignment' => 'center',
            'background' => '1686545378-slider3.jpg',
        ]);
    }
}
