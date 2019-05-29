<?php

namespace App\Http\Controllers;

use App\AddAd;
use App\FirstReg;
use DB;
use Illuminate\Http\Request;

class AddAdController extends Controller
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
    public function st(Request $request)
    {
        $email=session()->get('email');
        $a = FirstReg::where('email',$email)->get();
  
        foreach($a as $obj){
        $company_id = $obj -> id;
        }

        $imgPath="";
        if($request->hasFile('image'))
        {
            
            $image = $request->file('image');
            $imgPath = $image->store('/images/car');

        $ad = new AddAd([    //model name
        'companyid'=> $company_id,
        'model'=> $request->get('carname'),
        'image'=>$imgPath,
        'price'=>$request->get('price'),
        'tag'=>$request->get('tag'),
        'date'=>$request->get('date'),
        'bhp'=>$request->get('bhp'),
        'milage'=>$request->get('milage'),
        'varient'=>$request->get('varient'),
        'fuel'=>$request->get('fuel'),
        'trans'=>$request->get('trans'),
        'status'=>0,
        ]);
        
        $ad->save();
        }
        echo "<script>alert('added successfully')</scrtpt>";
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AddAd  $addAd
     * @return \Illuminate\Http\Response
     */
    public function show(AddAd $addAd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AddAd  $addAd
     * @return \Illuminate\Http\Response
     */
    public function edit(AddAd $addAd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AddAd  $addAd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddAd $addAd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AddAd  $addAd
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
        $ads=DB::table('add_ads')
        ->join('first_regs','add_ads.companyid','=','first_regs.id')
        ->where('add_ads.status',1)
        ->orderBy('adid', 'DESC')
        ->get();
        $dds= DB::table('featureds')
        ->orderBy('fid', 'DESC')
        ->paginate(4);
        return view('temp',['request'=>$ads,'req'=>$dds]); 
    }
    public function viewad()
    {
       $ads = DB::table('add_ads')
        ->join('first_regs','add_ads.companyid','=','first_regs.id')
        ->where('add_ads.status',0)
        ->orderBy('adid', 'DESC')
        ->get();
       
        
        return view('Admin.viewad',['request'=>$ads]); 
    }
    public function postad($ddd)
    {
        
        DB::table('add_ads')->where('adid',$ddd)->update(['status'=>1]);
        return redirect('/adminad');
        
    }
    public function removead($ddd)
    {
        DB::table('add_ads')->where('adid',$ddd)->update(['status'=>2]);
        return redirect('/adminad');
    }
    public function features(Request $request)
    {
        $feat=DB::table('first_regs')->where('utype','COMPANY1')->get();
        return view('Admin.featuredcars',['request'=>$feat]);
    }
    public function moread($adid)
    {
        $ads=DB::table('add_ads')
        ->join('first_regs','add_ads.companyid','=','first_regs.id')
        ->join('fuels','add_ads.fuel','=','fuels.fuelid')
        ->where('add_ads.adid',$adid)
        ->get();
     
        return view('temp2',compact('ads')); 
    }
   
}
