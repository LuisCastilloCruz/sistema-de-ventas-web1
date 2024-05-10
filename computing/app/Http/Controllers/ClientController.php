<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;
use Throwable;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       
    }
    public function index()
    {
        $clients = User::role('Client')->get();
        return view('admin.clients.index', compact('clients'));
    }
    public function create()
    {
        return view('admin.clients.create');
    }
    public function store(StoreRequest $request)
    {
        User::create($request->all())->assignRole('Client');
        
        if ($request->sale == 1) {
            return redirect()->back();
        }
        return redirect()->route('clients.index')->with('toast_success', '¡Cliente registrado con éxito!');
    }
    public function show(User $client)
    {
        $total_purchases = 0;
        foreach ($client->sales as $key =>  $sale) {
            $total_purchases+=$sale->total;
        }
        return view('admin.clients.show', compact('client', 'total_purchases'));
    }
    public function edit(User $client)
    {
        return view('admin.clients.edit', compact('client'));
    }
    public function update(UpdateRequest $request, User $client)
    {
        $client->update($request->all());
        return redirect()->route('clients.index')->with('toast_success', '¡Cliente actualizado con éxito!');
    }
    public function destroy(User $client)
    {
        try {
            $client->delete();
        } catch (Throwable $e) {
            // report($e);
            return redirect()->back()->with('toast_error', '¡El cliente está asociado a otros registros!');
        }
        return redirect()->route('clients.index');
    }
}
