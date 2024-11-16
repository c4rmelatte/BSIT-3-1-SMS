<?php
namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {

        $rooms = Room::all();
        return view('roomdash', compact('rooms'));
    }


    public function create()
{
    return view('rooms.create');
}


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image' => 'required|url', 
        ]);

        Room::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
        ]);


        return redirect()->route('roomdash')->with('success', 'Room created successfully!');
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.update', compact('room'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image' => 'required|url',
        ]);


        $room = Room::findOrFail($id);
        $room->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
        ]);


        return redirect()->route('roomdash')->with('success', 'Room updated successfully!');
    }


    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect()->route('roomdash')->with('success', 'Room deleted successfully!');
    }
}
