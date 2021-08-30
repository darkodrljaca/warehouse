<?php

namespace App\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use Excel;
use App\Imports\CountryImport;

class ImportCountryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');        
    }

    public function importForm() {
        return view('imports.import-country-form');
    }

    public function import(Request $request) {
        Excel::import(new CountryImport, $request->file);
        return "Фајл је успешно импортован!"; 
    }


}