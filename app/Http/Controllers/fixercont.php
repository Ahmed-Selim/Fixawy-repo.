<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fixer;
use Illuminate\Support\Facades\DB;

class fixercont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fixers = 
//            fixer::all()
                DB::table('fixers')->paginate(25);
        return view('fixer',['fixers' => $fixers]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = DB::table('cities')->select('city')->distinct()->get() ;
        $categories = DB::table('categories')->get() ;
        return view('addfixer',['cities'=> $cities , 'categories' => $categories]) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request,[
//            'fname' =>'required',
//            'lname' =>'required',
//            'pic' =>'required|image',
//            'bd' =>'required',
//            'city' =>'required',
//            'category' =>'required',
//        ]);

        $fixer = new fixer() ;
        $path = "" ;
        if ($request->hasFile('pic')) {
            $img = $request->file('pic') ;
//            $extnsn = $img->getClientOriginalExtension();
//            $mime = $img->getClientMimeType();
//            $name = $img->getClientOriginalName();
            $path = $img->store('fixers') ;
        }
        $fixer->firstname = $request->input('fname');
        $fixer->lastname = $request->input('lname');
        $fixer->picture = $path;
        $fixer->birth_date = $request->input('bd');
        $fixer->city = $request->input('city');
        $fixer->category = $request->input('cat');
        $fixer->save();
        return redirect(route('fixer.index'))->with('msg',"Added Successfully");
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
