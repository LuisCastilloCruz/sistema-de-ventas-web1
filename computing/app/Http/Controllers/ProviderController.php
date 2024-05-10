<?php

namespace App\Http\Controllers;

use App\Provider;
use App\Tag;
use App\Category;
use App\Http\Requests\Provider\UpdateRequest;
use App\Http\Requests\Provider\StoreRequest;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\UpdateProviderRequest;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::get();
        $tags = Tag::orderBy('id','DESC')->paginate(15);
        return view('admin.providers.index', compact('providers', 'tags'));
    }
    public function create()
    {
        $providers = Provider::orderBy('id','DESC')->paginate(15);
        $categories = Category::orderBy('name', 'ASC' )->pluck('name','id');
        return view('admin.providers.create', compact('categories', 'providers'));
    }
    public function store(StoreRequest $request)
    {
        Provider::create($request->all());
        return redirect()->route('providers.index')->with('toast_success', '¡Proveedor registrado con éxito!');
    }
    public function show(Provider $provider)
    {
        return view('admin.providers.show', compact('provider'));
    }
    public function edit(Provider $provider)
    {
        return view('admin.providers.edit', compact('provider'));
    }
    public function update(UpdateRequest $request, Provider $provider)
    {
        $provider->update($request->all());
        return redirect()->route('providers.index')->with('toast_success', '¡Proveedor actualizado con éxito!');
    }
    public function destroy(Provider $provider)
    {

        
        $provider->delete();
        return redirect()->back()->with('toast_success', '¡Proveedor eliminado con éxito!');
    }
}
