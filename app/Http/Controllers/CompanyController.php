<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyStoreRequest;
use App\Http\Requests\CompanyUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\City;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {                        
                
        // $companies = DB::table('companies')
        //                     ->join('users', 'companies.user_id', '=', 'users.id')
        //                     ->join('cities', 'companies.city_id', '=', 'cities.id')                            
        //                     ->select('companies.*', 'users.username', 'cities.name as city_name')
        //                     ->whereNull('companies.deleted_at')
        //                     ->orderBy('name')
        //                     ->paginate(2);

        $companies = Company::sortable()->paginate(4);                            

        if($request->has('search') && $request->search != "") {            
            // $companies = DB::table('companies')
            //                         ->join('users', 'companies.user_id', '=', 'users.id')
            //                         ->join('cities', 'companies.city_id', '=', 'cities.id')                            
            //                         ->select('companies.*', 'users.username', 'cities.name as city_name')
            //                         ->where("companies.name","like","%{$request->search}%")
            //                         ->orWhere("cities.name","like","%{$request->search}%")
            //                         ->whereNull('companies.deleted_at')
            //                         ->orderBy('name')
            //                         ->paginate(2); 
            // $companies->appends($request->all());
            $companies = Company::with('City')
                                ->where("name","like","%{$request->search}%")
                                ->orWhereHas('City',function($query) use ($request) {
                                    $query->where("name","like","%{$request->search}%");
                                })                                
                                ->sortable()
                                ->paginate(4);
            $companies->appends($request->all());             
            
                                
        }
        return view('companies.index', [
            'companies' => $companies,           
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {                
        
        $tab_id = uniqid();        
        
        return view('companies.create', [
            'tab_id' => $tab_id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyStoreRequest $request)
    {        

        if($request->validated()) {
            $company = new Company();
            $company->name = $request->name;
            $company->city_id = $request->city_id;
            $company->maticni_broj = $request->maticni_broj;
            $company->pib = $request->pib;
            $company->sifra_delatnosti = $request->sifra_delatnosti;
            $company->user_id = Auth::user()->id;         
            $company->save();

            return redirect()->route('companies.index')->with('message', 'Фирма је успешно креирана.');
        }

        return redirect()->route('companies.index')->with('message', 'Грешка приликом креирања фирме.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {        

        $city_name_obj=DB::table('cities')                                    
            ->select('cities.name as name')            
            ->where('id', '=', $company->city_id)
            ->get();        

        return view('companies.edit', [
            'city_name' => $city_name_obj[0]->name,
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyUpdateRequest $request, Company $company)
    {             

        if($request->validated()) {            
            $company->name = $request->name;
            $company->city_id = $request->city_id;
            $company->maticni_broj = $request->maticni_broj;
            $company->pib = $request->pib;
            $company->sifra_delatnosti = $request->sifra_delatnosti;            
            $company->user_id = Auth::user()->id;
            $company->save();

            return redirect()->route('companies.index')->with('message', 'Фирма је успешно ажурирана.');    
        }

        return redirect()->route('companies.index')->with('message', 'Фирма није успешно ажурирана.');    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {        
        
        $company->delete();

        return redirect()->route('companies.index')->with('message', 'Фирма је успешно обрисана.');

    }

    public function selectSearchCities(Request $request)
    {
    	$cities = [];

        if($request->has('q')){
            $search = $request->q;
            $cities = City::select("id", "name")
            		->where('name', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($cities);
    }

    public function selectSearchCompanies(Request $request)
    {
    	$companies = [];

        if($request->has('q')){
            $search = $request->q;
            $companies = Company::select("id", "name")
            		->where('name', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($companies);
    }

    public function delete($id)
    {
        $company = Company::find($id);

        return view('companies.delete', compact('company'));
    }
}
