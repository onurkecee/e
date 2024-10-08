<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name'=> 'Pratik Shop E-Ticaret',
            'content'=> 'Hakkımızda Yazısı Burada',

            'text_1_icon'=> 'icon-truck',
            'text_1'=> 'ÜCRETSİZ KARGO',
            'text_1_content'=> 'Ürünlerinizi ücretsiz kargo sağlarız.',

            'text_2_icon' => 'icon-refresh2',
            'text_2' => 'Geri İade',
            'text_2_content' => '30 gün içinde geri iade sağlıyoruz.',

            'text_3_icon' => 'icon-help',
            'text_3' => 'Destek',
            'text_3_content' => '7/24 bize ulaşabilirsiniz.',
        ]);
    }
}
