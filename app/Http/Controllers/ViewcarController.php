<?php

namespace App\Http\Controllers;
use DB;
use App\AddFeature;
use Illuminate\Http\Request;


class ViewcarController extends Controller
{
    
    public function viewcar(Request $request)
    {
        $email=session()->get('email');
       
        $c = DB::table('first_regs')->where('email', '=', $email)->get();
        foreach($c as $obj){
            $a = $obj -> id;
            }
            
        $car = DB::table('add_cars')->where('company_id',$a)->get();

        
        return view('Company.Viewcar',['request'=>$car]);
    }
    public function carajax(Request $request)
    {
        $id=$_POST['carID'];
        
        $varient = DB::table('add_features')->where('car_id', '=', $id)->get()->toJson();
        return $varient;
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
    public function newcarview1(Request $request)
    {   
        $ca = DB::table('first_regs')->where('utype','COMPANY1')->get();
        return view('viewcar',['request'=>$ca]);
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
