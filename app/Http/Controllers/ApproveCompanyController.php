<?php

namespace App\Http\Controllers;

use App\ApproveCompany;
use Illuminate\Http\Request;
use App\FirstReg;
use DB;
class ApproveCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $viewdet = DB::table('first_regs')->where('utype','=','COMPANY')->get();
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
     * @param  \App\ApproveCompany  $approveCompany
     * @return \Illuminate\Http\Response
     */
    public function show(ApproveCompany $approveCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ApproveCompany  $approveCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(ApproveCompany $approveCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ApproveCompany  $approveCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApproveCompany $approveCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ApproveCompany  $approveCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApproveCompany $approveCompany)
    {
        //
    }
    public function viewcompany()
    {
        $cmp = DB::table('first_regs')
        ->join('reg_companies','first_regs.email','=','reg_companies.email')
        ->where('utype', '=', 'COMPANY')->get();
       // $cmp = DB::select('select * from reg_companies where utype=COMPANY');
        return view('Admin.approvecompany',['request'=>$cmp]);
    }
    public function bcompany()
    {
        $cmp = DB::table('reg_companies')->where('utype', '=', 'COMPANY1')->get();
       // $cmp = DB::select('select * from reg_companies where utype=COMPANY');
        return view('Admin.blockcompany',['request'=>$cmp]);
    }
    public function unbcompany()
    {
        $cmp = DB::table('reg_companies')->where('utype', '=', 'BLOCKEDCMP')->get();
       // $cmp = DB::select('select * from reg_companies where utype=COMPANY');
        return view('Admin.unblockcompany',['request'=>$cmp]);
    }
    public function ajaxview(Request $request)
    {
        $a=$request->get('datas');
        $viewmore = DB::table('first_regs')->where('email',$a)->get();
        return $viewmore;
    }
    public function approve($cmp)
    {
        $utype = DB::table('logins')->select('utype')->get();
        if($utype='COMPANY'){
            DB::table('logins')->where('email',$cmp)->update(['utype'=>'COMPANY1']);
             DB::table('first_regs')->where('email',$cmp)->update(['utype'=>'COMPANY1']);
            
            return redirect('/approvec');
        }
    }
    public function block($cmp)
    {
        $utype = DB::table('logins')->select('utype')->get();
        if($utype='COMPANY1'){
            DB::table('logins')->where('email',$cmp)->update(['utype'=>'BLOCKEDCMP']);
            DB::table('first_regs')->where('email',$cmp)->update(['utype'=>'BLOCKEDCMP']);
            
            return redirect('/blockc');
        }
    }

    public function unblock($cmp)
    {
        $utype = DB::table('logins')->select('utype')->get();
        if($utype='BLOCKEDCMP'){
            DB::table('logins')->where('email',$cmp)->update(['utype'=>'COMPANY1']);
            DB::table('first_regs')->where('email',$cmp)->update(['utype'=>'COMPANY1']);
            
            return redirect('/unblockc');
        }
    }
}
