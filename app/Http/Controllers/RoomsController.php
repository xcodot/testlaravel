<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Room;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$vRooms = DB::table('rooms') -> get();
        //dump($vCust);
        $vRooms = Room::all();  //Eloquent ORM Method
        return view('rooms.roomslist',['rooms'=>$vRooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Form Validation
        $request->validate([
            'roomtype' => 'required',
            'status' => 'required'
        ]);

        // return $request;
        // exit;
        
        //First Method Save
        // $room = new Room;
        // $room->roomtype = $request->roomtype;
        // $room->status = $request->status;

        // $room->save();

        //Second Method Save
        // Room::create([
        //     'roomtype' => $request->roomtype,
        //     'status' => $request->status
        // ]);

        //Third Method Save
        Room::create($request->all());

        return redirect('/rooms')->with('info','Room Data Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //return view('rooms.details',['rooms'=>$room]);
        return view('rooms.details',compact('room'));
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
    public function destroy(Room $room)
    {
        Room::destroy($room->id);
        return redirect('/rooms')->with('info','Data Deleted!');
    }
}
