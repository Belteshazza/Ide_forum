<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $r1 = [

          
            'user_id' => 1,

            'discussion_id' => 1,

            'content' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi cupiditate dignission repellat'
        ];


        $r2 = [

          
            'user_id' => 1,

            'discussion_id' => 2,

            'content' => 'Excepturi cupiditate dignission repellat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi cupiditate dignission repellat'
        ];


        $r3 = [

          
            'user_id' => 2,

            'discussion_id' => 3,

            'content' => 'consectetur adipisicing elit. Excepturi cupiditate dignission repellat Excepturi cupiditate dignission repellat Lorem ipsum dolor sit amet, '
        ];

        $r4 = [

          
            'user_id' => 1,

            'discussion_id' => 4,

            'content' => ' cupiditate dignission repellat Excepturi cupiditate dignission repellat Lorem ipsum dolor sit amet,consectetur adipisicing elit. Excepturi '
        ];


        App\Reply::create($r1);

        App\Reply::create($r2);

        App\Reply::create($r3);

        App\Reply::create($r4);
        

    }
}
