<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [
                        ['name'=> 'MainPage'],
                        ['name'=> 'AboutUs'],
                        ['name'=> 'Service'],
                        ['name'=> 'Career'],        
                    ];

        $elements =[
                      ['section_id'=>1,'name'=>'div'],
                      ['section_id'=>1,'name'=>'div-left'],
                      ['section_id'=>1,'name'=>'div-not-head'],
                      ['section_id'=>1,'name'=>'slide'],
                      ['section_id'=>2,'name'=>'div'],
                      ['section_id'=>2,'name'=>'div-group-img'],
                      ['section_id'=>2,'name'=>'div-group'],
                      ['section_id'=>2,'name'=>'div-not-head'],
                      ['section_id'=>3,'name'=>'div'],
                      ['section_id'=>3,'name'=>'div-left'],
                      ['section_id'=>3,'name'=>'div-group-img'],
                      ['section_id'=>3,'name'=>'div-group'],
                      ['section_id'=>4,'name'=>'div'],
                      ['section_id'=>4,'name'=>'div-not-head'],
                      ['section_id'=>4,'name'=>'div-group-img'],
                      ['section_id'=>4,'name'=>'div-group'],
                  ];

        foreach($sections as $section){
            DB::table('sections')->insert($section);
        }

        for ($i=1; $i < 5; $i++) { 
            
          $x=3; 

          if($i == 1){
            $x = 4;
          }else if($i == 4){
            $x = 2;
          }
           
            for ($y=0; $y <$x ; $y++) { 
                DB::table('items')->insert([
                    'section_id'=>$i,
                    'title'=>'example'.$i.$y,
                    'footer'=>'end'.$y,
                    'description'=>'example end example end example end example endexample end example end example end example end example end example end']);
           }

        }

        for ($j=1; $j <13 ; $j++) { 
            for ($h=1; $h <5 ; $h++) { 
              DB::table('item_details')->insert([
                  'item_id'=>$j,
                  'name'=>'detail'.$j.$h,
                  'description'=>'example end example end example end example endexample end example end example end example end example end example end']);
        }
        

     }

     foreach ($elements as $element) {
      DB::table('elements')->insert($element);
    }
}
    
}
