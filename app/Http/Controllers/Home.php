<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\zap;

class Home extends Controller
{
    public function index(){
        $data = ['title' => 'Parts catalog Laravel',
            'namepage' => 'Parts catalog',
            'zaps' => zap::all()];
        return view('zapchasti.index', $data);
    }
    
     public function zap($id){
         
        return view('zapchasti.zap');
    }
}











