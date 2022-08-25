<?php

namespace App\Http\Controllers;

use App\Models\VillaType;
use App\Models\Villa;
use Illuminate\Http\Request;


class VillaTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=VillaType::all();
        return view('villatype.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('villatype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new VillaType;
        $data->title=$request->title;
        $data->detail=$request->detail;
        $data->save();
        return redirect('admin/villatype/create')->with('success','Data has been added.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VillaType  $villaType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=VillaType::find($id);
        return view('villatype.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VillaType  $villaType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data=VillaType::find($id);
        return view('villatype.edit',['data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VillaType  $villaType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=VillaType::find($id);
        $data->title=$request->title;
        $data->detail=$request->detail;
        $data->save();
        return redirect('admin/villatype/'.$id.'/edit')->with('success','Data has been updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VillaType  $villaType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        VillaType::where('id',$id)->delete();
        Villa::where('villa_type_id',$id)->delete();
        return redirect('admin/villatype')->with('success','Data has been deleted.');
    }
}
