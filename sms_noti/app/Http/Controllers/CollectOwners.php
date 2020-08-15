<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectOwners extends Controller
{
    function insert(Request $req)
    {
        print_r($req->input());
    }
}
