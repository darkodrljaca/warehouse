<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use App\Http\Requests\CityStoreRequest;
use App\Http\Requests\CityUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CountryStoreRequest;
use App\Http\Requests\CountryUpdateRequest;
use Illuminate\Support\Facades\Session;

class CityCountryController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');        
    }

    public function create() {
        
        return view('cities/countries/countries-create/create');        
    }

    public function create1(City $city) {
        
        return view('cities/countries/countries-create/create1', [
            'city' => $city
        ]);        
    }

    public function createCountryCityCreate() {
        
        return view('cities.create-country-from-city-create');        

    }

    public function store(CountryStoreRequest $request)
    {
                
        if($request->validated()) {
            $country = new Country();
            $country->name = $request->name;
            $country->user_id = Auth::user()->id;         
            $country->save();            

            Session::flash('country_name',$country->name); 
            Session::flash('country_id', $country->id);
          

            return redirect()->route('cities.create')->with('message', 'Држава је успешно креирана.');
        }

        return redirect()->route('cities.create')->with('message', 'Држава није успешно креирана.');
    }

    public function store1(CountryStoreRequest $request, City $city)
    {
                
        if($request->validated()) {
            $country = new Country();
            $country->name = $request->name;
            $country->user_id = Auth::user()->id;         
            $country->save();            

            Session::flash('country_name',$country->name); 
            Session::flash('country_id', $country->id);
          

            return redirect()->route('cities.edit', ['city' => $city])->with('message', 'Држава је успешно креирана.');
        }

        return redirect()->route('cities.create', ['city' => $city])->with('message', 'Држава није успешно креирана.');
    }

    public function storeCountryCityCreate(CountryStoreRequest $request)
    {
                
        if($request->validated()) {
            $country = new Country();
            $country->name = $request->name;
            $country->user_id = Auth::user()->id;         
            $country->save(); 
            
            Session::flash('country_name',$country->name); 
            Session::flash('country_id', $country->id); 

            return redirect()->route('cities.create')->with('message', 'Држава је успешно креирана');
        }

        return redirect()->route('cities.create')->with('message', 'Држава није успешно креирана.');
    }

    public function edit(Country $country) {
        
        return view('cities/countries/countries-edit/edit', [
            'country' => $country
        ]);

    }

    public function edit1(City $city, Country $country) {
        
        return view('cities/countries/countries-edit/edit1', [
            'city' => $city,
            'country' => $country
        ]);

    }

    public function update(CountryUpdateRequest $request, Country $country) {        

        if($request->validated()) {             
            $country->name = $request->name;            
            $country->user_id = Auth::user()->id;
            $country->save();

            Session::flash('country_name',$country->name); 
            Session::flash('country_id', $country->id);

            return redirect()->route('cities.create')->with('message', 'Држава је успешно ажурирана');    
        }

        return redirect()->route('cities.create')->with('message', 'Држава није успешно ажурирана.');

    }

    public function update1(CountryUpdateRequest $request, City $city, Country $country) {        

        if($request->validated()) {             
            $country->name = $request->name;            
            $country->user_id = Auth::user()->id;
            $country->save();

            Session::flash('country_name',$country->name); 
            Session::flash('country_id', $country->id);

            return redirect()->route('cities.edit', ['city' => $city])->with('message', 'Држава је успешно ажурирана');    
        }

        return redirect()->route('cities.edit', ['city' => $city])->with('message', 'Држава није успешно ажурирана.');

    }

    public function editCountryCityEdit($id, $city_id) {


        
        $country = Country::find($id);
        return view('cities.edit-country-from-city-edit', [
            'country' => $country,
            'city_id' => $city_id
        ]); 

    }

    public function updateCountryCityEdit(CountryUpdateRequest $request, $id) {  
        
        

        if($request->validated()) { 
            $country = Country::find($id);
            $country->name = $request->name;            
            $country->user_id = Auth::user()->id;
            $country->save();

            $city_id = $request->city_id;

            Session::flash('country_name',$country->name); 
            Session::flash('country_id', $country->id);
          

            return redirect()->route('cities.edit', $city_id)->with('message', 'Држава је успешно ажурирана.');
        }

        return redirect()->route('cities.edit', $city->id)->with('message', 'Држава није успешно ажурирана.');

    }

}
