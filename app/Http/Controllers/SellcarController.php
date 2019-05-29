<?php

namespace App\Http\Controllers;

use App\Sellcar;
use App\Msgucar;
use App\FirstReg;
use Illuminate\Http\Request;
use DB;

class SellcarController extends Controller
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
        $email=session()->get('email');
        $a = FirstReg::where('email',$email)->get();
        foreach($a as $obj){
            $uid = $obj -> id;
          }
          $imgPath1="";
          $imgPath2="";
          $imgPath3="";
// return $request->all();
        if($request->hasFile('image1')&&$request->file('image1')->isValid())
        {
            
            if($request->hasFile('image2')&&$request->file('image2')->isValid())
            {
                

                if($request->hasFile('image3')&&$request->file('image3')->isValid())
                {
                  
            $image1 = $request->file('image1');
            $image2 = $request->file('image2');
            $image3 = $request->file('image3');
            $imgPath1 = $image1->store('/images/usedcar');
            $imgPath2 = $image2->store('/images/usedcar');
            $imgPath3 = $image3->store('/images/usedcar');
                    
            $usedcar = new Sellcar([
                'user_id'=>$uid,
                'image1'=>$imgPath1,    
                'image2'=>$imgPath2,
                'image3'=>$imgPath3,  
                'make'=>$request->get('make'),
                'model'=>$request->get('model'),
                'cond'=>$request->get('cond'),
                'year'=>$request->get('year'),    
                'km'=>$request->get('km'),  
                'fuel'=>$request->get('fuel'),  
                'state'=>$request->get('state'),
                'district'=>$request->get('district'),
                'description'=>$request->get('description'),
                'price'=>$request->get('price'),
                'availability'=>0,
                 
                ]);
            $usedcar->save();
            return redirect('/sellcar');
                }
            }
        
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sellcar  $sellcar
     * @return \Illuminate\Http\Response
     */
    public function show(Sellcar $sellcar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sellcar  $sellcar
     * @return \Illuminate\Http\Response
     */
    public function edit(Sellcar $sellcar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sellcar  $sellcar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sellcar $sellcar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sellcar  $sellcar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sellcar $sellcar)
    {
        //
    }
    public function searchcar(Request $request)
    {
        $cmp = DB::table('sellcars')->where('availability','=',0)->orderBy('usedcar_id', 'DESC')->paginate(4);
        
        // $posts = Post::->get();
        
       
        return view('User.Viewusedcar',['request'=>$cmp]);

       
    }
    public function viewmore($uid, Request $request)
    {
       
        $cmp = DB::table('sellcars')->where('usedcar_id',$uid)->get();
       
        return view('User.Vmusedcar',['request'=>$cmp]);
    
    }
    public function viewmore1($uid, Request $request)
    {
       
        $cmp = DB::table('sellcars')->where('usedcar_id',$uid)->get();
       
        return view('User.Vmusedcar1',['request'=>$cmp]);
    
    }
    public function uusedcar()
    {
        return view('uusedcarhome');
    }

    public function usearchcar(Request $request)
    {
        $cmp = DB::table('sellcars')->where('availability',0)->orderBy('usedcar_id', 'DESC')->paginate(4);
        return view('vucar',['request'=>$cmp]);

    }
    public function pricel(Request $request)
    {
        $cmp = DB::table('sellcars')->where('availability',0)->orderBy('price', 'ASC')->paginate(4);
        
        return view('User.Viewusedcar',['request'=>$cmp]);

    }
    public function priceh(Request $request)
    {
        $cmp = DB::table('sellcars')->where('availability',0)->orderBy('price', 'DESC')->paginate(4);
        
        return view('User.Viewusedcar',['request'=>$cmp]);

    }
    public function buyucar($usedcar_id)
    {
        $ccn = DB::table('sellcars')
        ->join('first_regs','first_regs.id','=','sellcars.user_id')
        ->where('usedcar_id',$usedcar_id)
        ->get();
        return view('User.buyucar',compact('ccn'));
    }
    public function msgucar(Request $request)
    {
        $email=session()->get('email');
        $a = FirstReg::where('email',$email)->get();
        foreach($a as $obj){
            $myid = $obj -> id;
          }
        $usedcar_id=$request->get('usedcar_id');
        $message=$request->get('message');
        $acs = new Msgucar([
            'usedcar_id'=>$usedcar_id,
            'buyerid'=>$myid,
            'message'=>$message,    
                        
            ]);
        $acs->save();
        return redirect('/searchcar');
    }
    public function mycars()
    {
        $email=session()->get('email');
        $a=DB::table('first_regs')->select('id')->where('email',$email)->get();
       foreach($a as $obj){
        $myid = $obj -> id;
      } 
      $req=DB::table('msgucars')
      ->join('sellcars','sellcars.usedcar_id','=','msgucars.usedcar_id')
      ->join('first_regs','first_regs.id','=','msgucars.buyerid')
      ->where('availability',0)
      ->where('user_id',$myid)
      ->get();
        $b=DB::table('sellcars')->where('user_id',$myid)->get();
        return view('User.mycars',compact('req','b'));
    }

    public function ucaraccept($usedcar_id)
    {
        $r=DB::table('sellcars')->where('usedcar_id',$usedcar_id)->update(['availability'=>1]);
        return redirect('/mycars');
    }
    public function myreqs(Request $request)
    {
        $email=session()->get('email');
        $a=DB::table('first_regs')->select('id')->where('email',$email)->get();
       foreach($a as $obj)
       {
        $myid = $obj -> id;
      } 
      $req=DB::table('msgucars')
      ->join('sellcars','sellcars.usedcar_id','=','msgucars.usedcar_id')
      ->join('first_regs','first_regs.id','=','msgucars.buyerid')
      ->where('buyerid',$myid)
      ->get();
      return view('User.myreq',compact('req'));
      

    }
}
