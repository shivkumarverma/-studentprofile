<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class placementPortalController extends Controller
{
    public function index(){
        return view('studentForm');
    }

    public function profile(Request $req){
        $data = [
            'name' => $req->name,
            'RegisterNumber' => $req->RegisterNumber,
            'cgpa' => $req->cgpa,
            'specialization' => $req->specialization,
            'resume' => $req->resume,

        ];
        // print_r($req->all());
        return view('studentPlacementprofile',$data);

    }
}
