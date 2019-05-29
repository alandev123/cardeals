<?php

namespace App\Http\Controllers;

use App\Rating;
use App\FirstReg;
use DB;
use Illuminate\Http\Request;
class RatingController extends Controller
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
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        //
    }
    public function results(Request $request)
    {
       
       $v=$request->get('modelname');
       $vz2 = DB::table('add_cars')->select('carname')->where('car_id',$v)->get();
       foreach($vz2 as $vvz)
        {
            $vz1 = $vvz -> carname;
        }
      $rate = DB::table('ratings')->where('car_id',$v)
      ->join('first_regs', 'ratings.user_id','=','first_regs.id')
      ->get();
      foreach($rate as $rating)
      {
    $v = $rating -> rating;
    }   


    
    $make1=$request->get('companyname');
        $make2=$request->get('companyname1');
        $ml1=$request->get('modelname');
         $m1 = DB::table('add_cars')->select('carname')->where('car_id',$ml1)->get();
       foreach($m1 as $vv)
        {
            $model1 = $vv -> carname;
        }
        $ml2=$request->get('modelname1');
        $m2 = DB::table('add_cars')->select('carname')->where('car_id',$ml2)->get();
       foreach($m2 as $vv1)
        {
            $model2 = $vv1 -> carname;
        }
        $rati = DB::table('ratings')->where('car_id',$ml2)
        ->join('first_regs', 'ratings.user_id','=','first_regs.id')
        ->get();
        foreach($rati as $rati1){
            $rati2 = $rati1 -> rating;
        }


        $va1=$request->get('varient');
        $v1 = DB::table('add_features')->select('varient')->where('varient_id',$va1)->get();
       foreach($v1 as $v1v)
        {
            $var1 = $v1v -> varient;
        }

        

        $va2=$request->get('varient1');
        $v2 = DB::table('add_features')->select('varient')->where('varient_id',$va2)->get();
        foreach($v2 as $v2v)
         {
             $var2 = $v2v -> varient;
         }
         $ground1=$request->get('ground');
         $ground2=$request->get('ground1');
         if($ground2 > '199')
         {
            
             $grnd2 = 5;
         }
         elseif($ground2 < '199' && $ground2 > '189')
         {
            
             $grnd2 = 4;
         }
         elseif($ground2 < '190' && $ground2 > '180')
            {
             
                $grnd2 = 3;
            }
            elseif($ground2 < '181' && $ground2 > '170')
            {
               
                $grnd2 = 2;
            }
            else
            {
                
                $grnd2 = 1;
            }
        $type1=$request->get('cartypec');
        $type2=$request->get('cartypec1');

       

        $fuel1=$request->get('fuel');
        $fuel2=$request->get('fuel1');

        $milage1=$request->get('milage');
        $milage2=$request->get('milage1');

        if($milage2 > 25 && $milage2 = 25)
        {
         $milage02 = 5;
        }
        elseif( $milage2 < 25 && $milage2 > 17)
        {
         $milage02 = 4;
        }
        elseif( $milage2 < 18 && $milage2 > 13)
        {
         $milage02 = 3;
        }
        elseif( $milage2 < 14 && $milage2 > 9)
        {  
         $milage02 = 2;
        }
        elseif( $milage2 < 10)
        {
         $milage02 = 1;
        }
        $length1=$request->get('length');
        $length2=$request->get('length1');
        $width1=$request->get('width');
        $width2=$request->get('width1');
        $height1=$request->get('height');
        $height2=$request->get('height1');
        $wbase1=$request->get('wbase');
        $wbase2=$request->get('wbase1');

        $fuel2=$request->get('fuel1');
        
       
    
            if($ground1 > '199')
            {
                $ground01 = "Perfect Vehicle for Offroad Drive ";
                $grnd = 5;
            }
            elseif($ground1 < '199' && $ground1 > '189')
            {
                $ground01 = " A Good Offroader";
                $grnd = 4;
            }
            elseif($ground1 < '190' && $ground1 > '180')
            {
                $ground01 = "Moderate Ground Clearance for offroad drives";
                $grnd = 3;
            }
            elseif($ground1 < '181' && $ground1 > '170')
            {
                $ground01 = "Offroad Drives are difficult";
                $grnd = 2;
            }
            else
            {
                $ground01 = "The vehicle is not a Offroader";
                $grnd = 1;
            }


            if($milage1 > 25 && $milage1 = 25)
            {
             $milage01 = 5;
            }
            elseif( $milage1 < 25 && $milage1 > 17)
            {
             $milage01 = 4;
            }
            elseif( $milage1 < 18 && $milage1 > 13)
            {
             $milage01 = 3;
            }
            elseif( $milage1 < 14 && $milage1 > 9)
            {  
             $milage01 = 2;
            }
            elseif( $milage1 < 10)
            {
             $milage01 = 1;
            
             
            
        }
       
        
       
       return view('User.Results',['make1'=>$make1,'make2'=>$make2,'model1'=>$model1,'model2'=>$model2,'var1'=>$var1,'var2'=>$var2,'vz1'=>$vz1,'request'=>$ground01,'req'=>$milage01,
       'fuel'=>$fuel1,'fuel1'=>$fuel2,'mil'=>$milage1,'gr'=>$ground1,'rate'=>$rate,'v'=>$v,'req1'=>$milage02,
       'grnd'=>$grnd,'grnd2'=>$grnd2,'mil1'=>$milage2,'type1'=>$type1,'type2'=>$type2,'fuel1'=>$fuel1,'fuel2'=>$fuel2,'ground1'=>$ground1,'ground2'=>$ground2,
       'length1'=>$length1,'length2'=>$length2,'width1'=>$width1,'width2'=>$width2,'height1'=>$height1,'height2'=>$height2,'wbase1'=>$wbase1,'wbase2'=>$wbase2,'rati'=>$rati]);

    }

    public function comments(Request $request)
    {
    $carname = $request->get('modelname');
    $rate = DB::table('add_cars')->where('car_id',$carname)->get();
    return view('User.comments',['rate'=>$rate]);
    }
    public function addrate(Request $request)
    {
        $carid = $request->get('iid');

        $email=session()->get('email');
        $a = FirstReg::where('email',$email)->get();

        foreach($a as $obj){
        $userid = $obj -> id;
        }
        $ree = new Rating([    //model name
            'user_id'=> $userid,
            'car_id'=>$carid,
            'rating'=> $request->get('rating'),
            'comment'=>$request->get('comment'),
            ]);
            $ree->save();
            return redirect('/comments')->with('success','Added Successfully');

    }
}

       
        
    