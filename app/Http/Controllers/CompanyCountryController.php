<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use App\Models\Company;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CountryStoreRequest;
use App\Http\Requests\CountryUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CompanyCountryController extends Controller
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
    public function create(Company $company, City $city)
    {
        return view('companies/countries/countries-create/create', [            
            'company' => $company,
            'city' => $city            
        ]);
    }

    public function create1(Company $company)
    {
        return view('companies/countries/countries-create/create1', [            
            'company' => $company                      
        ]);
    }

    public function create2(City $city)
    {
        return view('companies/countries/countries-create/create2', [            
            'city' => $city                      
        ]);
    }

    public function createC()
    {
        return view('companies/countries/countries-create/createC');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryStoreRequest $request, Company $company, City $city)
    {
        if($request->validated()) {
            $country = new Country();
            $country->name = $request->name;
            $country->user_id = Auth::user()->id;         
            $country->save();

            Session::flash('country_name',$country->name); 
            Session::flash('country_id', $country->id);

            return redirect()->route('edit-city-from-company-edit',
                                            ['company' => $company->id, 
                                            'city' => $city->id]
                                            )->with('message', 'Држава је успешно креирана.');
        }

        return redirect()->route('edit-city-from-company-edit',
                                            ['company' => $company->id, 
                                            'city' => $city->id]
                                            )->with('message', 'Држава није успешно креирана.');
    }

    public function store2(CountryStoreRequest $request, City $city)
    {
        if($request->validated()) {
            $country = new Country();
            $country->name = $request->name;
            $country->user_id = Auth::user()->id;         
            $country->save();

            Session::flash('country_name',$country->name); 
            Session::flash('country_id', $country->id);

            return redirect()->route('edit-city-from-company-create',
                                            [ 
                                            'city' => $city->id]
                                            )->with('message', 'Држава је успешно креирана.');
        }

        return redirect()->route('edit-city-from-company-create',
                                            [ 
                                            'city' => $city->id]
                                            )->with('message', 'Држава није успешно креирана.');
    }

    public function store1(CountryStoreRequest $request, Company $company)
    {
        if($request->validated()) {
            $country = new Country();
            $country->name = $request->name;
            $country->user_id = Auth::user()->id;         
            $country->save();

            Session::flash('country_name',$country->name); 
            Session::flash('country_id', $country->id);

            return redirect()->route('create-city-from-company-edit',
                                            ['company' => $company->id]                                            
                                            )->with('message', 'Држава је успешно креирана.');
        }

        return redirect()->route('create-city-from-company-edit',
                                            ['company' => $company->id]                                            
                                            )->with('message', 'Држава није успешно креирана.');
    }

    public function storeC(CountryStoreRequest $request)
    {
        if($request->validated()) {
            $country = new Country();
            $country->name = $request->name;
            $country->user_id = Auth::user()->id;         
            $country->save();

            Session::flash('country_name',$country->name); 
            Session::flash('country_id', $country->id);

            return redirect()->route('create-city-from-company-create')->with('message', 'Држава је успешно креирана.');
        }

        return redirect()->route('create-city-from-company-create')->with('message', 'Држава није успешно креирана.');
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
    public function edit(Company $company, City $city, Country $country)
    {

        return view('companies/countries/countries-edit/edit', [            
            'company' => $company,
            'city' => $city,
            'country' => $country
        ]);       
    }

    public function edit2(City $city, Country $country)
    {

        return view('companies/countries/countries-edit/edit2', [                        
            'city' => $city,
            'country' => $country
        ]);       
    }

// edit country from company create / city create:
    public function editC(Country $country)
    {

        return view('companies/countries/countries-edit/editC', [                                   
            'country' => $country
        ]);       
    }

    public function edit1(Company $company, City $city, Country $country)
    {

        return view('companies/countries/countries-edit/edit1', [            
            'company' => $company,            
            'country' => $country
        ]);       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountryUpdateRequest $request, Company $company, City $city, Country $country)
    {                

        if($request->validated()) {            
            $country->name = $request->name;                        
            $country->user_id = Auth::user()->id;
            $country->save(); 
            
            Session::flash('country_name',$country->name); 
            Session::flash('country_id', $country->id);

            return redirect()->route('edit-city-from-company-edit',
                                            ['company' => $company->id, 
                                            'city' => $city->id]
                                            )->with('message', 'Држава је успешно ажурирана.');                           
            
        }

        return redirect()->route('edit-city-from-company-edit',
                                        ['company' => $company->id, 
                                        'city' => $city->id]
                                        )->with('message', 'Грешка приликом ажурирања државе.');
    }

    public function update2(CountryUpdateRequest $request, City $city, Country $country)
    {                

        if($request->validated()) {            
            $country->name = $request->name;                        
            $country->user_id = Auth::user()->id;
            $country->save(); 
            
            Session::flash('country_name',$country->name); 
            Session::flash('country_id', $country->id);

            return redirect()->route('edit-city-from-company-create',
                                            [
                                            'city' => $city->id]
                                            )->with('message', 'Држава је успешно ажурирана.');                           
            
        }

        return redirect()->route('edit-city-from-company-create',
                                        [
                                        'city' => $city->id]
                                        )->with('message', 'Грешка приликом ажурирања државе.');
    }

    public function updateC(CountryUpdateRequest $request, Country $country)
    {                

        if($request->validated()) {            
            $country->name = $request->name;                        
            $country->user_id = Auth::user()->id;
            $country->save(); 
            
            Session::flash('country_name',$country->name); 
            Session::flash('country_id', $country->id);

            return redirect()->route('create-city-from-company-create')->with('message', 'Држава је успешно ажурирана.');                           
            
        }

        return redirect()->route('create-city-from-company-create')->with('message', 'Грешка приликом ажурирања државе.');
    }

    public function update1(CountryUpdateRequest $request, Company $company, Country $country)
    {                

        if($request->validated()) {            
            $country->name = $request->name;                        
            $country->user_id = Auth::user()->id;
            $country->save(); 
            
            Session::flash('country_name',$country->name); 
            Session::flash('country_id', $country->id);

            return redirect()->route('create-city-from-company-edit',
                                            ['company' => $company->id]                                             
                                            )->with('message', 'Држава је успешно ажурирана.');                           
            
        }

        return redirect()->route('create-city-from-company-edit',
                                        ['company' => $company->id]
                                        )->with('message', 'Грешка приликом ажурирања државе.');
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
