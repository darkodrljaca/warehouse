<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PermanentScreenSessionController extends Controller {


    public function store(Request $request) {

        if($request->ajax()){            
           // Session::put($request->element_name, $request->element_value);
            Session::put('company_create_input_elements', $request->datastring);
        //    echo "session created";
        }
        return "Request is of Http type";
    }

    public function getSession()
    {
        dd(Session::all());
        // Session::forget('companies_create-name');
        // Session::forget('companies_create-maticni_broj');
        // Session::forget('companies_create_f_name');
    }


} 