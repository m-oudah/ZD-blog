<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\services;
use App\Model\subServices;

class subServicesController extends Controller
{
    public function __constract(){
        $this->middleware('auth');
    }

    //index
    public function index()
    {
        $subServices=subServices::all();
        $arr['subServices']=$subServices;
        $arr['page']="subServices";
        return view('Admin.Services.subServices.index',$arr);
    }
    //store
    public function store(Request $request)
    {
        $subServices =subServices::all();
        if($request->isMethod('POST')){

            $enName=$request->enName;
            $check =subServices::where('enName',$enName)->first();
            if(!is_null($check)){

                $subServices=subServices::all();
                $arr['subServices']=$subServices;
                $arr['page']="subServices";
                return view('Admin.Services.subServices.index',
                    $arr,['msg'=>'your sub Services Already Added!']);
            }else{


                if(!is_null($request->classId)
                    && !is_null($request->arName)
                    && !is_null($request->enName)
                    && !is_null($request->img)
                ){
                    $this->validate($request, [
                        'img'  => 'required|image|mimes:jpg,jpeg,png,gif|max:100'
                    ]);

                    if(!is_null($request->img)){
                        $photo=$request->file('img');
                        $path=$photo->storeAs('subServices','A-'.time().$photo->getClientOriginalName(),'images');

                    //remove the speace
                    $enSlug = str_replace(' ','-',$request->enName);
                    $arSlug = str_replace(' ','-',$request->arName);

                        try {
                            subServices::create([
                                'enName' =>$request->enName,
                                'arName' =>$request->arName,
                                'enSlug' =>$enSlug,
                                'arSlug' =>$arSlug,
                                'classId' =>$request->classId,
                                'img' => $path
                            ]);
                        }catch (\Exception $e){
                            $subServices=subServices::all();
                            $arr['subServices']=$subServices;
                            $arr['page']="subServices";
                            return view('Admin.Services.subServices.index',$arr
                                ,['msg'=>'Opps! You Already have sub service in same name !']);
                        }

                    }else{
                        $subServices=subServices::all();
                        $arr['subServices']=$subServices;
                        $arr['page']="subServices";
                        return view('Admin.Services.subServices.index',$arr
                            ,['msg'=>'Opps! You did not add all information !']);
                    }


                    $subServices=subServices::orderBy('id','desc')->get();


                    $arr['subServices']=$subServices;
                    $arr['page']="subServices";
                    return view('Admin.Services.subServices.index'
                        ,$arr,['msg'=>'Success! Add sub Services']);
                }else{
                    $subServices=subServices::all();
                    $arr['subServices']=$subServices;
                    $arr['page']="subServices";
                    return view('Admin.Services.subServices.index',$arr
                        ,['msg'=>'Opps! You did not add all information !']);
                }
            }

        }else{
            $services=services::all();
            $arr['services']=$services;
            $arr['page']="subServices";
            return view('Admin.Services.subServices.add',$arr);

        }
    }

    //update
    public function update(Request $request, $id)
    {
        $subServices=subServices::find($id);
        $services = services::all();
        if($request->isMethod('post')){



            if(!is_null($request->img)){

                $this->validate($request, [
                    'img'  => 'required|image|mimes:jpg,jpeg,png,gif|max:100'
                ]);


                try{
                    unlink(public_path('/images/'.$subServices->img));
                }catch (\Exception $exception){

                }


                $photo =$request->file('img');
                $path=$photo->storeAs('subServices','A-'.time().$photo->getClientOriginalName(),'images');
                $subServices->img=$path;
                $subServices->update();
            }

            if(    !is_null($request->input('enName'))
                || !is_null($request->input('arName'))
                || !is_null($request->input('classId'))
            ) {

                //remove the speace
                $enSlug = str_replace(' ','-',$request->enName);
                $arSlug = str_replace(' ','-',$request->arName);

                $subServices->enName =$request->enName;
                $subServices->arName =$request->arName;
                $subServices->classId =$request->classId;
                $subServices->enSlug =$enSlug;
                $subServices->arSlug =$arSlug;
                $subServices->update();
                $subServices=subServices::all();
                $arr['subServices']=$subServices;
                $arr['page']="subServices";
                return view('Admin.Services.subServices.index'
                    ,$arr,['msg'=>'Success! Update sub Services']);
            }else{
                $subServices=subServices::find($id);
                $arr['subServices']=$subServices;
                $arr['services']=$services;
                $arr['page']="subServices";
                return view('Admin.Services.subServices.update'
                    ,['msg'=>'you did not added all information'],$arr);
            }


        }else{

            $subServices=subServices::find($id);
            $arr['subServices']=$subServices;
            $arr['services']=$services;
            $arr['page']="subServices";
            return view('Admin.Services.subServices.update',$arr);

        }
    }
    //delete
    public function destroy(Request $request,$id)
    {
        $subServices=subServices::find($id);
        if(!is_null($subServices)){
            if($request->isMethod('POST')){

                try{
                    unlink(public_path('/images/'.$subServices->img));
                }catch (\Exception $exception){

                }
                $subServices->delete();
                $subServices = subServices::all();
                $arr['subServices']=$subServices;
                $arr['page']="subServices";
                return view('Admin.Services.subServices.index'
                    ,$arr,['msg'=>'Success! Delete Sub Service Info']);
            }else{
                $arr['subServices']=$subServices;
                $arr['page']="subServices";
                return view('Admin.Services.subServices.delete',$arr);
            }
        }else{
            $subServices = subServices::all();
            $arr['subServices']=$subServices;
            $arr['page']="subServices";
            //$arr['msg'] =$msg;
            return view('Admin.Services.subServices.index'
                ,$arr,['msg'=>'your sub Service already deleted !']);
        }
    }
}
