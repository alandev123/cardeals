<?php

namespace App\Http\Controllers;

use App\Uadvice;
use Illuminate\Http\Request;
use App\FirstReg;
use DB;
class UadviceController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Uadvice  $uadvice
     * @return \Illuminate\Http\Response
     */
    public function show(Uadvice $uadvice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Uadvice  $uadvice
     * @return \Illuminate\Http\Response
     */
    public function edit(Uadvice $uadvice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Uadvice  $uadvice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uadvice $uadvice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Uadvice  $uadvice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uadvice $uadvice)
    {
        //
    }
    public function advicereq (Request $request)
    {
        $email=session()->get('email');
      $userid = DB::table('first_regs')->where('email',$email)->get();
       foreach($userid as $obj){
        $uid = $obj -> id;
       }

        $adv = new Uadvice([    
            'budget'=> $request->get('budget'),
            'transmission'=> $request->get('trans'),
            'pormi'=> $request->get('porm'),
            'fuel'=> $request->get('fuel'),
            'build'=> $request->get('build'),
            'usage'=> $request->get('usage'),
            'userid'=> $uid,

            ]);
            $adv->save();
            return redirect('/advice')->with('success','Request Successfull');
        
    }
    public function suggest(Request $request)
    {
        $sug=DB::table('uadvices')
        ->join('first_regs','uadvices.userid','=','first_regs.id')
        ->get();
        return view('User.suggest',compact('sug'));
    }
    public function addsug($adviceid)
    {
        $adv=DB::table('uadvices')
        ->where('adviceid',$adviceid)
        ->get();
        return view('User.posadv',compact('adv'));
    }
}
