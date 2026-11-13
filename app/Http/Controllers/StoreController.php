<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        // Productos recomendados (GTA, Tarjetas, etc.)
        $recommended = Product::where('is_featured', true)->take(5)->get();
        
        // Productos en oferta
        $offers = Product::where('is_offer', true)->take(4)->get();

        return view('home', compact('recommended', 'offers'));
    }
}