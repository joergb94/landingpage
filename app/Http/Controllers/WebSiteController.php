<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemDetail;

class WebSiteController extends Controller
{
    public function index(Request $request){
       $section = $request->page;
       $dataContent = [];
       $dataItems = Item::where('section_id',$section)->get();
       foreach ($dataItems as $item) {

        array_push($dataContent,[
                                    'item'=>$item,
                                    'detail'=>ItemDetail::where('item_id',$item['id'])->get(),
                                ]);
       }

       return $dataContent;
    }
}
