<?php

namespace App\Http\Controllers;

use App\Product;
use App\Brand;
use App\Promotion;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       
    }
    public function index()
    {
        $promotions = Promotion::get();
        return view('admin.promotions.index', compact('promotions'));
    }
    public function create()
    {
        $products = Product::store_products()->get();
        return view('admin.promotions.create', compact('products'));
    }
    public function store(Request $request, Promotion $promotion)
    {
        $promotion->my_store($request);
        return redirect()->route('promotions.index')->with('toast_success', '¡Promoción creada con éxito!');
    }
    public function show(Promotion $promotion)
    {
        return view('admin.promotions.show', compact('promotion'));
    }
    public function edit(Promotion $promotion)
    {
        $products = Product::store_products()->get();
        dd($products); // Imprime la colección de productos
        return view('admin.promotions.edit', compact('promotion','products'));
    }
    public function update(Request $request, Promotion $promotion)
    {
        $promotion->my_update($request);
        return redirect()->route('promotions.index')->with('toast_success', '¡Promoción actualizada con éxito!');
    }
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        return redirect()->back()->with('toast_success', '¡Promoción eliminada con éxito!');
    }
}
