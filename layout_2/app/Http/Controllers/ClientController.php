<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clientView ()
    {
        $clients = Client::all();
        return view('clients.clients', ['client' => $clients]);
    }

    //get
    public function createClientView()
    {
        return view('clients.createClient');
    }

    //post
    public function createClient ( Request $request )
    {
        $data = $request->validate([
            'name' => 'required|min:4|max:255', 
            'email' => 'required|min:8|max:255|unique:users,email', 
            'phoneNumber' => 'required|min:10|max:11', 
            'address' => 'required|min:4|max:250', 
            'zipCode' => 'required|min:8|max:8'
        ]);

        Client::create($data);

        $response = 'User created!';

        return redirect()->route('clients');
    }
}
