<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function salesView ()
    {
        $sales = Sales::all();
        return view('sales.sales', ['sales' => $sales]);
    }

    //get
    public function createSaleView ()
    {
        return view('sales.createSales');
    }

    //post
    public function createSale ( Request $request )
    {
        $data = $request->validate([
            'client' => 'required|min:4|max:255',
            'products' => 'required|min:4|max:255',
            'status' => 'required'
        ]);

        $validationClient = Client::all()->where('name', $data['client']);
        $validationProduct = Product::all()->where('name', $data['products']);

        if ( count($validationClient) < 1 )
        {
            $response = 'Client could not be find, please, check the field and try again';
            return redirect()->back()->withErrors($response);
        }

        if ( count($validationProduct) < 1 )
        {
            $response = 'Product could not be find, please, check the field and try again';
            return redirect()->back()->withErrors($response);
        }

        else 
        {
            $price = 0;
            foreach ( $validationProduct as $fields => $key )
            {
                if ( $fields == 'price' )
                {
                    $price = $key;
                }
            }

            $newSell = [
                'client' => $data['client'],
                'products' => $data['products'],
                'price' => $price,
                'status' => $data['status']
            ];
            
            Sales::create($newSell);

            $response = 'Sell created!';

            return redirect()->route('sales');
        }
    }
}
