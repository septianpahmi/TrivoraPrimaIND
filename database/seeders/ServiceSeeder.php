<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'General Trading',
            'slug' => 'general-trading',
            'description' => 'Penyediaan berbagai kebutuhan produk untuk sektor industri, komersial, dan retail.',
            'icon' => 'building-office',
            'is_active' => true
        ]);
        Service::create([
            'name' => 'Product Sourcing',
            'slug' => 'product-sourcing',
            'description' => 'Membantu menemukan dan menghubungkan kebutuhan pelanggan dengan sumber produk yang sesuai.',
            'icon' => 'cube',
            'is_active' => true
        ]);
        Service::create([
            'name' => 'Supply & Distribution',
            'slug' => 'supply-distribution',
            'description' => 'Penyediaan dan distribusi produk untuk membantu menjaga kebutuhan operasional mitra.',
            'icon' => 'truck',
            'is_active' => true
        ]);
        Service::create([
            'name' => 'One-Stop Solution',
            'slug' => 'one-stop-solution',
            'description' => 'Solusi pengadaan yang praktis dan terintegrasi dari kebutuhan produk hingga distribusi.',
            'icon' => 'globe',
            'is_active' => true
        ]);
    }
}
