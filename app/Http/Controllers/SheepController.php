<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sheep;
use Facade\FlareClient\Http\Response;

class SheepController extends Controller
{
    
    function index() {
        $sheeps = Sheep::where([['alive', 1]])->get();
        return $sheeps;
    }

    function index_from_paddock($id) {
        $sheeps = Sheep::where([['paddock', $id], ['alive', 1]])->get();
        return $sheeps;
    }

    function store(Request $request) {
        Sheep::insert(['status' => 1, 'paddock' => rand(1, 4)]);

        return Sheep::all();
    }

    function store_in_paddock(Request $request, $id) {

        Sheep::insert(['status' => 1, 'paddock' => $id]);

        return Sheep::all();
    }

    function kill_sheep($id) {
        Sheep::where('id', $id)->update(['alive' => 0]);

        return Sheep::all();
    }

    function delete($id) {
        Sheep::where('id', $id)->update(['paddock' => 0]);

        return Sheep::all();
    }

    function move_sheep($sid, $pid) {
        Sheep::where('id', $sid)->update(['paddock' => $pid]);

        return Response(200);
    }
}
