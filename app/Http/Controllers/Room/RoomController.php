<?php

namespace App\Http\Controllers\Room;

use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function index()
    {
        return view('rooms.index');
    }

    public function store(Request $request)
    {
        // foreach ($request->data as $room) {
        //     $card->rooms()->create([
        //         'name' => $room
        //     ]);
        // }
    }
}
