<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class GameController extends Controller
{
  public function index ()
  {
    $players = Player::all();
    return Response::json(players);
  }

  
}
