<?php

namespace Database\Seeders;

use App\Models\WebsiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebisteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WebsiteSetting::create([
            'hero_badge' => 'PT Trivora Prima Indonesia',
            'hero_title' => 'Solusi Pengadaan Produk untuk',
            'hero_highlight' => 'Berbagai Kebutuhan Bisnis',
            'hero_description' => 'PT Trivora Prima Indonesia merupakan perusahaan perdagangan umum yang menyediakan dan mendistribusikan berbagai kebutuhan produk untuk sektor industri, komersial, dan retail.',

            'about_badge' => 'TENTANG KAMI',
            'about_title' => 'Menghubungkan Kebutuhan Bisnis dengan',
            'about_highlight' => 'Solusi Pengadaan yang Tepat.',
            'about_description' => 'PT Trivora Prima Indonesia adalah perusahaan perdagangan umum (general trading) yang menyediakan dan mendistribusikan berbagai kebutuhan produk untuk sektor industri, komersial, maupun retail.',
            'about_founded_year' => '2026',
            'about_profile' => 'Didirikan pada tahun 2026, kami hadir sebagai solusi satu pintu (one-stop solution) yang menjembatani produsen dengan konsumen yang membutuhkan produk berkualitas tinggi.',
            'about_vision_title' => 'VISI KAMI',
            'about_vision' => '<p>Menjadi toko kebutuhan pokok dan harian terlengkap, termurah, dan terpercaya di Indonesia.</p>',
            'about_mission_title' => 'MISI KAMI',
            'about_mission' => '<ul><li><p>Menyediakan produk harian yang lengkap dan berkualitas tinggi.</p></li><li><p>Menawarkan harga yang bersaing dan terjangkau.</p></li><li><p>Memberikan pelayanan yang ramah, cepat, dan memuaskan bagi setiap pelanggan.</p></li></ul>',

            'contact_email' => 'marketing@trivoraprima.co.id',
            'contact_phone' => '+62 851-5533-0019',
            'contact_whatsapp' => '6285155330019',
            'contact_address' => 'Mega Regency Blok H 22 No. 65, Desa Sukasari, Kecamatan Serang Baru, Kab. Bekasi, Jawa Barat 17330',
            'contact_hours' => "Senin - Jum'at, 08.00 - 17.00",
            'contact_maps_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1126592865826!2d107.11814899999999!3d-6.37945629999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69990bf07c64a1%3A0x18bd965361c9e694!2sStop%20Dirty%20Car%20Detailing!5e0!3m2!1sid!2sid!4v1790516796923!5m2!1sid!2sid',
        ]);
    }
}
