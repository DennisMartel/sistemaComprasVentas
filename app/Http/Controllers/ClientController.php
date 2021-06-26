<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;
use App\Models\Client;

class ClientController extends Controller
{
public function index()
    {
        $clients = Client::all();
        return view('admin.client.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.client.create');
    }

    public function store(StoreRequest $request)
    {
        Client::create($request->all());
        return redirect()->route('client.index');
    }
    
    public function show(Client $client)
    {
        return view('admin.client.index', compact('client'));
    }
    
    public function edit(Client $client)
    {
        return view('admin.client.index', compact('client'));
    }
    
    public function update(UpdateRequest $request, Client $client)
    {
        $client->update($request->all());
        return redirect()->route('client.index');
    }
    
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index');
    }
}
