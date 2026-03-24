<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController
{
    public function index()
    {
        return view('form');
    }

    public function confirm(Request $request)
    {
        $productKeys = [];

        $validated = $request->validate([
            'plan' => 'required',
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:50',
            'product_key' => ['nullable', 'regex:/^[A-Za-z0-9+\/]{22}==$/'],
        ], [
            'product_key.regex' => 'Error: input must match regex:/^[A-Za-z0-9+\/]{22}==$/'
        ]);

        $keyNotFound = null;

        switch ($validated['plan']) {
            case 'basic':
                return view('confirm',['data' => $validated,'keyNotFound' => $keyNotFound]);
                break;

            case 'pro':
                if ($validated['product_key']) {
                    $keyNotFound = !collect($productKeys)->contains('code', $validated['product_key']);

                    if ($keyNotFound == true) {
                        return view('confirm',['data' => $validated,'keyNotFound' => $keyNotFound]);
                    } else {
                        return view('confirm',['data' => $validated,'keyNotFound' => $keyNotFound]);
                    }

                } else {
                    return view('confirm',['data' => $validated,'keyNotFound' => $keyNotFound]);
                }

                break;

            case 'premium':
                if ($validated['product_key']) {
                    $keyNotFound = !collect($productKeys)->contains('code', $validated['product_key']);

                    if ($keyNotFound == true) {
                        return view('confirm',['data' => $validated,'keyNotFound' => $keyNotFound]);
                    } else {
                        return view('confirm',['data' => $validated,'keyNotFound' => $keyNotFound]);
                    }

                } else {
                    return view('confirm',['data' => $validated,'keyNotFound' => $keyNotFound]);
                }
                break;

            default:
                return view('confirm',['data' => $validated,'keyNotFound' => $keyNotFound]);
                break;
        }
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'plan' => 'required',
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:50',
            'product_key' => ['nullable', 'regex:/^[A-Za-z0-9+\/]{22}==$/'],
        ]);

        $keyNotFound = $request->keyNotFound;

        return view('submit',['data' => $validated, 'keyNotFound' => $keyNotFound]);
    }
}
