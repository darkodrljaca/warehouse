<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use App\Models\Company;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CityStoreRequest;
use App\Http\Requests\CityUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompanyCityController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');                
    } 


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Company $company)
    {
        return view('companies/cities/cities-create/create', [
            'company' => $company
        ]);
    }

    // Create company from city create:
    public function createC()
    {

        
        return view('companies/cities/cities-create/createC');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityStoreRequest $request, Company $company)
    {
        if($request->validated()) {
            $city = new City();
            $city->name = $request->name;
            $city->country_id = $request->country_id;
            $city->postal_code = $request->postal_code;
            $city->user_id = Auth::user()->id;         
            $city->save();
            
            Session::flash('city_name',$city->name); 
            Session::flash('city_id', $city->id);            
            
            return redirect()->route('companies.edit', [
                'company' => $company->id
            ])->with('message', 'Град је успешно креиран.');
        }

         return redirect()->route('companies.edit', [
                                        'company' => $company->id
                                    ])->with('message', 'Грешка приликом креирања града.');
    }

    public function storeC(CityStoreRequest $request)
    {
        if($request->validated()) {
            $city = new City();
            $city->name = $request->name;
            $city->country_id = $request->country_id;
            $city->postal_code = $request->postal_code;
            $city->user_id = Auth::user()->id;         
            $city->save();
            
            Session::flash('city_name',$city->name); 
            Session::flash('city_id', $city->id);            
            
            return redirect()->route('companies.create')->with('message', 'Град је успешно креиран.');
        }

         return redirect()->route('companies.create')->with('message', 'Грешка приликом креирања града.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company, City $city)
    {

        $country_name_obj=DB::table('countries')                                    
            ->select('countries.name as name')            
            ->where('id', '=', $city->country_id)
            ->get();

        return view('companies/cities/cities-edit/edit', [
            'country_name' => $country_name_obj[0]->name,
            'company' => $company,
            'city' => $city
        ]);       
    }

    public function editC(City $city)
    {        
        $country_name_obj=DB::table('countries')                                    
            ->select('countries.name as name')            
            ->where('id', '=', $city->country_id)
            ->get();

        return view('companies/cities/cities-edit/editC', 
                        [
                            'city' => $city, 
                            'country_name' => $country_name_obj[0]->name
                        ]);               
                     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CityUpdateRequest $request, Company $company, City $city)
    {                

        if($request->validated()) {            
            $city->name = $request->name;
            $city->postal_code = $request->postal_code;
            $city->country_id = $request->country_id;            
            $city->user_id = Auth::user()->id;
            $city->save(); 
            
            Session::flash('city_name',$city->name); 
            Session::flash('city_id', $city->id);

           return redirect()->route('companies.edit', $company->id)->with('message', 'Град је успешно ажуриран.');                
            
        }

        return redirect()->route('companies.edit', $company->id)->with('message', 'Грешка приликом ажурирања града.');
    }

    public function updateC(CityUpdateRequest $request, City $city)
    {                

        if($request->validated()) {            
            $city->name = $request->name;
            $city->postal_code = $request->postal_code;
            $city->country_id = $request->country_id;            
            $city->user_id = Auth::user()->id;
            $city->save(); 
            
            Session::flash('city_name',$city->name); 
            Session::flash('city_id', $city->id);

           return redirect()->route('companies.create')->with('message', 'Град је успешно креиран.');                
            
        }

        return redirect()->route('companies.create')->with('message', 'Грешка приликом креирања града.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
