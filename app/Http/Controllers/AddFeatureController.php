<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\AddFeature;
use App\Feature2;
use Illuminate\Http\Request;
use DB;
use App\FirstReg;

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

        
        $email=session()->get('email');
        $imgPath="";
        if($request->hasFile('image')&&$request->file('image')->isValid())
        {
            $image = $request->file('image');
            $imgPath = $image->store('/images/car');
            
        $ree = new AddFeature([    //model name
            'email'=> $email,
            'car_id'=> $request->get('carname'),
            'image'=>$imgPath,
            'cartype'=>$request->get('cartype'),
            'varient'=>$request->get('varient'),
            'engine'=>$request->get('engine'),
            'fuel'=>$request->get('fuel'),
            'milage'=>$request->get('milage'),
            'power'=>$request->get('power'),
            'torque'=>$request->get('torque'),
            'seat'=>$request->get('seat'),
            'trans'=>$request->get('trans'),
            'gear'=>$request->get('gear'),
            'speed'=>$request->get('speed'),
            'acceleration'=>$request->get('acceleration'),
            'fsuspension'=>$request->get('fsuspension'),
            'rsuspension'=>$request->get('rsuspension'),
            'frontbrake'=>$request->get('frontbrake'),
            'rearbrake'=>$request->get('rearbrake'),
            'tradius'=>$request->get('tradius'),
            'length'=>$request->get('length'),
            'width'=>$request->get('width'),
            'height'=>$request->get('height'),
            'ground'=>$request->get('ground'),
            'wheelbase'=>$request->get('wheelbase'),
            'kerb'=>$request->get('kerb'),
            'grossw'=>$request->get('grossw'),
            'cargo'=>$request->get('cargo'),
            'door'=>$request->get('door'),
            ]);
            $ree->save();
            
            $res = new Feature2([
                'car_id'=> $request->get('carname'),
                'em'=> $email,
               'tid'=>DB::getPdo()->lastInsertid(),
                'abs'=>$request->get('abs'),    
                'pos'=>$request->get('pos'),    
                'pow'=>$request->get('pow'),    
                'ac'=>$request->get('ac'), 
                'rac'=>$request->get('rac'),    
                'msteer'=>$request->get('msteer'), 
                'cruise'=>$request->get('cruise'), 
                'rps'=>$request->get('rps'),    
                'tsn'=>$request->get('tsn'),    

            ]);
            $res->save();
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
    public function companyname()
    {
        $email=session()->get('email');
        $car = DB::table('add_cars')->where('email', '=', $email)->get();
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
