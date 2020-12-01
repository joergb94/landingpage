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
}
    
}
