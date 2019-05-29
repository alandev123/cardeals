<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\AddFeature;
use App\Feature2;
use Illuminate\Http\Request;
use DB;
use App\FirstReg;
use App\Addcar;
use App\Performance;
use App\Suspension;
use App\Dimension;
use App\Comfort;
use App\Interior;
use App\Exterior;
use App\Safety;
use App\Entertainment;


class AddFeatureController extends Controller
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

      $cname = $request->get('carname');
        
        $a = AddCar::where('carname',$cname)->get();
       // $a = DB::select("select id from logins where email = $email");

        foreach($a as $obj){
          $cid = $obj -> car_id;
        }
        
        $imgPath="";
        if($request->hasFile('image'))
        {
           
            $image = $request->file('image');
            $imgPath = $image->store('/images/car');
            
       $ree = new AddFeature([    //model name
            'car_id'=> $cid,
            'image'=>$imgPath,
            'cartype'=>$request->get('cartype'),
            'varient'=>$request->get('varient'),
            'entype'=>$request->get('entype'),
            'endes'=>$request->get('endes'),
            'cc'=>$request->get('cc'),
            'power'=>$request->get('power'),
            'torque'=>$request->get('torque'),
            'cylinder'=>$request->get('cylinder'),
            'valves'=>$request->get('valves'),
            'dtype'=>$request->get('dtype'),
            'fsupply'=>$request->get('fsupply'),
            'trans'=>$request->get('trans'),
            'gear'=>$request->get('gear'),
            'clutch'=>$request->get('clutch'),
            'price'=>$request->get('price'),
            ]);
       $ree->save();
       $varid = DB::getPdo()->lastInsertid();

       $res = new Performance([
           'varient_id'=>$varid,
           'speed'=>$request->get('speed'),    
           'acce'=>$request->get('acce'),    
           'braking'=>$request->get('braking'),    
           'milage'=>$request->get('milage'), 
           'fuel'=>$request->get('fuel'),    
           'tcapacity'=>$request->get('tcapacity'), 
           ]);
       $res->save();

       $red = new Suspension([
           'varient_id'=>$varid,
           'fsus'=>$request->get('fsus'),    
           'rsus'=>$request->get('rsus'),    
           'shock'=>$request->get('shock'),    
           'steert'=>$request->get('steert'), 
           'steerc'=>$request->get('steerc'),    
           'tradius'=>$request->get('tradius'), 
           ]);
       $red->save();

       $ref = new Dimension([
           'varient_id'=>$varid,
           'length'=>$request->get('length'),    
           'width'=>$request->get('width'),    
           'height'=>$request->get('height'),    
           'wbase'=>$request->get('wbase'), 
           'ground'=>$request->get('ground'),    
           'kweight'=>$request->get('kweight'), 
           'cvolume'=>$request->get('cvolume'),    
           'trtype'=>$request->get('trtype'),    
           'tsize'=>$request->get('tsize'), 
           'seat'=>$request->get('seat'),    
           'door'=>$request->get('door'), 
           ]);
       $ref->save();

       $reg = new Comfort([
           'varient_id'=>$varid,
           'powerst'=>$request->get('powerst'),    
           'powf'=>$request->get('powf'),    
           'powr'=>$request->get('powr'),    
           'acctrl'=>$request->get('acctrl'), 
           'rto'=>$request->get('rto'),    
           'tlight'=>$request->get('tlight'), 
           'rar'=>$request->get('rar'),    
           'fch'=>$request->get('fch'),    
           'rac'=>$request->get('rac'), 
           'rshr'=>$request->get('rshr'),    
           'rps'=>$request->get('rps'), 
           'msteer'=>$request->get('msteer'),    
           'navigation'=>$request->get('navigation'),    
           'aqc'=>$request->get('aqc'),    
           'rflo'=>$request->get('rflo'), 
           'cruise'=>$request->get('cruise'),    
           'ssbtn'=>$request->get('ssbtn'), 
           'gsi'=>$request->get('gsi'),    
           
           ]);
       $reg->save();

       $reh = new Interior([
           'varient_id'=>$varid,
           'ac'=>$request->get('ac'),    
           'heater'=>$request->get('heater'),    
           'tmeter'=>$request->get('tmeter'),    
           'clock'=>$request->get('clock'), 
           'easeat'=>$request->get('easeat'),    
           'dtd'=>$request->get('dtd'), 
           'tameter'=>$request->get('tameter'),    
           'lseat'=>$request->get('lseat'),    
           'odo'=>$request->get('odo'), 
           'lswheel'=>$request->get('lswheel'),    
                     
           ]);
       $reh->save();

       $rej = new Exterior([
           'varient_id'=>$varid,
           'ahlamp'=>$request->get('ahlamp'),    
           'ffog'=>$request->get('ffog'),    
           'rfog'=>$request->get('rfog'),    
           'rww'=>$request->get('rww'), 
           'awheel'=>$request->get('awheel'),    
           'sroof'=>$request->get('sroof'), 
           'rrail'=>$request->get('rrail'),    
           'orvm'=>$request->get('orvm'),    
           'rsw'=>$request->get('rsw'), 
           'rwash'=>$request->get('rwash'),    
           'wcover'=>$request->get('wcover'), 
           'spoiler'=>$request->get('spoiler'),    
           'carrier'=>$request->get('carrier'),    
           'rmi'=>$request->get('rmi'), 
           'cgrill'=>$request->get('cgrill'),              
           ]);
       $rej->save();
 

       $rek = new Safety([
           'varient_id'=>$varid,
           'abs'=>$request->get('abs'),    
           'ebd'=>$request->get('ebd'),    
           'cenlock'=>$request->get('cenlock'),    
           'psense'=>$request->get('psense'), 
           'adlock'=>$request->get('adlock'),    
           'bassist'=>$request->get('bassist'), 
           'cslock'=>$request->get('cslock'),    
           'pabag'=>$request->get('pabag'),    
           'rsabag'=>$request->get('rsabag'), 
           'dabag'=>$request->get('dabag'),    
           'fsabag'=>$request->get('fsabag'), 
           'dnrvm'=>$request->get('dnrvm'),    
           'sbwarn'=>$request->get('sbwarn'),    
           'adseat'=>$request->get('adseat'),  
           'dawarn'=>$request->get('dawarn'),      
           'klentry'=>$request->get('klentry'),    
           'scsys'=>$request->get('scsys'), 
           'hass'=>$request->get('hass'),    
           'rcam'=>$request->get('rcam'), 
           'atdev'=>$request->get('atdev'),    
           'adu'=>$request->get('adu'),    
           'pdl'=>$request->get('pdl'), 
           'alarm'=>$request->get('alarm'),    
           'tctrl'=>$request->get('tctrl'), 
           'ei'=>$request->get('ei'),    
           'ecwarn'=>$request->get('ecwarn'),    
           'fhlamp'=>$request->get('fhlamp'),  

        ]);
      $rek->save();


      $rel = new Entertainment([
           'varient_id'=>$varid,
           'cd'=>$request->get('cd'),    
           'radio'=>$request->get('radio'),    
           'speaker'=>$request->get('speaker'),    
           'usb'=>$request->get('usb'), 
           'bt'=>$request->get('bt'),    
           'rspeaker'=>$request->get('rspeaker'), 
             
                  
        ]);
    $rel->save();
        }
            return redirect('/addfeat');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AddFeature  $addFeature
     * @return \Illuminate\Http\Response
     */
    public function show(AddFeature $addFeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AddFeature  $addFeature
     * @return \Illuminate\Http\Response
     */
    public function edit(AddFeature $addFeature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AddFeature  $addFeature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddFeature $addFeature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AddFeature  $addFeature
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddFeature $addFeature)
    {
        //
    }
    public function companyname(Request $request)
    {
        $email=session()->get('email');
        //$a = DB::select("select 'id' from first_regs where 'email' = $email");
        $c = DB::table('first_regs')->where('email', '=', $email)->get();
        foreach($c as $obj){
            $a = $obj -> id;
            }
            
        $car = DB::table('add_cars')->where('company_id', '=', $a)->get();

        
        return view('Company.addfeatures',['request'=>$car]);
    }
     public function request(request $request)
     {
         $file_path = 'uploads/';
         $image = Input::file('image');
         $image_name = time() . $image->getClientOriginalName();
         $image->move($file_path, $image_name);
     }
}