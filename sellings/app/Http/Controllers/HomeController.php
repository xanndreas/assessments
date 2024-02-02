<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Customer;
use App\Models\Sale;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{

    public function index()
    {
        $customers = Customer::all();

        return view('home', compact('customers'));
    }

    public function history(Request $request)
    {
        if ($request->ajax()) {
            if ($request->has('customer_id')) {
                $sale = Sale::with('customer')
                    ->where('customer_id', $request->customer_id)
                    ->get();

                $address = Address::with('customer')
                    ->where('customer_id', $request->customer_id)
                    ->first();

                return response()->json([
                    'raw' => view('history', compact('sale'))->render(),
                    'address' => $address ? $address->address : 'Belum Ada'
                ]);
            }
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
