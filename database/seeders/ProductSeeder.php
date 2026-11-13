<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // 1. PRODUCTO FÍSICO (Hardware Gamer con variantes - Ej: Mouse Gamer)
        Product::create([
            'name' => 'Mouse Gamer RGB Pro - Edición Limitada',
            'slug' => Str::slug('Mouse Gamer RGB Pro Edicion Limitada'),
            'description' => 'Mouse de alto rendimiento con sensor óptico de 16,000 DPI, 7 botones programables y RGB personalizable.',
            'sku' => 'MOUSE-RGB-PRO',
            'stock' => 50,
            'price' => 45.00,
            'original_price' => 60.00, // Estrategia de descuento
            'type' => 'physical',
            'platform' => 'PC',
            'category' => 'Hardware > Periféricos > Mouse',
            'tags' => ['gamer', 'rgb', 'esports', 'mouse'],
            'variants' => [
                ['color' => 'Negro', 'stock' => 30],
                ['color' => 'Blanco', 'stock' => 20]
            ],
            'image_url' => 'https://images.unsplash.com/photo-1527814050087-3793815479db?q=80&w=600&auto=format&fit=crop',
            'is_featured' => true,
        ]);

        // 2. PRODUCTO DIGITAL (Tarjeta de Regalo)
        Product::create([
            'name' => 'Tarjeta PlayStation Store $100',
            'slug' => 'tarjeta-playstation-store-100',
            'description' => 'Recarga tu billetera de PSN y compra tus juegos favoritos.',
            'sku' => 'PSN-CARD-100',
            'stock' => 999, // Stock virtual
            'price' => 95.00,
            'original_price' => 100.00,
            'type' => 'digital',
            'platform' => 'PSN',
            'category' => 'eTarjetas > PlayStation',
            'tags' => ['giftcard', 'psn', 'saldo'],
            'image_url' => 'https://images.unsplash.com/photo-1605901309584-818e25960a8f?q=80&w=600&auto=format&fit=crop',
            'is_featured' => true,
        ]);

        // 3. VIDEOJUEGO DIGITAL
        Product::create([
            'name' => 'Grand Theft Auto V Premium Edition',
            'slug' => 'gta-v-premium-edition',
            'description' => 'Disfruta del exitoso juego de mundo abierto.',
            'sku' => 'GAME-GTAV-001',
            'stock' => 999,
            'price' => 29.99,
            'original_price' => 59.99,
            'type' => 'digital',
            'platform' => 'PC / Steam',
            'category' => 'Juegos > Acción > Mundo Abierto',
            'tags' => ['mundo-abierto', 'multijugador', 'accion'],
            'image_url' => 'https://images.unsplash.com/photo-1552820728-8b83bb6b773f?q=80&w=600&auto=format&fit=crop',
            'is_featured' => true,
            'is_offer' => true,
        ]);

        // 4. PRODUCTO FÍSICO ADICIONAL (Teclado Mecánico)
        Product::create([
            'name' => 'Teclado Mecánico TKL Switches Rojos',
            'slug' => 'teclado-mecanico-tkl-switches-rojos',
            'description' => 'Teclado mecánico compacto sin teclado numérico, switches lineales rojos ideales para gaming competitivo.',
            'sku' => 'KEYB-TKL-RED',
            'stock' => 25,
            'price' => 79.99,
            'original_price' => 99.99,
            'type' => 'physical',
            'platform' => 'PC',
            'category' => 'Hardware > Periféricos > Teclados',
            'tags' => ['mecanico', 'gaming', 'tkl'],
            'image_url' => 'https://images.unsplash.com/photo-1618384887929-16ec33fab9ef?q=80&w=600&auto=format&fit=crop',
            'is_featured' => true,
        ]);

        // 5. PRODUCTO DIGITAL ADICIONAL (Suscripción)
        Product::create([
            'name' => 'Xbox Game Pass Ultimate - 3 Meses',
            'slug' => 'xbox-game-pass-ultimate-3-meses',
            'description' => 'Accede a cientos de juegos en consola, PC y Cloud durante 3 meses.',
            'sku' => 'XBOX-GPU-3M',
            'stock' => 500,
            'price' => 39.99,
            'original_price' => 49.99,
            'type' => 'digital',
            'platform' => 'Xbox',
            'category' => 'Suscripciones > Xbox',
            'tags' => ['suscripcion', 'gamepass', 'cloud'],
            'image_url' => 'https://images.unsplash.com/photo-1621259182978-fbf93132d53d?q=80&w=600&auto=format&fit=crop',
            'is_featured' => true,
        ]);
    }
}