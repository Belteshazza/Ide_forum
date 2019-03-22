<?php

use Illuminate\Database\Seeder;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'implementing OAUTH2 with laravel passport';

        $t2 = 'pagination in vuejs not working correctly';

        $t3 = 'Vuejs event listeners for child components';

        $t4 = 'laravel homestead error - undetected database';


        $d1 = [

            'title' => $t1,

            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi cupiditate dignission repellat',

            'channel_id' => 1,

            'user_id' => 2,

            'slug' => str_slug($t1)
        ];


        $d2 = [

            'title' => $t2,

            'content' => 'vuejs pagination lorem ipsum dolor amet, consectetur adipisicing elit. Excepturi cupiditate dignission repellat ',

            'channel_id' => 2,

            'user_id' => 1,

            'slug' => str_slug($t2)
        ];


        $d3 = [

            'title' => $t3,

            'content' => '. Excepturi cupiditate dignission repellat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi',

            'channel_id' => 2,

            'user_id' => 1,

            'slug' => str_slug($t3)
        ];


        $d4 = [

            'title' => $t4,

            'content' => '. Excepturi cupiditate adipisicing adipisicing adipisicing  dignission repellat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi',

            'channel_id' => 2,

            'user_id' => 1,

            'slug' => str_slug($t4)
        ];

       

        App\Discussion::create($d1);

        App\Discussion::create($d2);

        App\Discussion::create($d3);

        App\Discussion::create($d4);
        

    }
}
