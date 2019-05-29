<?php

namespace App\Http\Controllers;

use App\FirstReg;
use App\login;
use App\DealerReg;
use Illuminate\Http\Request;
use Hash;
use DB;

class FirstRegController extends Controller
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
      $qe = DB::table('first_regs')->select('email')->get();
      $abc= $request->get('email');
      foreach($qe as $em){
        if($em->email ==$abc){
          echo "<script>alert('Email Already Exist')</script>";
          return view("registration.firstreg");
        }
                
      }
      

      $ree = new FirstReg([    //model name
      'name'=> $request->get('name'),
      'state'=> $request->get('state'),
      'district'=> $request->get('district'),
      'city'=> $request->get('city'),
      'utype'=> 'USER',
      'email'=> $request->get('email'),
      'phone'=> $request->get('phone'),
     
    ]);
    $ree->save();
    $pwd = $request->get('password');
    $hash = Hash::make($pwd);
    $logi = new login([
      'email'=>$request->get('email'),
      //'password'=> $request->get('password'),
      'password'=>$hash,
      'utype'=> 'USER',
      
      'status'=>'active',

    ]);
    $logi->save();
    return redirect('/firstreg')->with('status','Registration Success');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\FirstReg  $firstReg
     * @return \Illuminate\Http\Response
     */
    public function show(FirstReg $firstReg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FirstReg  $firstReg
     * @return \Illuminate\Http\Response
     */
    public function edit(FirstReg $firstReg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FirstReg  $firstReg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FirstReg $firstReg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FirstReg  $firstReg
     * @return \Illuminate\Http\Response
     */
    public function destroy(FirstReg $firstReg)
    {
        //
    }
    public function upload(Request $request)
    {
      $ree = new FirstReg([    //model name
      'name'=> $request->get('name'),
      'state'=> $request->get('state'),
      'district'=> $request->get('district'),
      'city'=> $request->get('city'),
      'utype'=> 'DEALER',
      'email'=> $request->get('email'),
      'phone'=> $request->get('phone'),
      'status'=>'active',
    ]);
    $ree->save();
    $pwd = $request->get('password');
    $hash = Hash::make($pwd);
    $logi = new login([
      'email'=>$request->get('email'),
      //'password'=> $request->get('password'),
      'password'=>$hash,
      'utype'=> 'DEALER',
      
      'status'=>'active',

    ]);
    $logi->save();
    $ree = new DealerReg([    //model name
        'name'=> $request->get('name'),
    ]);
    return redirect('/login')->with('status','Registration Success');
    }
}
