<?php 

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'GTA V Premium Edition',
            'slug' => 'gta-v-premium',
            'price' => 29.99,
            'platform' => 'PSN',
            'image_url' => 'https://via.placeholder.com/300x400/3b0764/ffffff?text=GTA+V',
            'is_featured' => true,
        ]);

        Product::create([
            'name' => 'Tarjeta PlayStation Store $100',
            'slug' => 'psn-card-100',
            'price' => 95.00,
            'platform' => 'PSN',
            'image_url' => 'https://via.placeholder.com/300x400/003791/ffffff?text=PSN+100',
            'is_featured' => true,
        ]);

        Product::create([
            'name' => 'Razer Gold $50',
            'slug' => 'razer-gold-50',
            'price' => 48.00,
            'platform' => 'Multi',
            'image_url' => 'https://via.placeholder.com/300x400/000000/00ff00?text=Razer+Gold',
            'is_featured' => true,
        ]);
        
        Product::create([
            'name' => 'Phantom Blade',
            'slug' => 'phantom-blade',
            'price' => 59.99,
            'platform' => 'Steam',
            'image_url' => 'https://via.placeholder.com/300x400/8b0000/ffffff?text=Phantom+Blade',
            'is_offer' => true,
        ]);
    }
}
