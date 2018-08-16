<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class travelcont extends Controller
{
    public function welcome () {
        return view('welcome') ;
    }
    
    public function admin () {
        $fixers = count(DB::table('fixers')->get()) ;
        $admins = count(DB::table('admins')->get()) ;
        $cities = count(DB::table('cities')->distinct('city')->get()) ;
        $countries = count(DB::table('countries')->distinct('country')->get()) ;
        $categories = count(DB::table('categories')->get()) ;
        $areas = count(DB::table('areas')->distinct('area')->get()) ;
        return view('admin',[
            'fixers' => $fixers ,
            'admins' => $admins ,
            'cities' => $cities ,
            'countries' => $countries ,
            'categories' => $categories ,
            'areas' => $areas ,
        ]) ;
    }
    
    
    public function log () {
        return view('login') ;
    }
    
    public function login(Request $request) {
        $check = DB::table('admins')->select('password')
            ->where('email' , $request->input('email'))->get() ;
        if (count($check) > 0){
            if (Hash::check($request->input('pass'), $check[0]->password)){
                return redirect(route('admin'))->with('msg',"true");
            }
        }
        return redirect(route('login'))->with('msg',"false");
    }
    
    public function city () {
        $Cities = DB::table('cities')->select('city')->distinct()->paginate(25) ;
        return view('city',['Cities'=> $Cities]) ;
    }
    
    public function area () {
        $Areas = DB::table('areas')->select('area')->distinct()->paginate(25) ;
        return view('area',['Areas'=> $Areas]) ;
    }
    
    public function country () {
        $Countries = DB::table('Countries')->select('Country')->distinct()->paginate(25) ;
        return view('country',['Countries'=> $Countries]) ;
    }
    
    public function fix () {
        $Fixers = DB::table('fixers')->paginate(25) ;
        return view('fix',['Fixers' => $Fixers]) ;
    }
    
    public function retrieve() {
        $query = 
            // select countries.country 'Country',cities.city 'City', areas.area 'Area' from cities inner join countries on countries.country = cities.country inner join areas on areas.city = cities.city ;
            DB::table('cities')
                ->join('countries','cities.country','=','countries.country')
                ->join('areas','cities.city','=','areas.city') ;
        
        $cities = $query->select('cities.city as City')->distinct()->get() ;
        $areas = $query->select('areas.area as Area')->distinct()->get() ;
        $categories = DB::table('categories')->select('category')->distinct()->get() ;
        
        return view('search',[
            'Cities' => $cities ,
            'Areas' => $areas ,
            'Categories' => $categories
        ]);
    }
    
    public function search (Request $request) {
        $i = $request->input('form') ;
        
        switch($i) {
            case 1:
                $fixers = DB::table('fixers')->where('category','=',$request->cat)->paginate(25);
                return view('fix',['Fixers' => $fixers]) ;
            case 2:
                $fixers = DB::table('fixers')->where('city','=',$request->city)->paginate(25);
                return view('fix',['Fixers' => $fixers]) ;
        }
    }
}
