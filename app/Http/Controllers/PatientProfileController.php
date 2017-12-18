<?php

namespace App\Http\Controllers;
use App\Doctors;
use App\SpecializationDepartment;
use Illuminate\Http\Request;

class PatientProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patient.profile');
    }

    public function dash()
    {
        return view('patient.dashboard');
    }
    public function takeAppointment()
    {

        $doctors = Doctors::where('isActiveForScheduling', true)->get();
//        dd($doctors);
        $departments = SpecializationDepartment::all();
        return view('patient.takeAppointment',['doctors'=>$doctors,'departments'=>$departments]);
    }

    public function list()
    {
//        $doctors = User::where('role','Doctor')->get();
        $doctors = Doctors::all();
        return view('doctor.list')->with('doctors',$doctors);
    }

    public function upcomingAppointments()
    {
        return view('patient.upcomingAppointments');
    }

    public function liveChamber()
    {
        return view('patient.liveChamber');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
