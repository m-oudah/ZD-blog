<?php

namespace App\Http\Controllers\Admin;

use App\Model\aboutus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class AboutusController extends Controller
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
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function show(aboutus $aboutus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutus =aboutus::find($id);
      
        $arr['aboutus']=$aboutus;
       
        $arr['page']="aboutus";

        return view('Admin.aboutus.update',$arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\aboutus  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aboutus =aboutus::find($id);
        $request->validate([
            'enInfo' => 'required|min:10',
            'arInfo' => 'required|min:10',
            'baInfo' => 'required|min:10',

        ]);
       

        $aboutus->enInfo = $request->enInfo;
        $aboutus->arInfo = $request->arInfo;
        $aboutus->baInfo = $request->baInfo;

        $aboutus->update();
        return redirect()->back()->with('msg' ,  'About has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
