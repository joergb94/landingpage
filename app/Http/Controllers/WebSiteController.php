<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemDetail;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailableName;
use Illuminate\Support\Facades\Redirect;

class WebSiteController extends Controller
{
    public function index(Request $request){
      
      if (!$request->ajax()) return view('website.index');
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

    public function send_mail(Request $request){
        
        try {

            $email = new MailableName($request->input());
            Mail::to('alex.ortega@dedicatedpeople.us')->send($email);

            return Redirect::back()->withSuccess("Send Message");
          
          } catch (\Exception $e) {
          
              return $e->getMessage();
          }

    }
}
