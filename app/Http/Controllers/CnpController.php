<?php

namespace App\Http\Controllers;

use App\Models\Cnp;
use Illuminate\Http\Request;

class CnpController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }

    public function store(Request $request)
    {
        $result = new Cnp();
        $result->setInput($request->input('cnp'));

        $validateCNP = validate_cnp($request->input('cnp'));

        if ($validateCNP !== "Success") {
            $state = 'error';
            $message = $validateCNP;
        } else {
            $state = 'success';
            $message = $validateCNP;
        }


        $result->cnp = $request->cnp;

        $result->save();

        return redirect('home')->with($state, $message);
}
