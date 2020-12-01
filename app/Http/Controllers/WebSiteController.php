<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class WebSiteController extends Controller
{
    public function index(){
        return Item::where('section_id',1)->get();
    }
}
