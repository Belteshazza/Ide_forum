<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $channel1 = ['title' => 'Laravel', 'slug' => str_slug('Laravel') ];

        $channel2 = ['title' => 'Lumen', 'slug' => str_slug('Lumen') ];

        $channel3 = ['title' => 'Php', 'slug' => str_slug('Php') ];

        $channel4 = ['title' => 'Vuejs', 'slug' => str_slug('Vuejs') ];

        $channel5 = ['title' => 'React', 'slug' => str_slug('React') ];

        $channel6 = ['title' => 'Python', 'slug' => str_slug('Python') ];

        $channel7 = ['title' => 'Pearl', 'slug' => str_slug('Pearl') ];

        $channel8 = ['title' => 'Java','slug' => str_slug('Java') ];


        App\Channel::create ($channel1);
        App\Channel::create ($channel2);
        App\Channel::create ($channel3);
        App\Channel::create ($channel4);
        App\Channel::create ($channel5);
        App\Channel::create ($channel6);
        App\Channel::create ($channel7);
        App\Channel::create ($channel8);
        


       

    }
}
