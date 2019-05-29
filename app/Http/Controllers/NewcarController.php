<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Newcar extends Controller
{
    public function comparecompany(Request $request)
    {   
        $ca = DB::table('first_regs')->where('utype','COMPANY1')->get();
        return view('User.Usercomparecar',['request'=>$ca]);
    }
    

    

    public function varajax(Request $request)
    {
        $id=$_POST['varID'];
        
        // $varient = DB::table('add_features')->where('varient_id', '=', $id)->get()->toJson();
        // return $varient;
        //return $request->all()['vID'];
        

        $dets = DB::select('SELECT * FROM `add_features` as a,`performances` as b,`suspensions` as c,`dimensions` as d,`comforts` as e,`interiors` as f,`exteriors` as g,
        `safeties` as h,`entertainments` as i where a.varient_id=b.varient_id and a.varient_id=c.varient_id and a.varient_id=d.varient_id and 
        a.varient_id=e.varient_id and a.varient_id=e.varient_id and a.varient_id=f.varient_id and a.varient_id=g.varient_id and 
        a.varient_id=h.varient_id and a.varient_id=i.varient_id and a.varient_id=?',[$id]);
       // $dets = DB::table('add_features')->where('varient_id', '=', $id)->get();
        //$q=$id;
        return $dets;
       // return $q;
    }
    public function newcarview(Request $request)
    {   
        $ca = DB::table('first_regs')->where('utype','COMPANY1')->get();
        return view('User.Userviewcar',['request'=>$ca]);
    }
    public function ucarajax(Request $request)
    {
        $id=$_POST['modelID'];
        
        $model = DB::table('add_cars')->where('company_id',$id)->get()->toJson();
        return $model;
    }
    public function uservarientajax(Request $request)
    {
        $id=$_POST['varientID'];
        
        // $varient = DB::table('add_features')->where('varient_id', '=', $id)->get()->toJson();
        // return $varient;
        //return $request->all()['vID'];
        

        $dets = DB::select('SELECT * FROM `add_features` as a,`performances` as b,`suspensions` as c,`dimensions` as d,`comforts` as e,`interiors` as f,`exteriors` as g,
        `safeties` as h,`entertainments` as i where a.varient_id=b.varient_id and a.varient_id=c.varient_id and a.varient_id=d.varient_id and 
        a.varient_id=e.varient_id and a.varient_id=e.varient_id and a.varient_id=f.varient_id and a.varient_id=g.varient_id and 
        a.varient_id=h.varient_id and a.varient_id=i.varient_id and a.varient_id=?',[$id]);
       // $dets = DB::table('add_features')->where('varient_id', '=', $id)->get();
        //$q=$id;
        return $dets;
       // return $q;
    }
}
