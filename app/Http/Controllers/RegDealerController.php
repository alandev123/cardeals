<?php

namespace App\Http\Controllers;

use App\RegDealer;
use App\login;
use DB;
use Illuminate\Http\Request;

class RegDealerController extends Controller
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
      $ree = new RegDealer([    //model name
      'dealername'=> $request->get('dealername'),
      'companyname'=> $request->get('companyname'),
      'state'=> $request->get('state'),
      'district'=> $request->get('district'),
      'city'=> $request->get('city'),
      'email'=> $request->get('email'),
      'phone'=> $request->get('phone'),
      'status'=>'active',
    ]);
      $ree->save();
      $logi = new login([
        //'dealer_id'=>$ree->dealer_id,
        'dealer_id' => DB::getPdo()->lastInsertId(),
        'email'=>$request->get('email'),
        'password'=> $request->get('password'),
        'user_type'=>'dealernotaproved',
        'status'=>'active',
      ]);
      $logi->save();
      return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegDealer  $regDealer
     * @return \Illuminate\Http\Response
     */
    public function show(RegDealer $regDealer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegDealer  $regDealer
     * @return \Illuminate\Http\Response
     */
    public function edit(RegDealer $regDealer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegDealer  $regDealer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegDealer $regDealer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegDealer  $regDealer
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegDealer $regDealer)
    {
        //
    }
}
