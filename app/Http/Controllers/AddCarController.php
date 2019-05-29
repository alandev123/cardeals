<?php

namespace App\Http\Controllers;

use App\AddCar;
use App\FirstReg;
use App\login;
use Illuminate\Http\Request;
use DB;

class AddCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $email=session()->get('email');
      $a = FirstReg::where('email',$email)->get();

      foreach($a as $obj){
        $company_id = $obj -> id;
      }
      $ree = new AddCar([    //model name
      'company_id'=> $company_id,
      'carname'=> $request->get('carname'),
      ]);
      $ree->save();
      return redirect('/addcar')->with('success','Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AddCar  $addCar
     * @return \Illuminate\Http\Response
     */
    public function show(AddCar $addCar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AddCar  $addCar
     * @return \Illuminate\Http\Response
     */
    public function edit(AddCar $addCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AddCar  $addCar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddCar $addCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AddCar  $addCar
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddCar $addCar)
    {
        //
    }
    public function addcar()
    {
        return view('Company.AddCar');
    }
    public function ads(Request $request)
    {
        $cca = DB::table('fuels')->get(); 
        return view('Company.Ads',['request'=>$cca]);
    }
    
}
