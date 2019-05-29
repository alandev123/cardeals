<?php

namespace App\Http\Controllers;
// session_start();
use App\login; //model name that included
use App\FirstReg;
use Illuminate\Http\Request;
use Hash;

class LoginController extends Controller
{

    public function store(Request $request)
    {
     
    //  session(['email' => $email]);
    //  $value = session('email');
     $email = $request->get('email');
      $password = $request->get('password');
     // $pass=Hash::make($password);
     $a = login::where('email', $email)->get();
    

    if($a->count() < 1){
        $msg = [
            'msg'=>'Invalid Email',
    ];

    }

     foreach ($a as $object)
        {
        
            $pword = $object->password;
            if(Hash::check($password, $object->password))
            {

               
                $utype = $object->utype;
                $email = $object->email;
                
                // session(['utype' => $utype]);
                // session(['mail' => $mail]);
            
                
                if($utype =='USER')
                {
                    session(['utype' => $utype]);
                    session(['email' => $email]);
                       
                 return view('User.userhome');
                }
               elseif($object->utype =='COMPANY1')
                {
                    session(['utype' => $utype]);
                    session(['email' => $email]);
                return view('Company.Companyhome');//->with('ccs',$value);
                }
                elseif($object->utype =='DEALER1')
                 {
                    session(['utype' => $utype]);
                    session(['email' => $email]);
                 return view('Dealer.dealerhome');;
                 }
                 elseif($object->utype =='ADMIN')
                 {
                    session(['utype' => $utype]);
                    session(['email' => $email]);
                    return view('Admin.adminhome');//->with('ccs',$value);
                 }
                 elseif($object->utype =='COMPANY')
                  {
                    // session(['utype' => $utype]);
                    // session(['email' => $email]);
                    // return view('registration.companyreg'); //->with('ccs',$value);
                    $msg = [
                        'msg'=>'Please wait for approval before login',
                ];
                  }
                 elseif($object->utype =='DEALER')
                  {
                    // session(['utype' => $utype]);
                    // session(['email' => $email]);
                    // return redirect('/');
                    $msg = [
                        'msg'=>'Please wait for approval before login',
                ];
                  }
                 else
                 {
                   return redirect('/logincar');
                 }
            }
            else{
                $msg = [
                        'msg'=>'Invalid Username or password',
                ];
                
            }
    
    }

    return view('login')->with($msg);

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

    public function Logout()
    {
      session()->flush();
      return redirect('/logincar');
    }
    public function Logn()
    {
        return view('login');
    
    }
}
