<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use App\Models\Company;
use App\Http\Requests\CityStoreRequest;
use App\Http\Requests\CityUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CountryStoreRequest;
use Illuminate\Support\Facades\Session;

class CountryRelatedController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');        
    }

    public function createCountryFromCompanyCreateFromCityCreate() {
        return view('countries.create-country-from-company-create-from-city-create');
     }

     public function storeCountryFromCompanyCreateFromCityCreate(CountryStoreRequest $request) {
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

     public function createCountryFromCompanyCreateFromCityEdit(City $city) {
         return view('countries.create-country-from-company-create-from-city-edit', [
             'city' => $city
         ]);
     }

     public function storeCountryFromCompanyCreateFromCityEdit(CountryStoreRequest $request, City $city) {
        
        if($request->validated()) {
            $country = new Country();
            $country->name = $request->name;
            $country->user_id = Auth::user()->id;         
            $country->save();

            Session::flash('country_name',$country->name); 
            Session::flash('country_id', $country->id);

            return redirect()->route('edit-city-from-company-create', ['city'=>$city->id])->with('message', 'Држава је успешно креирана.');
        }

        return redirect()->route('edit-city-from-company-create', ['city'=>$city->id])->with('message', 'Држава није успешно креирана.');
     }

     public function createCountryFromCompanyEditFromCityCreate(Company $company) {
         return view('countries.create-country-from-company-edit-from-city-create', [
             'company' => $company
         ]);
     }

     public function storeCountryFromCompanyEditFromCityCreate(CountryStoreRequest $request, Company $company) {
        return $company->id;    
     }

}
