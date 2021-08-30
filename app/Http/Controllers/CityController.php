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
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class CityController extends Controller
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
                
        // $cities = DB::table('cities')
        //                     ->join('users', 'cities.user_id', '=', 'users.id')
        //                     ->join('countries', 'cities.country_id', '=', 'countries.id')                            
        //                     ->select('cities.*', 'users.username', 'countries.name as country_name')
        //                     ->whereNull('cities.deleted_at')
        //                     ->orderBy('name')                            
        //                     ->paginate(2);

        $cities = City::sortable()->paginate(4);
                                    

        if($request->has('search') && $request->search != "") {

            // $cities = DB::table('cities')
            //                 ->join('users', 'cities.user_id', '=', 'users.id')
            //                 ->join('countries', 'cities.country_id', '=', 'countries.id')                            
            //                 ->select('cities.*', 'users.username', 'countries.name as country_name')
            //                 ->where('cities.name', 'like', "%{$request->search}%")
            //                 ->orWhere('countries.name', 'like', "%{$request->search}%")
            //                 ->whereNull('cities.deleted_at')
            //                 ->orderBy('name')
            //                 ->paginate(2);
            // // Na postojeci link samo dodaj:                
            // $cities->appends($request->all());
            
            $cities = City::with('Country')
                                ->where("name","like","%{$request->search}%")
                                ->orWhereHas('Country',function($query) use ($request) {
                                    $query->where("name","like","%{$request->search}%");
                                })                                
                                ->sortable()
                                ->paginate(4);
            $cities->appends($request->all());
                                            
        }        

        return view('cities.index', [
            'cities' => $cities,            
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {              
                
        return view('cities.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityStoreRequest $request)
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
            
            return redirect()->route('cities.index')->with('message', 'Град је успешно креиран.');
        }

         return redirect()->route('cities.index')->with('message', 'Грешка приликом креирања града.');

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
    public function edit(City $city)
    {        

        $country_name_obj=DB::table('countries')                                    
            ->select('countries.name as name')            
            ->where('id', '=', $city->country_id)
            ->get();                     
            
        return view('cities.edit', [
            'country_name' => $country_name_obj[0]->name,
            'city' => $city
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CityUpdateRequest $request, City $city)
    {                

        if($request->validated()) {            
            $city->name = $request->name;
            $city->postal_code = $request->postal_code;
            $city->country_id = $request->country_id;            
            $city->user_id = Auth::user()->id;
            $city->save();                        

            return redirect()->route('cities.index')->with('message', 'Град је успешно ажуриран.');    
            
        }

        return redirect()->route('cities.index')->with('message', 'Грешка приликом ажурирања града.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {        
        
        $city->delete();

        return redirect()->route('cities.index')->with('message', 'Град је успешно обрисан.');

    }

    public function selectSearchCountries(Request $request)
    {
    	$countries = [];

        if($request->has('q')){
            $search = $request->q;
            $countries = Country::select("id", "name")
            		->where('name', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($countries);
    }

    public function delete($id)
    {
        $city = City::find($id);

        return view('cities.delete', compact('city'));
    }

    
}
