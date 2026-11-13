<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique(); // Para URL amigables (Ej: tudominio.com/producto/gta-v)
            $table->text('description')->nullable();
            
            // --- Campos del Curso ---
            $table->string('sku')->unique()->nullable(); // Código único de inventario
            $table->integer('stock')->default(0); // Inventario
            $table->decimal('price', 10, 2); // Precio de venta
            $table->decimal('original_price', 10, 2)->nullable(); // Para mostrar el tachado (Ej: $100 -> $75)
            
            // Clasificación
            $table->string('type')->default('physical'); // 'physical' (Juego físico) o 'digital' (Tarjeta/Curso)
            $table->string('platform'); // Xbox, PSN, Steam, PC, etc.
            $table->string('category')->nullable(); // Ej: Calzado > Deportivo (adaptado a: Juegos > Acción)
            $table->json('tags')->nullable(); // Etiquetas (Ej: ["trail", "gym"] adaptado a ["rpg", "multijugador"])
            $table->json('variants')->nullable(); // Para tallas/colores (o versiones de juegos: Standard, Deluxe)
            
            // Imágenes y Destacados
            $table->string('image_url')->nullable();
            $table->boolean('is_featured')->default(false); // "Lo que te recomendamos"
            $table->boolean('is_offer')->default(false); // Para el carrusel de ofertas
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};