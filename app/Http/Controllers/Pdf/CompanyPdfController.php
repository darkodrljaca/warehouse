<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use App\Models\Company;

class CompanyPdfController extends Controller
{    

    public function __construct()
    {
        $this->middleware('auth');        
    }

    public function showCompaniesAll(){
        $companies = Company::all();
        return view('companies.reports.companies-all', [
            'companies' => $companies
        ]);
      }
    
    
    // Generate PDF
    public function createEmployeesAllPDF() {    
      $data = Company::all();
      $pdf = PDF::loadView('companies.reports.companies-all-pdf', [
          'data' => $data
      ]);
      return $pdf->download('companies-all.pdf');

    }

}
