<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\FirstReg;
use App\login;
class ResetController extends Controller
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
    public function reset(Request $request)
    {
        $email = $request->get('email');
        $phone = $request->get('phone');
        $password = $request->get('password');
        
        $a= DB::table('first_regs')->where(['email','=','$email'])->where(['phone','=','$phone'])->get();
        if($a)
        {
            return view('User.userhome');
            //DB::table('logins')->where('email',$cmp)->update(['password'=>$password]);
            
        }
        else
        {
            $msg = [
                'msg'=>'Password Reset Request denied',
        ];
            return view('/logincar');
        }
    }
}
