<?php

namespace App\Http\Controllers;

use App\RegCompany; //model name that included
use DB;
use App\FirstReg;
use Illuminate\Http\Request;

class RegCompanyController extends Controller
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
      $utype=session()->get('utype');
      $a = FirstReg::where('email',$email)->get();

      foreach($a as $obj){
        $email = $obj -> email;
        $utype = $obj -> utype;
      }
      $ree = new RegCompany([    //model name
      'email'=>$email,
      'utype'=>$utype,
      'cin'=> $request->get('cin'),
      'headoffice'=> $request->get('headoffice'),
      'website'=> $request->get('website'),
      'year'=> $request->get('year'),
    ]);
      $ree->save();
    return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegCompany  $regCompany
     * @return \Illuminate\Http\Response
     */
    public function show(RegCompany $regCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegCompany  $regCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(RegCompany $regCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegCompany  $regCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegCompany $regCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegCompany  $regCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegCompany $regCompany)
    {
        //
    }
}
