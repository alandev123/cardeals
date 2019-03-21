<?php

namespace App\Http\Controllers;

use App\RegUser;
use App\login; //model name that included
use DB;
use Illuminate\Http\Request;

class RegUserController extends Controller
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
      $ree = new RegUser([    //model name
      'name'=> $request->get('name'),
      'state'=> $request->get('state'),
      'district'=> $request->get('district'),
      'age'=> $request->get('age'),
      'gender'=> $request->get('gender'),
      'email'=> $request->get('email'),
      'phone'=> $request->get('phone'),
      'status'=>'status',

      //'status'=>'user'
    ]);
      $ree->save();
      $logi = new login([
        'user_id' => DB::getPdo()->lastInsertId(),
        'email'=>$request->get('email'),
        'password'=> $request->get('password'),
        'user_type'=>'user',
        'status'=>'active',
      ]);

    $logi->save();
    return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegUser  $regUser
     * @return \Illuminate\Http\Response
     */
    public function show(RegUser $regUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegUser  $regUser
     * @return \Illuminate\Http\Response
     */
    public function edit(RegUser $regUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegUser  $regUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegUser $regUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegUser  $regUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegUser $regUser)
    {
        //
    }


}
