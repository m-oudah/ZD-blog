<?php

namespace App\Http\Controllers\Admin;

use App\Model\slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class SliderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=slider::all();
        $arr['slider']=$slider;
        $arr['page']="slider";
        return  view('Admin.Slider.index',$arr);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['page']="slider";
        $slider = slider::all();

        $arr['slider']=$slider;

        return  view('Admin.Slider.add',$arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           
             'enTitle' => 'required|min:10',
             'arTitle' => 'required|min:10',
             'baTitle' => 'required|min:10',           
             'img' => 'required|required|mimes:jpg,jpeg|max:300'
         ]);
          $photo=$request->file('img');
          $path=$photo->storeAs('slider','S-'.time().$photo->getClientOriginalName(),'images');
          $enSlug = str_replace(' ','-',$request->enTitle);
          $arSlug = str_replace(' ','-',$request->arTitle);
          $baSlug = str_replace(' ','-',$request->baTitle);
          try {
              slider::create([
                  'enTitle' => $request->enTitle,
                  'arTitle' => $request->arTitle,
                  'baTitle' => $request->baTitle,
                  'img' => $path,
                  'enSlug'=> $enSlug,
                  'arSlug'=> $arSlug,
                  'baSlug'=> $baSlug,
              ]);
          }catch (Exception $e){
              return back()->with('err' , 'you have already added same slider with same title kindly check');
          }
          return redirect()->route('index.Admin.Slider')->with('msg' ,  'New Slider Has been added successfully ');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider =slider::find($id);
      
        $arr['slider']=$slider;
       
        $arr['page']="slider";

        return view('Admin.Slider.update',$arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider =slider::find($id);
        $request->validate([
            'enTitle' => 'required|min:10',
            'arTitle' => 'required|min:10',
            'baTitle' => 'required|min:10',

        ]);
        if(!is_null($request->img)){
            try{
                unlink(public_path('/images/'.$slider->img));
            }catch (\Exception $exception){

            }
            $photo=$request->file('img');
            $path=$photo->storeAs('slider','S-'.time().$photo->getClientOriginalName(),'images');
            $slider->img = $path;
            $slider->update();
        }
        $enSlug = str_replace(' ','-',$request->enTitle);
        $arSlug = str_replace(' ','-',$request->arTitle);
        $baSlug = str_replace(' ','-',$request->baTitle);
        $slider->enTitle = $request->enTitle;
        $slider->arTitle = $request->arTitle;
        $slider->baTitle = $request->baTitle;
        $slider->enSlug = $enSlug;
        $slider->arSlug = $arSlug;
        $slider->baSlug = $baSlug;
     
        $slider->update();
        return redirect()->route('index.Admin.Slider')->with('msg' ,  'Slider Has been updated successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider =slider::find($id);
        try {
            unlink(public_path('/images/'.$slider->img));
            $slider->delete();
        }catch (\Exception $e){
        }
        return redirect()->back()->with('msg' ,  'Slider Has been deleted successfully ');
    }
}
