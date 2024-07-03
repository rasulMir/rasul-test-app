<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientPostRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::all();
        return view('clients.clients-list', ['clients' => $clients]);
    }

    public function create()
    {
        return view('clients.client-create');
    }

    public function store(ClientPostRequest $request)
    {
        Client::create($request->all());

        return redirect()->route('clients.index');
    }
   
    public function delete(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
   
    public function edit(Client $client)
    {
        return view('clients.client-edit', ['client' => $client]);
    }

    public function update(Client $client, ClientPostRequest $request)
    {
        $client->fill($request->all())->save();

        return redirect()->route('clients.index');
    }
}
