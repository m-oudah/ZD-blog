<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\support;
use App\Model\supportSection;
use Illuminate\Http\Request;

class supportController extends Controller
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
        $supports=support::all();
        $arr['supports']=$supports;
        $arr['page']="supports";
        return  view('Admin.Support.Supports.index',$arr);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('POST')){


            $request->validate(['enTitle'=>'required','arTitle'=>'required']);

            $enTitle=$request->enTitle;
            $check =support::where('enTitle',$enTitle)->first();

            if(!is_null($check)){
                $supports = support::all();
                $sections = supportSection::all();

                $arr['supports']=$supports;
                $arr['sections']=$sections;

                $arr['page']="supports";
                $arr['page']="sections";
                return view('Admin.Support.Supports.index'
                    ,$arr,['msg'=>'Your support topic Already Added !']);
            }else{
                 $enSlug = str_replace(' ','-',$request->enTitle);
                 $arSlug = str_replace(' ','-',$request->arTitle);
                try {
                    support::create([
                        'enTitle' => $request->enTitle,
                        'arTitle' => $request->arTitle,
                        'enInfo' => $request->enInfo,
                        'arInfo' => $request->arInfo,
                        'enSlug' => $enSlug,
                        'arSlug' => $arSlug,
                        'sectionID' =>$request->sectionID,
                    ]);
                }catch(Exception $e){
                    $supports = support::all();
                    $sections = supportSection::all();

                    $arr['supports']=$supports;
                    $arr['sections']=$sections;

                    $arr['page']="supports";
                    $arr['page']="sections";
                    return view('Admin.Support.Supports.index'
                        ,$arr,['msg'=>'Your Support Topic Already Added !']);
                }
            }
                $supports = support::all();
                $sections = supportSection::all();

                $arr['supports']=$supports;
                $arr['sections']=$sections;

                $arr['page']="supports";
                $arr['page']="sections";
            return view('Admin.Support.Supports.index',$arr,
                ['msg'=>'Success! Add Suppport Topic']);

    }else{

        $supports = support::all();
        $sections = supportSection::all();

        $arr['supports']=$supports;
        $arr['sections']=$sections;

        $arr['page']="supports";
        $arr['page']="sections";

        return view('Admin.Support.Supports.add',$arr);
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\support  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\support  $support
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $support =support::find($id);
        $sections = supportSection::all();
        $arr['support']=$support;
        $arr['sections']=$sections;
        $arr['page']="support";
        $arr['page']="sections";
        return view('Admin.Support.Supports.Update',$arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Support  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $support =support::find($id);
        $request->validate([
            'enTitle' => 'required|min:10',
            'arTitle' => 'required|min:10',    
            'enInfo' => 'required|min:50',
            'arInfo' => 'required|min:50',
        ]);
       
        $enSlug = str_replace(' ','-',$request->enTitle);
        $arSlug = str_replace(' ','-',$request->arTitle);
        $support->enTitle = $request->enTitle;
        $support->arTitle = $request->arTitle;

        $support->enInfo = $request->enInfo;
        $support->arInfo = $request->arInfo;

        $support->enSlug = $enSlug;
        $support->arSlug = $arSlug;

        $support->sectionID = $request->sectionID;


        $support->update();
        return redirect()->route('index.Admin.support')->with('msg' ,  'Support Topic was updated successfully ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $support =Support::find($id);
        try {
           
            $support->delete();
        }catch (\Exception $e){
        }
        return redirect()->back()->with('msg' ,  'Support Topic Has been deleted successfully ');
    }
}
