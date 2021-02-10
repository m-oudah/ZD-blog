<?php

namespace App\Http\Controllers\Admin;

use App\Model\supportSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class supportSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections=supportSection::all();
        $arr['sections']=$sections;
        $arr['page']="sections";
        return  view('Admin.Support.Sections.index',$arr);
    }

    


    public function store(Request $request)
    {
        if($request->isMethod('POST')){


            $request->validate(['arName'=>'required','enName'=>'required']);

            $enName=$request->enName;
            $check =supportSection::where('enName',$enName)->first();

            if(!is_null($check)){
                $sections = supportSection::all();
                $arr['sections']=$categs;
                $arr['page']="sections";
                return view('Admin.Support.Sections.index'
                    ,$arr,['msg'=>'Your Section Already Added !']);
            }else{
                 $enSlug = str_replace(' ','-',$request->enName);
                 $arSlug = str_replace(' ','-',$request->arName);
                try {
                    supportSection::create([
                        'enName' => $request->enName,
                        'arName' => $request->arName,
                        'enSlug' => $enSlug,
                        'arSlug' => $arSlug ,
                    ]);
                }catch(Exception $e){
                    $categs = supportSection::all();
                    $arr['sections']=$categs;
                    $arr['page']="sections";
                    return view('Admin.Support.Sections.index'
                        ,$arr,['msg'=>'Your Section Already Added !']);
                }
            }
            $sections = supportSection::all();
            $arr['sections']=$sections;
            $arr['page']="sections";
            return view('Admin.Support.Sections.index',$arr,
                ['msg'=>'Success! Add Section']);

        }else{

            $arr['page']="sections";
            return view('Admin.Support.Sections.add',$arr);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\support_section  $support_section
     * @return \Illuminate\Http\Response
     */
    public function show(support_section $support_section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\support_section  $support_section
     * @return \Illuminate\Http\Response
     */
    public function edit(support_section $support_section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\support_section  $support_section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sections =supportSection::find($id);
        if($request->isMethod('POST')){
            $request->validate(['arName'=>'required','enName'=>'required']);


                    //remove the speace
                    $arSlug=str_replace(' ','-',$request->arName);
                    $enSlug=str_replace(' ','-',$request->enName);

                    try {
                        $sections->enName =$request->enName;
                        $sections->arName =$request->arName;
                        $sections->enSlug =$enSlug;
                        $sections->arSlug =$arSlug;
                        $sections->update();
                    }catch (\Exception $e) {
                        $sections = supportSection::all();
                        $arr['sections']=$sections;
                        $arr['page']="sections";
                        //$arr['msg'] =$msg;
                        return view('Admin.Support.Sections.index',$arr,['msg' => 'you already have section in same name']);
                    }
                    //$msg="ok";
                    $sections = supportSection::all();
                    $arr['sections']=$sections;
                    $arr['page']="sections";
                    return view('Admin.Support.Sections.index'
                        ,$arr,['msg'=>'Success! Update Section']);

        }else{


            if(!is_null($sections)){
                $arr['page']="sections";
                $arr['sections']=$sections;
                return view('Admin.Support.Sections.update',$arr);
            }else{
                $sections = supportSection::all();
                $arr['sections']=$sections;
                $arr['page']="sections";
                //$arr['msg'] =$msg;
                return view('Admin.Support.Sections.index',$arr);
            }

        }
    }


    public function destroy($id)
    {
        $section =supportSection::find($id);
        try {
            $section->delete();
        }catch (\Exception $e){
        }
        return redirect()->back()->with('msg' ,  'Section Has been deleted successfully ');

    }
}
