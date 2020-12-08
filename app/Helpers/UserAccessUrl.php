<?php

use App\Models\DataMenu;
use App\Models\TypeUserDetail;

if (!function_exists('accesUrl')) {
 
   
    function accesUrl($user,$menu_id)
    {
   
        //validate access of user     
        $access=TypeUserDetail::where('type_user_id',$user->type_user_id)
                                ->where('data_menu_id',$menu_id)
                                ->where('active',1)
                                ->exists();
        if($access == true){
          //get all data for user menu
          $menuU = TypeUserDetail::where('type_user_id',  $user->type_user_id);

          $menuU->with(['data_menu' => function($query) {
              $query->orderby('prioridad');
            }]);

          $data_menu=$menuU->get();
          $type_user = $user->type_user_id;
        
        }else{
          
           $data_menu=[];
           $type_user =0;
        }
       

        $menu=[
          'data_menu'=>$data_menu,
          'access'=>$access,
          'type_user'=>$type_user,
        ];  
   
      return $menu;
    }
}
