<?php

namespace App\Http\Controllers;
use App\Models\VillaType;
use App\Models\Villa;
use App\Models\locataire;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings=Booking::all();
        return view('booking.index',['data'=>$bookings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villas=Villa::all();
        $locataires=locataire::all();
        return view('booking.create',['locataires'=>$locataires,'villas'=>$villas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Booking;
        $data->locataire_name=$request->locataire_name;
        $data->villa_id=$request->villa_id;
        $data->checkin_date=$request->checkin_date;
        $data->checkout_date=$request->checkout_date;
        $data->total_adults=$request->total_adults;
        $data->total_children=$request->total_children;
        $data->save();
        if($request->ref=='front'){
            return redirect('booking')->with('success','booking has been created');
        }
        return redirect('admin/booking/create')->with('success','booking has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::where('id',$id)->delete();
        return redirect('admin/booking')->with('success','Data has been deleted.');
    }
    function dispo_in(Request $request,$checkin_date){

        $dispovillas=DB::SELECT("SELECT * FROM villas WHERE id NOT IN (SELECT villa_id FROM bookings WHERE '$checkin_date' BETWEEN checkin_date AND checkout_date)");

        return response()->json(['data'=>$dispovillas]);
    }
    function dispo_out(Request $request,$checkout_date){

        $disponvillas=DB::SELECT("SELECT * FROM villas WHERE id NOT IN (SELECT villa_id FROM bookings WHERE '$checkout_date' BETWEEN checkin_date AND checkout_date)");

        return response()->json(['data'=>$disponvillas]);
    }
    public function front_booking()
    {
        return view('front-booking');
    }
}

