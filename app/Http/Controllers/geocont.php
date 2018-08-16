<?php

namespace App\Http\Controllers;
use App\city;
use App\area;
use App\country;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class geocont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Geos = DB::table('cities')
            ->join('countries','cities.country','=','countries.country')
            ->join('areas','cities.city','=','areas.city')
            ->paginate(25);
        return view('geo',['Geos' => $Geos]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addgeo') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $city = new city() ;
//        $country = new country() ;
//        $area = new area() ;
//        
//        $city->city = $area->city = $country->city = $request->input('city');
//        $city->country = $country->country = $request->input('country');
//        $area->area = $request->input('area');
//        $city->save();
//        $country->save();
//        $area->save();
        
        $city = $request->input('city') ;
        $country = $request->input('country') ;
        $area = $request->input('area') ;
        DB::insert('insert ignore into cities(city,country) values (?,?)',[$city,$country]);
        DB::insert('insert ignore into areas(area,city) values (?,?)',[$area,$city]);
        DB::insert('insert ignore into countries(country) values (?)',[$country]);
        
        return redirect(route('geo.index'));
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
