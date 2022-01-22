<?php

namespace App\Http\Controllers\admin;

use App\Models\RoomType;
use App\Models\RoomContent;
use App\Models\RoomOptions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['room_types'] = RoomType::all();
        return view('dashboard.room_type.index')->with($data);
    }

    public function search(Request $request)
    {
        // $data['room_types'] = RoomType::where('name', 'like', '%' . $request->search . '%')->get();
        // return view('dashboard.room_type.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['options'] = RoomOptions::where('is_active', 1)->get();
        $data['contents'] = RoomContent::where('is_active', 1)->get();
        return view('dashboard.room_type.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'image' => 'required',
            'qty' => 'required|integer',
            'price' => 'required|integer',
            'options' => 'required|array',
            'contents' => 'required|array',
            'max_geusts' => 'required|integer',
            'status' => 'required|integer',
            'discount_value' => 'nullable|integer',
            'discount_start' => 'nullable|date',
            'discount_end' => 'nullable|date',
        ]);

        $images = $data['image'];
        $paths = [];
        foreach ($images as $image) {
            $paths[] = Storage::disk('uploads')->put('rooms', $image); //$image->store('images', 'public');
        }
        $images = implode(',', $paths);

        // $options = $request->input('options');
        $options = implode(',', $data['options']);

        // $contents = $request->input('contents');
        $contents = implode(',', $data['contents']);

        if (isset($data['new_price'])) {
            $price = $data['new_price'];
        } else {
            $price = $data['price'];
        }


        RoomType::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $images,
            'qty' => $request->qty,
            'price' => $price,
            'options' => $options,
            'contents' => $contents,
            'max_geusts' => $request->max_geusts,
            'is_active' => $request->status,
            'discount_value' => $request->discount_value,
            'discount_start' => $request->discount_start,
            'discount_end' => $request->discount_end,
        ]);

        return redirect()->route('types.index')->with('success', 'Room Type Created Successfully');
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