<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.index', [
            'clients' => Client::paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Client::create($request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'username'=>'required',
            'password'=>'required',
            'address'=>'required',
        ]));
        return redirect()->
        route('clients.index')->
        with('message', 'Client added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view ('client.edit', [
            'client' => $client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $client->update($request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'username'=>'required',
            'password'=>'required',
            'address'=>'required',
        ]));
        return redirect()->
        route('clients.index')->
        with('message', __('#:id updated!', ['id' => $client->id]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->
        back()->
        with('message', __('Client :first_name :last_name deleted', [
            'first_name' => $client->first_name,
            'last_name' => $client->last_name,
        ]));
    }
}
