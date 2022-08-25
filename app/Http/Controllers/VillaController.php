<?php

namespace App\Http\Controllers;
use App\Models\VillaType;
use App\Models\Villa;
use Illuminate\Http\Request;

class VillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Villa::all();
        return view('Villa.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villatypes=VillaType::all();
        return view('Villa.create',['villatypes'=>$villatypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Villa;
        $data->title=$request->title;
        $data->adresse=$request->adresse;
        $data->surface=$request->surface;
        $data->nbrcouchage=$request->nbrcouchage;
        $data->Parking=$request->Parking;
        $data->Douche_extérieure=$request->Douche_extérieure;
        $data->Chauffage=$request->Chauffage;
        $data->Piscine=$request->Piscine;
        $data->Barbecue=$request->Barbecue;
        $data->Jardin_privatif=$request->Jardin_privatif;
        $data->Accès_internet=$request->Accès_internet;
        $data->villa_type_id=$request->villa_type_id;
        $data->save();
        return redirect('admin/villa/create')->with('success','Data has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $villatypes=VillaType::all();
        $data=Villa::find($id);
        return view('Villa.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $villatypes=VillaType::all();
        $data=Villa::find($id);
        return view('Villa.edit',['data'=>$data,'villatypes'=>$villatypes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=Villa::find($id);
        $data->title=$request->title;
        $data->adresse=$request->adresse;
        $data->surface=$request->surface;
        $data->nbrcouchage=$request->nbrcouchage;
        $data->Parking=$request->Parking;
        $data->Douche_extérieure=$request->Douche_extérieure;
        $data->Chauffage=$request->Chauffage;
        $data->Piscine=$request->Piscine;
        $data->Barbecue=$request->Barbecue;
        $data->Jardin_privatif=$request->Jardin_privatif;
        $data->Accès_internet=$request->Accès_internet;
        $data->villa_type_id=$request->villa_type_id;
        $data->save();

        return redirect('admin/villa/'.$id.'/edit')->with('success','Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Villa  $villa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Villa::where('id',$id)->delete();
        return redirect('admin/villa')->with('success','Data has been deleted.');

    }
}
