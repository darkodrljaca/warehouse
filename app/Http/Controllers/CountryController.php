<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CountryStoreRequest;
use App\Http\Requests\CountryUpdateRequest;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CountryController extends Controller
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
        $countries = Country::sortable()->paginate(4);

                           
        if($request->has('search') && $request->search != "") {
            $countries = Country::where('name', 'like', "%{$request->search}%")                            
                                    ->sortable()
                                    ->paginate(4);
            $countries->appends($request->all());                
        }
        return view('countries.index', [
            'countries' => $countries,            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryStoreRequest $request)
    {
        
        if($request->validated()) {
            $country = new Country();
            $country->name = $request->name;
            $country->user_id = Auth::user()->id;         
            $country->save();

            return redirect()->route('countries.index')->with('message', 'Држава је успешно креирана.');
        }

        return redirect()->route('countries.index')->with('message', 'Држава није успешно креирана.');
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
    public function edit(Country $country)
    {        

        return view('countries.edit', [
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
    public function update(CountryUpdateRequest $request, Country $country)
    {                     
                

        if($request->validated()) {            
            $country->name = $request->name;            
            $country->user_id = Auth::user()->id;
            $country->save();
                            
            return redirect()->route('countries.index')->with('message', 'Држава је успешно ажурирана.');
            
        }

        return redirect()->route('countries.index')->with('message', 'Држава није успешно ажурирана.');    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {        
        
        $country->delete();

        return redirect()->route('countries.index')->with('message', 'Држава је успешно обрисана.');

    }

    public function delete($id)
    {
        $country = Country::find($id);

        return view('countries.delete', compact('country'));
    }

}
