<?php

namespace App\Http\Controllers;

use App\Models\locataire;
use Illuminate\Http\Request;

class LocataireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data=locataire::all();
        return view('locataire.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locataire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new locataire;
        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->password=sha1($request->password);
        $data->mobile=$request->mobile;
        $data->address=$request->address;
        $data->save();
        $ref=$request->ref;
        if($ref=='front'){
            return redirect('registrer')->with('success','Data has been saved.');
        }

        return redirect('admin/locataire/create')->with('success','Data has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\locataire  $locataire
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=locataire::find($id);
        return view('locataire.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\locataire  $locataire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=locataire::find($id);
        return view('locataire.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\locataire  $locataire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data=locataire::find($id);
        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->password=sha1($request->password);
        $data->mobile=$request->mobile;
        $data->address=$request->address;
        $data->save();
        return redirect('admin/locataire/'.$id.'/edit')->with('success','Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\locataire  $locataire
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        locataire::where('id',$id)->delete();
        return redirect('admin/locataire')->with('success','Data has been deleted.');
    }
  // Login
  function login(){
    return view('frontlogin');
}

// Check Login
function locataire_login(Request $request){
    $email=$request->email;
    $pwd=sha1($request->password);
    $detail=locataire::where(['email'=>$email,'password'=>$pwd])->count();
    if($detail>0){
        $detail=locataire::where(['email'=>$email,'password'=>$pwd])->get();
        session(['locatairelogin'=>true,'data'=>$detail]);
        return redirect('/user');
    }else{
        return redirect('login')->with('error','Invalid email/password!!');
    }
}
//regisrer
    public function registrer()
    {
       return view('registrer');
    }
  // Logout
  function logout(){
    session()->forget(['logoutlogin','data']);
    return redirect('/');
}

}
