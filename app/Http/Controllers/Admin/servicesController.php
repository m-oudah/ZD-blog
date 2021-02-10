<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\servicesRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\services;

class servicesController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    //index
    public function index(){
        $services=services::all();
        $arr['page']="services";
        $arr['services']=$services;
        return view('Admin.Services.typeServices.index',$arr);
    }
    //store
    public function store(Request $request)
    {

        if($request->isMethod('POST')){


                $request->validate(['arName'=>'required','enName'=>'required']);

                $enName=$request->enName;
                $check =services::where('enName',$enName)->first();

                if(!is_null($check)){
                    $services = services::all();
                    $arr['services']=$services;
                    $arr['page']="services";
                    return view('Admin.Services.typeServices.index'
                        ,$arr,['msg'=>'Your Type services Already Added !']);
                }else{
                     $enSlug = str_replace(' ','-',$request->enName);
                     $arSlug = str_replace(' ','-',$request->arName);
                    try {
                        services::create([
                            'enName' => $request->enName,
                            'arName' => $request->arName,
                            'enSlug' => $enSlug,
                            'arSlug' => $arSlug ,
                        ]);
                    }catch(\Exception $e){
                        $services = services::all();
                        $arr['services']=$services;
                        $arr['page']="services";
                        return view('Admin.Services.typeServices.index'
                            ,$arr,['msg'=>'Your Type services Already Added !']);
                    }
                }
                $services = services::all();
                $arr['services']=$services;
                $arr['page']="services";
                return view('Admin.Services.typeServices.index',$arr,
                    ['msg'=>'Success! Add Type Services']);



        }else{

            $arr['page']="services";
            return view('Admin.Services.typeServices.add',$arr);
        }
    }
    //update
    public function update(Request $request, $id)
    {
        $services =services::find($id);
        if($request->isMethod('POST')){
            $request->validate(['arName'=>'required','enName'=>'required']);


                    //remove the speace
                    $arSlug=str_replace(' ','-',$request->arName);
                    $enSlug=str_replace(' ','-',$request->enName);

                    try {
                        $services->enName =$request->enName;
                        $services->arName =$request->arName;
                        $services->enSlug =$enSlug;
                        $services->arSlug =$arSlug;
                        $services->update();
                    }catch (\Exception $e) {
                        $services = services::all();
                        $arr['services']=$services;
                        $arr['page']="services";
                        //$arr['msg'] =$msg;
                        return view('Admin.Services.typeServices.index',$arr,['msg' => 'you already have service in same name']);
                    }
                    //$msg="ok";
                    $services = services::all();
                    $arr['services']=$services;
                    $arr['page']="services";
                    return view('Admin.Services.typeServices.index'
                        ,$arr,['msg'=>'Success! Update Type Services']);



        }else{


            if(!is_null($services)){
                $arr['page']="services";
                $arr['services']=$services;
                return view('Admin.Services.typeServices.update',$arr);
            }else{
                $services = services::all();
                $arr['services']=$services;
                $arr['page']="services";
                //$arr['msg'] =$msg;
                return view('Admin.Services.typeServices.index',$arr);
            }

        }
    }
    //destroy
    public function destroy(Request $request,$id)
    {
        $services=services::find($id);
        if(!is_null($services)){
            if($request->isMethod('POST')){

                deleteImagesFromSubServices($id);
                $services->delete();
                $services = services::all();
                $arr['services']=$services;
                $arr['page']="services";
                return view('Admin.Services.typeServices.index'
                    ,$arr,['msg'=>'Success! Delete Type services']);
            }else{
                $arr['services']=$services;
                $arr['page']="services";
                return view('Admin.Services.typeServices.delete',$arr);
            }
        }else{
            $services = services::all();
            $arr['services']=$services;
            $arr['page']="services";
            return view('Admin.Services.typeServices.index'
                ,$arr,['msg'=>'your Type services already deleted !']);
        }

    }
}
