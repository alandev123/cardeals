<?php

namespace App\Http\Controllers;

use App\RegCompany; //model name that included
use DB;
use App\FirstReg;
use App\Login;
use Mail;
use Illuminate\Http\Request;
use Hash;

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
   
        $qe = DB::table('first_regs')->select('email')->get();
        $abc= $request->get('email');
        foreach($qe as $em){
          if($em->email ==$abc){
            echo "<script>alert('Email Already Exist')</script>";
            return view("registration.companyreg");
          }
                  
        }

    $ree = new FirstReg([    //model name
        'name'=> $request->get('name'),
        'state'=> $request->get('state'),
        'district'=> $request->get('district'),
        'city'=> $request->get('city'),
        'utype'=> 'COMPANY',
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
        'utype'=> 'COMPANY',
        
        'status'=>'active',
  
      ]);
      $logi->save();
      $rev = new RegCompany([    //model name
          'email'=> $request->get('email'),
          'cin'=> $request->get('cin'),
          'headoffice'=> $request->get('headoffice'),
          'website'=> $request->get('website'),
          'year'=> $request->get('year'),
        ]);
          $rev->save();
        
      
      return redirect('/registrationinvite')->with('status','Registration Success');


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
    public function generateman()
    {
        return view('Admin.Generateman');
    }
    public function generatelink1(Request $request)
    {
        $email=$request->get('email');
        $link = "127.0.0.1:8000/registrationinvite";
        $data = array('email' => $email, 'link'=>$link);
        Mail::send('emails.email', $data, function($message)use($email)
    {
        $message->from('author.cardeals@gmail.com','author@cardeals.com');
        $message->to($email, $email)->subject('You are invited to our website follow the link to register with us');
    });
    return view('Admin.Generateman');

    }
    public function generatelink2(Request $request)
    {
        $email=$request->get('email');
        $link = "127.0.0.1:8000/cardealsinvite";
        $data = array('email' => $email, 'link'=>$link);
        Mail::send('emails.email1', $data, function($message)use($email)
    {
        $message->from('author.cardeals@gmail.com','author@cardeals.com');
        $message->to($email, $email)->subject('You are invited to our website follow the link to register with us');
    });
    return view('Company.invite');

    }
    public function registrationinvite()
    {
        return view('registration.companyreg');
    }
}
