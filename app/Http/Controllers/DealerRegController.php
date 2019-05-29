<?php

namespace App\Http\Controllers;

use App\DealerReg;
use App\FirstReg;
use App\Login;
use App\bookr;
use DB;
use Hash;
use Illuminate\Http\Request;

class DealerRegController extends Controller
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
            return view("registration.dealerreg");
          }
                  
        }

    $ree = new FirstReg([    //model name
        'name'=> $request->get('name'),
        'state'=> $request->get('state'),
        'district'=> $request->get('district'),
        'city'=> $request->get('city'),
        'utype'=> 'DEALER',
        'email'=> $request->get('email'),
        'phone'=> $request->get('phone'),
       
      ]);
      $ree->save();
      $did = DB::getPdo()->lastInsertid();

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
      $rev = new DealerReg([    //model name
          'dealerid'=>$did,
          'manid'=>$request->get('manufacturer'),

        ]);
          $rev->save();
        
      
      return redirect('/logincar')->with('status','Registration Success');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DealerReg  $dealerReg
     * @return \Illuminate\Http\Response
     */
    public function show(DealerReg $dealerReg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DealerReg  $dealerReg
     * @return \Illuminate\Http\Response
     */
    public function edit(DealerReg $dealerReg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DealerReg  $dealerReg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DealerReg $dealerReg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DealerReg  $dealerReg
     * @return \Illuminate\Http\Response
     */
    public function destroy(DealerReg $dealerReg)
    {
        //
    }
    public function invite(Request $request)
    {
        return view('Company.invite');
    }
    public function register(Request $request)
    {
        $man = DB::table('first_regs')->where('utype','COMPANY1')->get();

        return view('registration.dealerreg',compact('man'));
    }
    public function viewdealer(Request $request)
    {
        $email=session()->get('email');
      $a = FirstReg::where('email',$email)->get();

      foreach($a as $obj){
        $iid = $obj -> id;
      }

        $req=DB::table('first_regs')->join('dealer_regs','first_regs.id','=','dealer_regs.dealerid')
        ->where('manid',$iid)
         ->get();
        return view('Company.viewdealer',compact('req'));
    }
    public function approvedealer(Request $request)
    {
        $email=session()->get('email');
        $a = FirstReg::where('email',$email)->get();
  
        foreach($a as $obj){
          $iid = $obj -> id;
        }
  
          $req=DB::table('first_regs')->join('dealer_regs','first_regs.id','=','dealer_regs.dealerid')
          ->where('manid',$iid)
          ->where('utype','DEALER')   
          ->get();
          return view('Company.approvedealer',compact('req'));
    }
    public function aprvdealer($cmp)
    {
        $utype = DB::table('logins')->select('utype')->get();
        if($utype='DEALER'){
            DB::table('logins')->where('email',$cmp)->update(['utype'=>'DEALER1']);
             DB::table('first_regs')->where('email',$cmp)->update(['utype'=>'DEALER1']);
            
            return redirect('/viewdealer');
        }
    }
    public function newcarview(Request $request)
    {   
        $ca = DB::table('first_regs')->where('utype','COMPANY1')->get();
        return view('User.bookcar',['request'=>$ca]);
    }
    public function book(Request $request)
    {

      $email=session()->get('email');
        $a = FirstReg::where('email',$email)->get();
  
        foreach($a as $obj){
          $iid = $obj -> id;
        }

      $company=$request->get('companyname');
      $model=$request->get('modelname');
      $varient=$request->get('varient');
      $a=DB::table('dealer_regs')
      ->join('first_regs','first_regs.id','=','dealer_regs.dealerid')
      ->where('utype','DEALER1')
      ->where('manid',$company)->get();
      $b=DB::table('add_features')
      ->where('varient_id',$varient)->get();
          return view('User.bookdone',compact('iid','a','b','model'));
    }
    public function postbook(Request $request)
    {
      $email=session()->get('email');
      $a = FirstReg::where('email',$email)->get();

      foreach($a as $obj){
        $userid = $obj -> id;
      }

      $ree = new bookr([    //model name
        'manid'=> $request->get('manid'),
        'userid'=>$userid,
        'district'=> $request->get('district'),
        'model'=> $request->get('model'),
        'varient'=> $request->get('varient'),
               
      ]);
      $ree->save();
      return redirect('/book');
    }
    public function dbook(Request $request)
    {
      $email=session()->get('email');
      $a = FirstReg::where('email',$email)->get();

      foreach($a as $obj){
        $dist = $obj -> district;
      }
      $bb=DB::table('bookrs')
      ->join('first_regs','bookrs.userid','=','first_regs.id')
      ->join('dealer_regs','bookrs.manid','=','dealer_regs.manid')
      ->where('bookrs.district',$dist)->get();
      return view('Dealer.dbook',compact('bb'));
    }
}
