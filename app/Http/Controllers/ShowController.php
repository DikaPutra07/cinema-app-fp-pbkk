<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function detail(Show $show){
        $ret = $show->load('studio')->toArray();
        $ret['reservations'] = $show->reservations->pluck('seat')->toArray();
        return $ret;
    }
}
