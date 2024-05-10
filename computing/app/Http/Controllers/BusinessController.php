<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Business;
use App\Product;

use App\Http\Requests\Business\UpdateRequest;

class BusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       
       
    }
    public function index(){
        $business = Business::where('id', 1)->firstOrFail();
        $product = new Product(); // Crear una nueva instancia de Producto
        return view('admin.business.index', compact('business','product'));
    }
    public function update(UpdateRequest $request, Business $business)
    {
        $business->my_update($request);
        $product = new Product(); // Crear una nueva instancia de Producto
        return redirect()->route('business.index', compact('product'))->with('toast_success', '¡Información actualizada con éxito!');
    }
    
    
}
