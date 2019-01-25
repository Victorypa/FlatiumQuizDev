<?php

namespace App\Http\Controllers\Room;

use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function index(Card $card)
    {
        return view('rooms.index');
    }
}
