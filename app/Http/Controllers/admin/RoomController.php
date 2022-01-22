<?php

namespace App\Http\Controllers\admin;

use App\Models\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use App\Models\Room;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rooms'] = Room::all();
        return view('dashboard.room.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['room_types'] = RoomType::all();
        return view('dashboard.room.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required|string|max:255',
            'room_type_id' => 'integer|exists:room_types,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'max_geusts' => 'integer',
            'price' => 'required|integer',
            'status' => 'required|integer',
            'content' => 'required|array',
            'options' => 'required|array',
            'description' => 'nullable|string|max:255',
        ]);

        $image = $request->file('image');
        $path = Storage::disk('uploads')->put('rooms', $image); //$image->store('images', 'public');

        $content = $request->input('content');
        $content = implode(',', $content);

        $options = $request->input('options');
        $options = implode(',', $options);

        // dd($request->all());

        Room::create([
            'number' => $request->number,
            'room_type_id' => $request->room_type_id,
            'image' => $path,
            'max_geusts' => $request->max_geusts,
            'price' => $request->price,
            'status' => $request->status,
            'content' => $content,
            'options' => $options,
            'description' => $request->description,
        ]);
        return redirect()->route('rooms.index')->with('success', 'Room created successfully');
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